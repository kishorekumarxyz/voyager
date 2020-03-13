<?php

namespace TCG\Voyager\Actions;

class BulkRestoreAction extends BaseAction
{
    public $massAction = true;
    public $method = 'delete';

    public function getTitle()
    {
        return __('voyager::bread.restore_num_entries', ['num' => ':num:', 'display_name' => ':display_name:']);
    }

    public function getClasses()
    {
        return 'button green small';
    }

    public function getUrl($key)
    {
        return route('voyager.'.$this->bread->slug.'.delete', $key);
    }

    public function getParameter()
    {
        return [
            'restore' => true,
        ];
    }

    public function confirm()
    {
        return [
            'title' => __('voyager::bread.restore_num_entries', ['num' => ':num:', 'display_name' => ':display_name:']),
            'text'  => __('voyager::bread.restore_num_entries_conf', ['num' => ':num:', 'display_name' => ':display_name:']),
            'yes'   => __('voyager::generic.yes'),
            'no'    => __('voyager::generic.no'),
        ];
    }
}