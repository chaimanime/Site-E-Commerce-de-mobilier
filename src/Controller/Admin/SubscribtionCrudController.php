<?php

namespace App\Controller\Admin;

use App\Entity\Subscribtion;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SubscribtionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Subscribtion::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
