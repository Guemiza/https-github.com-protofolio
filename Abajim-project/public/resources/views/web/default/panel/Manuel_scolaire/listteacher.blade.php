@extends(getTemplate() .'.panel.layouts.panel_layout')

@push('styles_top')
<link rel="stylesheet" href="/assets/default/vendors/daterangepicker/daterangepicker.min.css">
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush

@section('content')
<style>
    #navbar22 {
        overflow-x: auto;
        white-space: nowrap;
        width: 94%;
        /* ensure your scrollable element has a defined width */
        margin-left: 10px;
    }

    .nav-pills {
        display: inline-block;
    }

    .nav-scroll {
        overflow-x: auto;
        white-space: nowrap;
    }

    .nav-scroll .nav-item {
        display: inline-block;
    }

    .scrollmenu {
        overflow: auto;
        white-space: nowrap;
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    .scrollmenu::-webkit-scrollbar {
        /* Chrome, Safari and Opera */
        display: none;
    }

    .scrollmenu a {
        display: inline-block;
        color: black;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    .scrollmenu a:hover {
        background-color: #1d3b65;
    }
</style>
<style>
    ytcp-primary-action-bar {
        display: flex;
        flex: none;
        border-bottom: 1px solid var(--ytcp-line-divider);
        box-sizing: border-box;
        height: var(--ytcp-primary-action-bar-height, 64px);
        padding: 0 24px;
    }

    ytcp-primary-action-bar.yta-screen {
        --ytcp-primary-action-bar-height: 72px;
        --ytcp-primary-action-bar-capped-max-width: 1280px;
        min-width: 952px;
    }

    ytcp-sticky-header {
        display: block;
        position: -webkit-sticky;
        position: sticky;
        z-index: 1;
        background: var(--ytcp-brand-background-solid);
        top: var(--ytcp-sticky-header-top, 0);
        --header-shadow-color: var(--ytcp-static-overlay-drop-shadow-a12);
    }

    ytcp-sticky-header.yta-screen {
        display: flex;
        flex-direction: column;
        z-index: 10;
    }

    yta-screen {
        color: var(--ytcp-text-primary);
    }

    yta-screen.yta-overview-app {
        position: relative;
        height: 100%;
    }

    div {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    #background.yta-overview-app {
        flex: 1;
        width: 100%;
        min-height: 100%;
        background-color: var(--ytcp-brand-background-solid);
    }

    yta-overview-app {
        --iron-overlay-backdrop-background-color: var(--ytcp-brand-background-solid);
        flex: 1;
        display: flex;
        color: var(--ytcp-text-primary);
    }

    yta-app {
        display: flex;
        flex: 1;
        flex-direction: column;
        position: relative;
    }

    .page.ytcp-app {
        display: flex;
        flex-grow: 0;
        flex-direction: column;
        align-items: stretch;
    }

    .page.selected.ytcp-app {
        flex-grow: 1;
        -webkit-animation: var(--default-fading-animation);
        animation: var(--default-fading-animation);
    }

    .all-pages.ytcp-app {
        display: flex;
        flex-grow: 1;
        flex-direction: column;
        min-width: 0;
        z-index: 0;
    }

    #main.ytcp-entity-page {
        overflow: auto;
        display: flex;
        flex: 1;
        position: relative;
        background-color: var(--ytcp-brand-background-solid);
    }

    ytcp-entity-page[first-load] #main.ytcp-entity-page {
        opacity: 0;
        -webkit-animation: var(--loading-animation) var(--loading-duration);
        animation: var(--loading-animation) var(--loading-duration);
    }

    .nav-and-main-content.ytcp-entity-page {
        display: flex;
        flex-grow: 1;
        overflow: auto;
        position: relative;
    }

    #main-container.ytcp-entity-page {
        position: relative;
        display: flex;
        flex-direction: column;
        flex: 1 0 auto;
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        z-index: 1;
    }

    ytcp-entity-page {
        --top-banner-expand-transition: 417ms var(--incoming-curve);
        color: var(--ytcp-text-primary);
        display: flex;
        flex-direction: column;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: fixed;
    }

    ytcp-entity-page[first-load] {
        -webkit-animation: var(--loading-animation);
        animation: var(--loading-animation);
    }

    ytcp-app {
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
        background-color: var(--ytcp-brand-background-solid);
        color: var(--ytcp-text-primary);
    }


    .wrapper.ytcp-primary-action-bar {
        display: flex;
        justify-content: space-between;
        flex: 1;
        max-width: calc(var(--ytcp-primary-action-bar-capped-max-width, initial) - 48px);
    }

    html ::-webkit-scrollbar {
        width: 16px;
    }

    html ::-webkit-scrollbar-thumb {
        height: 56px;
        border-radius: 8px;
        border: 4px solid transparent;
        background-clip: content-box;
        background-color: var(--ytcp-icon-disabled);
    }

    html ::-webkit-scrollbar-thumb:hover {
        background-color: var(--ytcp-icon-inactive);
    }

    .primary.ytcp-primary-action-bar {
        display: flex;
        align-self: flex-end;
        flex: 1;
        min-width: 0;
    }

    yta-time-picker {
        display: inline-block;
        position: relative;
        min-width: 250px;
    }

    yta-time-picker.yta-screen {
        width: 230px;
        min-width: 230px;
        margin-left: 32px;
    }

    .wrapper.ytcp-primary-action-bar .wrapper.ytcp-primary-action-bar>[slot="secondary"] {
        align-self: center;
        min-width: 0;
    }

    tp-yt-paper-tabs {
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        height: 48px;
        font-size: 14px;
        font-weight: 500;
        overflow: hidden;
        -moz-user-select: none;
        -ms-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
    }

    tp-yt-paper-tabs.ytcp-primary-action-bar {
        --paper-icon-button-hover-color: var(--ytcp-text-primary);
    }

    tp-yt-paper-tabs.ytcp-primary-action-bar[scrollable] {
        flex: 1;
    }

    dom-if {
        display: none;
    }

    ytcp-select {
        display: inline-block;
    }

    ytcp-select.yta-time-picker {
        width: 100%;
    }

    tp-yt-paper-icon-button {
        display: inline-block;
        position: relative;
        padding: 8px;
        outline: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        z-index: 0;
        line-height: 1;
        width: 40px;
        height: 40px;
        -webkit-tap-highlight-color: transparent;
        box-sizing: border-box !important;
    }

    tp-yt-paper-icon-button[disabled] {
        color: var(--paper-icon-button-disabled-text, var(--disabled-text-color));
        pointer-events: none;
        cursor: auto;
    }

    tp-yt-paper-icon-button.tp-yt-paper-tabs {
        width: 48px;
        height: 48px;
        padding: 12px;
        margin: 0 4px;
    }

    .hidden.tp-yt-paper-tabs {
        display: none;
    }

    tp-yt-paper-tabs.ytcp-primary-action-bar tp-yt-paper-icon-button[style-target="host"] {
        height: 40px;
        width: 40px;
        padding: 8px;
        margin: 0;
        color: var(--ytcp-text-secondary);
    }

    #tabsContainer.tp-yt-paper-tabs {
        position: relative;
        height: 100%;
        white-space: nowrap;
        overflow: hidden;
        -ms-flex: 1 1 auto;
        -webkit-flex: 1 1 auto;
        flex: 1 1 auto;
    }

    ytcp-text-dropdown-trigger {
        display: flex;
        flex-direction: column;
    }

    tp-yt-iron-icon {
        display: inline-flex;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        position: relative;
        vertical-align: middle;
        fill: var(--iron-icon-fill-color, currentcolor);
        stroke: var(--iron-icon-stroke-color, none);
        width: var(--iron-icon-width, 24px);
        height: var(--iron-icon-height, 24px);
        animation: var(--iron-icon-animation);
        margin-top: var(--iron-icon-margin-top);
        margin-right: var(--iron-icon-margin-right);
        margin-bottom: var(--iron-icon-margin-bottom);
        margin-left: var(--iron-icon-margin-left);
        padding: var(--iron-icon-padding);
        --iron-icon-width: var(--icon-standard-length);
        --iron-icon-height: var(--icon-standard-length);
        color: var(--icon-color);
    }

    tp-yt-iron-icon.tp-yt-paper-icon-button {
        --iron-icon-width: 100%;
        --iron-icon-height: 100%;
    }

    .tabs-content.tp-yt-paper-tabs {
        height: 100%;
        -moz-flex-basis: auto;
        -ms-flex-basis: auto;
        flex-basis: auto;
    }

    .tabs-content.scrollable.tp-yt-paper-tabs {
        position: absolute;
        white-space: nowrap;
    }

    ytcp-dropdown-trigger {
        display: flex;
        flex-direction: column;
    }

    .selection-bar.tp-yt-paper-tabs {
        position: absolute;
        height: 0;
        bottom: 0;
        left: 0;
        right: 0;
        border-bottom: 2px solid var(--paper-tabs-selection-bar-color, #ffff8d);
        -webkit-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: left center;
        transform-origin: left center;
        transition: -webkit-transform;
        transition: transform;
    }

    tp-yt-paper-tabs .tp-yt-paper-tabs[style-target="selection-bar"] {
        border-width: 0;
        background-color: var(--ytcms-policies-app-paper-tab-color, var(--ytcp-call-to-action));
        border-radius: 3px 3px 0 0;
        height: 3px;
        margin-left: 8px;
        right: initial;
        transform: initial;
        transition: width 0.15s cubic-bezier(0.4, 0, 1, 1), left 0.15s cubic-bezier(0.4, 0, 1, 1);
    }

    tp-yt-paper-tab {
        display: -ms-inline-flexbox;
        display: -webkit-inline-flex;
        display: inline-flex;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -ms-flex: 1 1 auto;
        -webkit-flex: 1 1 auto;
        flex: 1 1 auto;
        position: relative;
        padding: 0 12px;
        overflow: hidden;
        cursor: pointer;
        vertical-align: middle;
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
    }

    tp-yt-paper-tab:focus {
        outline: none;
    }

    tp-yt-paper-tab[style-target="host"] {
        margin-left: 8px;
        margin-right: 32px;
        padding: 0;
    }

    #tabsContent.tp-yt-paper-tabs> :not(#selectionBar) {
        height: 100%;
    }

    #content.yta-screen {
        position: relative;
    }

    dom-repeat {
        display: none;
    }

    iron-a11y-keys.ytcp-dropdown-trigger {
        display: none;
    }

    .container.ytcp-dropdown-trigger {
        display: flex;
        justify-content: space-between;
        box-sizing: border-box;
        position: relative;
        background: var(--ytcp-container-background, initial);
        border: var(--ytcp-container-border);
        border-radius: var(--ytcp-container-border-radius);
        padding: 0;
        padding-right: var(--ytcp-dropdown-trigger-right-padding, 0);
        padding-left: var(--ytcp-dropdown-trigger-left-padding, var(--ytcp-form-field-horizontal-padding));
        height: var(--ytcp-dropdown-trigger-container-height, 48px);
        cursor: var(--ytcp-dropdown-trigger-container-cursor, pointer);
    }

    .container.has-label.ytcp-dropdown-trigger {
        height: var(--ytcp-dropdown-trigger-container-height, 56px);
    }

    .borderless.container.ytcp-dropdown-trigger {
        padding: 0;
        padding-right: var(--ytcp-dropdown-trigger-right-padding, 0);
        padding-left: var(--ytcp-dropdown-trigger-left-padding, 0);
        border: none;
        border-radius: 0;
    }

    .container.ytcp-dropdown-trigger:not(.invalid):hover {
        border-color: var(--ytcp-icon-inactive);
    }

    .tp-yt-paper-tab[style-target="tab-content"] {
        height: 100%;
        transform: translateZ(0);
        -webkit-transform: translateZ(0);
        transition: opacity 0.1s cubic-bezier(0.4, 0, 1, 1);
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -ms-flex-direction: row;
        -webkit-flex-direction: row;
        flex-direction: row;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -ms-flex: 1 1 auto;
        -webkit-flex: 1 1 auto;
        flex: 1 1 auto;
    }

    tp-yt-paper-tab .tp-yt-paper-tab[style-target="tab-content"] {
        white-space: nowrap;
        overflow: initial;
        text-overflow: initial;
        font-family: "YouTube Sans", "Roboto", "Arial", sans-serif;
        font-weight: 600;
        font-size: 15px;
        line-height: 18px;
        color: var(--ytcms-policies-app-paper-tab-color, var(--ytcp-call-to-action));
        min-width: 48px;
    }

    tp-yt-paper-tab:focus .tp-yt-paper-tab[style-target="tab-content"] {
        opacity: 1;
    }

    paper-ripple {
        display: block;
        position: absolute;
        border-radius: inherit;
        overflow: hidden;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
    }

    paper-ripple.tp-yt-paper-tab {
        color: var(--paper-tab-ink, #ffff8d);
    }

    tp-yt-paper-tab:not(.iron-selected) .tp-yt-paper-tab[style-target="tab-content"] {
        opacity: 1;
        color: var(--ytcp-text-secondary);
    }

    .container.ytcp-dropdown-trigger .color-marker.ytcp-dropdown-trigger {
        position: absolute;
        border-radius: var(--ytcp-container-border-radius) 0 0 var(--ytcp-container-border-radius);
        left: -1px;
        top: -1px;
        height: calc(100% + 2px);
        width: 4px;
    }

    .left-container.ytcp-dropdown-trigger {
        flex: 1;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    paper-ripple.ytcp-dropdown-trigger {
        color: var(--ytcp-dropdown-trigger-paper-ripple-color, var(--ytcp-text-secondary));
    }

    #background.paper-ripple {
        pointer-events: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
    }

    #waves.paper-ripple {
        pointer-events: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .label-area.ytcp-dropdown-trigger {
        display: flex;
        flex: none;
        align-items: flex-end;
    }

    span {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    .dropdown-trigger-text.ytcp-text-dropdown-trigger {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        font-size: var(--ytcp-font-subheading_-_font-size, 15px);
        line-height: 24px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        color: var(--ytcp-dropdown-trigger-text-color, var(--ytcp-text-primary));
        padding-top: 11px;
    }

    .has-label.ytcp-text-dropdown-trigger .dropdown-trigger-text.ytcp-text-dropdown-trigger {
        padding-top: 0;
    }

    .right-container.ytcp-dropdown-trigger tp-yt-iron-icon.ytcp-dropdown-trigger {
        height: 100%;
        color: var(--ytcp-dropdown-trigger-icon-color, var(--icon-color));
        margin-left: var(--ytcp-dropdown-trigger-icon-margin-left, 16px);
        margin-right: 12px;
    }

    .borderless.ytcp-dropdown-trigger .right-container.ytcp-dropdown-trigger tp-yt-iron-icon.ytcp-dropdown-trigger {
        margin-right: 4px;
    }

    .label-text.ytcp-dropdown-trigger {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.011em;
        font-size: 12px;
        line-height: 16px;
        margin-top: calc(20px - var(--ytcp-font-caption1-baseline-top));
        color: var(--ytcp-text-secondary);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        min-width: 0;
        margin-top: 7px;
    }

    .container.borderless.ytcp-dropdown-trigger .label-text.ytcp-dropdown-trigger {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.011em;
        font-size: 12px;
        line-height: 16px;
        margin-top: calc(20px - var(--ytcp-font-caption1-baseline-top));
        color: var(--ytcp-text-secondary);
    }


    /* These were inline style tags. Uses id+class to override almost everything */
    #left.style-V8kiH {
        pointer-events: none;
    }

    #tabsContainer.style-iYFIZ {
        touch-action: pan-y;
    }

    #selectionBar.style-jhFQZ {
        left: 0px;
        width: 48px;
    }

    #background.style-IwBzV {
        opacity: 0.00296;
    }

    #background.style-65Nra {
        opacity: 0;
    }

    #background.style-121HR {
        opacity: 0.00032;
    }

    #background.style-ASoHJ {
        opacity: 0;
    }

    #right.style-hyyRU {
        pointer-events: none;
    }

    #yta-time-picker.style-T8fmH {}

    #style-mrCOX.style-mrCOX {}

    #background.style-slbpA {
        opacity: 0;
    }

    .dropdown-trigger-text.ytcp-text-dropdown-trigger {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        font-size: var(--ytcp-font-subheading_-_font-size, 15px);
        line-height: 24px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        color: var(--ytcp-dropdown-trigger-text-color, var(--ytcp-text-primary));
        padding-top: 11px;
    }

    .dropdown-trigger-text.ytcp-text-dropdown-trigger {
        padding-top: 0;
    }

    .label-text.ytcp-dropdown-trigger {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.011em;
        font-size: 12px;
        line-height: 16px;
        margin-top: calc(20px - var(--ytcp-font-caption1-baseline-top));
        color: var(--ytcp-text-secondary);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        min-width: 0;
        margin-top: 7px;
    }

    .label-text.ytcp-dropdown-trigger {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.011em;
        font-size: 12px;
        line-height: 16px;
        margin-top: calc(20px - var(--ytcp-font-caption1-baseline-top));
        color: var(--ytcp-text-secondary);
    }



    tp-yt-app-toolbar>* {
        pointer-events: auto;
    }

    div {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    .card.yta-personalized-overview-header {
        text-align: center;
    }

    .card.yta-section {
        display: block;
        margin: 12px;
    }

    yta-personalized-overview-header.card.yta-section {
        margin-top: 0;
    }

    yta-section {
        display: flex;
        flex-direction: column;
        flex: none;
    }

    .single-column.yta-screen {
        width: 100%;
    }

    .tab-content.yta-screen {
        padding: 12px;
        flex: 5;
        min-width: 0;
    }

    .layout.vertical.yta-screen {
        display: flex;
        flex-direction: column;
    }

    .layout.horizontal.yta-screen {
        display: flex;
        flex-direction: row;
    }

    #tab-content-container.yta-screen>div.yta-screen {
        height: 100%;
    }

    #tab-content-container.yta-screen {
        max-width: 1280px;
        min-width: 952px;
        background-color: var(--ytcp-brand-background-solid);
        height: 100%;
        display: block;
    }

    .with-side-bar.yta-screen {
        background-color: var(--ytcp-general-background-a);
        height: 100%;
    }

    #content.yta-screen {
        position: relative;
    }

    yta-screen {
        color: var(--ytcp-text-primary);
    }

    yta-screen.yta-overview-app {
        position: relative;
        height: 100%;
    }

    #background.yta-overview-app {
        flex: 1;
        width: 100%;
        min-height: 100%;
        background-color: var(--ytcp-brand-background-solid);
    }

    yta-overview-app {
        flex: 1;
        display: flex;
        color: var(--ytcp-text-primary);
    }

    yta-app {
        display: flex;
        flex: 1;
        flex-direction: column;
        position: relative;
    }

    .page.ytcp-app {
        display: flex;
        flex-grow: 0;
        flex-direction: column;
        align-items: stretch;
    }

    .page.selected.ytcp-app {
        flex-grow: 1;
        -webkit-animation: var(--default-fading-animation);
        animation: var(--default-fading-animation);
    }

    .all-pages.ytcp-app {
        display: flex;
        flex-grow: 1;
        flex-direction: column;
        min-width: 0;
        z-index: 0;
    }

    #main.ytcp-entity-page {
        overflow: auto;
        display: flex;
        flex: 1;
        position: relative;
        background-color: var(--ytcp-brand-background-solid);
    }

    ytcp-entity-page[first-load] #main.ytcp-entity-page {
        opacity: 0;
        -webkit-animation: var(--loading-animation) var(--loading-duration);
        animation: var(--loading-animation) var(--loading-duration);
    }

    .nav-and-main-content.ytcp-entity-page {
        display: flex;
        flex-grow: 1;
        overflow: auto;
        position: relative;
    }

    #main-container.ytcp-entity-page {
        position: relative;
        display: flex;
        flex-direction: column;
        flex: 1 0 auto;
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        z-index: 1;
    }

    ytcp-entity-page {
        color: var(--ytcp-text-primary);
        display: flex;
        flex-direction: column;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: fixed;
    }

    ytcp-entity-page[first-load] {
        -webkit-animation: var(--loading-animation);
        animation: var(--loading-animation);
    }

    ytcp-app {
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
        background-color: var(--ytcp-brand-background-solid);
        color: var(--ytcp-text-primary);
    }






    #title.yta-personalized-overview-header {
        padding-top: 18px;
        padding-bottom: 16px;
        max-width: 760px;
        margin: 0 auto;
        text-align: center;
        white-space: initial;
        overflow: initial;
        text-overflow: initial;
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 28px;
        font-weight: 700;
        letter-spacing: -0.012em;
        line-height: 40px;
        color: var(--ytcp-text-primary);
    }



    yta-section {
        display: flex;
        flex-direction: column;
        flex: none;
    }

    #right-side-bar.yta-screen {
        background-color: var(--ytcp-general-background-a);
        flex: 2;
        min-width: 248px;
        max-width: 330px;
        padding: 8px;
        height: calc(100% - 16px);
    }

    div {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    .layout.horizontal.yta-screen {
        display: flex;
        flex-direction: row;
    }

    #tab-content-container.yta-screen>div.yta-screen {
        height: 100%;
    }

    #tab-content-container.yta-screen {
        max-width: 1280px;
        min-width: 952px;
        background-color: var(--ytcp-brand-background-solid);
        height: 100%;
        display: block;
    }

    .with-side-bar.yta-screen {
        background-color: var(--ytcp-general-background-a);
        height: 100%;
    }

    #content.yta-screen {
        position: relative;
    }

    yta-screen {
        color: var(--ytcp-text-primary);
    }

    yta-screen.yta-overview-app {
        position: relative;
        height: 100%;
    }

    #background.yta-overview-app {
        flex: 1;
        width: 100%;
        min-height: 100%;
        background-color: var(--ytcp-brand-background-solid);
    }

    yta-overview-app {
        flex: 1;
        display: flex;
        color: var(--ytcp-text-primary);
    }

    yta-app {
        display: flex;
        flex: 1;
        flex-direction: column;
        position: relative;
    }

    .page.ytcp-app {
        display: flex;
        flex-grow: 0;
        flex-direction: column;
        align-items: stretch;
    }

    .page.selected.ytcp-app {
        flex-grow: 1;
        -webkit-animation: var(--default-fading-animation);
        animation: var(--default-fading-animation);
    }

    .all-pages.ytcp-app {
        display: flex;
        flex-grow: 1;
        flex-direction: column;
        min-width: 0;
        z-index: 0;
    }

    #main.ytcp-entity-page {
        overflow: auto;
        display: flex;
        flex: 1;
        position: relative;
        background-color: var(--ytcp-brand-background-solid);
    }

    ytcp-entity-page[first-load] #main.ytcp-entity-page {
        opacity: 0;
        -webkit-animation: var(--loading-animation) var(--loading-duration);
        animation: var(--loading-animation) var(--loading-duration);
    }

    .nav-and-main-content.ytcp-entity-page {
        display: flex;
        flex-grow: 1;
        overflow: auto;
        position: relative;
    }

    #main-container.ytcp-entity-page {
        position: relative;
        display: flex;
        flex-direction: column;
        flex: 1 0 auto;
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        z-index: 1;
    }

    ytcp-entity-page {
        color: var(--ytcp-text-primary);
        display: flex;
        flex-direction: column;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: fixed;
    }

    ytcp-entity-page[first-load] {
        -webkit-animation: var(--loading-animation);
        animation: var(--loading-animation);
    }

    ytcp-app {
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
        background-color: var(--ytcp-brand-background-solid);
        color: var(--ytcp-text-primary);
    }

    body {
        overflow: hidden;
        margin: 0;
        width: 100vw;
        height: 100vh;
    }

    html {
        --ytcp-brand-background-solid: #fff;
        --ytcp-general-background-a: #f9f9f9;
        --ytcp-general-background-b: #f1f1f1;
        --ytcp-menu-background: #fff;
        --ytcp-selected-item: #f1f1f1;
        --ytcp-hover-item: #f9f9f9;
        --ytcp-ten-percent-layer: rgba(0, 0, 0, 0.1);
        --ytcp-static-overlay-background-heavy: rgba(0, 0, 0, 0.8);
        --ytcp-static-overlay-background-medium: rgba(0, 0, 0, 0.6);
        --ytcp-text-primary: #0d0d0d;
        --ytcp-text-secondary: #606060;
        --ytcp-text-disabled: #909090;
        --ytcp-call-to-action: #065fd4;
        --ytcp-call-to-action-ripple: rgba(6, 95, 212, 0.2);
        --ytcp-icon-active: #606060;
        --ytcp-icon-inactive: #909090;
        --ytcp-icon-disabled: #ccc;
        --ytcp-line-divider: rgba(0, 0, 0, 0.1);
        --ytcp-line-divider-solid: #e6e6e6;
        --ytcp-container-border-color: #ccc;
        --ytcp-focus: #065fd4;
        --ytcp-error-red: #c00;
        --ytcp-themed-blue: #065fd4;
        --ytcp-themed-red: #c00;
        --ytcp-static-overlay-drop-shadow-a12: rgba(0, 0, 0, 0.12);
        --ytcp-analytics-overview: #2fa5cb;
        --ytcp-background-inverse: #1f1f1f;
        --ytcp-text-primary-inverse: #fff;
        --ytcp-yellow-inverse: #815000;
        --ytcp-grid-col-width: 50px;
        --ytcp-grid-col-gap: 24px;
        --ytcp-grid-col-width-12: calc(var(--ytcp-grid-col-width) * 12 + var(--ytcp-grid-col-gap) * 11);
    }

    @media (min-width: 1920px) {
        html {
            --ytcp-grid-col-width: 84px;
        }
    }


    dom-if {
        display: none;
    }

    #mini-card-header.yta-latest-activity-card {
        padding-top: 14px;
    }

    ytcp-feature-discovery-tour-step {
        display: none;
    }

    yta-realtime-chart {
        display: flex;
        flex: 1;
        min-width: 0;
        min-height: 0;
        height: 100%;
    }

    #main-chart.yta-latest-activity-card {
        width: 100%;
        height: 136px;
    }

    yta-latest-activity-card[mini] #main-chart.yta-latest-activity-card {
        height: 60px;
    }

    yta-pulsating-dot {
        display: inline-flex;
        flex-direction: column;
        --dot-max-radius: 40px;
        --dot-min-radius: 8px;
        --dot-border: 2px;
        --dot-color: var(--ytcp-analytics-overview);
    }

    yta-pulsating-dot.yta-latest-activity-card {
        padding-right: 4px;
    }

    span {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    .card-subtitle.yta-latest-activity-card {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        font-size: 13px;
        line-height: 20px;
        color: var(--ytcp-text-secondary);
        display: inline-block;
        padding-top: 0px;
        padding-bottom: 2px;
    }



    .layout.horizontal.yta-latest-activity-card {
        display: flex;
        flex-direction: row;
    }

    yta-line-chart-base {
        display: flex;
        min-width: 0;
        min-height: 0;
        height: 100%;
    }

    yta-line-chart-base.yta-realtime-chart {
        flex: 1;
    }

    .layout.horizontal.yta-title-subtitle-header {
        display: flex;
        flex-direction: row;
    }

    #dot.yta-pulsating-dot {
        display: inline-block;
        background: var(--dot-color);
        width: var(--dot-min-radius);
        height: var(--dot-min-radius);
        position: relative;
        left: calc(var(--dot-min-radius)/2);
        top: 3px;
        border-radius: calc(var(--dot-min-radius)/2);
        transform: translate(-50%, -50%);
    }

    .metric-value.yta-latest-activity-card {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 500;
        -webkit-font-smoothing: antialiased;
        font-size: 18px;
        line-height: 24px;
        padding-top: 0;
    }

    #subtitle.yta-latest-activity-card {
        display: flex;
        justify-content: space-between;
        padding-bottom: 12px;
    }

    #chart-container.yta-line-chart-base {
        flex: 1;
        min-width: 0;
        min-height: 0;
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.011em;
        font-size: 12px;
        line-height: 16px;
        fill: var(--ytcp-text-secondary);
    }

    .layout.vertical.yta-title-subtitle-header {
        display: flex;
        flex-direction: column;
    }

    #container.yta-title-subtitle-header {
        width: 100%;
    }

    #dot.yta-pulsating-dot span.yta-pulsating-dot {
        background: transparent;
        width: calc(var(--dot-min-radius)/2 - var(--dot-border)/2);
        height: calc(var(--dot-min-radius)/2 - var(--dot-border)/2);
        border-radius: var(--dot-max-radius);
        border: var(--dot-border) solid var(--dot-color);
        position: absolute;
        left: calc(var(--dot-min-radius)/2);
        top: calc(var(--dot-min-radius)/2);
        transform: translate(-50%, -50%);
    }



    .layout.center.yta-title-subtitle-header {
        align-items: center;
    }

    #title-container.yta-title-subtitle-header {
        padding-top: 22px;
    }

    yta-title-subtitle-header[no-padding] #title-container.yta-title-subtitle-header {
        padding: 0;
    }

    ytcp-button {
        display: inline-flex;
        align-items: center;
        text-align: center;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border-radius: 2px;
        min-width: 36px;
        height: 36px;
        box-sizing: border-box;
        padding: 0 8px;
        margin: 0;
        position: relative;
        color: var(--ytcp-call-to-action);
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 500;
        -webkit-font-smoothing: antialiased;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        text-transform: uppercase;
        letter-spacing: 0.01em;
        font-size: 14px;
        line-height: 20px;
        transition: box-shadow 0.28s cubic-bezier(0.4, 0, 0.2, 1);
    }

    #see-explore-subscribers-button.yta-latest-activity-card {
        padding: 0;
    }

    svg.yta-line-chart-base {
        isolation: isolate;
    }

    .aplos-a11y-content.yta-line-chart-base {
        opacity: 0.0000001;
    }

    #tooltip-target.yta-title-subtitle-header {
        align-items: flex-end;
    }

    yta-column-anomaly-tooltip {
        display: flex;
        flex-direction: column;
    }

    .flex.yta-title-subtitle-header {
        flex: 1;
        flex-basis: 0.000000001px;
    }

    .label.ytcp-button {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        flex: 1 1;
        padding: var(--ytcp-button-label-padding, 8px 0 8px);
    }

    paper-ripple {
        display: block;
        position: absolute;
        border-radius: inherit;
        overflow: hidden;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
    }

    paper-ripple.ytcp-button {
        color: var(--ytcp-call-to-action-ripple);
    }

    .aplos-chart.yta-line-chart-base .aplos-draw-area.yta-line-chart-base {
        cursor: var(--yta-line-chart-base-draw-area-cursor, default);
    }

    yta-hovercard {
        display: table;
    }

    yta-anomaly-hovercard {
        display: flex;
        flex-direction: column;
    }

    yta-audience-retention-highlight-hovercard {
        display: flex;
        flex-direction: column;
    }

    yta-video-overlay-hovercard {
        display: block;
        --annotation-width: 320px;
        width: var(--annotation-width);
        pointer-events: auto;
    }

    h1 {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    #title.yta-title-subtitle-header {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 500;
        -webkit-font-smoothing: antialiased;
        font-size: 18px;
        line-height: 24px;
        color: var(--ytcp-text-primary);
        padding-bottom: 2px;
    }

    yta-title-subtitle-header[no-padding] #title.yta-title-subtitle-header {
        padding: 0;
    }

    ytcp-paper-tooltip {
        display: none;
    }

    #background.paper-ripple {
        pointer-events: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
    }

    #waves.paper-ripple {
        pointer-events: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }



    .trend-label.ytcp-trend-label {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        font-size: 13px;
        line-height: 20px;
        padding-top: 2px;
        padding-bottom: 2px;
    }

    .only-visible-for-accessibility {
        display: inline-block;
        position: fixed;
        clip: rect(0px, 0px, 0px, 0px);
    }

    .layout.vertical.yta-column-anomaly-tooltip {
        display: flex;
        flex-direction: column;
    }

    ytcp-paper-tooltip-body {
        color: var(--ytcp-text-primary);
    }

    p {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    p.ytcp-paper-tooltip-body,
    ytcp-paper-tooltip-body>p {
        margin: 1em 0;
    }

    p.ytcp-paper-tooltip-body:first-of-type,
    ytcp-paper-tooltip-body>p:first-of-type {
        margin-top: 0;
    }

    p.ytcp-paper-tooltip-body:last-of-type,
    ytcp-paper-tooltip-body>p:last-of-type {
        margin-bottom: 0;
    }

    yt-formatted-string:-webkit-scrollbar {
        width: var(--ytd-scrollbar-width);
    }

    yt-formatted-string:-webkit-scrollbar-thumb {
        height: 56px;
        background: var(--yt-spec-icon-disabled);
    }


    /* These were inline style tags. Uses id+class to override almost everything */
    #goog_1694347610.style-9hFFz {
        inset: auto auto 703px 1222px;
    }

    #style-GdSbM.style-GdSbM {
        --dot-color: rgba(47, 165, 203, 1);
    }

    #chart-container.style-YpPEp {
        overflow: visible;
    }

    #style-RZy9I.style-RZy9I {
        display: none;
    }

    #style-QBxv6.style-QBxv6 {
        opacity: 0;
        visibility: hidden;
        top: 0px;
        left: 0px;
        position: fixed;
        z-index: 10;
        pointer-events: none;
        transition: all 100ms ease 0s;
    }

    #style-CE5vh.style-CE5vh {
        display: none;
    }

    #style-KnUiO.style-KnUiO {
        display: initial;
    }

    #value.style-nffi3 {
        color: rgba(47, 165, 203, 1);
    }

    #style-RN8ji.style-RN8ji {
        display: none;
    }

    #style-i7oSU.style-i7oSU {
        display: none;
    }

    #style-hU7Nw.style-hU7Nw {
        display: none;
    }

    #style-Ld9lf.style-Ld9lf {
        display: none;
    }

    #style-Dfgoj.style-Dfgoj {
        display: none;
    }

    yta-card-container {
        display: flex;
        flex-direction: column;
    }

    .layout.vertical.yta-key-metric-card {
        display: flex;
        flex-direction: column;
    }

    yta-key-metric-card {
        --yta-line-chart-base-rect-annotation-transform: translateY(1px);
    }

    .card.yta-section {
        display: block;
        margin: 12px;
    }

    yta-section {
        display: flex;
        flex-direction: column;
        flex: none;
    }

    .single-column.yta-screen {
        width: 100%;
    }

    div {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    .tab-content.yta-screen {
        padding: 12px;
        flex: 5;
        min-width: 0;
    }

    .layout.vertical.yta-screen {
        display: flex;
        flex-direction: column;
    }

    .layout.horizontal.yta-screen {
        display: flex;
        flex-direction: row;
    }

    #tab-content-container.yta-screen>div.yta-screen {
        height: 100%;
    }

    #tab-content-container.yta-screen {
        max-width: 1280px;
        min-width: 952px;
        background-color: var(--ytcp-brand-background-solid);
        height: 100%;
        display: block;
    }

    .with-side-bar.yta-screen {
        background-color: var(--ytcp-general-background-a);
        height: 100%;
    }

    #content.yta-screen {
        position: relative;
    }

    yta-screen {
        color: var(--ytcp-text-primary);
    }

    yta-screen.yta-overview-app {
        position: relative;
        height: 100%;
    }

    #background.yta-overview-app {
        flex: 1;
        width: 100%;
        min-height: 100%;
        background-color: var(--ytcp-brand-background-solid);
    }

    yta-overview-app {
        flex: 1;
        display: flex;
        color: var(--ytcp-text-primary);
    }

    yta-app {
        display: flex;
        flex: 1;
        flex-direction: column;
        position: relative;
    }

    .page.ytcp-app {
        display: flex;
        flex-grow: 0;
        flex-direction: column;
        align-items: stretch;
    }



    ytcp-entity-page[first-load] {
        -webkit-animation: var(--loading-animation);
        animation: var(--loading-animation);
    }

    ytcp-app {
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
        background-color: var(--ytcp-brand-background-solid);
        color: var(--ytcp-text-primary);
    }


    tp-yt-paper-card {
        position: relative;
        box-sizing: border-box;
        background-color: var(--paper-card-background-color, var(--primary-background-color));
        border-radius: 2px;
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
        display: var(--paper-card-display, inline-block);
    }

    .staple-card.yta-card-container {
        border-radius: var(--ytcp-standard-border-radius);
        border: 1px solid var(--ytcp-ten-percent-layer);
        overflow: hidden;
        display: block;
        cursor: default;
        background-color: var(--ytcp-brand-background-solid);
        color: var(--ytcp-text-primary);
    }



    .layout.horizontal.yta-key-metric-card {
        display: flex;
        flex-direction: row;
    }

    #key-metric-header.yta-key-metric-card {
        justify-content: space-between;
        width: inherit;
        overflow: hidden;
    }

    .comparison-label-container.yta-key-metric-card {
        position: relative;
        height: 4px;
    }

    #aspect-ratio-four-one-container.yta-key-metric-card {
        display: block;
        position: relative;
        width: 100%;
        padding-top: 25%;
    }

    #aspect-ratio-four-one-container.yta-key-metric-card[narrow-mode] {
        padding-top: 0;
        height: 425px;
    }

    yta-key-metric-card:not([has-video-overlay]):not([has-chart-banner]) #aspect-ratio-four-one-container.yta-key-metric-card {
        padding-top: 0;
        margin-top: 16px;
        height: 174px;
    }

    dom-if {
        display: none;
    }

    .footer.yta-card-container {
        justify-content: space-between;
        align-items: center;
    }

    .layout.horizontal.yta-card-container {
        display: flex;
        flex-direction: row;
    }

    iron-image {
        display: inline-block;
        overflow: hidden;
        position: relative;
    }

    [hidden] {
        display: none !important;
    }

    .tp-yt-paper-card[hidden] {
        display: none !important;
    }

    .header.tp-yt-paper-card iron-image.tp-yt-paper-card {
        display: block;
        width: 100%;
        --iron-image-width: 100%;
        pointer-events: none;
    }

    .header.tp-yt-paper-card .title-text.tp-yt-paper-card {
        color: var(--paper-card-header-color, #000);
    }

    tp-yt-paper-listbox {
        display: block;
        padding: 8px 0;
        background: var(--paper-listbox-background-color, var(--primary-background-color));
        color: var(--paper-listbox-color, var(--primary-text-color));
        border: var(--paper-listbox-border);
    }

    tp-yt-paper-listbox.yta-key-metric-card {
        padding: 0;
        align-items: stretch;
        width: 100%;
    }

    .flex-none.yta-key-metric-card {
        flex: none;
    }

    #key-metric-blocks.yta-key-metric-card {
        flex-shrink: 1;
        width: 100%;
    }

    #comparison-label-content.yta-key-metric-card {
        position: absolute;
        align-items: center;
        z-index: 1;
        top: 0;
        left: 24px;
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        font-size: 13px;
        line-height: 20px;
        color: var(--ytcp-text-secondary);
        padding-top: 10px;
        padding-bottom: 10px;
    }

    #aspect-ratio-content.yta-key-metric-card {
        position: absolute;
        top: 12px;
        left: 4px;
        right: 24px;
        bottom: 0;
        display: flex;
        flex-direction: column;
    }

    .experiment-and-feedback.yta-card-container {
        align-items: center;
    }


    #baseURIAnchor.iron-image {
        display: none;
    }

    #sizedImgDiv.iron-image {
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        display: none;
    }

    img {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    #img.iron-image {
        display: block;
        width: var(--iron-image-width, auto);
        height: var(--iron-image-height, auto);
    }

    #placeholder.iron-image {
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        background-color: inherit;
        opacity: 1;
    }

    tp-yt-paper-item {
        display: flex;
        position: relative;
        min-height: var(--paper-item-min-height, 48px);
        padding: 0px 16px;
        -ms-flex-direction: row;
        -webkit-flex-direction: row;
        flex-direction: row;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
    }

    tp-yt-paper-item.iron-selected {
        font-weight: var(--paper-item-selected-weight, bold);
        background: var(--paper-item-selected-background);
    }

    tp-yt-paper-item.yta-key-metric-card {
        cursor: pointer;
        padding: 0;
        transition: background-color 0.1s ease-in-out;
        width: 100%;
        background-color: var(--ytcp-general-background-a);
        border-right: 1px solid var(--ytcp-line-divider);
    }

    tp-yt-paper-item[style-target="host"] {
        white-space: nowrap;
    }

    .override-pointer-events.yta-key-metric-card {
        pointer-events: auto !important;
    }

    tp-yt-paper-item.iron-selected.yta-key-metric-card {
        background-color: var(--ytcp-brand-background-solid);
    }

    tp-yt-paper-item.yta-key-metric-card:before {
        content: none;
    }

    tp-yt-paper-item.yta-key-metric-card:last-of-type {
        border-right: 0;
    }

    dom-repeat {
        display: none;
    }

    yta-line-chart-base {
        display: flex;
        min-width: 0;
        min-height: 0;
        height: 100%;
    }

    yta-line-chart-base.yta-key-metric-card {
        margin-top: 8px;
        height: initial;
        flex: 1;
        --yta-line-chart-base-draw-area-cursor: inherit;
    }

    #block-container.yta-key-metric-card {
        width: 100%;
        height: 3px;
        background-color: var(--ytcp-general-background-a);
    }

    yta-key-metric-card:not([is-single-block]) tp-yt-paper-item.iron-selected.yta-key-metric-card>#block-container.yta-key-metric-card {
        background-color: var(--ytcp-call-to-action);
    }

    yta-key-metric-block {
        height: 100%;
        width: 100%;
        white-space: normal;
    }

    paper-ripple {
        display: block;
        position: absolute;
        border-radius: inherit;
        overflow: hidden;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
    }

    #chart-container.yta-line-chart-base {
        flex: 1;
        min-width: 0;
        min-height: 0;
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.011em;
        font-size: 12px;
        line-height: 16px;
        fill: var(--ytcp-text-secondary);
    }

    .layout.vertical.yta-key-metric-block {
        display: flex;
        flex-direction: column;
    }

    yta-key-metric-block:not([for-mini]) #container.yta-key-metric-block {
        padding-bottom: 16px;
        min-height: 92px;
    }

    yta-column-anomaly-tooltip {
        display: flex;
        flex-direction: column;
    }

    #background.paper-ripple {
        pointer-events: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
    }

    #waves.paper-ripple {
        pointer-events: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    ytcp-button {
        display: inline-flex;
        align-items: center;
        text-align: center;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border-radius: 2px;
        min-width: 36px;
        height: 36px;
        box-sizing: border-box;
        padding: 0 8px;
        margin: 0;
        position: relative;
        color: var(--ytcp-call-to-action);
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 500;
        -webkit-font-smoothing: antialiased;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        text-transform: uppercase;
        letter-spacing: 0.01em;
        font-size: 14px;
        line-height: 20px;
        transition: box-shadow 0.28s cubic-bezier(0.4, 0, 0.2, 1);
    }

    #see-more-button.yta-card-container {
        margin: 12px 0 12px 16px;
    }

    ytcp-paper-tooltip {
        display: none;
    }

    svg.yta-line-chart-base {
        isolation: isolate;
    }

    .aplos-a11y-content.yta-line-chart-base {
        opacity: 0.0000001;
    }

    .label.ytcp-button {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        flex: 1 1;
        padding: var(--ytcp-button-label-padding, 8px 0 8px);
    }

    .layout.horizontal.yta-key-metric-block {
        display: flex;
        flex-direction: row;
    }

    yta-key-metric-block:not([for-mini]) #metric-label-container.yta-key-metric-block {
        height: 36px;
        justify-content: center;
        justify-items: center;
        align-items: center;
    }

    ytcp-paper-tooltip-placeholder {
        display: block;
        position: fixed;
        outline: none;
        z-index: 10000;
        -moz-user-select: none;
        -ms-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        cursor: default;
    }

    ytcp-paper-tooltip-placeholder[type="explanatory"] {
        -moz-user-select: auto;
        -ms-user-select: auto;
        -webkit-user-select: auto;
        user-select: auto;
        cursor: auto;
    }

    .aplos-chart.yta-line-chart-base .aplos-draw-area.yta-line-chart-base {
        cursor: var(--yta-line-chart-base-draw-area-cursor, default);
    }

    yta-hovercard {
        display: table;
    }

    yta-anomaly-hovercard {
        display: flex;
        flex-direction: column;
    }

    yta-audience-retention-highlight-hovercard {
        display: flex;
        flex-direction: column;
    }

    yta-video-overlay-hovercard {
        display: block;
        --annotation-width: 320px;
        width: var(--annotation-width);
        pointer-events: auto;
    }

    yta-key-metric-block:not([for-mini]) .metric-container.yta-key-metric-block {
        justify-content: center;
        justify-items: center;
    }

    #tooltip.ytcp-paper-tooltip-placeholder {
        display: block;
        outline: none;
        border-radius: var(--ytcp-extended-border-radius);
        overflow: var(--ytcp-tooltip-overflow, visible);
    }

    ytcp-paper-tooltip-placeholder[type="explanatory"] #tooltip.ytcp-paper-tooltip-placeholder {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        font-size: 13px;
        line-height: 20px;
        padding: 20px 20px 16px;
        background-color: var(--ytcp-menu-background);
        color: var(--ytcp-text-primary);
        max-height: 540px;
        max-width: var(--ytcp-tooltip-max-width, 360px);
        overflow: auto;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
    }

    .container.yta-deep-dive-hovercard {
        background: var(--ytcp-brand-background-solid);
        border: 1px solid var(--ytcp-line-divider-solid);
        border-radius: var(--ytcp-standard-border-radius);
        box-shadow: 0 1px 4px var(--ytcp-static-overlay-drop-shadow-a12);
        font-family: "Roboto", "Noto", sans-serif;
        padding: 16px;
        text-align: left;
        white-space: normal;
        display: inline-flex;
        flex-direction: column;
        padding-top: 0;
        padding-bottom: 8px;
        min-width: 188px;
        max-width: 320px;
    }

    #yta-hovercard-container.yta-hovercard {
        background: var(--ytcp-brand-background-solid);
        border: 1px solid var(--ytcp-line-divider-solid);
        border-radius: var(--ytcp-standard-border-radius);
        box-shadow: 0 1px 4px var(--ytcp-static-overlay-drop-shadow-a12);
        font-family: "Roboto", "Noto", sans-serif;
        padding: 16px;
        text-align: left;
        white-space: normal;
        max-width: 240px;
    }

    #yta-hovercard-container.yta-anomaly-hovercard {
        background: var(--ytcp-brand-background-solid);
        border: 1px solid var(--ytcp-line-divider-solid);
        border-radius: var(--ytcp-standard-border-radius);
        box-shadow: 0 1px 4px var(--ytcp-static-overlay-drop-shadow-a12);
        font-family: "Roboto", "Noto", sans-serif;
        padding: 16px;
        text-align: left;
        white-space: normal;
    }

    .layout.vertical.yta-comparison-hovercard {
        display: flex;
        flex-direction: column;
    }

    #yta-hovercard-container.yta-comparison-hovercard {
        background: var(--ytcp-brand-background-solid);
        border: 1px solid var(--ytcp-line-divider-solid);
        border-radius: var(--ytcp-standard-border-radius);
        box-shadow: 0 1px 4px var(--ytcp-static-overlay-drop-shadow-a12);
        font-family: "Roboto", "Noto", sans-serif;
        padding: 0 16px 8px;
        text-align: left;
        white-space: normal;
    }

    #container.yta-disputemon-hovercard {
        display: flex;
        flex-direction: column;
        min-width: 188px;
        max-width: 320px;
        background: var(--ytcp-brand-background-solid);
        border: 1px solid var(--ytcp-line-divider-solid);
        border-radius: var(--ytcp-standard-border-radius);
        box-shadow: 0 1px 4px var(--ytcp-static-overlay-drop-shadow-a12);
        font-family: "Roboto", "Noto", sans-serif;
        padding: 10px 20px;
        text-align: left;
        white-space: normal;
    }

    .content.yta-audience-retention-highlight-hovercard {
        background: var(--ytcp-brand-background-solid);
        border: 1px solid var(--ytcp-line-divider-solid);
        border-radius: var(--ytcp-standard-border-radius);
        box-shadow: 0 1px 4px var(--ytcp-static-overlay-drop-shadow-a12);
        font-family: "Roboto", "Noto", sans-serif;
        padding: 16px;
        text-align: left;
        white-space: normal;
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        font-size: 13px;
        line-height: 20px;
        max-width: 240px;
    }

    #metric-label.yta-key-metric-block {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 500;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.011em;
        font-size: 12px;
        line-height: 16px;
        color: var(--ytcp-text-secondary);
        padding-top: 0;
        padding-bottom: 0;
        text-align: center;
        margin-top: 14px;
    }

    #metric-total.yta-key-metric-block {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        font-size: 24px;
        letter-spacing: -0.012em;
        line-height: 32px;
        color: var(--ytcp-text-primary);
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .layout.vertical.yta-column-anomaly-tooltip {
        display: flex;
        flex-direction: column;
    }

    ytcp-paper-tooltip-placeholder[type="explanatory"] #tooltip.ytcp-paper-tooltip-placeholder>ytcp-help {
        display: block;
        margin-top: 10px;
        margin-left: -8px;
    }

    #chart-container.yta-line-chart-base .tick.yta-line-chart-base {
        letter-spacing: 0;
    }

    .date.yta-deep-dive-hovercard {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 500;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.011em;
        font-size: 12px;
        line-height: 20px;
        color: var(--ytcp-text-primary);
        padding-top: 10px;
        padding-bottom: 2px;
    }

    .subtitle.yta-deep-dive-hovercard {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.011em;
        font-size: 12px;
        line-height: 16px;
        color: var(--ytcp-text-secondary);
        padding-top: calc(12px - var(--ytcp-font-caption1-baseline-top));
        padding-bottom: 0px;
    }

    #title.yta-hovercard {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 500;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.011em;
        font-size: 12px;
        line-height: 20px;
        color: var(--ytcp-text-primary);
        padding-bottom: 2px;
    }

    #value.yta-hovercard {
        font-weight: 400;
        font-size: 24px;
        line-height: 32px;
    }

    #title.yta-anomaly-hovercard {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 500;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.011em;
        font-size: 12px;
        line-height: 20px;
        color: var(--ytcp-text-primary);
    }

    .caption.yta-comparison-hovercard {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 500;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.011em;
        font-size: 12px;
        line-height: 20px;
        padding-top: 10px;
        padding-bottom: -2px;
        color: var(--ytcp-text-primary);
    }

    .metric-name-container.yta-comparison-hovercard {
        margin-bottom: 4px;
    }

    .layout.horizontal.yta-comparison-hovercard {
        display: flex;
        flex-direction: row;
    }

    .layout.vertical.yta-audience-retention-highlight-hovercard {
        display: flex;
        flex-direction: column;
    }

    ytcp-paper-tooltip-body {
        color: var(--ytcp-text-primary);
    }

    .subcaption.yta-comparison-hovercard {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.011em;
        font-size: 12px;
        line-height: 16px;
        color: var(--ytcp-text-secondary);
        padding-top: calc(12px - var(--ytcp-font-caption1-baseline-top));
        padding-bottom: 0px;
    }

    .metric.yta-comparison-hovercard {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        font-size: 24px;
        letter-spacing: -0.012em;
        line-height: 32px;
        padding-top: 0px;
        padding-bottom: 0px;
        color: var(--ytcp-text-primary);
    }

    ytcp-trend-label {
        display: inline-flex;
    }

    ytcp-trend-label.yta-comparison-hovercard {
        margin: 8px 0 0;
    }

    #title.yta-disputemon-hovercard {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 500;
        -webkit-font-smoothing: antialiased;
        font-size: 13px;
        line-height: 20px;
        color: var(--ytcp-text-primary);
        padding-top: 10px;
        padding-bottom: 4px;
    }

    #explanation.yta-disputemon-hovercard {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        font-size: 13px;
        line-height: 20px;
        color: var(--ytcp-text-primary);
        padding-bottom: 4px;
    }

    p {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    p.ytcp-paper-tooltip-body,
    ytcp-paper-tooltip-body>p {
        margin: 1em 0;
    }

    p.ytcp-paper-tooltip-body:first-of-type,
    ytcp-paper-tooltip-body>p:first-of-type {
        margin-top: 0;
    }

    p.ytcp-paper-tooltip-body:last-of-type,
    ytcp-paper-tooltip-body>p:last-of-type {
        margin-bottom: 0;
    }

    .trend-label-no-icon-padding.ytcp-trend-label {
        padding-left: 8px;
    }

    .trend-label.ytcp-trend-label {
        font-family: "Roboto", "Noto", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        font-size: 13px;
        line-height: 20px;
        padding-top: 2px;
        padding-bottom: 2px;
    }

    yt-formatted-string:-webkit-scrollbar {
        width: var(--ytd-scrollbar-width);
    }

    yt-formatted-string:-webkit-scrollbar-thumb {
        height: 56px;
        background: var(--yt-spec-icon-disabled);
    }

    .dot-follow-point-group.yta-line-chart-base text.yta-line-chart-base {
        transform: var(--yta-line-chart-base-rect-annotation-transform, none);
    }


    /* These were inline style tags. Uses id+class to override almost everything */
    #background.style-HdJ9E {
        opacity: 0.00768;
    }

    #goog_1548680346.style-TSiv6 {
        inset: auto auto 559.078px 642.766px;
    }

    #goog_1548680347.style-Ex5RI {
        inset: auto auto 540.078px 713.766px;
    }

    #background.style-Tk6t5 {
        opacity: 0.00968;
    }

    #goog_1548680349.style-Gy4lM {
        inset: auto auto 540.078px 1008.77px;
    }

    #background.style-EwBSp {
        opacity: 0.00952;
    }

    #chart-container.style-SGBbU {
        overflow: visible;
    }

    #style-2KSCn.style-2KSCn {
        display: none;
    }

    #style-cAPpm.style-cAPpm {
        fill: white;
        font-size: 6.25px;
    }

    #style-Ug9DT.style-Ug9DT {
        fill: white;
        font-size: 6.25px;
    }

    #style-M9El6.style-M9El6 {
        display: none;
    }

    #style-fgKNo.style-fgKNo {
        opacity: 0;
        visibility: hidden;
        top: 0px;
        left: 0px;
        position: fixed;
        z-index: 10;
        pointer-events: none;
        transition: all 100ms ease 0s;
    }

    #style-ldZXf.style-ldZXf {
        display: none;
    }

    #style-vV6Bq.style-vV6Bq {
        display: none;
    }

    #value.style-zcmwi {
        color: rgba(47, 165, 203, 1);
    }

    #style-97igE.style-97igE {
        display: none;
    }

    #style-cRfki.style-cRfki {
        display: none;
    }

    #style-4NjVp.style-4NjVp {
        display: none;
    }

    #style-ojeXR.style-ojeXR {
        display: none;
    }

    #style-zVnrJ.style-zVnrJ {
        display: none;
    }

    div {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    #tabs-container.ytd-c4-tabbed-header-renderer {
        background-color: var(--yt-spec-base-background);
        width: 100%;
        height: 48px;
    }

    tp-yt-app-toolbar {
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -ms-flex-direction: row;
        -webkit-flex-direction: row;
        flex-direction: row;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        position: relative;
        height: 64px;
        padding: 0 16px;
        pointer-events: none;
        font-size: var(--app-toolbar-font-size, 20px);
    }

    tp-yt-app-toolbar.ytd-c4-tabbed-header-renderer {
        height: 48px;
        padding: 0;
    }

    #contentContainer.tp-yt-app-header {
        position: relative;
        width: 100%;
        height: 100%;
    }

    tp-yt-app-header {
        position: relative;
        display: block;
        transition-timing-function: linear;
        transition-property: -webkit-transform;
        transition-property: transform;
    }

    #header.ytd-c4-tabbed-header-renderer {
        position: fixed;
        margin-top: var(--ytd-toolbar-offset);
        z-index: 1;
    }

    #wrapper.tp-yt-app-header-layout>[slot="header"] {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1;
    }

    tp-yt-app-header-layout {
        display: block;
        position: relative;
        z-index: 0;
    }

    ytd-c4-tabbed-header-renderer {
        --yt-lightsource-section1-color: var(--yt-spec-base-background);
        --yt-lightsource-primary-title-color: var(--yt-spec-text-primary);
        --yt-lightsource-secondary-title-color: var(--yt-spec-text-secondary);
        display: block;
    }

    #header.ytd-browse>.ytd-browse {
        width: 100%;
        flex: none;
    }

    #header.ytd-browse {
        width: 100%;
        z-index: 2000;
        flex: none;
    }

    ytd-browse {
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    ytd-browse[page-subtype="channels"] {
        background: var(--yt-spec-general-background-b);
    }

    ytd-page-manager>.ytd-page-manager {
        flex: 1;
        flex-basis: 0.000000001px;
    }

    ytd-browse[darker-dark-theme][page-subtype="channels"] {
        background: transparent;
    }

    ytd-page-manager {
        display: block;
        overflow-y: auto;
        margin-top: var(--ytd-toolbar-height);
    }

    ytd-app[guide-persistent-and-visible] ytd-page-manager.ytd-app {
        margin-left: var(--ytd-persistent-guide-width);
    }

    #page-manager.ytd-app {
        --ytd-toolbar-offset: var(--ytd-masthead-height, var(--ytd-toolbar-height));
        overflow-x: inherit;
        overflow-y: visible;
        margin-top: var(--ytd-masthead-height, var(--ytd-toolbar-height));
    }

    ytd-app:not([use-content-visibility]) #page-manager.ytd-app {
        display: flex;
        flex: 1;
        flex-basis: 0.000000001px;
    }

    ytd-app {
        --ytd-persistent-guide-width: 240px;
        background: var(--yt-spec-general-background-a);
        display: block;
        left: 0;
        min-height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        scrollbar-color: var(--yt-spec-text-secondary) transparent;
    }

    ytd-app[darker-dark-theme] {
        background: var(--yt-spec-base-background);
    }

    body {
        padding: 0;
        margin: 0;
        overflow-y: scroll;
    }

    html {
        background-color: #f9f9f9 !important;
        -webkit-text-size-adjust: none;
        --yt-spec-base-background: #fff;
        --yt-spec-raised-background: #fff;
        --yt-spec-menu-background: #fff;
        --yt-spec-inverted-background: #0f0f0f;
        --yt-spec-additive-background: rgba(0, 0, 0, 0.05);
        --yt-spec-outline: rgba(0, 0, 0, 0.1);
        --yt-spec-text-primary: #030303;
        --yt-spec-text-primary-inverse: #fff;
        --yt-spec-text-secondary: #606060;
        --yt-spec-text-disabled: #909090;
        --yt-spec-call-to-action: #065fd4;
        --yt-spec-icon-inactive: #909090;
        --yt-spec-icon-disabled: #ccc;
        --yt-spec-touch-response: #000;
        --yt-spec-brand-link-text: #c00;
        --yt-spec-themed-blue: #065fd4;
        --yt-spec-static-brand-white: #fff;
        --yt-spec-static-overlay-text-primary: #fff;
        --yt-spec-static-overlay-text-secondary: rgba(255, 255, 255, 0.7);
        --yt-spec-static-overlay-text-disabled: rgba(255, 255, 255, 0.3);
        --yt-spec-static-overlay-button-secondary: rgba(255, 255, 255, 0.1);
        --yt-spec-brand-background-solid: #fff;
        --yt-spec-general-background-a: #f9f9f9;
        --yt-spec-general-background-b: #f1f1f1;
        --yt-spec-10-percent-layer: rgba(0, 0, 0, 0.1);
        --yt-spec-badge-chip-background: rgba(0, 0, 0, 0.05);
        --yt-spec-paper-tab-ink: rgba(0, 0, 0, 0.3);
        --yt-spec-white-2: #f9f9f9;
        --yt-spec-grey-1: #ccc;
        --yt-spec-grey-5: #606060;
        --yt-spec-dark-blue: #065fd4;
        --yt-spec-black-pure-alpha-15: rgba(0, 0, 0, 0.15);
        --yt-deprecated-luna-black: hsl(0, 0%, 6.7%);
        --yt-deprecated-opalescence-soft-grey: hsl(0, 0%, 93.3%);
        --yt-deprecated-luna-black-opacity-lighten-1: hsla(0, 0%, 6.7%, 0.8);
        --yt-deprecated-luna-black-opacity-lighten-2: hsla(0, 0%, 6.7%, 0.6);
        --yt-deprecated-luna-black-opacity-lighten-3: hsla(0, 0%, 6.7%, 0.4);
        --yt-deprecated-opalescence-soft-grey-opacity-lighten-3: hsla(0, 0%, 93.3%, 0.4);
        --yt-deprecated-luna-black-opacity-lighten-4: hsla(0, 0%, 6.7%, 0.2);
        --yt-opalescence-dark-grey: hsl(0, 0%, 20%);
        --yt-live-chat-action-panel-background-color-transparent: hsla(0, 0%, 97%, 0.8);
        --yt-live-chat-primary-text-color: var(--yt-spec-text-primary);
        --yt-live-chat-secondary-text-color: var(--yt-deprecated-luna-black-opacity-lighten-2);
        --yt-live-chat-disabled-icon-button-color: var(--yt-deprecated-luna-black-opacity-lighten-4);
        --yt-live-chat-poll-primary-text-color: var(--yt-spec-static-overlay-text-primary);
        --yt-live-chat-poll-tertiary-text-color: var(--yt-spec-static-overlay-text-disabled);
        --ytd-toolbar-height: 56px;
        --yt-navbar-title-font-size: 1.8rem;
        --ytd-user-comment-font-size: var(--yt-user-comment-font-size, 1.4rem);
        --ytd-user-comment-font-weight: 400;
        --ytd-user-comment-line-height: var(--yt-user-comment-line-height, 2.1rem);
        --ytd-user-comment-letter-spacing: var(--yt-user-comment-letter-spacing, normal);
        --ytd-tab-system-font-size: var(--yt-tab-system-font-size, 1.4rem);
        --ytd-tab-system-font-weight: 500;
        --ytd-tab-system-letter-spacing: var(--yt-tab-system-letter-spacing, 0.007px);
        --ytd-tab-system-text-transform: uppercase;
        scrollbar-color: var(--yt-spec-text-secondary) transparent;
    }

    html[darker-dark-theme] {
        background-color: #fff !important;
    }

    html:not(.style-scope) {
        --primary-text-color: var(--light-theme-text-color);
        --secondary-text-color: var(--light-theme-secondary-color);
        --disabled-text-color: var(--light-theme-disabled-color);
        --primary-color: #3f51b5;
        --light-theme-background-color: #fff;
        --light-theme-text-color: #212121;
        --light-theme-secondary-color: #737373;
        --light-theme-disabled-color: #9b9b9b;
        --light-theme-divider-color: #dbdbdb;
        --dark-theme-text-color: #fff;
    }

    html[system-icons] {
        --yt-spec-icon-inactive: #030303;
        --yt-spec-icon-disabled: #909090;
    }

    html[darker-dark-theme] {
        --yt-spec-text-primary: #0f0f0f;
        --yt-spec-text-primary-inverse: #fff;
    }

    html[darker-dark-theme-deprecate],
    [darker-dark-theme-deprecate] {
        --yt-spec-brand-background-solid: var(--yt-spec-raised-background);
        --yt-spec-general-background-a: var(--yt-spec-base-background);
        --yt-spec-general-background-b: var(--yt-spec-base-background);
        --yt-spec-badge-chip-background: var(--yt-spec-additive-background);
        --yt-spec-10-percent-layer: var(--yt-spec-outline);
    }

    html[typography-spacing] {
        --yt-subheadline-letter-spacing: 0.1px;
        --yt-link-letter-spacing: 0.25px;
        --yt-user-comment-letter-spacing: 0.2px;
        --yt-caption-letter-spacing: 0.35px;
        --yt-tab-system-letter-spacing: 0.5px;
    }

    html[typography] {
        --yt-navbar-title-line-height: 2.6rem;
        --yt-subheadline-line-height: 2.2rem;
        --yt-link-line-height: 2rem;
        --yt-user-comment-line-height: 2rem;
        --yt-caption-font-size: 1.2rem;
        --yt-caption-line-height: 1.8rem;
    }

    html:not(.style-scope) {
        --paper-input-container-focus-color: var(--yt-spec-themed-blue);
        --paper-input-container-input-color: var(--yt-spec-text-primary);
    }

    #tabs-inner-container.ytd-c4-tabbed-header-renderer {
        background-color: var(--yt-lightsource-section1-color);
    }

    #tabs-divider.ytd-c4-tabbed-header-renderer {
        display: block;
        position: absolute;
        width: 100%;
        bottom: 0px;
        border-bottom: 1px solid var(--yt-spec-10-percent-layer);
    }

    tp-yt-paper-tabs {
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        height: 48px;
        font-size: 14px;
        font-weight: 500;
        overflow: hidden;
        -moz-user-select: none;
        -ms-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
    }

    tp-yt-paper-tabs.ytd-c4-tabbed-header-renderer {
        --paper-tabs-selection-bar-color: var(--yt-lightsource-secondary-title-color);
        box-sizing: border-box;
        color: var(--yt-lightsource-secondary-title-color);
        height: 48px;
        padding-bottom: 0px;
        margin-left: 51px;
    }

    ytd-c4-tabbed-header-renderer:not([modern-tabs]) tp-yt-paper-tabs.ytd-c4-tabbed-header-renderer {
        font-size: var(--ytd-tab-system-font-size);
        font-weight: var(--ytd-tab-system-font-weight);
        letter-spacing: var(--ytd-tab-system-letter-spacing);
        text-transform: var(--ytd-tab-system-text-transform);
    }

    tp-yt-paper-tabs.ytd-c4-tabbed-header-renderer {
        margin-left: calc((100% - 1284px)/2);
        margin-right: calc((100% - 1284px)/2);
    }

    tp-yt-paper-icon-button {
        display: inline-block;
        position: relative;
        padding: 8px;
        outline: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        z-index: 0;
        line-height: 1;
        width: 40px;
        height: 40px;
        -webkit-tap-highlight-color: transparent;
        box-sizing: border-box !important;
    }

    .hidden {
        display: none;
    }

    tp-yt-paper-icon-button[disabled] {
        color: var(--paper-icon-button-disabled-text, var(--disabled-text-color));
        pointer-events: none;
        cursor: auto;
    }

    tp-yt-paper-icon-button.tp-yt-paper-tabs {
        width: 48px;
        height: 48px;
        padding: 12px;
        margin: 0 4px;
    }

    .hidden.tp-yt-paper-tabs {
        display: none;
    }

    #tabsContainer.tp-yt-paper-tabs {
        position: relative;
        height: 100%;
        white-space: nowrap;
        overflow: hidden;
        -ms-flex: 1 1 auto;
        -webkit-flex: 1 1 auto;
        flex: 1 1 auto;
    }

    tp-yt-iron-icon {
        display: -ms-inline-flexbox;
        display: -webkit-inline-flex;
        display: inline-flex;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        position: relative;
        vertical-align: middle;
        fill: var(--iron-icon-fill-color, currentcolor);
        stroke: var(--iron-icon-stroke-color, none);
        width: var(--iron-icon-width, 24px);
        height: var(--iron-icon-height, 24px);
        animation: var(--iron-icon-animation);
        margin-top: var(--iron-icon-margin-top);
        margin-right: var(--iron-icon-margin-right);
        margin-bottom: var(--iron-icon-margin-bottom);
        margin-left: var(--iron-icon-margin-left);
        padding: var(--iron-icon-padding);
    }

    tp-yt-iron-icon.tp-yt-paper-icon-button {
        --iron-icon-width: 100%;
        --iron-icon-height: 100%;
    }

    .tabs-content.tp-yt-paper-tabs {
        height: 100%;
        -moz-flex-basis: auto;
        -ms-flex-basis: auto;
        flex-basis: auto;
    }

    .tabs-content.scrollable.tp-yt-paper-tabs {
        position: absolute;
        white-space: nowrap;
    }

    .selection-bar.tp-yt-paper-tabs {
        position: absolute;
        height: 0;
        bottom: 0;
        left: 0;
        right: 0;
        border-bottom: 2px solid #0d0d0d;
        -webkit-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: left center;
        transform-origin: left center;
        transition: -webkit-transform;
        transition: transform;
    }

    tp-yt-paper-tabs .tp-yt-paper-tabs[style-target="selection-bar"] {
        border-bottom-width: 3px;
    }

    dom-if {
        display: none;
    }

    #tabsContent.tp-yt-paper-tabs> :not(#selectionBar) {
        height: 100%;
    }

    tp-yt-paper-tab {
        display: -ms-inline-flexbox;
        display: -webkit-inline-flex;
        display: inline-flex;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -ms-flex: 1 1 auto;
        -webkit-flex: 1 1 auto;
        flex: 1 1 auto;
        position: relative;
        padding: 0 12px;
        overflow: hidden;
        cursor: pointer;
        vertical-align: middle;
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
    }

    tp-yt-paper-tab.ytd-c4-tabbed-header-renderer {
        padding: 0 32px;
        vertical-align: middle;
        --paper-tab-ink: var(--yt-spec-paper-tab-ink);
    }

    ytd-expandable-tab-renderer {
        color: var(--yt-spec-text-secondary);
        display: flex;
        flex-direction: row;
        align-items: center;
        display: inline-flexbox;
        display: inline-flex;
    }

    [hidden] {
        display: none !important;
    }

    ytd-expandable-tab-renderer.ytd-c4-tabbed-header-renderer {
        padding: 0 24px;
        vertical-align: middle;
    }

    tp-yt-paper-tab.iron-selected.ytd-c4-tabbed-header-renderer {
        color: var(--yt-lightsource-primary-title-color);
    }

    dom-repeat {
        display: none;
    }

    .tp-yt-paper-tab[style-target="tab-content"] {
        height: 100%;
        transform: translateZ(0);
        -webkit-transform: translateZ(0);
        transition: opacity 0.1s cubic-bezier(0.4, 0, 1, 1);
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -ms-flex-direction: row;
        -webkit-flex-direction: row;
        flex-direction: row;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -ms-flex: 1 1 auto;
        -webkit-flex: 1 1 auto;
        flex: 1 1 auto;
    }

    tp-yt-paper-tab:not(.iron-selected) .tp-yt-paper-tab[style-target="tab-content"] {
        opacity: 1;
    }

    paper-ripple {
        display: block;
        position: absolute;
        border-radius: inherit;
        overflow: hidden;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
    }

    paper-ripple.tp-yt-paper-tab {
        color: var(--paper-tab-ink, #ffff8d);
    }

    yt-icon-button {
        display: inline-block;
        position: relative;
        width: 24px;
        height: 24px;
        box-sizing: border-box;
        font-size: 0;
    }

    yt-icon-button.ytd-expandable-tab-renderer {
        --yt-icon-button-icon-width: 24px;
        --yt-icon-button-icon-height: 24px;
        opacity: 0.8;
        width: 40px;
        height: 40px;
    }

    form {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    form.ytd-expandable-tab-renderer {
        margin-bottom: 0;
    }

    #background.paper-ripple {
        pointer-events: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
    }

    #waves.paper-ripple {
        pointer-events: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    button.yt-icon-button {
        vertical-align: middle;
        color: inherit;
        outline: none;
        background: none;
        margin: 0;
        border: none;
        padding: 0;
        width: 100%;
        height: 100%;
        line-height: 0;
        cursor: pointer;
        -webkit-tap-highlight-color: transparent;
    }

    yt-interaction {
        pointer-events: none;
        display: inline-block;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    tp-yt-paper-input {
        display: block;
    }

    tp-yt-paper-input.ytd-expandable-tab-renderer {
        --paper-input-container-color: var(--yt-spec-text-primary);
        --paper-input-container-input-color: var(--yt-spec-text-primary);
        --paper-input-container-focus-color: var(--yt-spec-text-primary);
        --paper-input-container-underline-height: 0;
        --paper-input-container-underline-border-bottom: 1px solid var(--yt-spec-text-primary);
        text-transform: none;
        margin-bottom: -2px;
        height: 40px;
        display: flex;
        align-items: center;
    }

    ytd-expandable-tab-renderer:not([show-input]) tp-yt-paper-input.ytd-expandable-tab-renderer {
        visibility: hidden;
    }

    yt-icon {
        display: inline-flexbox;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        position: relative;
        vertical-align: middle;
        fill: var(--iron-icon-fill-color, currentcolor);
        stroke: var(--iron-icon-stroke-color, none);
        width: var(--iron-icon-width, 24px);
        height: var(--iron-icon-height, 24px);
        -webkit-animation: var(--iron-icon-animation);
        animation: var(--iron-icon-animation);
        margin-top: var(--iron-icon-margin-top);
        margin-right: var(--iron-icon-margin-right);
        margin-bottom: var(--iron-icon-margin-bottom);
        margin-left: var(--iron-icon-margin-left);
        padding: var(--iron-icon-padding);
    }

    button.yt-icon-button>yt-icon {
        width: var(--yt-icon-button-icon-width, 100%);
        height: var(--yt-icon-button-icon-height, 100%);
    }

    .stroke.yt-interaction {
        will-change: opacity;
        border: 1px solid var(--yt-spec-touch-response);
        opacity: 0;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    yt-interaction.circular .stroke.yt-interaction {
        border-radius: 50%;
    }

    .fill.yt-interaction {
        will-change: opacity;
        background-color: var(--yt-spec-touch-response);
        opacity: 0;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    yt-interaction.circular .fill.yt-interaction {
        border-radius: 50%;
    }

    tp-yt-paper-input-container {
        display: block;
        padding: 8px 0;
    }

    .tp-yt-paper-input-container[hidden] {
        display: none !important;
    }

    .floated-label-placeholder.tp-yt-paper-input-container {
        display: var(--paper-input-container-floated-label-placeholder-display, block);
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 0.011em;
        line-height: 20px;
    }

    .input-wrapper.tp-yt-paper-input-container {
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -ms-flex-direction: row;
        -webkit-flex-direction: row;
        flex-direction: row;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        position: relative;
        flex: var(--paper-input-container-input-wrapper-flex);
        min-width: var(--paper-input-container-input-wrapper-min-width);
    }

    .underline.tp-yt-paper-input-container {
        height: var(--paper-input-container-underline-wrapper-height, 2px);
        position: relative;
    }

    .add-on-content.tp-yt-paper-input-container {
        position: relative;
    }

    span {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    .input-content.tp-yt-paper-input-container {
        -ms-flex: 1 1 auto;
        -webkit-flex: 1 1 auto;
        flex: 1 1 auto;
        position: relative;
        max-width: 100%;
    }

    .unfocused-line.tp-yt-paper-input-container {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: var(--paper-input-container-underline-background);
        border-bottom: var(--paper-input-container-underline-border-bottom, var(--paper-input-container-underline-height, 1px solid var(--paper-input-container-underline-color, var(--paper-input-container-color, var(--secondary-text-color)))));
        box-sizing: var(--paper-input-container-underline-box-sizing);
        display: var(--paper-input-container-underline-display, block);
        height: var(--paper-input-container-underline-height, var(--paper-input-container-underline-legacy-height));
    }

    .focused-line.tp-yt-paper-input-container {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        -webkit-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: scale3d(0, 1, 1);
        transform: scale3d(0, 1, 1);
        display: var(--paper-input-container-underline-focus-display, block);
        border-color: var(--paper-input-container-underline-focus-border-color);
        border-bottom: var(--paper-input-container-underline-focus-height, 2px) solid var(--paper-input-container-underline-focus-border-color, var(--paper-input-container-underline-focus-color, var(--paper-input-container-focus-color, var(--primary-color))));
    }

    label {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    label.tp-yt-paper-input {
        pointer-events: none;
    }

    #labelAndInputContainer.tp-yt-paper-input-container>label {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        font: inherit;
        color: var(--paper-input-container-color, var(--secondary-text-color));
        -webkit-transition: -webkit-transform 0.25s, width 0.25s;
        transition: transform 0.25s, width 0.25s;
        -webkit-transform-origin: left top;
        transform-origin: left top;
        min-height: 1px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
    }

    tp-yt-paper-input.ytd-expandable-tab-renderer #labelAndInputContainer.tp-yt-paper-input-container>label {
        padding: 4px 0;
        font-size: var(--ytd-user-comment-font-size);
        font-weight: var(--ytd-user-comment-font-weight);
        line-height: var(--ytd-user-comment-line-height);
        letter-spacing: var(--ytd-user-comment-letter-spacing);
        font-family: var(--ytd-user-comment-font-family);
        color: var(--ytd-user-comment-color);
    }

    iron-input {
        display: inline-block;
    }

    .input-content.tp-yt-paper-input-container>iron-input {
        position: relative;
        outline: none;
        box-shadow: none;
        padding: var(--paper-input-container-shared-input-style-padding, 0);
        margin: 0;
        width: var(--paper-input-container-shared-input-style-width, 100%);
        max-width: 100%;
        background: transparent;
        border: none;
        color: var(--paper-input-container-input-color, var(--primary-text-color));
        -webkit-appearance: none;
        text-align: inherit;
        vertical-align: var(--paper-input-container-input-align, bottom);
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        color: var(--paper-input-container-input-color, var(--primary-text-color));
    }

    tp-yt-paper-input.ytd-expandable-tab-renderer .input-content.tp-yt-paper-input-container>iron-input {
        padding: 4px 0;
        font-size: var(--ytd-user-comment-font-size);
        font-weight: var(--ytd-user-comment-font-weight);
        line-height: var(--ytd-user-comment-line-height);
        letter-spacing: var(--ytd-user-comment-letter-spacing);
        font-family: var(--ytd-user-comment-font-family);
        color: var(--ytd-user-comment-color, var(--paper-input-container-input-color));
    }

    input.tp-yt-paper-input {
        min-width: 0;
        -moz-appearance: var(--paper-input-input-moz-appearance) !important;
    }

    iron-input.tp-yt-paper-input>input.tp-yt-paper-input {
        position: relative;
        outline: none;
        box-shadow: none;
        padding: var(--paper-input-container-shared-input-style-padding, 0);
        margin: 0;
        width: var(--paper-input-container-shared-input-style-width, 100%);
        max-width: 100%;
        background: transparent;
        border: none;
        color: var(--paper-input-container-input-color, var(--primary-text-color));
        -webkit-appearance: none;
        text-align: inherit;
        vertical-align: var(--paper-input-container-input-align, bottom);
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: inherit;
        font-weight: inherit;
        line-height: inherit;
        font-family: inherit;
        letter-spacing: inherit;
        word-spacing: inherit;
        text-shadow: inherit;
        color: inherit;
        cursor: inherit;
    }


    /* These were inline style tags. Uses id+class to override almost everything */
    #left.style-fq6r1 {
        pointer-events: none;
    }

    #tabsContainer.style-PLN1j {
        touch-action: pan-y;
    }

    #selectionBar.style-DdNMt {
        width: 453px;
        transform: translateX(3.4155%) scaleX(0.175417);
    }

    #background.style-6phBC {
        opacity: 0.00816;
    }

    #background.style-wUM84 {
        opacity: 0;
    }

    #right.style-QBi7S {
        pointer-events: none;
    }

    div {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    ytd-watch-metadata {
        display: block;
        color: var(--yt-spec-text-primary);
    }

    ytd-watch-metadata.ytd-watch-flexy {
        margin-top: var(--ytd-margin-3x);
        margin-bottom: var(--ytd-margin-6x);
    }

    ytd-watch-flexy[cinematics-enabled] #below.ytd-watch-flexy {
        position: relative;
    }

    #primary.ytd-watch-flexy {
        padding-right: var(--ytd-margin-6x);
    }

    ytd-watch-flexy[flexy] #primary.ytd-watch-flexy {
        margin-left: var(--ytd-margin-6x);
        min-width: var(--ytd-watch-flexy-min-player-width);
        flex: 1;
        flex-basis: 0.000000001px;
    }

    ytd-watch-flexy[flexy][is-two-columns_][is-four-three-to-sixteen-nine-video_] #primary.ytd-watch-flexy {
        max-width: var(--ytd-watch-flexy-max-player-width);
        min-width: var(--ytd-watch-flexy-min-player-width);
    }

    ytd-watch-flexy:not([theater]):not([fullscreen]):not([no-top-margin]):not([reduced-top-margin]) #primary.ytd-watch-flexy {
        padding-top: var(--ytd-margin-6x);
    }

    #columns.ytd-watch-flexy {
        margin: 0 auto;
        display: flex;
        flex-direction: row;
    }

    ytd-watch-flexy[flexy] #columns.ytd-watch-flexy {
        max-width: calc(1280px + var(--ytd-watch-flexy-sidebar-width) + 3 * var(--ytd-margin-6x));
    }

    ytd-watch-flexy[flexy][is-two-columns_] #columns.ytd-watch-flexy {
        min-width: calc(var(--ytd-watch-flexy-min-player-height) * var(--ytd-watch-flexy-width-ratio)/var(--ytd-watch-flexy-height-ratio) + 3 * var(--ytd-margin-6x) + var(--ytd-watch-flexy-sidebar-min-width));
        justify-content: center;
    }

    ytd-watch-flexy {
        --ytd-watch-flexy-sidebar-width: 402px;
        --ytd-watch-flexy-sidebar-min-width: 300px;
        --ytd-watch-flexy-masthead-height: 56px;
        min-width: 0;
    }

    ytd-watch-flexy[flexy] {
        --ytd-watch-flexy-width-ratio: 16;
        --ytd-watch-flexy-height-ratio: 9;
        --ytd-watch-flexy-space-below-player: 136px;
        --ytd-watch-flexy-min-player-height: 240px;
        --ytd-watch-flexy-min-player-width: calc(var(--ytd-watch-flexy-min-player-height) * (var(--ytd-watch-flexy-width-ratio) / var(--ytd-watch-flexy-height-ratio)));
        --ytd-watch-flexy-max-player-width: calc((100vh - (var(--ytd-watch-flexy-masthead-height) + var(--ytd-margin-6x) + var(--ytd-watch-flexy-space-below-player))) * (var(--ytd-watch-flexy-width-ratio) / var(--ytd-watch-flexy-height-ratio)));
    }

    ytd-page-manager>.ytd-page-manager {
        flex: 1;
        flex-basis: 0.000000001px;
    }

    ytd-watch-flexy[flexy][flexy-enable-large-window-sizing][flexy-large-window_]:not([is-extra-wide-video_]) {
        --ytd-watch-flexy-min-player-height: 480px;
    }

    ytd-page-manager {
        display: block;
        overflow-y: auto;
        margin-top: var(--ytd-toolbar-height);
    }

    #page-manager.ytd-app {
        overflow-x: inherit;
        overflow-y: visible;
        margin-top: var(--ytd-masthead-height, var(--ytd-toolbar-height));
    }

    ytd-app:not([use-content-visibility]) #page-manager.ytd-app {
        display: flex;
        flex: 1;
        flex-basis: 0.000000001px;
    }

    ytd-app {
        background: var(--yt-spec-general-background-a);
        display: block;
        left: 0;
        min-height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        scrollbar-color: var(--yt-spec-text-secondary) transparent;
    }

    ytd-app[darker-dark-theme] {
        background: var(--yt-spec-base-background);
    }




    #top-row.ytd-watch-metadata {
        margin-top: -4px;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
    }

    .item.ytd-watch-metadata {
        box-sizing: border-box;
        min-width: 350px;
        margin-right: 12px;
        margin-top: 12px;
    }

    #owner.ytd-watch-metadata {
        display: flex;
        flex: 1;
        flex-basis: 0.000000001px;
        min-width: calc(50% - 6px);
        flex-basis: 0.000000001px;
        flex-direction: row;
        align-items: center;
    }

    #actions.ytd-watch-metadata {
        margin-right: 0;
        min-width: calc(50% - 6px);
        align-items: center;
        display: flex;
        flex-direction: row;
    }

    ytd-watch-metadata[flex-menu-enabled] #actions.ytd-watch-metadata {
        flex: 1 1 auto;
    }

    ytd-video-owner-renderer {
        display: flex;
        flex-direction: row;
    }

    ytd-video-owner-renderer[watch-metadata-refresh] {
        min-width: 0;
    }

    #actions-inner.ytd-watch-metadata {
        display: flex;
        flex-direction: column;
    }

    ytd-watch-metadata[flex-menu-enabled] #actions-inner.ytd-watch-metadata {
        width: 100%;
    }

    .yt-simple-endpoint {
        display: inline-block;
        cursor: pointer;
        text-decoration: none;
        color: var(--yt-endpoint-color, var(--yt-spec-text-primary));
    }

    .yt-simple-endpoint.ytd-video-owner-renderer {
        display: inline-block;
        cursor: pointer;
        text-decoration: none;
        color: var(--yt-endpoint-color, var(--yt-spec-text-primary));
    }

    .yt-simple-endpoint:hover {
        color: var(--yt-endpoint-hover-color, var(--yt-spec-text-primary));
        -webkit-text-decoration: var(--yt-endpoint-text-decoration, none);
        text-decoration: var(--yt-endpoint-text-decoration, none);
    }

    .yt-simple-endpoint.ytd-video-owner-renderer:hover {
        color: var(--yt-endpoint-hover-color, var(--yt-spec-text-primary));
        -webkit-text-decoration: var(--yt-endpoint-text-decoration, none);
        text-decoration: var(--yt-endpoint-text-decoration, none);
    }

    #upload-info.ytd-video-owner-renderer {
        flex: 1;
        flex-basis: 0.000000001px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    ytd-video-owner-renderer[watch-metadata-refresh] #upload-info.ytd-video-owner-renderer {
        margin-right: 24px;
        overflow: hidden;
    }

    [hidden] {
        display: none !important;
    }

    ytd-subscribe-button-renderer {
        display: flex;
        flex-direction: row;
    }

    yt-img-shadow {
        display: inline-block;
        opacity: 0;
        transition: opacity 0.2s;
        flex: none;
    }

    yt-img-shadow.no-transition {
        opacity: 1;
        transition: none;
    }

    yt-img-shadow[loaded] {
        opacity: 1;
    }

    #avatar.ytd-video-owner-renderer {
        margin-right: 12px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: transparent;
        overflow: hidden;
    }

    ytd-channel-name {
        z-index: 300;
        display: flex;
        align-self: flex-start;
    }

    #channel-name.ytd-video-owner-renderer {
        color: var(--yt-endpoint-color, var(--yt-spec-text-primary));
        display: flex;
        flex-direction: row;
        font-family: "Roboto", "Arial", sans-serif;
        font-size: 1.6rem;
        line-height: 2.2rem;
        font-weight: 500;
    }

    ytd-video-owner-renderer[watch-metadata-refresh] #channel-name.ytd-video-owner-renderer {
        max-width: 100%;
    }

    #owner-sub-count.ytd-video-owner-renderer {
        color: var(--yt-spec-text-secondary);
        margin-right: 4px;
        font-family: "Roboto", "Arial", sans-serif;

    }

    ytd-video-owner-renderer[watch-metadata-refresh] #owner-sub-count.ytd-video-owner-renderer {
        font-family: "Roboto", "Arial", sans-serif;
        font-size: 1.2rem;
        line-height: 1.8rem;
        font-weight: 400;
        overflow: hidden;
        display: box;
        max-height: 1.8rem;
        -webkit-line-clamp: 1;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
        white-space: normal;
    }

    yt-formatted-string:-webkit-scrollbar {
        width: var(--ytd-scrollbar-width);
    }

    yt-formatted-string:-webkit-scrollbar-thumb {
        height: 56px;
        background: var(--yt-spec-icon-disabled);
    }

    yt-smartimation.ytd-subscribe-button-renderer {
        max-width: 100%;
    }

    ytd-menu-renderer {
        display: flex;
        flex-direction: row;
    }

    ytd-menu-renderer[has-flexible-items] {
        width: 100%;
        max-height: var(--yt-icon-height);
        overflow-y: hidden;
        flex-wrap: wrap;
    }

    ytd-watch-metadata[flex-menu-enabled] #actions.ytd-watch-metadata ytd-menu-renderer.ytd-watch-metadata {
        justify-content: flex-end;
    }

    img {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    img.yt-img-shadow {
        display: block;
        margin-left: var(--yt-img-margin-left, auto);
        margin-right: var(--yt-img-margin-right, auto);
        max-height: var(--yt-img-max-height, none);
        max-width: var(--yt-img-max-width, 100%);
        border-radius: var(--yt-img-border-radius, none);
    }

    #container.ytd-channel-name {
        display: var(--ytd-channel-name-container-display, inline-block);
        overflow: hidden;
        max-width: 100%;
    }

    ytd-badge-supported-renderer {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    ytd-badge-supported-renderer.ytd-channel-name {
        display: var(--ytd-channel-name-badges-display, flex);
        margin-right: var(--ytd-channel-name-badges-margin-right);
    }

    yt-button-shape {
        display: flex;
        flex: 1;
        flex-basis: 0.000000001px;
    }

    yt-button-shape.ytd-subscribe-button-renderer {
        max-width: 100%;
        flex: none;
    }

    .top-level-buttons.ytd-menu-renderer {
        display: flex;
        flex-direction: row;
    }

    yt-icon-button {
        display: inline-block;
        position: relative;
        width: 24px;
        height: 24px;
        box-sizing: border-box;
        font-size: 0;
    }

    .ytd-menu-renderer[style-target="button"] {
        --yt-icon-button-icon-width: 24px;
        --yt-icon-button-icon-height: 24px;
        width: var(--yt-icon-width);
        height: var(--yt-icon-height);
    }

    #top-level-buttons-computed.ytd-menu-renderer:not(:empty)+#flexible-item-buttons.ytd-menu-renderer+#button.ytd-menu-renderer {
        margin-left: 8px;
    }

    yt-button-shape.ytd-menu-renderer {
        flex: none;
    }

    ytd-menu-renderer[has-items] yt-button-shape.ytd-menu-renderer {
        margin-left: 8px;
    }

    #text-container.ytd-channel-name {
        display: var(--ytd-channel-name-text-container-display, block);
    }

    tp-yt-paper-tooltip {
        display: block;
        position: absolute;
        outline: none;
        z-index: 1002;
        -moz-user-select: none;
        -ms-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        cursor: default;
    }

    tp-yt-paper-tooltip.ytd-channel-name {
        display: var(--yt-paper-tooltip-display);
    }

    .yt-spec-button-shape-next {
        position: relative;
        margin: 0;
        white-space: nowrap;
        min-width: 0;
        text-transform: none;
        font-family: "Roboto", "Arial", sans-serif;
        font-size: 14px;
        font-weight: 500;
        line-height: 18px;
        border: none;
        cursor: pointer;
        outline-width: 0;
        box-sizing: border-box;
        background: none;
        text-decoration: none;
        -webkit-tap-highlight-color: transparent;
        flex: 1;
        flex-basis: 0.000000001px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }

    .yt-spec-button-shape-next--size-m {
        padding: 0 16px;
        height: 36px;
        font-size: 14px;
        line-height: 36px;
        border-radius: 18px;
    }

    .yt-spec-button-shape-next--mono.yt-spec-button-shape-next--filled {
        color: var(--yt-spec-text-primary-inverse);
        background-color: var(--yt-spec-text-primary);
    }

    .yt-spec-button-shape-next--mono.yt-spec-button-shape-next--filled:hover {
        background-color: var(--yt-spec-mono-filled-hover);
        border-color: transparent;
    }

    ytd-segmented-like-dislike-button-renderer {
        display: flex;
    }

    ytd-button-renderer {
        display: inline-block;
    }

    ytd-menu-renderer:not([condensed]) .ytd-menu-renderer[button-renderer]+.ytd-menu-renderer[button-renderer] {
        margin-left: 8px;
    }

    ytd-download-button-renderer[is-hidden] {
        display: none;
    }

    #flexible-item-buttons.ytd-menu-renderer:not(:empty)>.ytd-menu-renderer[button-renderer] {
        margin-left: 8px;
    }

    ytd-menu-renderer:not([condensed]) .ytd-menu-renderer[button-renderer]+.ytd-menu-renderer[button-renderer],
    #flexible-item-buttons.ytd-menu-renderer:not(:empty)>.ytd-menu-renderer[button-renderer] {
        margin-left: 8px;
    }

    button.yt-icon-button {
        vertical-align: middle;
        color: inherit;
        outline: none;
        background: none;
        margin: 0;
        border: none;
        padding: 0;
        width: 100%;
        height: 100%;
        line-height: 0;
        cursor: pointer;
        -webkit-tap-highlight-color: transparent;
    }

    yt-interaction {
        pointer-events: none;
        display: inline-block;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .yt-spec-button-shape-next--icon-button {
        flex: none;
    }

    .yt-spec-button-shape-next--size-m.yt-spec-button-shape-next--icon-button {
        width: 36px;
        padding: 0;
    }

    .yt-spec-button-shape-next--mono.yt-spec-button-shape-next--tonal {
        color: var(--yt-spec-text-primary);
        background-color: var(--yt-spec-badge-chip-background);
    }

    .yt-spec-button-shape-next--mono.yt-spec-button-shape-next--tonal:hover {
        background-color: var(--yt-spec-mono-tonal-hover);
        border-color: transparent;
    }

    yt-formatted-string[ellipsis-truncate-styling] {
        display: block;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }

    yt-formatted-string[ellipsis-truncate-styling].complex-string {
        white-space: pre;
        display: flex;
        flex-direction: row;
    }

    #text.ytd-channel-name {
        display: var(--ytd-channel-name-text-display);
        -webkit-box-orient: vertical;
        -webkit-line-clamp: var(--ytd-channel-name-text-line-clamp, inherit);
        word-break: break-word;
        font-size: var(--ytd-channel-name-text-font-size);
        font-weight: var(--ytd-channel-name-text-font-weight);
        line-height: var(--ytd-channel-name-text-line-height);
    }

    #text.complex-string.ytd-channel-name {
        display: var(--ytd-channel-name-text-complex-display);
    }

    .hidden {
        display: none;
    }

    .tp-yt-paper-tooltip[style-target="tooltip"] {
        display: block;
        outline: none;
        font-family: "Roboto", "Noto", sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 10px;
        line-height: 1;
        background-color: var(--paper-tooltip-background, #616161);
        color: var(--paper-tooltip-text-color, white);
        padding: 8px;
        border-radius: 2px;
    }

    .hidden.tp-yt-paper-tooltip {
        display: none !important;
    }

    tp-yt-paper-tooltip .tp-yt-paper-tooltip[style-target="tooltip"] {
        margin: 8px;
        text-transform: none;
        word-break: normal;
        font-family: "Roboto", "Arial", sans-serif;
        font-size: 1.2rem;
        line-height: 1.8rem;
        font-weight: 400;
    }

    body[rounded-container] tp-yt-paper-tooltip .tp-yt-paper-tooltip[style-target="tooltip"] {
        border-radius: 4px;
    }

    .yt-spec-button-shape-next--button-text-content {
        text-overflow: ellipsis;
        overflow: hidden;
    }

    yt-icon {
        display: inline-flexbox;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        position: relative;
        vertical-align: middle;
        fill: var(--iron-icon-fill-color, currentcolor);
        stroke: var(--iron-icon-stroke-color, none);
        width: var(--iron-icon-width, 24px);
        height: var(--iron-icon-height, 24px);
        -webkit-animation: var(--iron-icon-animation);
        animation: var(--iron-icon-animation);
        margin-top: var(--iron-icon-margin-top);
        margin-right: var(--iron-icon-margin-right);
        margin-bottom: var(--iron-icon-margin-bottom);
        margin-left: var(--iron-icon-margin-left);
        padding: var(--iron-icon-padding);
    }

    button.yt-icon-button>yt-icon {
        width: var(--yt-icon-button-icon-width, 100%);
        height: var(--yt-icon-button-icon-height, 100%);
    }

    #button.ytd-menu-renderer yt-icon.ytd-menu-renderer {
        color: var(--ytd-menu-renderer-button-color, var(--yt-spec-icon-inactive));
    }

    .stroke.yt-interaction {
        will-change: opacity;
        border: 1px solid var(--yt-spec-touch-response);
        opacity: 0;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    yt-interaction.circular .stroke.yt-interaction {
        border-radius: 50%;
    }

    .fill.yt-interaction {
        will-change: opacity;
        background-color: var(--yt-spec-touch-response);
        opacity: 0;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    yt-interaction.circular .fill.yt-interaction {
        border-radius: 50%;
    }

    .yt-spec-button-shape-next__icon {
        line-height: 0;
        fill: currentColor;
    }

    .yt-spec-button-shape-next--size-m .yt-spec-button-shape-next__icon {
        width: 24px;
        height: 24px;
    }

    a.yt-formatted-string {
        color: var(--yt-spec-call-to-action);
    }

    a.yt-simple-endpoint.yt-formatted-string {
        color: var(--yt-endpoint-color, var(--yt-spec-call-to-action));
        display: var(--yt-endpoint-display, inline-block);
        -webkit-text-decoration: var(--yt-endpoint-text-regular-decoration, none);
        text-decoration: var(--yt-endpoint-text-regular-decoration, none);
        word-wrap: var(--yt-endpoint-word-wrap, none);
        word-break: var(--yt-endpoint-word-break, none);
    }

    yt-formatted-string[ellipsis-truncate-styling] a.yt-formatted-string {
        display: block;
        margin-right: -0.1em;
        padding-right: 0.1em;
        white-space: pre;
    }

    yt-formatted-string[ellipsis-truncate-styling] a.yt-formatted-string:last-child {
        overflow: hidden;
        text-overflow: ellipsis;
    }

    yt-formatted-string[has-link-only_]:not([force-default-style]) a.yt-simple-endpoint.yt-formatted-string {
        color: var(--yt-endpoint-color, var(--yt-spec-text-primary));
    }

    a.yt-simple-endpoint.yt-formatted-string:hover {
        color: var(--yt-endpoint-hover-color, var(--yt-spec-call-to-action));
        -webkit-text-decoration: var(--yt-endpoint-text-decoration, none);
        text-decoration: var(--yt-endpoint-text-decoration, none);
    }

    yt-formatted-string[has-link-only_]:not([force-default-style]) a.yt-simple-endpoint.yt-formatted-string:hover {
        color: var(--yt-endpoint-hover-color, var(--yt-spec-text-primary));
    }

    span {
        margin: 0;
        padding: 0;
        border: 0;
        background: transparent;
    }

    .yt-core-attributed-string--white-space-no-wrap {
        white-space: nowrap;
    }

    .yt-spec-touch-feedback-shape {
        display: inline-block;
        border-radius: inherit;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    ytd-toggle-button-renderer {
        display: inline-block;
        vertical-align: middle;
        font-size: var(--ytd-tab-system-font-size);
        font-weight: var(--ytd-tab-system-font-weight);
        letter-spacing: var(--ytd-tab-system-letter-spacing);
        text-transform: var(--ytd-tab-system-text-transform);
    }

    ytd-toggle-button-renderer:not([button-next]) {
        display: inline-block;
        text-transform: uppercase;
    }

    .yt-spec-touch-feedback-shape__stroke {
        will-change: opacity;
        opacity: 0;
        border-radius: inherit;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .yt-spec-touch-feedback-shape--touch-response-inverse .yt-spec-touch-feedback-shape__stroke {
        border: 1px solid var(--yt-spec-touch-response-inverse);
    }

    .yt-spec-touch-feedback-shape__fill {
        will-change: opacity;
        opacity: 0;
        border-radius: inherit;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .yt-spec-touch-feedback-shape--touch-response-inverse .yt-spec-touch-feedback-shape__fill {
        background-color: var(--yt-spec-touch-response-inverse);
    }

    .yt-spec-button-shape-next--size-m.yt-spec-button-shape-next--icon-leading-trailing .yt-spec-button-shape-next__icon {
        margin-right: 6px;
        margin-left: -6px;
    }

    .yt-spec-button-shape-next__secondary-icon {
        line-height: 0;
        fill: currentColor;
    }

    .yt-spec-button-shape-next--size-m.yt-spec-button-shape-next--icon-leading-trailing .yt-spec-button-shape-next__secondary-icon {
        margin-left: 6px;
        margin-right: -6px;
    }

    .yt-spec-button-shape-next--size-m.yt-spec-button-shape-next--icon-leading .yt-spec-button-shape-next__icon {
        margin-right: 6px;
        margin-left: -6px;
    }

    .yt-spec-touch-feedback-shape--touch-response .yt-spec-touch-feedback-shape__stroke {
        border: 1px solid var(--yt-spec-touch-response);
    }

    .yt-spec-touch-feedback-shape--touch-response .yt-spec-touch-feedback-shape__fill {
        background-color: var(--yt-spec-touch-response);
    }

    .yt-spec-button-shape-next--size-m.yt-spec-button-shape-next--segmented-start {
        border-radius: 18px 0 0 18px;
        position: relative;
    }

    .yt-spec-button-shape-next--size-m.yt-spec-button-shape-next--segmented-start:after {
        content: "";
        background: var(--yt-spec-10-percent-layer);
        position: absolute;
        right: 0;
        top: 6px;
        height: 24px;
        width: 1px;
    }

    .yt-spec-button-shape-next--size-m.yt-spec-button-shape-next--segmented-end {
        border-radius: 0 18px 18px 0;
    }

    .yt-spec-button-shape-next--size-m.yt-spec-button-shape-next--icon-button.yt-spec-button-shape-next--segmented-end {
        padding: 0 16px;
        width: 52px;
    }

    .yt-spec-button-shape-next--size-m.yt-spec-button-shape-next--icon-button.yt-spec-button-shape-next--segmented-end .yt-spec-button-shape-next__icon {
        margin-left: -6px;
    }

    yt-animated-icon {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    ytd-lottie-player {
        display: block;
    }

    yt-animated-icon[animated-icon-type="LIKE"] ytd-lottie-player.yt-animated-icon {
        position: absolute;
        height: 62px;
        width: 62px;
        top: -18px;
    }

    .lottie-component {
        display: block;
    }


    /* These were inline style tags. Uses id+class to override almost everything */
    #avatar.style-oRzbr {
        background-color: transparent;
    }

    #style-OodnQ.style-OodnQ {}

    #style-jI9g2.style-jI9g2 {
        border-radius: inherit;
    }

    #style-EzHpd.style-EzHpd {}

    #style-yhVGc.style-yhVGc {}

    #style-FDeto.style-FDeto {}

    #style-TTmOL.style-TTmOL {
        width: 24px;
        height: 24px;
    }

    #style-ZgfDB.style-ZgfDB {
        width: 24px;
        height: 24px;
    }

    #style-jFHFU.style-jFHFU {
        border-radius: inherit;
    }

    #style-HiW8I.style-HiW8I {}

    #style-oIF9b.style-oIF9b {}

    #style-kTvf4.style-kTvf4 {}

    #style-mrGhA.style-mrGhA {
        width: 24px;
        height: 24px;
    }

    #style-qfHyH.style-qfHyH {
        display: none;
    }

    #style-Er2Vr.style-Er2Vr {
        display: none;
    }

    #style-i5DSN.style-i5DSN {
        display: none;
    }

    #style-q1x52.style-q1x52 {
        display: none;
    }

    #style-fLyjO.style-fLyjO {
        display: none;
    }

    #style-9FJNX.style-9FJNX {
        display: none;
    }

    #style-5jMLt.style-5jMLt {
        display: none;
    }

    #style-Bk5O1.style-Bk5O1 {
        display: none;
    }

    #style-QoAKo.style-QoAKo {
        display: none;
    }

    #style-sApd6.style-sApd6 {
        display: none;
    }

    #style-oxtPS.style-oxtPS {
        display: none;
    }

    #style-Omq33.style-Omq33 {
        display: block;
    }

    #style-k4rv1.style-k4rv1 {
        display: none;
    }

    #style-ktAHQ.style-ktAHQ {
        display: block;
    }

    #style-rh9o9.style-rh9o9 {
        display: none;
    }

    #style-WkWcg.style-WkWcg {
        display: block;
    }

    #style-sJPOz.style-sJPOz {
        border-radius: inherit;
    }

    #style-WXZYF.style-WXZYF {}

    #style-hES7I.style-hES7I {}

    #style-QQgZh.style-QQgZh {
        inset: 83.5px auto auto 599.664px;
    }

    #style-milm1.style-milm1 {}

    #style-hD9dO.style-hD9dO {
        width: 24px;
        height: 24px;
    }

    #style-ZPpbK.style-ZPpbK {
        border-radius: inherit;
    }

    #style-s53wU.style-s53wU {}

    #style-gsk9r.style-gsk9r {}

    #style-h5tZF.style-h5tZF {
        inset: 83.5px auto auto 644.969px;
    }

    #style-klbg6.style-klbg6 {}

    #style-2Levx.style-2Levx {
        width: 24px;
        height: 24px;
    }

    #style-84rEp.style-84rEp {
        border-radius: inherit;
    }

    #style-yO9s5.style-yO9s5 {}

    #style-MKkFH.style-MKkFH {}

    #style-roBep.style-roBep {}

    #style-iMyph.style-iMyph {
        width: 24px;
        height: 24px;
    }

    #style-UADgx.style-UADgx {
        border-radius: inherit;
    }

    #style-NRPos.style-NRPos {}

    #style-Z9hEz.style-Z9hEz {}

    #style-GKKaE.style-GKKaE {}

    #style-Bo2S6.style-Bo2S6 {
        width: 24px;
        height: 24px;
    }

    #style-TiGsh.style-TiGsh {
        border-radius: inherit;
    }

    #style-HAs52.style-HAs52 {}

    #style-G4F1h.style-G4F1h {}

    #style-8l8Rz.style-8l8Rz {}

    #style-QW6JW.style-QW6JW {
        width: 24px;
        height: 24px;
    }

    #style-b45qW.style-b45qW {
        border-radius: inherit;
    }

    #style-2Ukhx.style-2Ukhx {}

    #style-yLeOT.style-yLeOT {}

    .vGvPJe {
        align-items: center;
        flex-direction: row;
        box-sizing: border-box;
        display: flex;
        flex: 0 0 auto;
        border-radius: 8px;
        overflow: hidden;
    }

    .NqpkQc {
        background-color: rgba(0, 0, 0, 0.03);
        height: 100%;
        left: 0;
        pointer-events: none;
        position: absolute;
        top: 0;
        width: 100%;
    }

    .i5w0Le {
        color: #fff;
        left: 50%;
        opacity: 0.87;
        position: absolute;
        top: 46%;
        transform: translate(-50%, -50%);
    }

    .BQavlc {
        background-color: rgba(0, 0, 0, .54);
        border-radius: 4px;
        color: #fff;
        height: 14px;
        line-height: 14px;
        padding: 2px;
        position: absolute;
        width: 14px;
    }

    .BQavlc.w2wy2 {
        top: 8px;
        right: 8px;
    }

    .ZWiQ5 {
        bottom: 0;
        display: flex;
        flex-direction: column;
        left: 0;
        position: absolute;
        width: 100%;
    }

    .uOId3b {
        display: flex;
        align-items: start;
    }

    .X5OiLe:hover .uOId3b {
        text-decoration: underline;
    }

    .FzCfme {
        color: #70757a;
        margin-top: 0;
    }

    li {
        margin: 0;
        padding: 0;
    }

    ol li {
        list-style: none;
    }

    .z1asCe {
        display: inline-block;
        fill: currentColor;
        height: 24px;
        line-height: 24px;
        position: relative;
        width: 24px;
    }

    .lR1utd {
        display: flex;
        margin-bottom: 6px;
        position: relative;
        width: 100%;
        height: 18px;
    }

    .OSrXXb {
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .ynAwRc {
        color: #1a0dab;
    }

    .fc9yUc {
        display: flex;
        flex-wrap: nowrap;
    }

    .tNxQIb {
        font-family: arial, sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
    }

    .pcJO7e {
        display: block;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-size: 14px;
        line-height: 22px;
    }

    .hMJ0yc {
        color: #70757a;
        font-size: 14px;
    }

    .q9yZOe {
        width: 100%;
        height: 100%;
        display: inline-flex;
        flex-direction: column;
        border-right: 1px solid #dadce0;
    }

    .z1asCe svg {
        display: block;
        height: 100%;
        width: 100%;
    }

    .BQavlc.w2wy2 svg {
        transform: rotate(45deg);
    }

    .R4Cuhd {
        bottom: 0;
        display: flex;
        flex: 1;
        height: 16px;
        left: 8px;
        position: absolute;
    }

    .cHaqb {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    cite {
        color: #4d5156;
        font-style: normal;
    }

    .pcJO7e cite {
        font-size: 14px;
        line-height: 22px;
    }

    .V8fWH {
        border: 0;
        clip: rect(0 0 0 0);
        -webkit-clip-path: polygon(0 0, 0 0, 0 0);
        clip-path: polygon(0 0, 0 0, 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
        white-space: nowrap;
        -webkit-appearance: none;
        appearance: none;
        z-index: -1000;
        -webkit-user-select: none;
        user-select: none;
    }

    .J1mWY {
        background-color: rgba(0, 0, 0, .54);
        border-radius: 8px;
        color: #fff;
        font-family: arial, sans-serif-medium, sans-serif;
        font-size: 12px;
        line-height: 14px;
        padding: 1px 8px;
        text-align: center;
    }


    /* These were inline style tags. Uses id+class to override almost everything */
    #style-o1LZl.style-o1LZl {
        border-radius: 8px;
    }

    #style-J4Lnt.style-J4Lnt {
        height: 35px;
        line-height: 35px;
        width: 35px;
    }

    #style-BrwYe.style-BrwYe {
        height: 14px;
        line-height: 14px;
        width: 14px;
    }

    #style-rRkDQ.style-rRkDQ {
        bottom: 0px;
        margin-left: 9px;
    }

    .RzdJxc {
        border-top: 1px solid #ecedef;
        position: relative;
    }

    .e4xoPb {
        position: relative;
        padding-bottom: 0;
    }

    .uVMCKf {
        overflow: visible;
        box-shadow: none;
        border: none;
        margin-top: 0;
        margin-bottom: 46px;
    }

    div.ULSxyf:first-of-type .uVMCKf {
        margin-top: 11px;
    }

    .ULSxyf {
        margin-bottom: 44px;
    }

    .v7W49e {
        margin-top: 6px;
    }

    .eqAnXb {
        font-size: medium;
        font-weight: normal;
    }

    .s6JM6d {
        width: var(--center-width);
        position: relative;
        margin-left: var(--center-abs-margin);
        flex: 0 auto;
    }

    .GyAeWb {
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
        max-width: calc(var(--center-abs-margin) + var(--center-width) + var(--rhs-margin) + var(--rhs-width));
    }

    .e9EfHf {
        font-family: arial, sans-serif;
        clear: both;
        margin-left: 0;
        padding-top: 20px;
        box-sizing: border-box;
        position: relative;
        min-height: 100vh;
    }

    .main {
        min-width: calc(var(--center-abs-margin) + var(--center-width) + var(--rhs-margin) + var(--rhs-width));
        width: 100%;
    }

    body {
        font-family: arial, sans-serif;
        font-size: 14px;
        margin: 0;
        background: #fff;
        color: #202124;
    }

    .srp {
        --center-abs-margin: 180px;
        --center-width: 652px;
        --rhs-margin: 76px;
        --rhs-width: 372px;
    }

    @media (min-width: 1675px) {
        .srp {
            --center-abs-margin: 230px;
        }
    }

    html {
        font-family: arial, sans-serif;
    }

    g-scrolling-carousel {
        display: block;
        position: relative;
    }

    .Lzivkf {
        padding-bottom: 12px;
        position: relative;
    }

    .mR2gOd {
        display: block;
        overflow-x: auto;
        overflow-y: hidden;
        position: relative;
        white-space: nowrap;
        transform: translate3d(0, 0, 0);
    }

    .mR2gOd:-webkit-scrollbar {
        display: none;
    }

    .DAVP1 {
        display: inline-block;
    }

    .OZ5bRd {
        margin-bottom: auto;
        margin-top: auto;
    }

    .wgbRNb {
        cursor: pointer;
        height: 72px;
        position: absolute;
        display: block;
        visibility: inherit;
        width: 36px;
        bottom: 0;
        opacity: 0.8;
        top: 0;
        z-index: 101;
    }

    g-left-button {
        margin-top: 30px;
    }

    .wgbRNb.tHT0l {
        -webkit-transition: opacity 0.5s, visibility 0.5s;
        transition: opacity 0.5s, visibility 0.5s;
    }

    .wgbRNb.pQXcHc {
        cursor: default;
        opacity: 0;
        visibility: hidden;
    }

    .wgbRNb.T9Wh5 {
        height: 36px;
        width: 36px;
        opacity: 1;
    }

    .bCwlI.T9Wh5 {
        left: -18px;
    }

    .wgbRNb.T9Wh5.pQXcHc {
        opacity: 0;
    }

    g-right-button {
        margin-top: 30px;
    }

    .VdehBf.T9Wh5 {
        right: -18px;
    }

    ol {
        margin: 0;
        padding: 0;
    }

    .bc7Xde {
        border-radius: 8px;
        display: flex;
        margin-bottom: 4px;
        box-shadow: none;
    }

    .OvQkSb {
        border-radius: 999rem;
    }

    .CNf3nf {
        cursor: pointer;
        display: block;
        position: relative;
        border: 1px solid #dadce0;
        z-index: 0;
    }

    .LhCR5d {
        width: 40px;
        height: 40px;
    }

    .bCwlI.T9Wh5 g-fab {
        cursor: pointer;
        height: 36px;
        width: 36px;
    }

    .VdehBf.T9Wh5 g-fab {
        cursor: pointer;
        height: 36px;
        width: 36px;
    }

    li {
        margin: 0;
        padding: 0;
    }

    ol li {
        list-style: none;
    }

    .z1asCe {
        display: inline-block;
        fill: currentColor;
        height: 24px;
        line-height: 24px;
        position: relative;
        width: 24px;
    }

    .S3PB2d {
        margin: auto;
    }

    .CNf3nf .PUDfGe {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        width: 24px;
        height: 24px;
    }


    .q9yZOe {
        width: 100%;
        height: 100%;
        display: inline-flex;
        flex-direction: column;
        border-right: 1px solid #dadce0;
    }

    html:not(.zAoYTe) [href] {
        outline: 0;
    }

    a:hover {
        text-decoration: underline;
    }

    .z1asCe svg {
        display: block;
        height: 100%;
        width: 100%;
    }

    .k8E1vb {
        border-radius: 8px;
        background-color: #dadce0;
        margin-bottom: 12px;

        height: 67px;
    }

    .oLJ4Uc {
        overflow: hidden;
    }

    .fYFvJb {
        display: grid;
        gap: 6px;
    }

    .IOZdEc {
        height: 100%;
    }

    .mNbAre {
        object-fit: cover;
    }

    .oLJ4Uc img {
        width: 100%;
        display: block;
    }

    .tVRLD {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        font-family: arial, sans-serif;
        font-size: 14px;
        line-height: 18px;
        white-space: normal;
        color: #1a0dab;
    }

    .paD5uf {
        white-space: normal;
        width: 100%;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        line-height: 18px;
        max-height: 54px;
        font-family: arial, sans-serif;
        font-size: 14px;
        margin-top: 0;
        word-break: break-word;
        color: #3c4043;
    }


    /* These were inline style tags. Uses id+class to override almost everything */
    #_qXdVZJqbOJv-7_UPmvOKsAk_32.style-4V3fk {
        padding-top: 16px;
    }

    #style-ebBB1.style-ebBB1 {
        overflow-x: auto;
    }

    #style-JxznW.style-JxznW {
        border: none;
        width: 120px;
        padding-right: 12px;
        opacity: 1;
    }

    #style-ST9Kp.style-ST9Kp {
        height: 67px;
    }

    #style-N3U2Y.style-N3U2Y {
        border: none;
        width: 120px;
        padding-right: 12px;
        opacity: 1;
    }

    #style-VodIa.style-VodIa {
        height: 67px;
    }

    #style-oQd4Z.style-oQd4Z {
        border: none;
        width: 120px;
        padding-right: 12px;
        opacity: 1;
    }

    #style-WCyVT.style-WCyVT {
        height: 67px;
    }

    #style-d2o4t.style-d2o4t {
        border: none;
        width: 120px;
        padding-right: 12px;
        opacity: 1;
    }

    #style-Vc5bZ.style-Vc5bZ {
        height: 67px;
    }

    #style-VIP4d.style-VIP4d {
        border: none;
        width: 120px;
        padding-right: 12px;
        opacity: 1;
    }

    #style-Vz5nw.style-Vz5nw {
        height: 67px;
    }

    #tsuid_42.style-vgVaC {
        border: none;
        width: 84px;
        padding-right: 12px;
        opacity: 0.2;
    }

    #style-mUegq.style-mUegq {
        height: 67px;
    }

    #tsuid_44.style-BmsIp {
        border: none;
        width: 120px;
        padding-right: 12px;
        opacity: 0.2;
    }

    #style-yXWHo.style-yXWHo {
        height: 67px;
    }

    #tsuid_46.style-1tHDT {
        border: none;
        width: 120px;
        opacity: 0.2;
    }

    #style-oQDnA.style-oQDnA {
        height: 67px;
    }

    #style-8ooMt.style-8ooMt {
        top: 0px;
    }

    #style-99EVz.style-99EVz {
        background-color: #fff;
        color: #70757a;
    }

    #style-Afhhy.style-Afhhy {
        top: 0px;
    }

    #style-2ycaN.style-2ycaN {
        background-color: #fff;
        color: #70757a;
    }
