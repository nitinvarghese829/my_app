<?php

namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LuckyController extends AbstractController
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder){
        $this->passwordEncoder = $passwordEncoder;
    }
    /**
     * @Route("/lucky/number", name="app_homepage")
     */
    public function number(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $number = random_int(0, 100);
//        $user = new User();
//        $user->setEmail('admin@test.com');
//        $user->setPassword($this->passwordEncoder->encodePassword($user, 'admin'));
//
//        $em->persist($user);
//        $em->flush();

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}