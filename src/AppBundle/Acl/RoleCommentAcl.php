<?php
namespace AppBundle\Acl;

use FOS\CommentBundle\Model\CommentInterface;
use FOS\CommentBundle\Model\SignedCommentInterface;
use Symfony\Component\Security\Core\SecurityContextInterface;

class RoleCommentAcl extends BaseRoleCommentAcl {

/**
 * The current Security Context.
 *
 * @var SecurityContextInterface
 */
private $securityContext;

/**
 * Constructor.
 *
 * @param SecurityContextInterface $securityContext
 * @param string                   $createRole
 * @param string                   $viewRole
 * @param string                   $editRole
 * @param string                   $deleteRole
 * @param string                   $commentClass
 */
public function __construct(SecurityContextInterface $securityContext, $createRole, $viewRole, $editRole, $deleteRole, $commentClass
) {
    parent::__construct(
            $securityContext, $createRole, $viewRole, $editRole, $deleteRole, $commentClass);

    $this->securityContext = $securityContext;
}

/**
 * Checks if the Security token has an appropriate role to edit the supplied Comment.
 *
 * @param  CommentInterface $comment
 * @return boolean
 */
public function canEdit(CommentInterface $comment) {
    // the comment owner can edit the comment whenever he want.
    if ($comment instanceof SignedCommentInterface) {
        if ($comment->getAuthor() == $this->securityContext->getToken()->getUser()) {
            return true;
        }
    }
    return parent::canEdit($comment);
}

/**
 * Checks if the Security token is allowed to delete a specific Comment.
 *
 * @param  CommentInterface $comment
 * @return boolean
 */
public function canDelete(CommentInterface $comment) {
     // the comment owner can delete the comment
    if ($comment instanceof SignedCommentInterface) {
        if ($comment->getAuthor() == $this->securityContext->getToken()->getUser()) {
            return true;
        }
    }
    return parent::canDelete($comment);
}

/**
 * Checks if the Security token is allowed to reply to a parent comment.
 *
 * @param  CommentInterface|null $parent
 * @return boolean
 */
public function canReply(CommentInterface $parent = null) {

    if ($parent instanceof SignedCommentInterface) {
          //only the comment owner or the admin can reply to the comment.
        if ($parent->getAuthor() == $this->securityContext->getToken()->getUser() ||
                $this->securityContext->isGranted('ROLE_ADMIN')) {
            return true;
        }
    }
     if($parent !=null) {
       // if the user have no access to reply then return false.
          return false;
     }  
   //this ligne allow all users to post new comments.
    return parent::canCreate();
}