</style>

<div class="row">

    <div class="col-lg-6">
        <img src="/assets/default/img/arrow-left.png" id="scroll-left" style="position: absolute; left: 15px; cursor:pointer;    margin-top: 12px;" />

        <div id="navbar22" class="nav-scroll">
            <ul class="nav nav-pills scrollmenu">
                <div class="scrollmenu">
              
               
                    @foreach($Manuels as $manuel)
               
                    <li class="nav-item ">
                        <a class="nav-link {{ $manuel->id ==  $id  ? 'active' : '' }}" href="/panel/scolaire/teacher/{{$manuel->id}}icon=1&page=6">{{$manuel->matiere->section->level->name}} {{$manuel->matiere->name}} </a>
                    </li>
                    @endforeach

                </div>
                <!-- Add more categories as needed -->
            </ul>
        </div>
        <img src="/assets/default/img/arrow-right.png" id="scroll-right" style="position: absolute;right: 19px; margin-top: -41px; cursor:pointer!important;" />

        <div style="padding:10px">
            <object data="{{asset($pdfPath)}}#toolbar=0&page=6" type="application/pdf" width="100%" height="880px">
                <p>Unable to display PDF file. <a href="{{$pdfPath}}">Download</a> instead.</p>
            </object>
        </div>

    </div>
    <div class="col-lg-6">

        <div id="tabs-inner-container" class="style-scope ytd-c4-tabbed-header-renderer">
            <div id="tabs-divider" class="style-scope ytd-c4-tabbed-header-renderer">
            </div>

        </div>

        <div class="row">
            <br><br>
            <div class="wrapper style-scope ytcp-primary-action-bar snipcss-hpfx5">
                <div class="primary style-scope ytcp-primary-action-bar">
                    <tp-yt-paper-tabs class="style-scope ytcp-primary-action-bar" scrollable="" role="tablist" tabindex="0">
                        <tp-yt-paper-icon-button id="left" icon="paper-tabs:chevron-left" tabindex="-1" class="hidden style-scope tp-yt-paper-tabs style-V8kiH" aria-hidden="true" role="button" style-target="host" aria-disabled="true" aria-label="" disabled="">
                            <tp-yt-iron-icon id="icon" class="style-scope tp-yt-paper-icon-button" alt="">
                                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope tp-yt-iron-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                                    <g class="style-scope tp-yt-iron-icon">
                                        <path d="M14.6,18.4L8.3,12l6.4-6.4l0.7,0.7L9.7,12l5.6,5.6L14.6,18.4z" class="style-scope tp-yt-iron-icon">
                                        </path>
                                    </g>
                                </svg>
                            </tp-yt-iron-icon>
                        </tp-yt-paper-icon-button>
                        <div id="tabsContainer" class="style-scope tp-yt-paper-tabs style-iYFIZ">
                            <div id="tabsContent" style-target="content" class="tabs-content scrollable style-scope tp-yt-paper-tabs">
                                <div id="selectionBar" style-target="selection-bar" class="selection-bar style-scope tp-yt-paper-tabs style-jhFQZ">
                                </div>
                                <tp-yt-paper-tab slot="tabs" noboldonfocus="" class="style-scope yta-screen iron-selected" id="overview" role="tab" style-target="host" aria-disabled="false" aria-selected="true" tabindex="0" focused="">
                                    <div class="tab-content style-scope tp-yt-paper-tab" style-target="tab-content">
                                        <ytcp-ve track-click="" class=" style-scope yta-screen style-scope yta-screen" role="none">
                                            Dashboard
                                        </ytcp-ve>
                                    </div>
                                    <paper-ripple class="style-scope tp-yt-paper-tab">
                                        <div id="background" class="style-scope paper-ripple style-IwBzV">
                                        </div>
                                        <div id="waves" class="style-scope paper-ripple">
                                        </div>
                                    </paper-ripple>
                                </tp-yt-paper-tab>
                                <tp-yt-paper-tab slot="tabs" noboldonfocus="" class="style-scope yta-screen" id="content" role="tab" style-target="host" aria-disabled="false" tabindex="-1" aria-selected="false">
                                    <div class="tab-content style-scope tp-yt-paper-tab" style-target="tab-content">
                                        <ytcp-ve track-click="" class=" style-scope yta-screen style-scope yta-screen" role="none">
                                            <a href="/panel/scolaire/icon/view/teacher/{{$id}}?icon=1&page=6">My chaine</a>
                                        </ytcp-ve>
                                    </div>
                                    <paper-ripple class="style-scope tp-yt-paper-tab">
                                        <div id="background" class="style-scope paper-ripple style-65Nra">
                                        </div>
                                        <div id="waves" class="style-scope paper-ripple">
                                        </div>
                                    </paper-ripple>
                                </tp-yt-paper-tab>


                                <dom-repeat as="tab" class="style-scope ytcp-primary-action-bar">
                                </dom-repeat>
                            </div>
                        </div>
                        <tp-yt-paper-icon-button id="right" icon="paper-tabs:chevron-right" tabindex="-1" class="hidden style-scope tp-yt-paper-tabs style-hyyRU" aria-hidden="true" role="button" style-target="host" aria-disabled="true" aria-label="" disabled="">
                            <tp-yt-iron-icon id="icon" class="style-scope tp-yt-paper-icon-button" alt="">
                                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope tp-yt-iron-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                                    <g class="style-scope tp-yt-iron-icon">
                                        <path d="M9.4,18.4l-0.7-0.7l5.6-5.6L8.6,6.4l0.7-0.7l6.4,6.4L9.4,18.4z" class="style-scope tp-yt-iron-icon">
                                        </path>
                                    </g>
                                </svg>
                            </tp-yt-iron-icon>
                        </tp-yt-paper-icon-button>
                    </tp-yt-paper-tabs>
                    <dom-if restamp="" class="style-scope ytcp-primary-action-bar">
                    </dom-if>
                </div>
                <br><br><br>
                <yta-time-picker id="yta-time-picker" slot="secondary" class="style-scope yta-screen style-T8fmH">
                    <dom-if restamp="" class="style-scope yta-time-picker">
                    </dom-if>
                    <ytcp-select id="picker" borderless="" track-click="" class="style-scope yta-time-picker">
                        <ytcp-text-dropdown-trigger id="trigger" class="style-scope ytcp-select" aria-required="false">
                            <ytcp-dropdown-trigger class=" has-label style-scope ytcp-text-dropdown-trigger style-scope ytcp-text-dropdown-trigger" tabindex="0">
                                <iron-a11y-keys keys="enter" class="style-scope ytcp-dropdown-trigger">
                                </iron-a11y-keys>
                                <div class="has-label borderless container style-scope ytcp-dropdown-trigger style-scope ytcp-dropdown-trigger">
                                    <dom-if restamp="" class="style-scope ytcp-dropdown-trigger">
                                    </dom-if>
                                    <div class="color-marker style-scope ytcp-dropdown-trigger style-mrCOX" id="style-mrCOX">
                                    </div>
                                    <dom-if restamp="" class="style-scope ytcp-dropdown-trigger">
                                    </dom-if>
                                    <div class="left-container style-scope ytcp-dropdown-trigger">
                                        <div class="label-area style-scope ytcp-dropdown-trigger">
                                            <div class="label-text style-scope ytcp-dropdown-trigger">
                                                23 juin – 20 juil. 2023
                                            </div>
                                            <dom-if restamp="" class="style-scope ytcp-dropdown-trigger">
                                            </dom-if>
                                        </div>
                                        <dom-if restamp="" class="style-scope ytcp-dropdown-trigger">
                                        </dom-if>
                                        <span class="dropdown-trigger-text style-scope ytcp-text-dropdown-trigger">
                                            28&nbsp;derniers jours
                                        </span>
                                    </div>
                                    <div class="right-container style-scope ytcp-dropdown-trigger">
                                        <tp-yt-iron-icon class="style-scope ytcp-dropdown-trigger">
                                            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope tp-yt-iron-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                                                <g class="style-scope tp-yt-iron-icon">
                                                    <path d="M18,9l-6,6L6,9H18z" class="style-scope tp-yt-iron-icon">
                                                    </path>
                                                </g>
                                            </svg>
                                        </tp-yt-iron-icon>
                                    </div>
                                    <dom-if class="style-scope ytcp-dropdown-trigger">
                                    </dom-if>
                                    <paper-ripple class="style-scope ytcp-dropdown-trigger">
                                        <div id="background" class="style-scope paper-ripple style-slbpA">
                                        </div>
                                        <div id="waves" class="style-scope paper-ripple">
                                        </div>
                                    </paper-ripple>
                                    <dom-if class="style-scope ytcp-dropdown-trigger">
                                    </dom-if>
                                </div>
                                <dom-if class="style-scope ytcp-dropdown-trigger">
                                </dom-if>
                            </ytcp-dropdown-trigger>
                        </ytcp-text-dropdown-trigger>
                    </ytcp-select>
                    <dom-if restamp="" class="style-scope yta-time-picker">
                    </dom-if>
                    <dom-if restamp="" class="style-scope yta-time-picker">
                    </dom-if>
                </yta-time-picker>
            </div>

            <ytcp-ve class="style-scope yta-personalized-overview-header">
                <div id="title" class="style-scope yta-personalized-overview-header">
                    Your video capsules have not recorded any views in the last 28&nbsp;days.
                </div>
            </ytcp-ve>
            <div class="row">
                <div class="col-3 col-lg-3 mt-35">
                    <a href="" class="dashboard-stats rounded-sm panel-shadow p-10 p-md-20 d-flex align-items-center" style="width: 218px;">
                        <div class="stat-icon requests">
                            <img src="/assets/default/img/icons/request.svg" alt="">
                        </div>
                        <div class="d-flex flex-column ml-15">
                            <span class="font-30 text-secondary">Videos</span>
                            <span class="font-16 text-gray font-weight-500">{{$video1}}</span>
                        </div>
                    </a>
                </div>
                <div class="col-3 col-lg-3" style="    MARGIN-LEFT: 50px;">
                    <a href="" class="dashboard-stats rounded-sm panel-shadow p-30 p-md-20 d-flex align-items-center mt-15 mt-md-30" style="width: 218px;">
                        <div class="stat-icon monthly-sales">
                            <img src="/assets/default/img/icons/play.svg" alt="">
                        </div>
                        <div class="d-flex flex-column ml-15">
                            <span class="font-30 text-secondary">Vues</span>
                            <span class="font-16 text-gray font-weight-500">{{$vue}}</span>
                        </div>
                    </a>
                </div>

                <div class="col-2 col-lg-2" style="    MARGIN-LEFT: 50px;">
                    <a href="" class="dashboard-stats rounded-sm panel-shadow p-30 p-md-20 d-flex align-items-center mt-15 mt-md-30" style="width: 218px;">
                        <div class="stat-icon comments">
                            <img src="/assets/default/img/icons/clock.svg" alt="">
                        </div>
                        <div class="d-flex flex-column ml-15">
                            <span class="font-30 text-secondary">heures</span>
                            <span class="font-16 text-gray font-weight-500">0 H</span>
                        </div>
                    </a>
                </div>





                <div class="col-lg-12" style="hei">

                    <br><br><br>
                    <tp-yt-paper-card class="staple-card style-scope yta-card-container">
                        <div class="header style-scope tp-yt-paper-card">
                            <iron-image class="style-scope tp-yt-paper-card">
                                <a id="baseURIAnchor" href="#" class="style-scope iron-image">
                                </a>
                                <div id="sizedImgDiv" class="style-scope iron-image">
                                </div>
                                <img id="img" class="style-scope iron-image">
                                <div id="placeholder" class=" style-scope iron-image">
                                </div>
                            </iron-image>
                            <div class="title-text  style-scope tp-yt-paper-card">
                            </div>
                        </div>
                        <span class="only-visible-for-accessibility style-scope yta-key-metric-card">
                            Vues
                        </span>
                        <div id="key-metric-header" class="layout horizontal style-scope yta-key-metric-card">
                            <tp-yt-paper-listbox id="key-metric-blocks" class="layout horizontal flex-none style-scope yta-key-metric-card">
                                <tp-yt-paper-item class="override-pointer-events layout vertical style-scope yta-key-metric-card iron-selected">
                                    <div id="block-container" class="style-scope yta-key-metric-card">
                                    </div>
                                    <yta-key-metric-block class="style-scope yta-key-metric-card">
                                        <div id="container" class="layout vertical style-scope yta-key-metric-block">
                                            <span class="style-scope yta-key-metric-block">
                                                <div id="metric-label-container" class="layout horizontal style-scope yta-key-metric-block">
                                                    <div class="layout vertical style-scope yta-key-metric-block">
                                                        <div id="metric-label" class="style-scope yta-key-metric-block">
                                                            Vues
                                                        </div>
                                                    </div>
                                                    <dom-if class="style-scope yta-key-metric-block">
                                                    </dom-if>
                                                </div>
                                                <div class="style-scope yta-key-metric-block">
                                                    <div class="metric-container layout horizontal style-scope yta-key-metric-block">
                                                        <div id="metric-total" class="style-scope yta-key-metric-block">
                                                            —
                                                        </div>
                                                        <dom-if class="style-scope yta-key-metric-block">
                                                        </dom-if>
                                                    </div>
                                                    <dom-if class="style-scope yta-key-metric-block">
                                                    </dom-if>
                                                </div>
                                            </span>
                                            <span class="only-visible-for-accessibility style-scope yta-key-metric-block">
                                                Nombre total de vues pour la période, la région et les filtres sélectionnés
                                            </span>
                                            <dom-repeat class="style-scope yta-key-metric-block">
                                            </dom-repeat>
                                        </div>
                                        <yta-column-anomaly-tooltip class="style-scope yta-key-metric-block">
                                            <ytcp-paper-tooltip type="explanatory" class="style-scope yta-column-anomaly-tooltip">
                                                <ytcp-paper-tooltip-placeholder class="style-scope ytcp-paper-tooltip">
                                                    <div class="style-scope ytcp-paper-tooltip">
                                                    </div>
                                                    <div class="style-scope ytcp-paper-tooltip">
                                                        <div class="tooltip layout vertical style-scope yta-column-anomaly-tooltip">
                                                            <dom-if class="style-scope yta-column-anomaly-tooltip">
                                                            </dom-if>
                                                            <ytcp-paper-tooltip-body class="style-scope yta-column-anomaly-tooltip">
                                                                <p class="style-scope ytcp-paper-tooltip-body">
                                                                    <yt-formatted-string class="style-scope ytcp-paper-tooltip-body">
                                                                        Nombre total de vues pour la période, la région et les filtres sélectionnés
                                                                    </yt-formatted-string>
                                                                </p>
                                                                <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                </dom-repeat>
                                                                <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                </dom-repeat>
                                                                <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                </dom-repeat>
                                                            </ytcp-paper-tooltip-body>
                                                        </div>
                                                    </div>
                                                    <dom-if class="style-scope ytcp-paper-tooltip">
                                                    </dom-if>
                                                </ytcp-paper-tooltip-placeholder>
                                            </ytcp-paper-tooltip>
                                            <dom-if class="style-scope yta-column-anomaly-tooltip">
                                            </dom-if>
                                        </yta-column-anomaly-tooltip>
                                        <dom-if class="style-scope yta-key-metric-block">
                                        </dom-if>
                                        <yta-column-anomaly-tooltip class="style-scope yta-key-metric-block">
                                            <ytcp-paper-tooltip type="explanatory" class="style-scope yta-column-anomaly-tooltip">
                                                <ytcp-paper-tooltip-placeholder class="style-scope ytcp-paper-tooltip">
                                                    <div class="style-scope ytcp-paper-tooltip">
                                                    </div>
                                                    <div class="style-scope ytcp-paper-tooltip">
                                                        <div class="tooltip layout vertical style-scope yta-column-anomaly-tooltip">
                                                            <dom-if class="style-scope yta-column-anomaly-tooltip">
                                                            </dom-if>
                                                            <ytcp-paper-tooltip-body class="style-scope yta-column-anomaly-tooltip">
                                                                <p class="style-scope ytcp-paper-tooltip-body">
                                                                    <yt-formatted-string class="style-scope ytcp-paper-tooltip-body">
                                                                        Nombre total de vues pour la période, la région et les filtres sélectionnés
                                                                    </yt-formatted-string>
                                                                </p>
                                                                <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                </dom-repeat>
                                                                <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                </dom-repeat>
                                                                <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                </dom-repeat>
                                                            </ytcp-paper-tooltip-body>
                                                        </div>
                                                    </div>
                                                    <dom-if class="style-scope ytcp-paper-tooltip">
                                                    </dom-if>
                                                </ytcp-paper-tooltip-placeholder>
                                            </ytcp-paper-tooltip>
                                            <dom-if class="style-scope yta-column-anomaly-tooltip">
                                            </dom-if>
                                        </yta-column-anomaly-tooltip>
                                        <dom-if class="style-scope yta-key-metric-block">
                                        </dom-if>
                                        <dom-if class="style-scope yta-key-metric-block">
                                        </dom-if>
                                    </yta-key-metric-block>
                                    <paper-ripple class="style-scope yta-key-metric-card">
                                        <div id="background" class="style-scope paper-ripple style-HdJ9E">
                                        </div>
                                        <div id="waves" class="style-scope paper-ripple">
                                        </div>
                                    </paper-ripple>
                                </tp-yt-paper-item>
                                <tp-yt-paper-item class="override-pointer-events layout vertical style-scope yta-key-metric-card">
                                    <div id="block-container" class="style-scope yta-key-metric-card">
                                    </div>
                                    <yta-key-metric-block class="style-scope yta-key-metric-card">
                                        <div id="container" class="layout vertical style-scope yta-key-metric-block">
                                            <span class="style-scope yta-key-metric-block">
                                                <div id="metric-label-container" class="layout horizontal style-scope yta-key-metric-block">
                                                    <div class="layout vertical style-scope yta-key-metric-block">
                                                        <div id="metric-label" class="style-scope yta-key-metric-block">
                                                            Durée de visionnage (heures)
                                                        </div>
                                                    </div>
                                                    <dom-if class="style-scope yta-key-metric-block">
                                                    </dom-if>
                                                </div>
                                                <div class="style-scope yta-key-metric-block">
                                                    <div class="metric-container layout horizontal style-scope yta-key-metric-block">
                                                        <div id="metric-total" class="style-scope yta-key-metric-block">
                                                            —
                                                        </div>
                                                        <dom-if class="style-scope yta-key-metric-block">
                                                        </dom-if>
                                                    </div>
                                                    <dom-if class="style-scope yta-key-metric-block">
                                                    </dom-if>
                                                </div>
                                            </span>
                                            <span class="only-visible-for-accessibility style-scope yta-key-metric-block">
                                                Estimation du nombre total d'heures de visionnage de vos contenus par votre audience
                                            </span>
                                            <dom-repeat class="style-scope yta-key-metric-block">
                                            </dom-repeat>
                                        </div>
                                        <yta-column-anomaly-tooltip class="style-scope yta-key-metric-block">
                                            <ytcp-paper-tooltip type="explanatory" class="style-scope yta-column-anomaly-tooltip">
                                                <ytcp-paper-tooltip-placeholder class="style-scope ytcp-paper-tooltip style-TSiv6" id="goog_1548680346" type="explanatory">
                                                    <div id="tooltip" class="style-scope ytcp-paper-tooltip-placeholder">
                                                        <div class="style-scope ytcp-paper-tooltip">
                                                        </div>
                                                        <div class="style-scope ytcp-paper-tooltip">
                                                            <div class="tooltip layout vertical style-scope yta-column-anomaly-tooltip">
                                                                <dom-if class="style-scope yta-column-anomaly-tooltip">
                                                                </dom-if>
                                                                <ytcp-paper-tooltip-body class="style-scope yta-column-anomaly-tooltip">
                                                                    <p class="style-scope ytcp-paper-tooltip-body">
                                                                        <yt-formatted-string class="style-scope ytcp-paper-tooltip-body">
                                                                            Estimation du nombre total d'heures de visionnage de vos contenus par votre audience
                                                                        </yt-formatted-string>
                                                                    </p>
                                                                    <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                    </dom-repeat>
                                                                    <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                    </dom-repeat>
                                                                    <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                    </dom-repeat>
                                                                </ytcp-paper-tooltip-body>
                                                            </div>
                                                        </div>
                                                        <ytcp-help class="style-scope ytcp-paper-tooltip">
                                                            <ytcp-button class="style-scope ytcp-paper-tooltip" type="primary">
                                                                <dom-if class="style-scope ytcp-button">
                                                                </dom-if>
                                                                <div class="label style-scope ytcp-button">
                                                                    En savoir plus
                                                                </div>
                                                            </ytcp-button>
                                                        </ytcp-help>
                                                        <dom-if class="style-scope ytcp-paper-tooltip">
                                                        </dom-if>
                                                    </div>
                                                </ytcp-paper-tooltip-placeholder>
                                            </ytcp-paper-tooltip>
                                            <dom-if class="style-scope yta-column-anomaly-tooltip">
                                            </dom-if>
                                        </yta-column-anomaly-tooltip>
                                        <dom-if class="style-scope yta-key-metric-block">
                                        </dom-if>
                                        <yta-column-anomaly-tooltip class="style-scope yta-key-metric-block">
                                            <ytcp-paper-tooltip type="explanatory" class="style-scope yta-column-anomaly-tooltip">
                                                <ytcp-paper-tooltip-placeholder class="style-scope ytcp-paper-tooltip style-Ex5RI" id="goog_1548680347" type="explanatory">
                                                    <div id="tooltip" class="style-scope ytcp-paper-tooltip-placeholder">
                                                        <div class="style-scope ytcp-paper-tooltip">
                                                        </div>
                                                        <div class="style-scope ytcp-paper-tooltip">
                                                            <div class="tooltip layout vertical style-scope yta-column-anomaly-tooltip">
                                                                <dom-if class="style-scope yta-column-anomaly-tooltip">
                                                                </dom-if>
                                                                <ytcp-paper-tooltip-body class="style-scope yta-column-anomaly-tooltip">
                                                                    <p class="style-scope ytcp-paper-tooltip-body">
                                                                        <yt-formatted-string class="style-scope ytcp-paper-tooltip-body">
                                                                            Estimation du nombre total d'heures de visionnage de vos contenus par votre audience
                                                                        </yt-formatted-string>
                                                                    </p>
                                                                    <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                    </dom-repeat>
                                                                    <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                    </dom-repeat>
                                                                    <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                    </dom-repeat>
                                                                </ytcp-paper-tooltip-body>
                                                            </div>
                                                        </div>
                                                        <ytcp-help class="style-scope ytcp-paper-tooltip">
                                                            <ytcp-button class="style-scope ytcp-paper-tooltip" type="primary">
                                                                <dom-if class="style-scope ytcp-button">
                                                                </dom-if>
                                                                <div class="label style-scope ytcp-button">
                                                                    En savoir plus
                                                                </div>
                                                            </ytcp-button>
                                                        </ytcp-help>
                                                        <dom-if class="style-scope ytcp-paper-tooltip">
                                                        </dom-if>
                                                    </div>
                                                </ytcp-paper-tooltip-placeholder>
                                            </ytcp-paper-tooltip>
                                            <dom-if class="style-scope yta-column-anomaly-tooltip">
                                            </dom-if>
                                        </yta-column-anomaly-tooltip>
                                        <dom-if class="style-scope yta-key-metric-block">
                                        </dom-if>
                                        <dom-if class="style-scope yta-key-metric-block">
                                        </dom-if>
                                    </yta-key-metric-block>
                                    <paper-ripple class="style-scope yta-key-metric-card">
                                        <div id="background" class="style-scope paper-ripple style-Tk6t5">
                                        </div>
                                        <div id="waves" class="style-scope paper-ripple">
                                        </div>
                                    </paper-ripple>
                                </tp-yt-paper-item>
                                <tp-yt-paper-item class="override-pointer-events layout vertical style-scope yta-key-metric-card">
                                    <div id="block-container" class="style-scope yta-key-metric-card">
                                    </div>
                                    <yta-key-metric-block class="style-scope yta-key-metric-card">
                                        <div id="container" class="layout vertical style-scope yta-key-metric-block">
                                            <span class="style-scope yta-key-metric-block">
                                                <div id="metric-label-container" class="layout horizontal style-scope yta-key-metric-block">
                                                    <div class="layout vertical style-scope yta-key-metric-block">
                                                        <div id="metric-label" class="style-scope yta-key-metric-block">
                                                            Abonnés
                                                        </div>
                                                    </div>
                                                    <dom-if class="style-scope yta-key-metric-block">
                                                    </dom-if>
                                                </div>
                                                <div class="style-scope yta-key-metric-block">
                                                    <div class="metric-container layout horizontal style-scope yta-key-metric-block">
                                                        <div id="metric-total" class="style-scope yta-key-metric-block">
                                                            —
                                                        </div>
                                                        <dom-if class="style-scope yta-key-metric-block">
                                                        </dom-if>
                                                    </div>
                                                    <dom-if class="style-scope yta-key-metric-block">
                                                    </dom-if>
                                                </div>
                                            </span>
                                            <span class="only-visible-for-accessibility style-scope yta-key-metric-block">
                                                Variation du nombre total d'abonnés obtenue en soustrayant le nombre d'abonnés perdus au nombre de nouveaux abonnés pour la période et la région sélectionnées
                                            </span>
                                            <dom-repeat class="style-scope yta-key-metric-block">
                                            </dom-repeat>
                                        </div>
                                        <yta-column-anomaly-tooltip class="style-scope yta-key-metric-block">
                                            <ytcp-paper-tooltip type="explanatory" class="style-scope yta-column-anomaly-tooltip">
                                                <ytcp-paper-tooltip-placeholder class="style-scope ytcp-paper-tooltip">
                                                    <div class="style-scope ytcp-paper-tooltip">
                                                    </div>
                                                    <div class="style-scope ytcp-paper-tooltip">
                                                        <div class="tooltip layout vertical style-scope yta-column-anomaly-tooltip">
                                                            <dom-if class="style-scope yta-column-anomaly-tooltip">
                                                            </dom-if>
                                                            <ytcp-paper-tooltip-body class="style-scope yta-column-anomaly-tooltip">
                                                                <p class="style-scope ytcp-paper-tooltip-body">
                                                                    <yt-formatted-string class="style-scope ytcp-paper-tooltip-body">
                                                                        Variation du nombre total d'abonnés obtenue en soustrayant le nombre d'abonnés perdus au nombre de nouveaux abonnés pour la période et la région sélectionnées
                                                                    </yt-formatted-string>
                                                                </p>
                                                                <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                </dom-repeat>
                                                                <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                </dom-repeat>
                                                                <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                </dom-repeat>
                                                            </ytcp-paper-tooltip-body>
                                                        </div>
                                                    </div>
                                                    <ytcp-help class="style-scope ytcp-paper-tooltip">
                                                        <ytcp-button class="style-scope ytcp-paper-tooltip" type="primary">
                                                            <dom-if class="style-scope ytcp-button">
                                                            </dom-if>
                                                            <div class="label style-scope ytcp-button">
                                                                En savoir plus
                                                            </div>
                                                        </ytcp-button>
                                                    </ytcp-help>
                                                    <dom-if class="style-scope ytcp-paper-tooltip">
                                                    </dom-if>
                                                </ytcp-paper-tooltip-placeholder>
                                            </ytcp-paper-tooltip>
                                            <dom-if class="style-scope yta-column-anomaly-tooltip">
                                            </dom-if>
                                        </yta-column-anomaly-tooltip>
                                        <dom-if class="style-scope yta-key-metric-block">
                                        </dom-if>
                                        <yta-column-anomaly-tooltip class="style-scope yta-key-metric-block">
                                            <ytcp-paper-tooltip type="explanatory" class="style-scope yta-column-anomaly-tooltip">
                                                <ytcp-paper-tooltip-placeholder class="style-scope ytcp-paper-tooltip style-Gy4lM" id="goog_1548680349" type="explanatory">
                                                    <div id="tooltip" class="style-scope ytcp-paper-tooltip-placeholder">
                                                        <div class="style-scope ytcp-paper-tooltip">

                                                        </div>
                                                        <div class="style-scope ytcp-paper-tooltip">
                                                            <div class="tooltip layout vertical style-scope yta-column-anomaly-tooltip">
                                                                <dom-if class="style-scope yta-column-anomaly-tooltip">
                                                                </dom-if>
                                                                <ytcp-paper-tooltip-body class="style-scope yta-column-anomaly-tooltip">
                                                                    <p class="style-scope ytcp-paper-tooltip-body">
                                                                        <yt-formatted-string class="style-scope ytcp-paper-tooltip-body">
                                                                            Variation du nombre total d'abonnés obtenue en soustrayant le nombre d'abonnés perdus au nombre de nouveaux abonnés pour la période et la région sélectionnées
                                                                        </yt-formatted-string>
                                                                    </p>
                                                                    <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                    </dom-repeat>
                                                                    <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                    </dom-repeat>
                                                                    <dom-repeat class="style-scope ytcp-paper-tooltip-body">
                                                                    </dom-repeat>
                                                                </ytcp-paper-tooltip-body>
                                                            </div>
                                                        </div>
                                                        <ytcp-help class="style-scope ytcp-paper-tooltip">
                                                            <ytcp-button class="style-scope ytcp-paper-tooltip" type="primary">
                                                                <dom-if class="style-scope ytcp-button">
                                                                </dom-if>
                                                                <div class="label style-scope ytcp-button">
                                                                    En savoir plus
                                                                </div>
                                                            </ytcp-button>
                                                        </ytcp-help>
                                                        <dom-if class="style-scope ytcp-paper-tooltip">
                                                        </dom-if>
                                                    </div>
                                                </ytcp-paper-tooltip-placeholder>
                                            </ytcp-paper-tooltip>
                                            <dom-if class="style-scope yta-column-anomaly-tooltip">
                                            </dom-if>
                                        </yta-column-anomaly-tooltip>
                                        <dom-if class="style-scope yta-key-metric-block">
                                        </dom-if>
                                        <dom-if class="style-scope yta-key-metric-block">
                                        </dom-if>
                                    </yta-key-metric-block>
                                    <paper-ripple class="style-scope yta-key-metric-card">
                                        <div id="background" class="style-scope paper-ripple style-EwBSp">
                                        </div>
                                        <div id="waves" class="style-scope paper-ripple">
                                        </div>
                                    </paper-ripple>
                                </tp-yt-paper-item>
                                <dom-repeat class="style-scope yta-key-metric-card">
                                </dom-repeat>
                            </tp-yt-paper-listbox>
                        </div>
                        <div class="comparison-label-container style-scope yta-key-metric-card">
                            <div id="comparison-label-content" class="layout horizontal style-scope yta-key-metric-card">
                                <dom-repeat class="style-scope yta-key-metric-card">
                                </dom-repeat>
                                <dom-if class="style-scope yta-key-metric-card">
                                </dom-if>
                            </div>
                        </div>
                        <div id="aspect-ratio-four-one-container" class="style-scope yta-key-metric-card snipcss-AwKZF" narrow-mode="">
                            <button class="btn btn-sm btn-primary ml-15" id="btnLastYear">Last Year</button>
                            <button class="btn btn-sm btn-primary ml-15" id="btnLastDay">Last Month</button>
                            <div class="container">
                                <div id="chartContainer">
                                    <div id="chartEmpty" style="display: none;">
                                        <canvas id="chartEmptyCanvas" style="display: none;"></canvas>
                                    </div>
                                    <div id="chartDay" style="display: none;">
                                        <!-- Graphique dsu dernier month -->
                                        <canvas id="chartDayCanvas"></canvas>
                                    </div>
                                    <div id="chartYear" style="display: none;">
                                        <!-- Graphique du dernier year -->
                                        <canvas id="chartYearCanvas"></canvas>
                                    </div>

                                </div>
                                <!-- <div id="aspect-ratio-content" class="style-scope yta-key-metric-card" hasseemorebutton="">
    <dom-if restamp="" class="style-scope yta-key-metric-card">
    </dom-if>
    <dom-repeat as="claimBanner" class="style-scope yta-key-metric-card">
    </dom-repeat>
    <yta-line-chart-base id="yta-line-chart-base" class="style-scope yta-key-metric-card">
      <div id="chart-container" class="style-scope yta-line-chart-base style-sKMZt">
        <div class="aplos-chart-container aplos-chart aplos-style quantum-style style-scope yta-line-chart-base" tabindex="0">
 
        <svg class="aplos-chart aplos-chart-svg style-scope yta-line-chart-base snipcss0-0-0-1" aria-hidden="true" width="750" height="154">
            <defs class="style-scope yta-line-chart-base snipcss0-1-1-2">
              <pattern id="anomaly-annotation-ICON_INACTIVE_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-3">
                <rect width="6" height="6" style="fill:var(--ytcp-icon-inactive); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:var(--ytcp-icon-inactive); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-ICON_DISABLED_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-4">
                <rect width="6" height="6" style="fill:var(--ytcp-icon-disabled); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:var(--ytcp-icon-disabled); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-TEXT_PRIMARY_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-5">
                <rect width="6" height="6" style="fill:var(--ytcp-text-primary); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:var(--ytcp-text-primary); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-TEXT_SECONDARY_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-6">
                <rect width="6" height="6" style="fill:var(--ytcp-text-secondary); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:var(--ytcp-text-secondary); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-GENERAL_BACKGROUND_A_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-7">
                <rect width="6" height="6" style="fill:var(--ytcp-general-background-a); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:var(--ytcp-general-background-a); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-GENERAL_BACKGROUND_C_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-8">
                <rect width="6" height="6" style="fill:var(--ytcp-general-background-c); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:var(--ytcp-general-background-c); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-THEMED_RED_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-9">
                <rect width="6" height="6" style="fill:var(--ytcp-themed-red); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:var(--ytcp-themed-red); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-BRAND_BACKGROUND_SOLID_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-10">
                <rect width="6" height="6" style="fill:var(--ytcp-brand-background-solid); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:var(--ytcp-brand-background-solid); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-TEN_PERCENT_LAYER_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-11">
                <rect width="6" height="6" style="fill:var(--ytcp-ten-percent-layer); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:var(--ytcp-ten-percent-layer); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-OVERVIEW_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-12">
                <rect width="6" height="6" style="fill:rgba(47, 165, 203, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(47, 165, 203, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-REACH_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-13">
                <rect width="6" height="6" style="fill:rgba(91, 84, 213, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(91, 84, 213, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-ENGAGEMENT_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-14">
                <rect width="6" height="6" style="fill:rgba(235, 60, 151, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(235, 60, 151, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-AUDIENCE_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-15">
                <rect width="6" height="6" style="fill:rgba(145, 47, 192, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(145, 47, 192, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-REVENUE_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-16">
                <rect width="6" height="6" style="fill:rgba(0, 180, 162, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(0, 180, 162, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-DEFAULT_SECONDARY_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-17">
                <rect width="6" height="6" style="fill:rgba(47, 165, 203, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(47, 165, 203, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-REVENUE_SECONDARY_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-18">
                <rect width="6" height="6" style="fill:rgba(145, 47, 192, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(145, 47, 192, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-YELLOW_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-19">
                <rect width="6" height="6" style="fill:rgba(242, 196, 40, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(242, 196, 40, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-APRICOT_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-20">
                <rect width="6" height="6" style="fill:rgba(230, 153, 14, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(230, 153, 14, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-BUBBLEGUM_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-21">
                <rect width="6" height="6" style="fill:rgba(242, 112, 185, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(242, 112, 185, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-VALENTINE_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-22">
                <rect width="6" height="6" style="fill:rgba(217, 77, 108, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(217, 77, 108, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-PARROT_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-23">
                <rect width="6" height="6" style="fill:rgba(99, 179, 0, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(99, 179, 0, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-PINE_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-24">
                <rect width="6" height="6" style="fill:rgba(15, 128, 113, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(15, 128, 113, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-ROYAL_BLUE_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-25">
                <rect width="6" height="6" style="fill:rgba(0, 113, 209, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(0, 113, 209, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-NO_MONETIZATION_RED_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-26">
                <rect width="6" height="6" style="fill:rgba(204, 0, 0, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(204, 0, 0, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-REVSHARE_YELLOW_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-27">
                <rect width="6" height="6" style="fill:rgba(251, 192, 45, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(251, 192, 45, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-TRANSPARENT_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-28">
                <rect width="6" height="6" style="fill:rgba(0, 0, 0, 0); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(0, 0, 0, 0); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-SEVERITY_0_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-29">
                <rect width="6" height="6" style="fill:rgba(115, 115, 115, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(115, 115, 115, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-SEVERITY_1_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-30">
                <rect width="6" height="6" style="fill:rgba(39, 100, 25, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(39, 100, 25, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-SEVERITY_2_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-31">
                <rect width="6" height="6" style="fill:rgba(77, 146, 33, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(77, 146, 33, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-SEVERITY_3_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-32">
                <rect width="6" height="6" style="fill:rgba(127, 188, 65, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(127, 188, 65, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-SEVERITY_4_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-33">
                <rect width="6" height="6" style="fill:rgba(184, 225, 134, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(184, 225, 134, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-SEVERITY_5_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-34">
                <rect width="6" height="6" style="fill:rgba(230, 245, 208, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(230, 245, 208, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-SEVERITY_6_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-35">
                <rect width="6" height="6" style="fill:rgba(253, 224, 239, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(253, 224, 239, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-SEVERITY_7_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-36">
                <rect width="6" height="6" style="fill:rgba(241, 182, 218, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(241, 182, 218, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-SEVERITY_8_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-37">
                <rect width="6" height="6" style="fill:rgba(222, 119, 174, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(222, 119, 174, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-SEVERITY_9_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-38">
                <rect width="6" height="6" style="fill:rgba(197, 27, 125, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(197, 27, 125, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-SEVERITY_10_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-39">
                <rect width="6" height="6" style="fill:rgba(142, 1, 82, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(142, 1, 82, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-ICON_INACTIVE_RGBA_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-40">
                <rect width="6" height="6" style="fill:rgba(144, 144, 144, 1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(144, 144, 144, 1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
              <pattern id="anomaly-annotation-TEN_PERCENT_LAYER_RGBA_3" width="6" height="6" patternTransform="rotate(-45 0 0)" patternUnits="userSpaceOnUse" class="style-scope yta-line-chart-base snipcss0-2-2-41">
                <rect width="6" height="6" style="fill:rgba(0, 0, 0, 0.1); opacity:0.1;" class="style-scope yta-line-chart-base">
                </rect>
                <line x1="0" y1="0" x2="0" y2="6" style="stroke:rgba(0, 0, 0, 0.1); stroke-width:1;" class="style-scope yta-line-chart-base">
                </line>
              </pattern>
            </defs>
            <g class="aplos-draw-area style-scope yta-line-chart-base snipcss0-1-1-42" transform="translate(20,16)">
              <g class="x axis style-scope yta-line-chart-base snipcss0-2-42-43" transform="translate(0, 114)" opacity="1">
                <text class="axis-title style-scope yta-line-chart-base snipcss0-3-43-44" opacity="0">
                </text>
                <g class="tick first-tick style-scope yta-line-chart-base snipcss0-3-43-45" opacity="1" transform="translate(0,0)">
                  <text class="label style-scope yta-line-chart-base snipcss0-4-45-46" text-anchor="start" y="12" x="0" dy=".71em">
                    <tspan x="0" class="style-scope yta-line-chart-base snipcss0-5-46-47">
                      23 juin 2...
                    </tspan>
                    <title class="style-scope yta-line-chart-base">
                      23 juin 2023
                    </title>
                  </text>
                  <line class="tick-mark strong-tick-mark style-scope yta-line-chart-base" x1="0" x2="0" y1="0" y2="6">
                  </line>
                  <line class="gridline style-scope yta-line-chart-base" x2="0" y1="0" y2="-114" display="none">
                  </line>
                </g>
                <g class="tick style-scope yta-line-chart-base snipcss0-3-43-49" opacity="1" transform="translate(126.48148148148148,0)">
                  <text class="label style-scope yta-line-chart-base snipcss0-4-49-50" text-anchor="middle" y="12" x="0" dy=".71em">
                    <tspan x="0" class="style-scope yta-line-chart-base snipcss0-5-50-51">
                      28 juin 2023
                    </tspan>
                  </text>
                  <line class="tick-mark strong-tick-mark style-scope yta-line-chart-base" x1="0" x2="0" y1="0" y2="6">
                  </line>
                  <line class="gridline style-scope yta-line-chart-base" x2="0" y1="0" y2="-114" display="none">
                  </line>
                </g>
                <g class="tick style-scope yta-line-chart-base snipcss0-3-43-52" opacity="1" transform="translate(227.66666666666666,0)">
                  <text class="label style-scope yta-line-chart-base snipcss0-4-52-53" text-anchor="middle" y="12" x="0" dy=".71em">
                    <tspan x="0" class="style-scope yta-line-chart-base snipcss0-5-53-54">
                      2 juil. 2023
                    </tspan>
                  </text>
                  <line class="tick-mark strong-tick-mark style-scope yta-line-chart-base" x1="0" x2="0" y1="0" y2="6">
                  </line>
                  <line class="gridline style-scope yta-line-chart-base" x2="0" y1="0" y2="-114" display="none">
                  </line>
                </g>
                <g class="tick style-scope yta-line-chart-base snipcss0-3-43-55" opacity="1" transform="translate(354.14814814814815,0)">
                  <text class="label style-scope yta-line-chart-base snipcss0-4-55-56" text-anchor="middle" y="12" x="0" dy=".71em">
                    <tspan x="0" class="style-scope yta-line-chart-base snipcss0-5-56-57">
                      7 juil. 2023
                    </tspan>
                  </text>
                  <line class="tick-mark strong-tick-mark style-scope yta-line-chart-base" x1="0" x2="0" y1="0" y2="6">
                  </line>
                  <line class="gridline style-scope yta-line-chart-base" x2="0" y1="0" y2="-114" display="none">
                  </line>
                </g>
                <g class="tick style-scope yta-line-chart-base snipcss0-3-43-58" opacity="1" transform="translate(455.3333333333333,0)">
                  <text class="label style-scope yta-line-chart-base snipcss0-4-58-59" text-anchor="middle" y="12" x="0" dy=".71em">
                    <tspan x="0" class="style-scope yta-line-chart-base snipcss0-5-59-60">
                      11 juil. 2023
                    </tspan>
                  </text>
                  <line class="tick-mark strong-tick-mark style-scope yta-line-chart-base" x1="0" x2="0" y1="0" y2="6">
                  </line>
                  <line class="gridline style-scope yta-line-chart-base" x2="0" y1="0" y2="-114" display="none">
                  </line>
                </g>
                <g class="tick style-scope yta-line-chart-base snipcss0-3-43-61" opacity="1" transform="translate(581.8148148148148,0)">
                  <text class="label style-scope yta-line-chart-base snipcss0-4-61-62" text-anchor="middle" y="12" x="0" dy=".71em">
                    <tspan x="0" class="style-scope yta-line-chart-base snipcss0-5-62-63">
                      16 juil. 2023
                    </tspan>
                  </text>
                  <line class="tick-mark strong-tick-mark style-scope yta-line-chart-base" x1="0" x2="0" y1="0" y2="6">
                  </line>
                  <line class="gridline style-scope yta-line-chart-base" x2="0" y1="0" y2="-114" display="none">
                  </line>
                </g>
                <g class="tick last-tick style-scope yta-line-chart-base snipcss0-3-43-64" opacity="1" transform="translate(683,0)">
                  <text class="label style-scope yta-line-chart-base snipcss0-4-64-65" text-anchor="end" y="12" x="0" dy=".71em">
                    <tspan x="0" class="style-scope yta-line-chart-base snipcss0-5-65-66">
                      20 juil....
                    </tspan>
                    <title class="style-scope yta-line-chart-base">
                      20 juil. 2023
                    </title>
                  </text>
                  <line class="tick-mark strong-tick-mark style-scope yta-line-chart-base" x1="0" x2="0" y1="0" y2="6">
                  </line>
                  <line class="gridline style-scope yta-line-chart-base" x2="0" y1="0" y2="-114" display="none">
                  </line>
                </g>
              </g>
              <g class="x2 axis style-scope yta-line-chart-base snipcss0-2-42-68" opacity="0">
              </g>
              <g class="y axis style-scope yta-line-chart-base snipcss0-2-42-69" opacity="0">
              </g>
              <g class="y2 axis style-scope yta-line-chart-base snipcss0-2-42-70" opacity="1" transform="translate(683, 0)">
                <text class="axis-title style-scope yta-line-chart-base snipcss0-3-70-71" opacity="0">
                </text>
                <g class="tick first-tick style-scope yta-line-chart-base snipcss0-3-70-72" opacity="1" transform="translate(0,0)">
                  <text class="label style-scope yta-line-chart-base snipcss0-4-72-73" text-anchor="start" y="0" x="20" dy=".32em">
                    <tspan x="20" class="style-scope yta-line-chart-base snipcss0-5-73-74">
                      3
                    </tspan>
                  </text>
                  <line class="tick-mark style-scope yta-line-chart-base" x1="0" x2="0" y1="0" y2="0">
                  </line>
                  <line class="gridline style-scope yta-line-chart-base" x2="-683" y1="0" y2="0">
                  </line>
                </g>
                <g class="tick style-scope yta-line-chart-base snipcss0-3-70-75" opacity="1" transform="translate(0,38)">
                  <text class="label style-scope yta-line-chart-base snipcss0-4-75-76" text-anchor="start" y="0" x="20" dy=".32em">
                    <tspan x="20" class="style-scope yta-line-chart-base snipcss0-5-76-77">
                      2
                    </tspan>
                  </text>
                  <line class="tick-mark style-scope yta-line-chart-base" x1="0" x2="0" y1="0" y2="0">
                  </line>
                  <line class="gridline style-scope yta-line-chart-base" x2="-683" y1="0" y2="0">
                  </line>
                </g>
                <g class="tick style-scope yta-line-chart-base snipcss0-3-70-78" opacity="1" transform="translate(0,76)">
                  <text class="label style-scope yta-line-chart-base snipcss0-4-78-79" text-anchor="start" y="0" x="20" dy=".32em">
                    <tspan x="20" class="style-scope yta-line-chart-base snipcss0-5-79-80">
                      1
                    </tspan>
                  </text>
                  <line class="tick-mark style-scope yta-line-chart-base" x1="0" x2="0" y1="0" y2="0">
                  </line>
                  <line class="gridline style-scope yta-line-chart-base" x2="-683" y1="0" y2="0">
                  </line>
                </g>
                <g class="tick last-tick style-scope yta-line-chart-base snipcss0-3-70-81" opacity="1" transform="translate(0,114)">
                  <text class="label style-scope yta-line-chart-base snipcss0-4-81-82" text-anchor="start" y="0" x="20" dy=".32em">
                    <tspan x="20" class="style-scope yta-line-chart-base snipcss0-5-82-83">
                      0
                    </tspan>
                  </text>
                  <line class="tick-mark style-scope yta-line-chart-base" x1="0" x2="0" y1="0" y2="0">
                  </line>
                  <line class="gridline axis-zero-tick style-scope yta-line-chart-base" x2="-683" y1="0" y2="0">
                  </line>
                </g>
              </g>
              <g class="baseline-group style-scope yta-line-chart-base snipcss0-2-42-84">
                <line class="baseline x-axis-baseline style-scope yta-line-chart-base" fill="none" stroke="#9e9e9e" shape-rendering="crispEdges" opacity="1" display="none">
                </line>
                <line class="baseline y2-axis-baseline style-scope yta-line-chart-base" fill="none" stroke="#9e9e9e" shape-rendering="crispEdges" opacity="1" x2="683" y1="114" y2="114">
                </line>
              </g>
              <g class="axis-line-group style-scope yta-line-chart-base snipcss0-2-42-85">
                <line class="axis-line x-axis-line style-scope yta-line-chart-base" fill="none" stroke="#9e9e9e" shape-rendering="crispEdges" opacity="1" x2="683" y1="114" y2="114">
                </line>
                <line class="axis-line y2-axis-line style-scope yta-line-chart-base" fill="none" stroke="#9e9e9e" shape-rendering="crispEdges" opacity="1" display="none" x1="683" x2="683" y2="114">
                </line>
              </g>
              <rect class="mouseCapturePane style-scope yta-line-chart-base" width="683" height="114" style="opacity: 0;">
              </rect>
              <g class="seriesGroups style-scope yta-line-chart-base snipcss0-2-42-86">
                <g series-id="MAIN_METRIC_SERIES_NAME_area" class="style-scope yta-line-chart-base snipcss0-3-86-87">
                  <defs class="style-scope yta-line-chart-base snipcss0-4-87-88">
                    <clipPath id="lineclip144" class="style-scope yta-line-chart-base snipcss0-5-88-89">
                      <rect x="0" y="-16" width="683" height="154" class="style-scope yta-line-chart-base">
                      </rect>
                    </clipPath>
                  </defs>
                  <g class="area-segments style-scope yta-line-chart-base snipcss0-4-87-90">
                    <path class="area style-scope yta-line-chart-base" stroke-width="0" clip-path="url(#lineclip144)" fill="rgba(47, 165, 203, 0.1)" d="M0,114L25.296296296296294,114L50.59259259259259,114L75.88888888888889,114L101.18518518518518,114L126.48148148148148,114L151.77777777777777,114L177.07407407407408,114L202.37037037037035,114L227.66666666666666,114L252.96296296296296,114L278.25925925925924,114L303.55555555555554,114L328.85185185185185,114L354.14814814814815,114L379.44444444444446,114L404.7407407407407,114L430.03703703703707,114L455.3333333333333,114L480.6296296296296,114L505.9259259259259,114L531.2222222222223,114L556.5185185185185,114L581.8148148148148,114L607.1111111111111,114L632.4074074074074,114L657.7037037037037,114L683,114L683,114L657.7037037037037,114L632.4074074074074,114L607.1111111111111,114L581.8148148148148,114L556.5185185185185,114L531.2222222222223,114L505.9259259259259,114L480.6296296296296,114L455.3333333333333,114L430.03703703703707,114L404.7407407407407,114L379.44444444444446,114L354.14814814814815,114L328.85185185185185,114L303.55555555555554,114L278.25925925925924,114L252.96296296296296,114L227.66666666666666,114L202.37037037037035,114L177.07407407407408,114L151.77777777777777,114L126.48148148148148,114L101.18518518518518,114L75.88888888888889,114L50.59259259259259,114L25.296296296296294,114L0,114Z">
                    </path>
                  </g>
                  <g class="line-segments style-scope yta-line-chart-base snipcss0-4-87-91">
                  </g>
                  <g class="isolate-data style-scope yta-line-chart-base snipcss0-4-87-92">
                  </g>
                  <g class="points style-scope yta-line-chart-base snipcss0-4-87-93">
                  </g>
                  <g class="error-area-segments style-scope yta-line-chart-base snipcss0-4-87-94">
                  </g>
                </g>
                <g series-id="MAIN_METRIC_SERIES_NAME" class="style-scope yta-line-chart-base snipcss0-3-86-95">
                  <defs class="style-scope yta-line-chart-base snipcss0-4-95-96">
                    <clipPath id="lineclip143" class="style-scope yta-line-chart-base snipcss0-5-96-97">
                      <rect x="0" y="-16" width="683" height="154" class="style-scope yta-line-chart-base">
                      </rect>
                    </clipPath>
                  </defs>
                  <g class="area-segments style-scope yta-line-chart-base snipcss0-4-95-98">
                  </g>
                  <g class="line-segments style-scope yta-line-chart-base snipcss0-4-95-99">
                    <path class="line-series style-scope yta-line-chart-base" fill="none" stroke="rgba(47, 165, 203, 1)" stroke-dasharray="" d="M0,114L25,114L51,114L76,114L101,114L126,114L152,114L177,114L202,114L228,114L253,114L278,114L304,114L329,114L354,114L379,114L405,114L430,114L455,114L481,114L506,114L531,114L557,114L582,114L607,114L632,114L658,114L683,114" clip-path="url(#lineclip143)" stroke-width="2">
                    </path>
                    <path class="event-target style-scope yta-line-chart-base" fill="none" stroke="transparent" opacity="0" d="M0,114L25,114L51,114L76,114L101,114L126,114L152,114L177,114L202,114L228,114L253,114L278,114L304,114L329,114L354,114L379,114L405,114L430,114L455,114L481,114L506,114L531,114L557,114L582,114L607,114L632,114L658,114L683,114" clip-path="url(#lineclip143)" stroke-width="10">
                    </path>
                  </g>
                  <g class="isolate-data style-scope yta-line-chart-base snipcss0-4-95-100">
                  </g>
                  <g class="points style-scope yta-line-chart-base snipcss0-4-95-101">
                  </g>
                  <g class="error-area-segments style-scope yta-line-chart-base snipcss0-4-95-102">
                  </g>
                </g>
              </g>
              <g class="aplos-line-annotation-layer style-scope yta-line-chart-base snipcss0-2-42-103" opacity="1">
              </g>
              <g class="chart-annotation-layer style-scope yta-line-chart-base">
              </g>
              <g class="dot-follow-layer style-scope yta-line-chart-base snipcss0-2-42-105 style-fHrXl" id="style-fHrXl">
                <g class="dot-follow-group style-scope yta-line-chart-base snipcss0-3-105-106">
                  <line class="dot-follow-domain-line style-scope yta-line-chart-base" x1="632.4074074074074" x2="632.4074074074074" y1="0" y2="114">
                  </line>
                  <line class="dot-follow-measure-line style-scope yta-line-chart-base" display="none" x1="0" x2="683" y1="114" y2="114">
                  </line>
                  <g class="dot-follow-point-group style-scope yta-line-chart-base snipcss0-4-106-107">
                    <g class="aplos-circle-shape-group dot-follow style-scope yta-line-chart-base snipcss0-5-107-108">
                      <circle class="aplos-circle-shape style-scope yta-line-chart-base" cx="632.4074074074074" cy="114" r="5" fill="rgba(47, 165, 203, 1)" stroke-width="0">
                      </circle>
                      <text dx="632.4074074074074" fill="white" text-anchor="middle" opacity="0" dy="114" dominant-baseline="middle" class="style-scope yta-line-chart-base snipcss0-6-108-109 style-Yxiqr" id="style-Yxiqr">
                      </text>
                    </g>
                  </g>
                </g>
                <g class="dot-follow-group style-scope yta-line-chart-base snipcss0-3-105-110">
                  <line class="dot-follow-domain-line style-scope yta-line-chart-base" x1="632.4074074074074" x2="632.4074074074074" y1="0" y2="114">
                  </line>
                  <line class="dot-follow-measure-line style-scope yta-line-chart-base" display="none" x1="0" x2="683" y1="114" y2="114">
                  </line>
                  <g class="dot-follow-point-group style-scope yta-line-chart-base snipcss0-4-110-111">
                    <g class="aplos-circle-shape-group dot-follow style-scope yta-line-chart-base snipcss0-5-111-112">
                      <circle class="aplos-circle-shape style-scope yta-line-chart-base" cx="632.4074074074074" cy="114" r="5" fill="rgba(47, 165, 203, 0.1)" stroke-width="0">
                      </circle>
                      <text dx="632.4074074074074" fill="white" text-anchor="middle" opacity="0" dy="114" dominant-baseline="middle" class="style-scope yta-line-chart-base snipcss0-6-112-113 style-mpWV1" id="style-mpWV1">
                      </text>
                    </g>
                  </g>
                </g>
              </g>
            </g>
            <clipPath id="clipRegion2" class="style-scope yta-line-chart-base snipcss0-1-1-114">
              <rect x="1" y="-1" width="684" height="116" class="style-scope yta-line-chart-base">
              </rect>
            </clipPath>
          </svg>
          <div class="aplos-a11y-content style-scope yta-line-chart-base" aria-live="off" aria-atomic="true">
            <span class="style-scope yta-line-chart-base">
              Vues
            </span>
            <span class="style-scope yta-line-chart-base">
            </span>
            <span class="style-scope yta-line-chart-base">
            </span>
          </div>
          <div class="aplos-badge aplos-message-warning-badge style-scope yta-line-chart-base style-Kv914" title="" id="style-Kv914">
          </div>
        </div>
       
      </div>
    </yta-line-chart-base>
    
  </div>
