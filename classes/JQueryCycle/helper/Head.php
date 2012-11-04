<?php

class JQueryCycle_HeadHelper extends App_ViewHelper_Abstract
{
    public function head()
    {
	$this->getView()->broker()->headScript()->append(
            $this->getView()->staticpath()
                . '/jquery-cycle/js/jquery.cycle.all.min.js', 'jquery' );
    }
}

