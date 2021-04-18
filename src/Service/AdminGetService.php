<?php


namespace App\Service;


use App\Entity\Admin;

class AdminGetService extends AbstractService
{
    public function get(int $id): ?array {
        $admin = $this->getManagerRegistry()
            ->getRepository(Admin::class)
            ->find($id);

        //TODO catch the exception
        $admin = $this->getNormalizer()->normalize($admin);
        return $admin;
    }
}