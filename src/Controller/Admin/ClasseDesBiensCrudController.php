<?php

namespace App\Controller\Admin;

use App\Entity\ClasseDesBiens;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class ClasseDesBiensCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ClasseDesBiens::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $action) {
                return $action->setIcon('fa fa-user')->addCssClass('btn btn-succes');
            })
            ->update(Crud::PAGE_INDEX, Action::EDIT, function (Action $action) {
                return $action->setIcon('fa fa-edit')->addCssClass('btn btn-warning');
            })
            ->update(Crud::PAGE_INDEX, Action::DETAIL, function (Action $action) {
                return $action->setIcon('fa fa-eye')->addCssClass('btn btn-info');
            })
            ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $action) {
                return $action->setIcon('fa fa-eye')->addCssClass('btn btn-outline-danger');
            });
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', label: 'ID')->onlyOnIndex(),
            NumberField::new('code_de_classe'),
            TextField::new('types_de_biens'),
            TextField::new('mode_offre'),
            NumberField::new('prix_max'),
            NumberField::new('superficie'),
            NumberField::new('nbr_chambres')
        ];
    }
}
