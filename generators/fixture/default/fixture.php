<?= "<?php\n" ?>
namespace <?= $generator->ns ?>;

use <?= $generator->baseClass ?>;

class <?= $className ?> extends ActiveFixture
{
    public $modelClass = '<?= $generator->modelsNs ?>\<?= $modelName ?>';
<?php if(count($relations)): ?>
    public $depends = [
    <?php foreach(array_unique($relations) as $relation): ?>
    '<?= $generator->ns ?>\<?= $relation ?>Fixture',
    <?php endforeach ?>
];
<?php endif; ?>
}