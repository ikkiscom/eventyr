<?php

namespace App\Controller\Admin;

use App\Entity\Offers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OffersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Offers::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('offer_name'),
            TextField::new('offer_type'),
            TextField::new('offer_hosting'),
            TextField::new('offer_difficulty'),
            TextField::new('offer_map_photo'),
            TextField::new('offer_start_photo'),
            TextEditorField::new('offer_description'),
            AssociationField::new('step'),
            AssociationField::new('photo'),
            AssociationField::new('country'),
            AssociationField::new('datesprices'),
        ];
    }
    
}