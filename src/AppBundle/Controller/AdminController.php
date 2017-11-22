<?php
namespace AppBundle\Controller;

use AppBundle\Form\TbladminType;
use AppBundle\Entity\Tbladmin;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends Controller
{
    /**
     * @Route("/home", name="home-page")
     */
    public function indexAction(Request $request)
    {
       
        return $this->render(
            'FOSUserBundle:Base:base.html.twig'
           
        );
    }

    /**
     * @Route("home/user-sign-up", name="user_registration")
     */
    public function registerAction(Request $request)
    {
       
        $tbladmin = new Tbladmin();
        $form = $this->createForm(new TbladminType(), $tbladmin);
         

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($tbladmin);
            $em->flush();

            return $this->redirectToRoute('home-page');
        }

        return $this->render(
            'AppBundle:Admin:register.html.twig',
            array('form' => $form->createView())
        );
    }
    
    /**
     * @Route("custom/login", name="login_form")
     * 
     */
    public function customLoginAction(Request $request)
    {   
        $session = $this->getRequest()->getSession();
        $em=$this->getDoctrine()->getManager();
        $repository =$em->getRepository('AppBundle:Tbladmin');
        

        if($request->getMethod()=='POST')
        {   
            $session->clear();
            $username=$request->get('username');
            $password=$request->get('password');

            $user=$repository->findOneBy(array('username'=>$username,'password'=>$password));


            if ($user) //if user has values
                return $this->render('AppBundle:Admin:base.html.twig', array('user' => $user));

            else//if login is incorrect
                return $this->render('AppBundle:Admin:login.html.twig', array('name' => 'Login Error'));
        }

        return $this->render('AppBundle:Admin:login.html.twig');

    }

    // /**
    //  * @Route("/login", name="login_check")
    //  * @Template()
    //  */
    // public function loginAction()
    // {
    //     if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
    //         $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    //     } else {
    //         $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
    //     }

    //     return array(
    //         'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
    //         'error'         => $error,
    //     );
    // }

    // /**
    //  * @Route("/login_check", name="login_check")
    //  */
    // public function securityCheckAction()
    // {



    //}
}