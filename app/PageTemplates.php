<?php

namespace App;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */

    private function default()
    {
        $this->crud->addField([   // CustomHTML
            'name' => 'metas_separator',
            'type' => 'custom_html',
            'value' => '<h2>' . trans('backpack::pagemanager.metas') . '</h2><hr>',
        ]);
        $this->crud->addField([
            'name' => 'meta_title',
            'label' => trans('backpack::pagemanager.meta_title'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_description',
            'label' => trans('backpack::pagemanager.meta_description'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_keywords',
            'type' => 'textarea',
            'label' => trans('backpack::pagemanager.meta_keywords'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
    }

    private function homepage_default()
    {
        $this->default();

        $this->crud->addField([   // CustomHTML
            'name' => 'banner_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>' . trans('pagemanager.default.banner.header') . '</h2><hr>',
        ]);

        //Back ground banner
        $this->crud->addField([
            'name' => 'banner_background',
            'label' => trans('pagemanager.default.banner.background'),
            'type' => 'image',
            'fake' => true,
            'store_in' => 'extras',
        ]);

        // Left content banner
        $this->crud->addField([   // CustomHTML
            'name' => 'left_banner_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>' . trans('pagemanager.default.left_banner.header') . '</h2><hr>',
        ]);

        $this->crud->addField([
            'name' => 'left_banner_title',
            'label' => trans('pagemanager.default.left_banner.title'),
            'type' => 'text',
            'placeholder' => trans('pagemanager.default.left_banner.title_placeholder'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'left_banner_content',
            'label' => trans('pagemanager.default.left_banner.description'),
            'type' => 'text',
            'placeholder' => trans('pagemanager.default.left_banner.description_placeholder'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'left_banner_button_title',
            'label' => trans('pagemanager.default.left_banner.button_title'),
            'type' => 'text',
            'placeholder' => trans('pagemanager.default.left_banner.button_title_placeholder'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'left_banner_button_icon',
            'label' => trans('pagemanager.default.left_banner.button_icon'),
            'type' => 'icon_picker',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-1'
            ],
            'placeholder' => trans('pagemanager.default.left_banner.button_icon_placeholder'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'left_banner_button_link',
            'label' => trans('pagemanager.default.left_banner.button_link'),
            'type' => 'text',
            'page_model' => '\Backpack\PageManager\app\Models\Page',
            'placeholder' => trans('pagemanager.default.left_banner.button_link_placeholder'),
            'fake' => true,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-11'
            ], // extra HTML attributes for the field wrapper - mostly for resizing fields
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'left_banner_background',
            'label' => trans('pagemanager.default.left_banner.background_title'),
            'fake' => true,
            'type' => 'image',
            'store_in' => 'extras',
        ]);

        // Right content banner
        $this->crud->addField([   // CustomHTML
            'name' => 'right_banner_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>' . trans('pagemanager.default.right_banner.header') . '</h2><hr>',
        ]);

        $this->crud->addField([
            'name' => 'right_banner_title',
            'label' => trans('pagemanager.default.right_banner.title'),
            'type' => 'text',
            'placeholder' => trans('pagemanager.default.right_banner.title_placeholder'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'right_banner_content',
            'label' => trans('pagemanager.default.right_banner.description'),
            'type' => 'text',
            'placeholder' => trans('pagemanager.default.right_banner.description_placeholder'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'right_banner_button_title',
            'label' => trans('pagemanager.default.right_banner.button_title'),
            'type' => 'text',
            'placeholder' => trans('pagemanager.default.right_banner.button_title_placeholder'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'right_banner_button_icon',
            'label' => trans('pagemanager.default.right_banner.button_icon'),
            'type' => 'icon_picker',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-1',
            ],
            'placeholder' => trans('pagemanager.default.right_banner.button_icon_placeholder'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'right_banner_button_link',
            'label' => trans('pagemanager.default.right_banner.button_link'),
            'type' => 'text',
            'page_model' => '\Backpack\PageManager\app\Models\Page',
            'placeholder' => trans('pagemanager.default.right_banner.button_link_placeholder'),
            'wrapperAttributes' => [
                'class' => 'form-group col-md-11',
            ],
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'right_banner_background',
            'label' => trans('pagemanager.default.right_banner.background_title'),
            'type' => 'image',
            'fake' => true,
            'store_in' => 'extras',
        ]);

        // Inforgraphy
        $this->crud->addField([   // CustomHTML
            'name' => 'inforgraphy_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>' . trans('pagemanager.default.inforgraphy.header') . '</h2><hr>',
        ]);

        $this->crud->addField([
            'name' => 'section_infography_title',
            'label' => trans('pagemanager.default.inforgraphy.title'),
            'type' => 'text',
            'placeholder' => trans('pagemanager.default.inforgraphy.title_infography'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'section_inforgraphy_content',
            'label' => trans('pagemanager.default.inforgraphy.content'),
            'type' => 'table',
            'columns' => [
                'thumbnail' => trans('pagemanager.default.inforgraphy.table.thumbnail'),
                'title' => trans('pagemanager.default.inforgraphy.table.title'),
                'link' => trans('pagemanager.default.inforgraphy.table.link'),
            ],
            'placeholder' => trans('pagemanager.default.inforgraphy.content_infography'),
            'fake' => true,
            'store_in' => 'extras',
            'max' => 3, // maximum rows allowed in the table
            'min' => 0
        ]);

        // Section Reason for S4C
        $this->crud->addField([   // CustomHTML
            'name' => 'reason_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>' . trans('pagemanager.default.reason.header') . '</h2><hr>',
        ]);

        $this->crud->addField([
            'name' => 'section_reason_title',
            'label' => trans('pagemanager.default.reason.title'),
            'type' => 'text',
            'placeholder' => trans('pagemanager.default.reason.title_reason'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'section_reason_content',
            'label' => trans('pagemanager.default.reason.content'),
            'type' => 'table',
            'columns' => [
                'thumbnail' => trans('pagemanager.default.reason.table.thumbnail'),
                'title' => trans('pagemanager.default.reason.table.title'),
                'description' => trans('pagemanager.default.reason.table.description'),
            ],
            'placeholder' => trans('pagemanager.default.reason.content_infography'),
            'fake' => true,
            'store_in' => 'extras',
            'max' => 4,
            'min' => 0,
        ]);

        // Thanh vien noi bat
        $this->crud->addField([   // CustomHTML
            'name' => 'member_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>' . trans('pagemanager.default.member.header') . '</h2><hr>',
        ]);

        $this->crud->addField([
            'name' => 'section_member_title',
            'label' => trans('pagemanager.default.member.title'),
            'type' => 'text',
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'section_member_content',
            'label' => trans('pagemanager.default.member.content'),
            'type' => 'table',
            'columns' => [
                'avatar' => trans('pagemanager.default.member.table.avatar'),
                'name' => trans('pagemanager.default.member.table.name'),
                'position' => trans('pagemanager.default.member.table.position'),
                'comment' => trans('pagemanager.default.member.table.comment'),
            ],
            'placeholder' => trans('pagemanager.default.member.content_infography'),
            'fake' => true,
            'store_in' => 'extras',
            'max' => 6,
            'min' => 0,
        ]);
    }

    private function event()
    {
        $this->default();
    }

    private function list_jobs()
    {
        $this->default();
        $this->crud->addField([
            'name' => 'heading',
            'label' => trans('jobmanager.default.heading'),
            'type' => 'text',
            'placeholder' => trans('pagemanager.default.left_banner.title_placeholder'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'sub_heading',
            'label' => trans('jobmanager.default.sub_heading'),
            'type' => 'text',
            'placeholder' => trans('pagemanager.default.left_banner.title_placeholder'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
    }

    private function library()
    {
        $this->default();
    }

    private function services()
    {
        $this->default();

        $this->crud->addField([   // CustomHTML
            'name' => 'metas_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>' . trans('backpack::pagemanager.metas') . '</h2><hr>',
        ]);
        $this->crud->addField([
            'name' => 'meta_title',
            'label' => trans('backpack::pagemanager.meta_title'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_description',
            'label' => trans('backpack::pagemanager.meta_description'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_keywords',
            'type' => 'textarea',
            'label' => trans('backpack::pagemanager.meta_keywords'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([   // CustomHTML
            'name' => 'content_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>' . trans('backpack::pagemanager.content') . '</h2><hr>',
        ]);
        $this->crud->addField([
            'name' => 'content',
            'label' => trans('backpack::pagemanager.content'),
            'type' => 'wysiwyg',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);
    }

    private function about_us()
    {
        $this->crud->addField([
            'name' => 'content',
            'label' => trans('backpack::pagemanager.content'),
            'type' => 'wysiwyg',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);
    }

    private function choose_cv()
    {
        $this->default();
        $this->crud->addField([
            'name' => 'heading',
            'label' => trans('jobmanager.default.heading'),
            'type' => 'text',
            'placeholder' => trans('pagemanager.default.left_banner.title_placeholder'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'sub_heading',
            'label' => trans('jobmanager.default.sub_heading'),
            'type' => 'text',
            'placeholder' => trans('pagemanager.default.left_banner.title_placeholder'),
            'fake' => true,
            'store_in' => 'extras',
        ]);
    }
}
