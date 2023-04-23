<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cargo $cargo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cargos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funcionario'), ['controller' => 'Funcionarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cargos form large-9 medium-8 columns content">
    <?= $this->Form->create($cargo) ?>
    <fieldset>
        <legend><?= __('Add Cargo') ?></legend>
        <?php
            echo $this->Form->control('nome_cargo');
            echo $this->Form->control('descricao_cargo');
            echo $this->Form->control('salario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
