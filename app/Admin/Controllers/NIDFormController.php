<?php

namespace App\Admin\Controllers;

use App\Models\NationalIdForm;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NIDFormController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'National Id Forms';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new NationalIdForm());
        $grid->name();



        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(NationalIdForm::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new NationalIdForm());
        $form->text('name')->placeholder('last name, first name, middle name')->required();
        $form->text('club position');
        $form->text('home address');
        $form->mobile('personal contact number')->placeholder('09XX XXX XXXX');
        $form->text('height')->placeholder('ft');
        $form->text('weight')->placeholder('kgs');
        $form->text('blood type');
        $form->text('religion');
        $form->text('birth place');
        $form->date('birth date')->format('YYYY-MM-DD')->placeholder('YYYY-MM-DD');
        $form->text('contact person');
        $form->mobile('contact number')->placeholder('09XX XXX XXXX');
        $form->text('GSIS_SSS');
        $form->text('PHILHEALTH');
        $form->text('PAGIBIG');
        $form->text('TIN number');
        $form->text('Club Affliation');
        $form->text('Club Region');
        $form->text('Club President Name');
        $form->text('Member Control Number');
        $form->image('President Signature');
        $form->image('2x2 picture');
        $form->image('Member Signature');
        $form->image('Endorsed By');
        $form->image('Approved By');
    
        


        return $form;
    }
}
