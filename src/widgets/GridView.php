<?php

namespace ramprasadm1986\gentelella\widgets;

use yii\helpers\Html;

class GridView extends \ramprasadm1986\gentelella\widgets\grid\GridView
{
    public $options = ['class' => 'dataTables_wrapper'];
    public $layout = "{items}<div class='row'><div class='col-sm-5 col-xs-12'>{summary}</div><div class='col-sm-7 col-xs-12'>{pager}</div></div>";
    public $summaryOptions = ['class' => 'dataTables_info'];

    /**
     * @inheritdoc
     */
    public function renderItems()
    {
        return Html::tag('div', Html::tag('div', parent::renderItems(), ['class' => 'col-sm-12']),
            ['class' => 'row table-responsive']);
    }
}