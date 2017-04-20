<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * ApiController
 *
 * @Route("/api", name="get_user")
 */
class ApiController extends Controller
{

    /**
     * @Route("/account/{id}")
     * @param $id
     * @return Response
     */
    public function showUserAction($id, Request $request){

//        $user = new User();
//        $user->setUsername('test');
//        $user->setToken(rand(100, 10000));
//        $user->setPassword(rand(1000, 1000000));
//        $user->setDailyCalories(rand(1000, 100000));
//
        $em = $this->getDoctrine()->getManager();
//        $em->persist($user);
//        $em->flush();

        $users = $em->getRepository('AppBundle:User')
            ->findOneUser($id);


        return new JsonResponse($users);
    }
}