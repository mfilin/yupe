<?php
/**
 * Отображение для view:
 *
 *   @category YupeView
 *   @package  yupe
 *   @author   Yupe Team <team@yupe.ru>
 *   @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 *   @link     http://yupe.ru
 **/
    $this->breadcrumbs = [
        Yii::app()->getModule('notify')->getCategory() => [],
        Yii::t('notify', 'Notify') => ['/notify/notifyBackend/index'],
        $model->id,
    ];

    $this->pageTitle = Yii::t('notify', 'Notify - view');

$this->menu = [
    ['icon' => 'fa fa-fw fa-list-alt', 'label' => Yii::t('NotifyModule.notify', 'Manage notify'), 'url' => ['/notify/notifyBackend/index']],
    ['icon' => 'fa fa-fw fa-plus-square', 'label' => Yii::t('NotifyModule.notify', 'Create notify'), 'url' => ['/notify/notifyBackend/create']],
    ['label' => Yii::t('NotifyModule.notify', 'Notification') . ' «' . mb_substr($model->id, 0, 32) . '»'],
    ['icon' => 'fa fa-fw fa-pencil', 'label' => Yii::t('NotifyModule.notify', 'Update notify'), 'url' => [
        '/notify/notifyBackend/update',
        'id' => $model->id
    ]],
    ['icon' => 'fa fa-fw fa-eye', 'label' => Yii::t('NotifyModule.notify', 'View notify'), 'url' => [
        '/notify/notifyBackend/view',
        'id' => $model->id
    ]],
    ['icon' => 'fa fa-fw fa-trash-o', 'label' => Yii::t('NotifyModule.notify', 'Delete notify'), 'url' => '#', 'linkOptions' => [
        'submit' => ['/notify/notifyBackend/delete', 'id' => $model->id],
        'confirm' => Yii::t('NotifyModule.notify', 'Do you really want to remove this notification?'),
        'params' => [Yii::app()->getRequest()->csrfTokenName => Yii::app()->getRequest()->csrfToken],
    ]],
];
?>
<div class="page-header">
    <h1>
        <?php echo Yii::t('notify', 'View notify'); ?><br/>
        <small>&laquo;<?php echo $model->id; ?>&raquo;</small>
    </h1>
</div>

<?php $this->widget('bootstrap.widgets.TbDetailView', [
'data'       => $model,
'attributes' => [
    [
        'name'  => 'user_id',
        'value' => function($model) {
                return $model->user->getFullName();
            }
    ],
    [
        'name'  => 'my_post',
        'value' => function($model) {
                return $model->my_post ? Yii::t('YupeModule.yupe', 'yes') : Yii::t('YupeModule.yupe', 'no');
            },
    ],
    [
        'name'  => 'my_comment',
        'value' => function($model) {
                return $model->my_comment ? Yii::t('YupeModule.yupe', 'yes') : Yii::t('YupeModule.yupe', 'no');
            },
    ],
],
]); ?>
