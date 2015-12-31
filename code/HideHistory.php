<?php

/**
 * Description of HideHistory
 *
 * @author Gabriele Brosulo <gabriele.brosulo@zirak.it>
 * @creation-date 23-Oct-2014
 */
class HideHistory extends DataExtension
{
    
    public function updateCMSFields(\FieldList $fields)
    {
        if (!Permission::check('ADMIN')) {
            Requirements::css(HIDE_HISTORY_BASE . '/css/hide-history.css');
        }
        
        parent::updateCMSFields($fields);
    }
}
