<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $socialProfile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $socialProfile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Social Profiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="socialProfiles form large-9 medium-8 columns content">
    <?= $this->Form->create($socialProfile) ?>
    <fieldset>
        <legend><?= __('Edit Social Profile') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('provider');
            echo $this->Form->control('identifier');
            echo $this->Form->control('profile_url');
            echo $this->Form->control('website_url');
            echo $this->Form->control('photo_url');
            echo $this->Form->control('display_name');
            echo $this->Form->control('description');
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('gender');
            echo $this->Form->control('language');
            echo $this->Form->control('age');
            echo $this->Form->control('birth_day');
            echo $this->Form->control('birth_month');
            echo $this->Form->control('birth_year');
            echo $this->Form->control('email');
            echo $this->Form->control('email_verified');
            echo $this->Form->control('phone');
            echo $this->Form->control('address');
            echo $this->Form->control('country');
            echo $this->Form->control('region');
            echo $this->Form->control('city');
            echo $this->Form->control('zip');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
