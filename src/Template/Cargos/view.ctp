<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cargo $cargo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cargo'), ['action' => 'edit', $cargo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cargo'), ['action' => 'delete', $cargo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cargo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cargos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cargo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['controller' => 'Funcionarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcionario'), ['controller' => 'Funcionarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cargos view large-9 medium-8 columns content">
    <h3><?= h($cargo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Cargo') ?></th>
            <td><?= h($cargo->nome_cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao Cargo') ?></th>
            <td><?= h($cargo->descricao_cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cargo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salario') ?></th>
            <td><?= $this->Number->format($cargo->salario) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Funcionarios') ?></h4>
        <?php if (!empty($cargo->funcionarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Cargo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cargo->funcionarios as $funcionarios): ?>
            <tr>
                <td><?= h($funcionarios->id) ?></td>
                <td><?= h($funcionarios->nome) ?></td>
                <td><?= h($funcionarios->email) ?></td>
                <td><?= h($funcionarios->cargo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Funcionarios', 'action' => 'view', $funcionarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Funcionarios', 'action' => 'edit', $funcionarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Funcionarios', 'action' => 'delete', $funcionarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
