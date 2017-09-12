<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':default:index.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render(':default:about.html.twig');
    }

    /**
     * @Route("/customer-service", name="customer_service")
     */
    public function customerServiceAction()
    {
        return $this->render(':default:customer-service.html.twig');
    }

    /**
     * @Route("/order-and-returns", name="orders_returns")
     */
    public function ordersAndReturnsAction()
    {
        return $this->render(':default:orders-returns.html.twig');
    }

    /**
     * @Route("/privacy-and-cookie-policy", name="privacy_cookie")
     */
    public function privacyAndCookiePolicyAction()
    {
        return $this->render(':default:privacy-cookie.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function contactAction(Request $request)
    {
        // Create the form with validation
        $form = $this->createFormBuilder()
                ->add('name',TextType::class, ['constraints' => new NotBlank()])
                ->add('email', EmailType::class, ['constraints' => new Email()])
                ->add('message', TextareaType::class,['constraints' => new Length(['min' => 3])])
                ->add('save', SubmitType::class,[
                    'label' => 'Submit',
                    'attr' => ['class' => 'button']
                ])
                ->getForm();
        // Check if this is a POST type request and if so, handle form
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $this->addFlash(
                    'Success',
                    'Your form has been submitted , Thank U'
                );
                return $this->redirect($this->generateUrl('contact'));
            }
        }
        // Render contact page
        return $this->render(':default:contact.html.twig',['form' => $form->createView()]);
    }

}
