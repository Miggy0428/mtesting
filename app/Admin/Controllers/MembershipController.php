<?php

namespace App\Admin\Controllers;

use App\Models\MembershipApplicationForm;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MembershipController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Membership Application Forms';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MembershipApplicationForm());
        $grid->name();
        $grid->column('2x2_picture', __('Photo'));


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
        $show = new Show(MembershipApplicationForm::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new MembershipApplicationForm());
        $form->image('2x2_picture');
        $form->text('name')->required()->placeholder('firstname (nickname) middle lastname');
        $form->text('Place of birth');
        $form->date('Date of birth')->placeholder('YYYY-MM-DD');
        $form->text('Height')->default('5 ft');
        $form->text('Weight')->default('0 kg');
        $form->text('Citizenship')->default('Filipino')->required();
        $form->radio('Civil Status')->options(['m' => 'Married', 's' => 'Single', 'w' => 'Widowed', 'se' => 'Separated' ])->default('m')->stacked();
        $form->text('Religion')->default('Roman Catholic');
        $form->text('Blood Type:')->default('O+');
        $form->text('Address')->placeholder('street no. , barangay, municipality/city, province, zip code');
        $form->mobile('Telephone number');
        $form->mobile('Cellphone number')->options(['mask' => '0900 000 0000']);
        $form->email('Email Address');
        $form->text('Name of Office Line Of Business');
        $form->text('Title and Position');
        $form->text('Work Address');
        $form->mobile('Work Telephone Number');
        $form->mobile('Work Fax Number');
        $form->text('Spouse Name');
        $form->date('Spouse Date of Birth')->format('YYYY-MM-DD')->placeholder('YYYY-MM-DD');
        $form->number('Spouse Age')->placeholder('18');
        $form->textarea('Children Name')->rows(10)->placeholder('Please input names of your children separated by a comma or a space');
        $form->textarea('Children Date of Birth')->rows(10)->placeholder('Please input the birthdate of your children separated by a comma or a space');
        $form->textarea('Children Age')->rows(10)->placeholder('Please input the ages of your children separated by a comma or a space');
        $form->text('Elementary');
        $form->text('Highschool');
        $form->text('College');
        $form->text('Hobbies');
        $form->text('Special Skills');
        $form->date('Elementary Date Graduated')->placeholder('YYYY-MM-DD');
        $form->date('Highschool Date Graduated')->placeholder('YYYY-MM-DD');
        $form->date('College Date Graduated')->placeholder('YYYY-MM-DD');
        $form->text('Sponsor Name');
        $form->date('Sponsored Date')->placeholder('YYYY-MM-DD');
        $form->image('Sponsor Signature');
        $form->image('Applicant Signature');
        $form->image('Endorsed By: ');
        $form->image('Concurred By: ');
        $form->image('Approved By: ');
        return $form;
    }
}