</div> -->

                                <dom-if class="style-scope yta-key-metric-card">
                                </dom-if>
                                <dom-if class="style-scope yta-key-metric-card">
                                </dom-if>
                                <dom-if class="style-scope yta-card-container">
                                </dom-if>
                                <div class="layout horizontal footer style-scope yta-card-container">
                                    <span class="style-scope yta-card-container">
                                        <ytcp-ve class="style-scope yta-card-container">
                                            <a class="style-scope yta-card-container" href="/channel/UC7FI77dRHCo2kx2Si4vIfvg/analytics/tab-overview/period-default/explore?entity_type=CHANNEL&amp;entity_id=UC7FI77dRHCo2kx2Si4vIfvg&amp;time_period=4_weeks&amp;explore_type=TABLE_AND_CHART&amp;metrics_computation_type=DELTA&amp;metric=VIEWS&amp;granularity=DAY&amp;t_metrics=VIEWS&amp;t_metrics=WATCH_TIME&amp;t_metrics=SUBSCRIBERS_NET_CHANGE&amp;t_metrics=VIDEO_THUMBNAIL_IMPRESSIONS&amp;t_metrics=VIDEO_THUMBNAIL_IMPRESSIONS_VTR&amp;v_metrics=VIEWS&amp;v_metrics=WATCH_TIME&amp;v_metrics=SUBSCRIBERS_NET_CHANGE&amp;v_metrics=VIDEO_THUMBNAIL_IMPRESSIONS&amp;v_metrics=VIDEO_THUMBNAIL_IMPRESSIONS_VTR&amp;dimension=VIDEO&amp;o_column=VIEWS&amp;o_direction=ANALYTICS_ORDER_DIRECTION_DESC">
                                                <ytcp-button id="see-more-button" class=" style-scope yta-card-container style-scope yta-card-container" type="primary">
                                                    <dom-if class="style-scope ytcp-button">
                                                    </dom-if>
                                                    <div class="label style-scope ytcp-button">
                                                        Voir plus
                                                    </div>
                                                </ytcp-button>
                                            </a>
                                        </ytcp-ve>
                                        <dom-if class="style-scope yta-card-container">
                                        </dom-if>
                                        <dom-if class="style-scope yta-card-container">
                                        </dom-if>
                                    </span>
                                    <span class="layout horizontal experiment-and-feedback style-scope yta-card-container">
                                        <dom-if class="style-scope yta-card-container">
                                        </dom-if>
                                        <dom-if class="style-scope yta-card-container">
                                        </dom-if>
                                    </span>
                                    <dom-if class="style-scope yta-card-container">
                                    </dom-if>
                                </div>
                    </tp-yt-paper-card>

                </div>

                <button id="btnLastYear">Last Year</button>
                <button id="btnLastDay">Last Month</button>
                <div class="container">
                    <div id="chartContainer">
                        <div id="chartEmpty" style="display: none;">
                            <canvas id="chartEmptyCanvas" style="display: none;"></canvas>
                        </div>
                        <div id="chartYear" style="display: none;">
                            <!-- Graphique du dernier year -->
                            <canvas id="chartYearCanvas"></canvas>
                        </div>
                        <div id="chartDay" style="display: none;">
                            <!-- Graphique dsu dernier month -->
                            <canvas id="chartDayCanvas"></canvas>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

    {{-- </div> --}}

    @endsection

    @push('scripts_bottom')
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {

            const navbar = document.getElementById('navbar22');
            const scrollRightButton = document.getElementById('scroll-right');
            const scrollLeftButton = document.getElementById('scroll-left');
            console.log('after');
            scrollRightButton.addEventListener('click', function() {
                console.log('bfor');
                navbar.scrollBy({
                    left: 200,
                    behavior: 'smooth'
                });
            });

            scrollLeftButton.addEventListener('click', function() {
                navbar.scrollBy({
                    left: -200,
                    behavior: 'smooth'
                });
            });
        });
    </script>
    <script type="text/javascript">
        let body = document.body;
        const btn = document.querySelector('.btn_toggle');
        const sidebar = document.querySelector('.side-bar');
        const logo = document.querySelector('.logo');

        btn.addEventListener("click", () => {
            sidebar.classList.toggle("active");
            body.classList.toggle('active');

            if (sidebar.classList.contains('active')) {
                logo.setAttribute("style", "display:flex");
                return
            }
            logo.setAttribute("style", "display:none");
        })
        let profile = document.querySelector('.head .flex .profile');
        document.querySelector('#user-btn').onclick = () => {
            profile.classList.toggle('active');
            searchForm.classList.remove('active');
        }
        let searchForm = document.querySelector('.head .flex .form');
        document.querySelector('#search-btn').onclick = () => {
            searchForm.classList.toggle('active');
            profile.classList.remove('active');
        }


        window.onscroll = () => {
            profile.classList.remove('active');
            searchForm.classList.remove('active');

        }
        let sideBar = document.querySelector('.side-bar');
        document.querySelector('#menu-btn').onclick = () => {
            sideBar.classList.toggle('active');
            body.classList.toggle('active');

        }
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('chartEmpty').style.display = 'none';

        document.getElementById('chartYear').style.display = 'block';

        document.getElementById('btnLastYear').addEventListener('click', function() {
            document.getElementById('chartYear').style.display = 'block';
            document.getElementById('chartDay').style.display = 'none';
            document.getElementById('chartEmpty').style.display = 'none';
        });

        document.getElementById('btnLastDay').addEventListener('click', function() {
            document.getElementById('chartYear').style.display = 'none';
            document.getElementById('chartDay').style.display = 'block';
            document.getElementById('chartEmpty').style.display = 'none';
        });

        // Créer le graphique vide
        var ctxEmpty = document.getElementById('chartEmptyCanvas').getContext('2d');
        var chartEmpty = new Chart(ctxEmpty, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: '',
                    data: [],
                    backgroundColor: 'rgba(0, 0, 0, 0)',
                    borderColor: 'rgba(0, 0, 0, 0)',
                    borderWidth: 0
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            font: {
                                size: 14, // Modifier la taille de l'écriture
                                weight: 'bold', // Modifier le poids de l'écriture (par exemple : normal, bold)
                                family: "'Arial', sans-serif" // Modifier la police de l'écriture
                            }
                        }
                    },

                }
            }
        });

        // Afficher le graphique vide au chargement de la page
        document.getElementById('chartEmpty').style.display = 'block';

        // Code JavaScript pour initialiser les graphiques avec les données appropriées
        var yearChartData = {
            !!$yearChartData!!
        };
        var moisYear = Object.keys(yearChartData);
        var vuesYear = moisYear.map(m => yearChartData[m].vues);
        var likesYear = moisYear.map(m => yearChartData[m].likes);


        ///////////////////////////
        var dayChartData = {
            !!$dayChartData!!
        };
        var jourDay = Object.keys(dayChartData);
        var vuesDay = Object.values(dayChartData).map(data => data.vues);
        var likesDay = Object.values(dayChartData).map(data => data.likes);
        /////////////////////
        var ctxYear = document.getElementById('chartYearCanvas').getContext('2d');
        var chartYear = new Chart(ctxYear, {
            type: 'bar',
            data: {
                labels: moisYear,
                datasets: [{
                        label: 'Number of views',
                        data: vuesYear,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2
                    },
                    {
                        label: 'Number of likes',
                        data: likesYear,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 2
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            font: {
                                size: 14, // Modifier la taille de l'écriture
                                weight: 'bold', // Modifier le poids de l'écriture (par exemple : normal, bold)
                                family: "'Arial', sans-serif" // Modifier la police de l'écriture
                            }
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                size: 12,
                                weight: 'bold',
                                family: "'Arial', sans-serif"
                            }
                        }
                    },
                }
            }
        });

        // Initialiser le graphique du dernier day
        var ctxDay = document.getElementById('chartDayCanvas').getContext('2d');
        var chartDay = new Chart(ctxDay, {
            type: 'bar',
            data: {
                labels: jourDay,
                datasets: [{
                        label: 'Nombre de vues',
                        data: vuesDay,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Nombre de likes',
                        data: likesDay,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            font: {
                                size: 14, // Modifier la taille de l'écriture
                                weight: 'bold', // Modifier le poids de l'écriture (par exemple : normal, bold)
                                family: "'Arial', sans-serif" // Modifier la police de l'écriture
                            }
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                size: 12,
                                weight: 'bold',
                                family: "'Arial', sans-serif"
                            }
                        }
                    },

                }
            }


        });
    </script>
    @endpush