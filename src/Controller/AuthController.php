<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api')]
class AuthController extends AbstractController
{
    public function __construct(
        private UserRepository $userRepository,
        private Security $security,
        private SerializerInterface $serializer

    )
    {
    }

    #[Route('/register', name: 'auth', methods: ['POST', 'HEAD'])]
    public function register(Request $request, JWTTokenManagerInterface $JWTTokenManager ): JsonResponse
    {
        $jsonData = json_decode($request->getContent());

        try {
            $user = $this->userRepository->create($jsonData);
        }catch (\Exception $e){
            return new JsonResponse([
                'status' => '500',
                'message' => $e->getMessage()
            ]);
        }
        if ($user === null){
            return new JsonResponse([
                'status' => '1000'
            ],Response::HTTP_NOT_ACCEPTABLE);
        }else {
            return new JsonResponse([
                'message' => 'success',
                'user' => [
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'roles' => $user->getRoles(),
                    'updated_at' => $user->getUpdatedAt(),
                    'created_at' => $user->getUpdatedAt(),
                    'loginRedirectUrl' => 'login',
                    'data' => [
                        'settings' => $user->getSettings(),
                    ],
                ],
                'access_token' => $JWTTokenManager->create($user)
            ],Response::HTTP_CREATED);

        }

    }
}