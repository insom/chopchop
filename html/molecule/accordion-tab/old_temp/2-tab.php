<?php /*
Title: Tabs
Class: .tabs
*/ ?>

<div class="tabs">
    <div class="is-active tabs__header"
        id="tabs2-tab1"
        data-cc-group="tabs2"
        data-cc-action="activate"
        data-cc-target="tabs2-content1">
        <h3>Tab 1</h3>
    </div>
    <div class="is-active tabs__body"
        id="tabs2-content1"
        data-cc-group="tabs2-content"
        data-cc-cascade-activate="tabs2-tab1">
        <p>tab 1 content</p>
    </div>
    <div class="tabs-to-accordion__header"
        id="tabs2-tab2"
        data-cc-group="tabs2"
        data-cc-action="activate"
        data-cc-target="tabs2-content2">
        <h3>Tab 2</h3>
    </div>
    <div class="tabs-to-accordion__body"
        id="tabs2-content2"
        data-cc-group="tabs2-content"
        data-cc-cascade-activate="tabs2-tab2">
        <p>tab 2 content</p>
    </div>
    <div class="tabs-to-accordion__header"
        id="tabs2-tab3"
        data-cc-group="tabs2"
        data-cc-action="activate"
        data-cc-target="tabs2-content3">
        <h3>Tab 3</h3>
    </div>
    <div class="tabs-to-accordion__body"
        id="tabs2-content3"
        data-cc-group="tabs2-content"
        data-cc-cascade-activate="tabs2-tab3">
        <p>tab 3 content</p>
    </div>
    <div class="tabs-to-accordion__header"
        id="tabs2-tab4"
        data-cc-group="tabs2"
        data-cc-action="activate"
        data-cc-target="tabs2-content4">
        <h3>Tab 4</h3>
    </div>
    <div class="tabs-to-accordion__body"
        id="tabs2-content4"
        data-cc-group="tabs2-content"
        data-cc-cascade-activate="tabs2-tab4">
        <p>tab 4 content</p>
    </div>
</div>