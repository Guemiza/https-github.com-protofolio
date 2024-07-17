

<?php $__env->startPush('styles_top'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/default/vendors/daterangepicker/daterangepicker.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <style>
        @font-face {
            font-display: optional;
            font-family: Netflix Sans;
            font-weight: 100;
            src: url(https://assets.nflxext.com/ffe/siteui/fonts/netflix-sans/v3/NetflixSans_W_Th.woff2) format("woff2"), url(https://assets.nflxext.com/ffe/siteui/fonts/netflix-sans/v3/NetflixSans_W_Th.woff) format("woff");
        }

        @font-face {
            font-display: optional;
            font-family: Netflix Sans;
            font-weight: 300;
            src: url(https://assets.nflxext.com/ffe/siteui/fonts/netflix-sans/v3/NetflixSans_W_Lt.woff2) format("woff2"), url(https://assets.nflxext.com/ffe/siteui/fonts/netflix-sans/v3/NetflixSans_W_Lt.woff) format("woff");
        }

        @font-face {
            font-display: optional;
            font-family: Netflix Sans;
            font-weight: 400;
            src: url(https://assets.nflxext.com/ffe/siteui/fonts/netflix-sans/v3/NetflixSans_W_Rg.woff2) format("woff2"), url(https://assets.nflxext.com/ffe/siteui/fonts/netflix-sans/v3/NetflixSans_W_Rg.woff) format("woff");
        }

        @font-face {
            font-display: optional;
            font-family: Netflix Sans;
            font-weight: 500;
            src: url(https://assets.nflxext.com/ffe/siteui/fonts/netflix-sans/v3/NetflixSans_W_Md.woff2) format("woff2"), url(https://assets.nflxext.com/ffe/siteui/fonts/netflix-sans/v3/NetflixSans_W_Md.woff) format("woff");
        }

        @font-face {
            font-display: optional;
            font-family: Netflix Sans;
            font-weight: 700;
            src: url(https://assets.nflxext.com/ffe/siteui/fonts/netflix-sans/v3/NetflixSans_W_Bd.woff2) format("woff2"), url(https://assets.nflxext.com/ffe/siteui/fonts/netflix-sans/v3/NetflixSans_W_Bd.woff) format("woff");
        }

        @font-face {
            font-display: optional;
            font-family: Netflix Sans;
            font-weight: 900;
            src: url(https://assets.nflxext.com/ffe/siteui/fonts/netflix-sans/v3/NetflixSans_W_Blk.woff2) format("woff2"), url(https://assets.nflxext.com/ffe/siteui/fonts/netflix-sans/v3/NetflixSans_W_Blk.woff) format("woff");
        }

        body {
            cursor: auto;
            color: #fff;
            font-size: 16px;
            font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif;
            background: #141414;
            line-height: 1.2;
        }

        @media  screen and (min-width: 1601px) and (max-width: 1920px) and (orientation: landscape) {
            body {
                font-size: .75vw;
            }
        }

        * {
            box-sizing: inherit;
        }

        body {
            margin: 0;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background: #141414;
            color: #fff;
            cursor: default;
            font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif;
            font-size: 10px;
            line-height: 1.2;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media  screen and (min-width: 1601px) and (max-width: 1920px) and (orientation: landscape) {
            body {
                font-size: .75vw;
            }
        }

        html {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            font-family: sans-serif;
        }

        html {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background: #141414;
            color: #fff;
            cursor: default;
            font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif;
            font-size: 10px;
            line-height: 1.2;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media  screen and (min-width: 1601px) and (max-width: 1920px) and (orientation: landscape) {
            html {
                font-size: .75vw;
            }
        }

        .previewModal--player-titleTreatmentWrapper {
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .previewModal--player-titleTreatmentWrapper {
            background: linear-gradient(0deg, #181818, transparent 50%);
        }

        *,
        .previewModal--wrapper ::after,
        .previewModal--wrapper ::before {
            box-sizing: inherit;
        }

        .previewModal--wrapper *,
        .previewModal--wrapper ::after,
        .previewModal--wrapper ::before {
            box-sizing: inherit;
        }

        .previewModal--player-titleTreatment-left {
            bottom: 5%;
            left: 3em;
            position: absolute;
            width: 40%;
        }

        .previewModal-audioToggle {
            border-radius: 50%;
            position: absolute;
            z-index: 1;
        }

        .previewModal-audioToggle {
            bottom: 5%;
            overflow: hidden;
            right: 1.25em;
        }

        .previewModal-audioToggle.detail-modal {
            bottom: 10%;
            margin-bottom: 1em;
            right: 3em;
        }

        img {
            border: 0;
        }

        .previewModal--player-titleTreatment-logo {
            margin-bottom: 1.5em;
        }

        .buttonControls--container {
            align-items: center;
            display: flex;
            margin-bottom: 1em;
            min-height: 2em;
            position: relative;
            z-index: 2;
        }

        .buttonControls--messaging {
            height: 20px;
        }

        a {
            background-color: transparent;
        }

        a {
            color: #fff;
            cursor: pointer;
            text-decoration: none;
        }

        .buttonControls--container>* {
            margin: .25em;
        }

        a:active,
        a:hover {
            outline: 0;
        }

        .ltr-bjn8wh {
            position: relative;
        }

        .ltr-179t5g5 {
            position: relative;
            z-index: 1;
        }

        button {
            color: inherit;
            font: inherit;
            margin: 0;
        }

        button {
            overflow: visible;
        }

        button {
            text-transform: none;
        }

        button {
            -webkit-appearance: button;
            cursor: pointer;
        }

        .ltr-11vo9g5 {
            -webkit-box-align: center;
            align-items: center;
            appearance: none;
            border: 0px;
            cursor: pointer;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            opacity: 1;
            padding: 0.8rem;
            position: relative;
            user-select: none;
            will-change: background-color, color;
            word-break: break-word;
            white-space: nowrap;
            border-radius: 50%;
        }

        .ltr-11vo9g5.hasIcon {
            padding-left: 1.6rem;
            padding-right: 1.6rem;
        }

        .ltr-11vo9g5.hasIcon {
            padding-left: 0.8rem;
            padding-right: 0.8rem;
        }

        .ltr-11vo9g5.round.color-supplementary {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.7);
            color: white;
        }

        button.color-supplementary:not(.hasLabel) {
            background-color: rgba(42, 42, 42, .6);
            border-color: hsla(0, 0%, 100%, .5);
            border-width: 2px;
        }

        button:not(.hasLabel):not(.dropdown-toggle) {
            max-height: 42px;
            max-width: 42px;
            min-height: 32px;
            min-width: 32px;
        }

        .previewModal--wrapper button.color-supplementary:not(.hasLabel):hover {
            background-color: #2a2a2a;
            border-color: #fff;
        }

        .ltr-11vo9g5.round.color-supplementary:not(:disabled):hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .ltr-podnco {
            -webkit-box-align: center;
            align-items: center;
            appearance: none;
            border: 0px;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            opacity: 1;
            padding: 0.8rem;
            position: relative;
            user-select: none;
            will-change: background-color, color;
            word-break: break-word;
            white-space: nowrap;
        }

        .ltr-podnco.color-primary {
            background-color: white;
            color: black;
        }

        .ltr-podnco.hasLabel {
            padding-left: 2.4rem;
            padding-right: 2.4rem;
        }

        .ltr-podnco.hasIcon {
            padding-left: 1.6rem;
            padding-right: 1.6rem;
        }

        .ltr-podnco.hasLabel.hasIcon {
            padding-left: 2rem;
            padding-right: 2.4rem;
        }

        button.hasLabel {
            max-height: 42px;
            min-height: 32px;
        }

        .previewModal--wrapper button.color-primary:hover {
            background-color: #e6e6e6 !important;
            border-color: #fff;
        }

        .ltr-podnco.color-primary:not(:disabled):hover {
            background-color: rgba(255, 255, 255, 0.75);
        }

        .ltr-126oqy {
            -webkit-box-align: center;
            align-items: center;
            appearance: none;
            border: 0px;
            cursor: pointer;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            opacity: 1;
            padding: 0.8rem;
            position: relative;
            user-select: none;
            will-change: background-color, color;
            word-break: break-word;
            white-space: nowrap;
            border-radius: 50%;
        }

        .ltr-126oqy.hasIcon {
            padding-left: 1.6rem;
            padding-right: 1.6rem;
        }

        .ltr-126oqy.hasIcon {
            padding-left: 0.8rem;
            padding-right: 0.8rem;
        }

        .ltr-126oqy.round.color-supplementary {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.7);
            color: white;
        }

        .ltr-126oqy:hover {
            border-color: rgba(255, 255, 255, 0.5) !important;
        }

        .ltr-126oqy.round.color-supplementary:not(:disabled):hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .ltr-1st24vv {
            line-height: 0;
        }

        .ltr-1npqywr {
            box-sizing: border-box;
            display: flex;
            height: 100%;
            position: relative;
            width: 100%;
        }

        .ltr-1vh9doa {
            -webkit-font-smoothing: antialiased;
            display: block;
            font-size: 1.6rem;
            font-weight: 500;
            line-height: 2.4rem;
        }

        .ltr-iyulz3 {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
        }

        .ltr-iyulz3.small {
            height: 1.8rem;
            width: 1.8rem;
        }

        .ltr-iyulz3.medium {
            height: 2.4rem;
            width: 2.4rem;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        .ltr-iyulz3 svg {
            height: 100%;
            width: 100%;
        }

        button.color-supplementary:not(.hasLabel) svg {
            width: 2rem;
        }

        button.color-supplementary:not(.hasLabel) svg {
            width: auto;
        }


        /* These were inline style tags. Uses id+class to override almost everything */
        #style-MU6mC.style-MU6mC {
            opacity: 1;
        }

        #style-h4Mms.style-h4Mms {
            width: 100%;
            opacity: 1;
        }

        #style-UeBoC.style-UeBoC {
            width: 1rem;
        }

        #style-azWo4.style-azWo4 {
            opacity: 0.4;
            display: block;
        }
    </style>
    <style>
        <blade import|%20url(%26%2339%3Bhttps%3A%2F%2Ffonts.googleapis.com%2Fcss%3Ffamily%3DPoppins%3A400%2C500%2C600%2C700%26display%3Dswap%26%2339%3B)%3B%0D>.container .wrapper {
            margin-top: 63px;
            position: relative;
            height: 319px;

            width: 100%;
            border-radius: 10px;
            background: #fff;
            border: 2px dashed #c2cdda;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .wrapper.active {
            /* border: none; */
            display: block;
        }

        .wrapper .image {
            position: absolute;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .wrapper .icon {
            font-size: 100px;
            color: #9658fe;
        }

        .wrapper .text {
            font-size: 20px;
            font-weight: 500;
            color: #5B5B7B;
        }

        .wrapper #cancel-btn i {
            position: absolute;
            font-size: 20px;
            right: 15px;
            top: 15px;
            color: #9658fe;
            cursor: pointer;
            display: none;
        }

        .wrapper.active #cancel-btn i {
            display: block;
        }

        .wrapper #cancel-btn i:hover {
            color: #e74c3c;
        }

        .wrapper .file-name {
            position: absolute;
            bottom: 100px;
            width: 100%;
            padding: 8px 0;
            font-size: 18px;
            color: #fff;
            display: none;
            background: linear-gradient(135deg, #3a8ffe 0%, #9658fe 100%);
        }

        .wrapper.active .file-name {
            display: block;
        }

        .container #custom-btn {
            margin-top: 30px;
            display: block;
            width: 100%;
            height: 50px;
            border: none;
            outline: none;
            border-radius: 25px;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            cursor: pointer;
            background: linear-gradient(135deg, #3a8ffe 0%, #9658fe 100%);
        }

        .container #upload-btn {
            margin-top: 30px;
            display: block;
            width: 100%;
            height: 50px;
            border: none;
            outline: none;
            border-radius: 25px;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            cursor: pointer;
            background: linear-gradient(135deg, #3a8ffe 0%, #9658fe 100%);
        }
    </style>
    <style>
        #navbar22 {
            overflow-x: auto;
            white-space: nowrap;
            width: 89%;
            margin-left: 10px;
            margin-right: 49px;
        }

        .nav-pills {
            display: inline-block;
        }

        .nav-scroll {
            overflow-x: auto;
            white-space: nowrap;
        }

        .scroll-menu-container .nav-item {
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
            background-color: #22bec8;
        }
    </style>
    <style>
        .form-control {
            display: block;
            width: 100%;
            height: 2.5rem;
            padding: 0.5rem 1rem;
            font-family: "main-font-family";
            font-size: 0.75rem;
            font-weight: normal;
            line-height: 1.25;
            color: #343434;
            background-color: #e5edf7;
            background-clip: padding-box;
            border: 1px solid #ececec;
            border-radius: 0.5rem;
            box-shadow: none;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

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
            margin-right: 60px;
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

        <blade media|%20(min-width%3A%201920px)%20%7B%0D>html {
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

        <blade media|%20(min-width%3A%201675px)%20%7B%0D>.srp {
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

        .scroll-menu-wrapper {
            overflow: hidden;
            /* Hide the scrollbar */
            width: 100%;
        }

        .scroll-menu-container {
            display: flex;

            padding: 0px;
            display: flex;
            overflow-x: auto;
            /* Enable horizontal scrolling */
            white-space: nowrap;
            scroll-behavior: smooth;
            padding: 10px 7px;
            /* Adjust this value based on the size of your arrows */
        }

        .scroll-menu-item1 {
            font-size: initial;
            font-family: sans-serif;
            display: inline-block;
            color: #161515;
            padding: 5px 15px;
            margin-right: 5px;
            margin-left: 5px;
            background: #e9e8e8;
            border-radius: 15px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .scroll-menu-item1:hover {
            background: #1d3b65;
            color: #fff;
        }

        .scroll-menu-item1:last-child {
            margin-right: 0;
            /* Remove margin from the last item for aesthetic reasons */
        }

        .scroll-menu-item1.active {
            background: #1d3b65;
            color: #fff;
        }

        /* Webkit browsers */
        .scroll-menu-container::-webkit-scrollbar {
            display: none;
            /* Hide scrollbar for Chrome, Safari and Opera */
        }

        .scroll-menu-container {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .scroll-left,
        .scroll-right {
            position: absolute;
            top: 8px;
            bottom: 0;
            width: 30px;
            /* Width of the arrow buttons */
            color: black;
            text-align: center;
            line-height: 30px;
            /* Adjust line height to vertically center the arrows */
            cursor: pointer;
            background: #e0f2f1;
            /* Circle background color */

            height: 30px;
            border-radius: 80%;
            /* This makes the div a circle */

            user-select: none;
            /* Prevents the arrows from being selected */

        }

        .scroll-left {
            left: 0;
        }

        .scroll-right {
            right: 5%;
        }

        .video-container {

            position: relative;
        }

        .video-container video {
            width: 100%;
            height: 100%;
            position: absolute;
            object-fit: cover;
            z-index: 0;
        }

        /* Just styling the content of the div, the *magic* in the previous rules */
        .video-container .caption {
            z-index: 1;

            text-align: center;
            color: #dc0000;
            padding: 10px;
        }

        @media  screen and (min-width: 1601px) and (max-width: 1920px) and (orientation: landscape) {
            html {
                font-size: .75vw;
            }
        }

        .previewModal--detailsMetadata {

            display: grid;
            position: relative;
            width: 100%;
        }

        .previewModal--detailsMetadata.detail-modal {
            -moz-column-gap: 2em;
            column-gap: 2em;
            grid-template-columns: minmax(0, 2fr) minmax(0, 1fr);
        }

        *,
        .previewModal--wrapper ::after,
        .previewModal--wrapper ::before {
            box-sizing: inherit;
        }

        .previewModal--wrapper *,
        .previewModal--wrapper ::after,
        .previewModal--wrapper ::before {
            box-sizing: inherit;
        }

        .previewModal--detailsMetadata.detail-modal .previewModal--detailsMetadata-right {
            display: flex;
            flex-direction: column;
        }

        .previewModal--detailsMetadata .previewModal--detailsMetadata-left> :not(.new-badge) {
            margin-bottom: .5em;
        }

        .previewModal--detailsMetadata .previewModal--detailsMetadata-left .previewModal--detailsMetadata-info {
            margin: .8em 0;
        }

        .ltr-s5xdrg {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
        }

        .previewModal--detailsMetadata .previewModal--detailsMetadata-left .previewModal-episodeDetails {
            font-size: 20px;
            margin-top: 1.25em;
        }

        .previewModal--text {
            font-size: 16px;
            line-height: 24px;
        }

        .previewModal--detailsMetadata .previewModal--detailsMetadata-left .preview-modal-synopsis {
            font-size: 16px;
            line-height: 26px;
        }

        .previewModal--tags {
            font-size: 14px;
            line-height: 20px;
            margin: .5em .5em .5em 0;
            word-break: break-word;
        }

        b {
            font-weight: 700;
        }

        b {
            font-weight: 500;
        }

        .previewModal--container:focus-visible {
            outline: #181818;
        }

        .previewModal--tags .previewModal--tags-label {
            color: #181818;
        }

        .previewModal--tags .tag-item {
            color: #ddd;
            cursor: pointer;
            margin: 0;
            outline-color: #181818;
        }

        .previewModal--tags .tag-item:hover {
            text-decoration: underline;
        }

        .previewModal--tags .tag-item:hover,
        .previewModal--tags .tag-more:hover {
            text-decoration: underline;
        }

        .previewModal--tags .tag-more {
            color: #ddd;
            cursor: pointer;
            margin: 0;
            outline-color: #181818;
        }

        .previewModal--tags .tag-more {
            font-style: italic;
        }

        .ltr-7t0zr9 {
            margin-top: 0.1rem;
            margin-bottom: 8px;
            font-size: 14px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.5;
        }

        a {
            background-color: transparent;
        }

        a {
            color: #181818;
            cursor: pointer;
            text-decoration: none;
        }

        a:active,
        a:hover {
            outline: 0;
        }

        .videoMetadata--container {
            align-items: center;
            color: #fff;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        .ltr-1q4vxyr {
            margin-left: 8px;
        }

        .videoMetadata--container .videoMetadata--first-line {
            margin: .25em .5em .25em 0;
            max-width: 100%;
        }

        .videoMetadata--container .videoMetadata--second-line {
            align-items: center;
            color: #1f3b64;
            display: flex;
            flex-wrap: wrap;
        }

        .maturity-rating {
            display: inline-block;
        }

        .match-score-wrapper {
            color: #fff;
        }

        .videoMetadata--container .videoMetadata--second-line>* {
            margin-right: .5em;
        }

        .videoMetadata--container .videoMetadata--second-line .duration {
            white-space: nowrap;
        }

        .player-feature-badge {
            border: 1px solid hsla(0, 0%, 100%, .4);
            border-radius: 3px;
            color: hsla(0, 0%, 100%, .9);
            font-size: .7em;
            padding: 0 .5em;
            white-space: nowrap;
        }

        .videoMetadata--container .videoMetadata--second-line>.player-feature-badge {
            margin-right: .715em;
        }

        .ltr-bjn8wh {
            position: relative;
        }

        .maturity-rating .maturity-number {
            border: 1px solid hsla(0, 0%, 100%, .4);
            font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif;
            overflow: hidden;
            padding: 0 .4em;
            text-overflow: ellipsis;
            text-transform: uppercase;
            unicode-bidi: normal
                /*!rtl:plaintext*/
            ;
            white-space: nowrap;
        }

        .match-score-wrapper .rating-inner {
            display: flex;
            transition: margin-right .55s cubic-bezier(.86, 0, .07, 1) 1.65s;
        }

        .ltr-x1hvkl {
            display: flex;
            gap: 0.75em;
        }

        .match-score-wrapper .meta-thumb-container {
            display: inline-block;
            margin-bottom: -2px;
        }

        .match-score-wrapper .match-score {
            color: #46d369;
            display: inline-block;
            font-weight: 500;
            white-space: nowrap;
        }

        .videoMetadata--container .match-score {
            color: #46d369;
            white-space: unset;
        }

        .match-score-wrapper .show-match-score .match-score {
            max-width: 300px;
            opacity: 1;
            transition: max-width .55s cubic-bezier(.86, 0, .07, 1) 1.65s, opacity .15s linear 2.2s;
        }

        .ltr-x1hvkl>div {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
        }

        .svg-icon {
            height: 100%;
            pointer-events: none;
            width: 100%;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        .match-score-wrapper .meta-thumb-container svg {
            height: .9em !important;
            width: .9em !important;
        }

        .match-score-wrapper .show-match-score .thumb-down svg {
            height: 0 !important;
            opacity: 0;
            transition: width .55s cubic-bezier(.86, 0, .07, 1) 1.1s, opacity .15s linear .95s;
            width: 0 !important;
        }

        .match-score-wrapper .show-match-score .thumb-up svg {
            height: 0 !important;
            opacity: 0;
            transition: width .55s cubic-bezier(.86, 0, .07, 1) 1.1s, opacity .15s linear .95s;
            width: 0 !important;
        }

        .moreLikeThis--wrapper {
            background-color: #e4f4f6;
        }

        .about-wrapper {
            background-color: #181818;
            padding-bottom: 2em;
        }

        .previewModal--detailsMetadata.detail-modal .previewModal--detailsMetadata-right {
            display: flex;
            flex-direction: column;
        }

        h3 {
            font-weight: 500;
        }

        .previewModal--section-header {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 20px;
            margin-top: 48px;
        }

        .section-container.collapsed {
            max-height: 50em;
            overflow: hidden;
        }

        .section-divider {
            border-bottom: 2px solid #404040;
            box-shadow: none;
            display: flex;
            height: 6em;
            justify-content: center;
            margin: auto;
            position: relative;
            width: 100%;
        }

        .section-divider.collapsed {
            background-image: linear-gradient(0deg, #181818 0, hsla(0, 0%, 9%, .7) 20%, hsla(0, 0%, 9%, .4) 30%, transparent 50%);
            margin-top: -6em;
        }

        .previewModal--detailsMetadata .previewModal--detailsMetadata-left> :not(.new-badge) {
            margin-bottom: .5em;
        }

        .previewModal--detailsMetadata .previewModal--detailsMetadata-left .previewModal--detailsMetadata-info {
            margin: .8em 0;
        }

        .ltr-s5xdrg {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
        }

        .previewModal--text {
            font-size: 16px;
            line-height: 24px;
        }

        .previewModal--detailsMetadata .previewModal--detailsMetadata-left .preview-modal-synopsis {
            font-size: 16px;
            line-height: 26px;
        }

        .previewModal--tags {
            font-size: 14px;
            line-height: 20px;
            margin: .5em .5em .5em 0;
            word-break: break-word;
        }

        .moreLikeThis--container {
            grid-gap: 1em;
            align-items: stretch;
            display: grid;
            justify-items: stretch;
        }

        @media (min-aspect-ratio: 1 / 3) {
            .moreLikeThis--container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-aspect-ratio: 7 / 9) {
            .moreLikeThis--container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        button {
            color: inherit;
            font: inherit;
            margin: 0;
        }

        button {
            overflow: visible;
        }

        button {
            text-transform: none;
        }

        button {
            -webkit-appearance: button;
            cursor: pointer;
        }

        .ltr-11vo9g5 {
            -webkit-box-align: center;
            align-items: center;
            appearance: none;
            border: 0px;
            cursor: pointer;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            opacity: 1;
            padding: 0.8rem;
            position: relative;
            user-select: none;
            will-change: background-color, color;
            word-break: break-word;
            white-space: nowrap;
            border-radius: 50%;
        }

        .section-divider .section-expandButton {
            bottom: 0;
            position: absolute;
            transform: translateY(50%);
        }

        .ltr-11vo9g5.hasIcon {
            padding-left: 1.6rem;
            padding-right: 1.6rem;
        }

        .ltr-11vo9g5.hasIcon {
            padding-left: 0.8rem;
            padding-right: 0.8rem;
        }

        .section-divider .section-expandButton.color-supplementary {
            background-color: #2a2a2a;
        }

        .ltr-11vo9g5.round.color-supplementary {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.7);
            color: white;
        }

        button.color-supplementary:not(.hasLabel) {
            background-color: rgba(42, 42, 42, .6);
            border-color: hsla(0, 0%, 100%, .5);
            border-width: 2px;
        }

        button:not(.hasLabel):not(.dropdown-toggle) {
            max-height: 42px;
            max-width: 42px;
            min-height: 32px;
            min-width: 32px;
        }

        .previewModal--wrapper button.color-supplementary:not(.hasLabel):hover {
            background-color: #2a2a2a;
            border-color: #fff;
        }

        .section-divider .section-expandButton.color-supplementary:not(:disabled):hover {
            background-color: #545454;
        }

        .ltr-11vo9g5.round.color-supplementary:not(:disabled):hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .about-wrapper .about-header .previewModal--section-header {
            font-weight: 400;
        }

        .about-wrapper .maturity-rating-wrapper {
            display: flex;
            font-size: 14px;
            line-height: 20px;
            margin-top: .5em;
        }

        .previewModal--tags .previewModal--tags-label {
            color: #777;
        }

        .previewModal--tags .tag-item {
            color: #ddd;
            cursor: pointer;
            margin: 0;
            outline-color: #fff;
        }

        .previewModal--tags .tag-item:hover {
            text-decoration: underline;
        }

        .previewModal--tags .tag-item:hover,
        .previewModal--tags .tag-more:hover {
            text-decoration: underline;
        }

        .previewModal--tags .tag-more {
            color: #ddd;
            cursor: pointer;
            margin: 0;
            outline-color: #fff;
        }

        .previewModal--tags .tag-more {
            font-style: italic;
        }

        .titleCard--container {
            border-radius: .25em;
            cursor: pointer;
            margin: .5em;
            min-height: 22em;
            overflow: hidden;
            position: relative;
        }

        @media (min-aspect-ratio: 1 / 3) {
            .titleCard--container {
                flex: 0 0 47%;
                min-height: 22em;
            }
        }

        @media (min-aspect-ratio: 7 / 9) {
            .titleCard--container {
                flex: 0 0 31%;
                min-height: 22em;
            }
        }

        .moreLikeThis--container .titleCard--container {
            height: 100%;
            margin: .1em;
        }

        .ltr-1st24vv {
            line-height: 0;
        }

        strong {
            font-weight: 700;
        }

        strong {
            font-weight: 500;
        }

        .about-wrapper .maturity-rating-wrapper span.title {
            color: #777;
            margin-right: 1em;
            white-space: nowrap;
        }

        .maturity-rating {
            display: inline-block;
        }

        .ltr-7t0zr9 {
            margin-top: 0.1rem;
            margin-bottom: 8px;
            font-size: 14px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.5;
        }

        a {
            background-color: transparent;
        }

        a {
            color: #fff;
            cursor: pointer;
            text-decoration: none;
        }

        a:active,
        a:hover {
            outline: 0;
        }

        .titleCard--container .titleCard-imageWrapper {
            overflow: hidden;
            position: relative;
        }

        .titleCard--container .titleCard-imageWrapper.has-duration::before {
            background-image: linear-gradient(198deg, rgba(0, 0, 0, .9), hsla(0, 0%, 9%, .5) 20%, transparent 28%);
            bottom: 0;
            content: "";
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }

        .titleCard--container .titleCard--metadataWrapper {
            background-color: #7cb7dc7a;
            min-height: 100%;
        }

        .ltr-iyulz3 {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
        }

        .ltr-iyulz3.small {
            height: 1.8rem;
            width: 1.8rem;
        }

        .about-wrapper .maturity-rating>* {
            display: inline-block;
            vertical-align: middle;
        }

        .maturity-rating .maturity-number {
            border: 1px solid hsla(0, 0%, 100%, .4);
            font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif;
            overflow: hidden;
            padding: 0 .4em;
            text-overflow: ellipsis;
            text-transform: uppercase;
            unicode-bidi: normal
                /*!rtl:plaintext*/
            ;
            white-space: nowrap;
        }

        .about-wrapper p {
            margin: 0;
        }

        .about-wrapper .maturity-rating>*+* {
            margin-left: 1em;
        }

        .videoMetadata--container {
            align-items: center;
            color: #fff;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        .ltr-1q4vxyr {
            margin-left: 8px;
        }

        .titleCard--container .titleCard-imageWrapper .titleCard-playIcon {
            align-items: center;
            bottom: 0;
            display: flex;
            justify-content: center;
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: opacity .2s ease-in;
        }

        .titleCard--container:hover .titleCard-imageWrapper .titleCard-playIcon {
            opacity: 1;
        }

        .titleCard--container .titleCard-imageWrapper .duration {
            position: absolute;
            right: 5%;
            top: 5%;
            white-space: nowrap;
        }

        .previewModal--small-text {
            font-size: 14px;
            line-height: 20px;
        }

        .titleCard--container .titleCard--metadataWrapper .titleCard-synopsis {
            color: #d2d2d2;
            margin: 0;
            padding: 0 1em 1em;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        .ltr-iyulz3 svg {
            height: 100%;
            width: 100%;
        }

        button.color-supplementary:not(.hasLabel) svg {
            width: 2rem;
        }

        button.color-supplementary:not(.hasLabel) svg {
            width: auto;
        }

        .videoMetadata--container .videoMetadata--first-line {
            margin: .25em .5em .25em 0;
            max-width: 100%;
        }

    

        img {
            border: 0;
        }

        .titleCard--container .titleCard-imageWrapper img {
            display: block;
            width: 100%;
        }

        .titleCard--container .titleCard-imageWrapper .titleCard-playIcon .titleCard-playSVG {
            background-color: rgba(30, 30, 20, .5);
            border: 1px solid #fff;
            border-radius: 2em;
            height: 3em;
            padding: .5em;
            width: 3em;
        }

        .videoMetadata--container-container {
            align-items: center;
            display: flex;
            justify-content: space-between;
            padding: 1em;
        }

        .match-score-wrapper {
            color: #fff;
        }

        .videoMetadata--container .videoMetadata--second-line>* {
            margin-right: .5em;
        }

        .videoMetadata--container .videoMetadata--second-line .duration {
            white-space: nowrap;
        }

        .player-feature-badge {
            border: 1px solid #1f3b64;
            border-radius: 3px;
            color: #1f3b64;
            font-size: .7em;
            padding: 0 .5em;
            white-space: nowrap;
        }

        .videoMetadata--container .videoMetadata--second-line>.player-feature-badge {
            margin-right: .715em;
        }

        .ltr-bjn8wh {
            position: relative;
        }

        .moreLikeThis--container .videoMetadata--container {
            padding: 1em;
        }

        .videoMetadata--container-container .videoMetadata--container {
            min-width: 85%;
            padding: 0;
        }

        .videoMetadata--container.videoMetadata--two-lines {
            align-items: flex-start;
            flex-direction: column;
            justify-content: center;
        }

        .moreLikeThis--container .videoMetadata--container-container .videoMetadata--container {
            min-width: unset;
            padding: 0;
        }

        .match-score-wrapper .rating-inner {
            display: flex;
            transition: margin-right .55s cubic-bezier(.86, 0, .07, 1) 1.65s;
        }

        .ltr-x1hvkl {
            display: flex;
            gap: 0.75em;
        }

        .match-score-wrapper .meta-thumb-container {
            display: inline-block;
            margin-bottom: -2px;
        }

        .match-score-wrapper .match-score {
            color: #46d369;
            display: inline-block;
            font-weight: 500;
            white-space: nowrap;
        }

        .videoMetadata--container .match-score {
            color: #46d369;
            white-space: unset;
        }

        .match-score-wrapper .show-match-score .match-score {
            max-width: 300px;
            opacity: 1;
            transition: max-width .55s cubic-bezier(.86, 0, .07, 1) 1.65s, opacity .15s linear 2.2s;
        }

        .ltr-x1hvkl>div {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
        }

        .titleCard--container .titlecard-videoMetadata .year {
            order: 2;
        }

        .svg-icon {
            height: 100%;
            pointer-events: none;
            width: 100%;
        }

        .match-score-wrapper .meta-thumb-container svg {
            height: .9em !important;
            width: .9em !important;
        }

        .match-score-wrapper .show-match-score .thumb-down svg {
            height: 0 !important;
            opacity: 0;
            transition: width .55s cubic-bezier(.86, 0, .07, 1) 1.1s, opacity .15s linear .95s;
            width: 0 !important;
        }

        .match-score-wrapper .show-match-score .thumb-up svg {
            height: 0 !important;
            opacity: 0;
            transition: width .55s cubic-bezier(.86, 0, .07, 1) 1.1s, opacity .15s linear .95s;
            width: 0 !important;
        }

        .ltr-18tpq4v {
            height: 2em;
            width: 2em;
        }


        /* These were inline style tags. Uses id+class to override almost everything */
        #style-cKq9a.style-cKq9a {
            max-height: 65em;
        }
    </style>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal55">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal55" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="height: 1500px;">
            <div class="modal-content" style="width: 774px;margin-right: -176px;">
                <div class="modal-header">

                </div>
                <div class="modal-body">
                    <div class="previewModal--player-titleTreatmentWrapper style-MU6mC video-container" id="style-MU6mC"
                        style="height: 383px;">
                        <video autoplay muted loop>
                            <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                                type="video/mp4" />
                        </video>
                        <div
                            class="previewModal--player-titleTreatment previewModal--player-titleTreatment-left detail-modal caption">
                            <img class="previewModal--player-titleTreatment-logo style-h4Mms"
                                src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABZFc5S-1pYkMVNxSG-V5Lvjf7zUyxZ1mZ7krKCq5kJO5T92a5gPx3fOPDLfA-cPfUhFzLvD0AatqU0x9gIm0UdBrKxjb5Kfiw9Vyrpfgncs.webp?r=2a7"
                                id="style-h4Mms">
                            <div class="buttonControls--container"><a
                                    href="/watch/70212837?trackId=14292320&amp;tctx=1%2C1%2Cf5c951ec-3ffc-4a70-aa68-66739800cede-145275511%2CNES_B87EB2B779808907CADBC82FF8CAB4-1D364BE54DB1AF-8BCA5C840C_p_1717754928337%2CNES_B87EB2B779808907CADBC82FF8CAB4_p_1717754928337%2C%2C%2C%2C%2CVideo%3A70143860%2C"><button
                                        class="color-primary hasLabel hasIcon ltr-podnco" type="button">
                                        <div class="ltr-1st24vv">
                                            <div class="medium ltr-iyulz3"><svg xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" width="24" height="24" viewBox="0 0 24 24"
                                                    role="img" data-icon="PlayStandard" aria-hidden="true">
                                                    <path
                                                        d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                        fill="currentColor"></path>
                                                </svg></div>
                                        </div>
                                        <div class="ltr-1npqywr style-UeBoC" id="style-UeBoC"></div><span
                                            class="ltr-1vh9doa">Play</span>
                                    </button></a>
                                <div class="ltr-bjn8wh">
                                    <div><button class="color-supplementary hasIcon round ltr-11vo9g5" type="button">
                                            <div class="ltr-1st24vv">
                                                <div class="small ltr-iyulz3"><svg xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" width="24" height="24" viewBox="0 0 24 24"
                                                        role="img" data-icon="PlusStandard" aria-hidden="true">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                            fill="currentColor"></path>
                                                    </svg></div>
                                            </div>
                                        </button></div>
                                </div>
                                <div class="ltr-179t5g5"><button class="color-supplementary hasIcon round ltr-126oqy"
                                        type="button">
                                        <div class="ltr-1st24vv">
                                            <div class="small ltr-iyulz3"><svg xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" width="24" height="24" viewBox="0 0 24 24"
                                                    role="img" data-icon="ThumbsUpStandard" aria-hidden="true">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.696 8.7732C10.8947 8.45534 11 8.08804 11 7.7132V4H11.8377C12.7152 4 13.4285 4.55292 13.6073 5.31126C13.8233 6.22758 14 7.22716 14 8C14 8.58478 13.8976 9.1919 13.7536 9.75039L13.4315 11H14.7219H17.5C18.3284 11 19 11.6716 19 12.5C19 12.5929 18.9917 12.6831 18.976 12.7699L18.8955 13.2149L19.1764 13.5692C19.3794 13.8252 19.5 14.1471 19.5 14.5C19.5 14.8529 19.3794 15.1748 19.1764 15.4308L18.8955 15.7851L18.976 16.2301C18.9917 16.317 19 16.4071 19 16.5C19 16.9901 18.766 17.4253 18.3994 17.7006L18 18.0006L18 18.5001C17.9999 19.3285 17.3284 20 16.5 20H14H13H12.6228C11.6554 20 10.6944 19.844 9.77673 19.5382L8.28366 19.0405C7.22457 18.6874 6.11617 18.5051 5 18.5001V13.7543L7.03558 13.1727C7.74927 12.9688 8.36203 12.5076 8.75542 11.8781L10.696 8.7732ZM10.5 2C9.67157 2 9 2.67157 9 3.5V7.7132L7.05942 10.8181C6.92829 11.0279 6.72404 11.1817 6.48614 11.2497L4.45056 11.8313C3.59195 12.0766 3 12.8613 3 13.7543V18.5468C3 19.6255 3.87447 20.5 4.95319 20.5C5.87021 20.5 6.78124 20.6478 7.65121 20.9378L9.14427 21.4355C10.2659 21.8094 11.4405 22 12.6228 22H13H14H16.5C18.2692 22 19.7319 20.6873 19.967 18.9827C20.6039 18.3496 21 17.4709 21 16.5C21 16.4369 20.9983 16.3742 20.995 16.3118C21.3153 15.783 21.5 15.1622 21.5 14.5C21.5 13.8378 21.3153 13.217 20.995 12.6883C20.9983 12.6258 21 12.5631 21 12.5C21 10.567 19.433 9 17.5 9H15.9338C15.9752 8.6755 16 8.33974 16 8C16 6.98865 15.7788 5.80611 15.5539 4.85235C15.1401 3.09702 13.5428 2 11.8377 2H10.5Z"
                                                        fill="currentColor"></path>
                                                </svg></div>
                                        </div>
                                    </button></div>
                            </div>
                            <div class="buttonControls--messaging"></div>
                        </div>
                        <div class="previewModal-audioToggle detail-modal style-azWo4" id="style-azWo4">
                            <div><button class="color-supplementary hasIcon round ltr-11vo9g5" type="button">
                                    <div class="ltr-1st24vv">
                                        <div class="small ltr-iyulz3"><svg xmlns="http://www.w3.org/2000/svg"
                                                fill="none" width="24" height="24" viewBox="0 0 24 24"
                                                role="img" data-icon="VolumeHighStandard" aria-hidden="true">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M24 12C24 8.28693 22.525 4.72597 19.8995 2.10046L18.4853 3.51468C20.7357 5.76511 22 8.81736 22 12C22 15.1826 20.7357 18.2348 18.4853 20.4852L19.8995 21.8995C22.525 19.2739 24 15.713 24 12ZM11 3.99995C11 3.59549 10.7564 3.23085 10.3827 3.07607C10.009 2.92129 9.57889 3.00685 9.29289 3.29285L4.58579 7.99995H1C0.447715 7.99995 0 8.44767 0 8.99995V15C0 15.5522 0.447715 16 1 16H4.58579L9.29289 20.7071C9.57889 20.9931 10.009 21.0786 10.3827 20.9238C10.7564 20.7691 11 20.4044 11 20V3.99995ZM5.70711 9.70706L9 6.41417V17.5857L5.70711 14.2928L5.41421 14H5H2V9.99995H5H5.41421L5.70711 9.70706ZM16.0001 12C16.0001 10.4087 15.368 8.88254 14.2428 7.75732L12.8285 9.17154C13.5787 9.92168 14.0001 10.9391 14.0001 12C14.0001 13.0608 13.5787 14.0782 12.8285 14.8284L14.2428 16.2426C15.368 15.1174 16.0001 13.5913 16.0001 12ZM17.0709 4.92889C18.9462 6.80426 19.9998 9.3478 19.9998 12C19.9998 14.6521 18.9462 17.1957 17.0709 19.071L15.6567 17.6568C17.157 16.1565 17.9998 14.1217 17.9998 12C17.9998 9.87823 17.157 7.8434 15.6567 6.34311L17.0709 4.92889Z"
                                                    fill="currentColor"></path>
                                            </svg></div>
                                    </div>
                                </button></div>
                        </div>
                    </div>
                   
                    <div class="detail-modal-container">
                        <div>
                            <div>
                                <div class="previewModal--detailsMetadata detail-modal">
                                    <div class="previewModal--detailsMetadata-left">
                                        <div class="previewModal--detailsMetadata-info">
                                            <div>
                                                <div>
                                                    <div class="videoMetadata--container">
                                                        <div class="videoMetadata--first-line"><span
                                                                class="match-score-wrapper">
                                                                <div class="show-match-score rating-inner">
                                                                    <div class="meta-thumb-container thumb-down"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" width="24" height="24"
                                                                            viewBox="0 0 24 24" role="img"
                                                                            data-icon="ThumbsDownFillStandard"
                                                                            aria-hidden="true"
                                                                            class="thumb thumb-down-filled svg-icon svg-icon-thumb-thumb-down-filled">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M10.593 17.7442L10.687 18.4959C10.8658 19.9265 12.0819 21 13.5236 21C13.7867 21 14 20.7867 14 20.5236V17.2868C14 17.0994 14.0527 16.9157 14.152 16.7568L16.0926 13.6519C16.3548 13.2323 16.7633 12.9248 17.2391 12.7888L19.2747 12.2072C19.704 12.0846 20 11.6922 20 11.2457V5.68387C20 5.30618 19.6938 5 19.3161 5C18.126 5 16.9565 4.68942 15.9232 4.09895L15.75 4C14.6032 3.34469 13.3053 3 11.9844 3H11H8H7.5C6.67157 3 6 3.67157 6 4.5C6 4.88418 6.14443 5.23462 6.38195 5.5H6C5.17157 5.5 4.5 6.17157 4.5 7C4.5 7.53991 4.78525 8.0132 5.21328 8.27737C4.522 8.41118 4 9.01963 4 9.75C4 10.5784 4.67157 11.25 5.5 11.25H5.67055C5.26638 11.5187 5 11.9783 5 12.5C5 13.3284 5.67157 14 6.5 14H10.875L10.593 16.2558C10.5312 16.75 10.5312 17.25 10.593 17.7442Z"
                                                                                fill="currentColor"></path>
                                                                        </svg></div>
                                                                    <div class="meta-thumb-container thumb-up"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" width="24" height="24"
                                                                            viewBox="0 0 24 24" role="img"
                                                                            data-icon="ThumbsUpFillStandard"
                                                                            aria-hidden="true"
                                                                            class="thumb thumb-up-filled svg-icon svg-icon-thumb-thumb-up-filled">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M13.407 6.25579L13.313 5.50407C13.1342 4.07353 11.9181 3 10.4764 3C10.2133 3 10 3.21331 10 3.47644V6.7132C10 6.90062 9.94733 7.08427 9.848 7.2432L7.90742 10.3481C7.64516 10.7677 7.23665 11.0752 6.76086 11.2112L4.72528 11.7928C4.29598 11.9154 4 12.3078 4 12.7543V18.3161C4 18.6938 4.30618 19 4.68387 19C5.874 19 7.04352 19.3106 8.07684 19.9011L8.25 20C9.39679 20.6553 10.6947 21 12.0156 21H13H16H16.5C17.3284 21 18 20.3284 18 19.5C18 19.1158 17.8556 18.7654 17.6181 18.5H18C18.8284 18.5 19.5 17.8284 19.5 17C19.5 16.4601 19.2147 15.9868 18.7867 15.7226C19.478 15.5888 20 14.9804 20 14.25C20 13.4216 19.3284 12.75 18.5 12.75H18.3294C18.7336 12.4813 19 12.0217 19 11.5C19 10.6716 18.3284 10 17.5 10H13.125L13.407 7.74421C13.4688 7.24999 13.4688 6.75001 13.407 6.25579Z"
                                                                                fill="currentColor"></path>
                                                                        </svg></div><span class="match-score">98%
                                                                        Match</span>
                                                                </div>
                                                            </span></div>
                                                        <div class="videoMetadata--second-line">
                                                            <div class="year">2012</div><span class="duration">1h
                                                                36m</span><span class="player-feature-badge">HD</span>
                                                            <div class="ltr-bjn8wh">
                                                                <div class="ltr-x1hvkl">
                                                                    <div><svg xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" width="24" height="24"
                                                                            viewBox="0 0 24 24" role="img"
                                                                            data-icon="AudioDescriptionStandard"
                                                                            aria-hidden="true" class="ltr-18tpq4v">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M21.9782 7.52002H22.2621C23.37 8.81831 24.0001 10.4801 24.0001 12.2077C24.0001 13.7414 23.505 15.2301 22.6221 16.4453H22.3348H21.8501H21.5662C22.5598 15.2613 23.1207 13.7691 23.1207 12.2077C23.1207 10.449 22.404 8.75599 21.1611 7.52002H21.445H21.9782ZM6.91381 16.4796H8.87336V7.52661H6.42566L0 16.4796H2.87701L3.63174 15.2956H6.91381V16.4796ZM4.8625 13.4299H6.92592V10.224L4.8625 13.4299ZM12.3019 9.62283C13.621 9.62283 14.6839 10.6926 14.6839 12.0048C14.6839 13.3203 13.621 14.3901 12.3019 14.3901H11.6787V9.62283H12.3019ZM12.5443 16.4743C15.0128 16.4743 17.0208 14.4698 17.0208 12.0048C17.0208 9.52935 15.0335 7.52826 12.565 7.52826H12.5373H9.79883V16.4778H12.5443V16.4743ZM20.0103 7.52002H19.7264H19.1932H18.9093C20.1522 8.75599 20.8689 10.449 20.8689 12.2077C20.8689 13.7691 20.308 15.2613 19.3144 16.4453H19.5983H20.083H20.3634C21.2531 15.2301 21.7482 13.7414 21.7482 12.2077C21.7482 10.4801 21.1181 8.81831 20.0103 7.52002ZM17.4745 7.52002H17.7584C18.8663 8.81831 19.4895 10.4801 19.4895 12.2077C19.4895 13.7414 19.0013 15.2301 18.1116 16.4453H17.8277H17.3464H17.0625C18.0492 15.2613 18.6101 13.7691 18.6101 12.2077C18.6101 10.449 17.9004 8.75599 16.6575 7.52002H16.9344H17.4745Z"
                                                                                fill="currentColor"></path>
                                                                        </svg></div>
                                                                    <div><svg xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" width="16" height="16"
                                                                            viewBox="0 0 16 16" role="img"
                                                                            data-icon="SubtitlesSmall" aria-hidden="true">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M0 1.75C0 1.33579 0.335786 1 0.75 1H15.25C15.6642 1 16 1.33579 16 1.75V12.25C16 12.6642 15.6642 13 15.25 13H12.75V15C12.75 15.2652 12.61 15.5106 12.3817 15.6456C12.1535 15.7806 11.8709 15.785 11.6386 15.6572L6.80736 13H0.75C0.335786 13 0 12.6642 0 12.25V1.75ZM1.5 2.5V11.5H7H7.19264L7.36144 11.5928L11.25 13.7315V12.25V11.5H12H14.5V2.5H1.5ZM6 6.5L3 6.5V5L6 5V6.5ZM13 7.5H10V9H13V7.5ZM3 9V7.5L9 7.5V9L3 9ZM13 5H7V6.5H13V5Z"
                                                                                fill="currentColor"></path>
                                                                        </svg></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ltr-7t0zr9"><a href="#about"><span
                                                            class="maturity-rating"><span
                                                                class="maturity-number">13+</span></span></a><span
                                                        class="ltr-1q4vxyr">violence, language, mature themes</span></div>
                                            </div>
                                        </div>
                                        <div class="ltr-s5xdrg"></div>
                                        <p class="preview-modal-synopsis previewModal--text"></p>
                                        <div>Andy and his mom Joyce both have emotional baggage to carry on an impromptu
                                            cross-country road trip. The good news is that they also have each other.</div>
                                        <p></p>
                                    </div>
                                    <div class="previewModal--detailsMetadata-right">
                                        <div class="previewModal--tags"><span
                                                class="previewModal--tags-label">Cast:</span><span class="tag-item"><a
                                                    href="/browse/m/person/88704"> Barbra Streisand, </a></span><span
                                                class="tag-item"><a href="/browse/m/person/20058883">Seth Rogen,
                                                </a></span><span class="tag-item"><a
                                                    href="/browse/m/person/30006856">Julene Renee, </a></span><span
                                                class="tag-more"><a href="#about">more</a></span></div>
                                        <div class="previewModal--tags"><span
                                                class="previewModal--tags-label">Genres:</span><span class="tag-item"><a
                                                    href="/browse/m/genre/6548"> Comedy Movies</a></span></div>
                                        <div class="previewModal--tags"><span class="previewModal--tags-label">This movie
                                                is:</span><span class="tag-item"><a href="/browse/m/genre/100054">
                                                    Sentimental, </a></span><span class="tag-item"><a
                                                    href="/browse/m/genre/100045">Heartfelt</a></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="moreLikeThis--wrapper">
                                    <h3 class="previewModal--section-header">More Like This</h3>
                                    <div class="section-container collapsed style-cKq9a" id="style-cKq9a">
                                        <div class="moreLikeThis--container">
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABWS9EHtSkW2StEN0zPpL3noMDKS8N5XzC_Fa3rE_LtYVtcgj51PbK8q39uGV6CDVL25vAfv0ol7wKgK0DNIFFky419aZgFhG9BligmynSLC28cO0xZjkwsF_VdiDZh5-1KynJ7IRfwRbvEu0ehHad0vYYri8ccD9DmHo17C8BWef1V5zlE9e7c4Du_xMlIgT6np_hpw78GrpoaWsVcOp4MOhTSfmAvgAUMUM6bt-lP2MiCaYjWrGT1d-ITgcluAMPCSeRPJ3FQGZJS_0K67wP_kY9sR2.webp?r=0e2">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 55m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2022</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">13+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>Ada Harris, a widowed housecleaner in 1950s London,&nbsp;feels
                                                            invisible until a Dior gown sparks her imagination and sends her
                                                            on a life-changing journey.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABVdSnid9mS7PQAFRoasFiLvWit_jjGbja5GDmWYGJ-CA8T2EVBXtcO1VbLC6smojxHoQPjrbgVjaDEtCcupRRYESZI7HCFQNQD0.webp?r=b29">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 29m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2003</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">18+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>A couple dreams of the departure of their neighbor, who's
                                                            hogging a rent-controlled apartment they want — and they may try
                                                            to force the issue.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABUoTeq_69S-aRehHsYQz9vuVji2yF4-XL-GbdYbccZGRSyLUyJIP6jd7nvk-V2s_Dvv3rQMNAkeO5XHLd1hbdmcJocErxwybI2SYbc9QmavSpUOxEOPcFwsvExr5pwQBoHc4.jpg?r=5b9">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 43m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2018</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">16+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>After she's left at the altar, a workaholic advertising
                                                            executive ends up on her Caribbean honeymoon cruise with her
                                                            estranged father.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABe0o5fCeekAytMyF3Fz3mVg2zJKrjfTROuv1DQMp0Y76RoOaMZD8TOBh1gx4oYhI7bzncX-VxVxR-Emj0uZoAe4TpQC92sN99Yk.webp?r=15c">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">2h 5m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2019</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">18+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>While campaigning for president, a powerful politician sets off
                                                            sparks with her idealistic new speechwriter — a journalist she
                                                            used to babysit as a teen.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABb5wwrb7zanboSQ3lwTfL9YjsVPcw7td_TyWkVJWS1LQvqx7_tUDI_692tlLjSZ5UZG44gF-hV7hge2F3bt1syXtHrX35XsugNU.webp?r=493">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 52m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2014</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">18+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>Seth Rogen and James Franco star in this provocative comedy
                                                            about two journalists recruited by the CIA after they arrange an
                                                            interview with Kim Jong-un.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABbnRoOMWhy0lnhmZdP4aTr3YEygY_3s7za6HvAeW2fOgjyOfUyS5rnNChrAuxg66n4adVDhFlgbaSQ-3OOiSX6c23woIEkt9fIRNbni3xhJw5A-aaxQMzRBq0zN28oI9RwdA355_QYlvTwrlfa8Qq1I0yxUD6TPD1SYqUTnJQbwGE_3DqTK-QNqDneMKVj-nmMK3StsZNgg0fXNjUZaKVxOrvtCmekkQYvbvKnz3B1JxCH4QtkdC5PP5tGXmUEeCoKdeCYeb6NBJLlqyLRZyye6C1g.webp?r=1d0">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 48m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2009</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">18+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>Sandra Bullock and Ryan Reynolds star as rivals pretending to
                                                            be in love in this "good old-fashioned romance" (LA Times).
                                                        </div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABYKhH5RdLBXApDWvyGmTlOWFZl0ZG6cKqL1DKhFYtpnwtEMdkuOAunphNv6ssluIBSta0ZFTS8ep33TCRi1s2Xu3hRrA_6pwZG4.webp?r=91a">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 58m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2005</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">16+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>A suave New York dating coach finds himself
                                                            uncharacteristically smitten when he meets a smart, cynical
                                                            reporter who seems immune to his charms.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABS0zixvIoFPW36gvfs1_kUTJtnzOFGtIl7DXTVn5UzjqU0mSdq2JebXImrxYqHK5nT3zNUdwEakRaRxVoUmGWpOYLk_K1PqL0A8.webp?r=798">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 49m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2006</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">16+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>A college grad discovers her own strength — and style — while
                                                            suffering for success as an assistant to the tyrannical editor
                                                            of a fashion magazine.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABUcD5QvWvF7VeIGv98LgONq_87Z4BITniBxcWe_g_YyAfebAPFmDEqXZmLrUDGleATVVuDJMZPD6zQ4K9YcIGnqB1BgaUxFXl1p98QbBBrE0GIWUIF-q3o1_eoSSgsSX64dz.jpg?r=81a">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 45m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2024</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">18+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>The jokes "come fast and bawdy" in this "fun to watch" rom-com
                                                            about a sports writer (Gina Rodriguez) who's tired of playing
                                                            the field, says the NYT.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABVRN8xUlHVWlN_5fmCjr-feUX6LhuCuA1z25-U2Bk-KeBIbr-UC-JnQ1psNKVSLJYXLUVLb9h6xOU6TUuJJSsGuJkkHzyIA_TxoeAzoFs99ly0VFyWvaKDm9KwEnngzc8_lm.jpg?r=25e">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 34m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2024</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">13+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>A winning lottery ticket has grave consequences for a married
                                                            couple when they start hatching plans to kill each other for the
                                                            prize money.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABdKwnX_y0hNMQU3gXLDHuYIWOCxVogLXYmjjalO8V89mOsBOD2lksna80Aij0tdsGt2kbkAt0XBcbnvjgplvhBEFCCNnYaGkEk8OZ0eI47wF5lM-OWlNaJf1or3-2arR-CTj-ocwagpRTrKeDxzpfXP8kQKScpgyxRvZFf6591USSEG4ef4N_KkvQKwYNnpx_ZK1Nlb_2her8UTkbcLoyCD43fwQfZdUpsTvmBG2VE81PfBGwDtaZzftlaZEfeGurkCnywPoisn5jH32MdyhQ26ofJQQ.webp?r=bfa">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 44m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2022</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">13+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>Determined to sabotage their daughter's upcoming wedding in
                                                            Bali, a long-divorced couple agrees to a truce — and begins to
                                                            see eye-to-eye again.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABVHm0ATSYJOOhi-nAeK64DNavxRW8pXMG3x-b4BKvfbSGg0naPKAZHVUlEbWXmtHUXjiJj82Vu4i7WHE5qBCE3Bt-i8QR0eKhaQ.webp?r=527">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 44m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2010</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">16+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>After deciding to start a family alone, a fiercely independent
                                                            businesswoman falls for a charming farmer who doesn’t know her
                                                            plans.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABe0W4wcFEGgByE1qkUAabpOLC2fwN0byB6gX5g3jBeJ0Aq2Aa-vtnj0vaC23ZBOgtoIM_flO-zntBYSAhD66LTW--6xMWzXOYvE.webp?r=186">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 33m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2002</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">18+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>When childhood friends Lucy, Mimi and Kit take a road trip,
                                                            they get the chance to bond again, fall in love and find out
                                                            just who they really are.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABSvqSuRI0xFf_IJZzqm5Se_vOLbRj7dKMv5TP_WtmKx26C0nfDdpjuo4wOJpk6fZRyn50ycpMJLnFmR7HzgxCc8_NFZ9sbqLK1l6hKWKlhwYxLyprXs-9p_pDXNJGYI7Ilw5.jpg?r=6de">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 30m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2024</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">16+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>A tropical island wedding turns awkward for the bride's widowed
                                                            mom (Brooke Shields) when she realizes her college ex (Benjamin
                                                            Bratt) is the groom's dad.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABbHbCV1FPg7k6adDeEBrcQ9W-8ue-6PeGL9kksKPhykRx8xzqXMiBurOhduE2HQOkDCZdz77SsLCh308dM666fFnYzZwxvmgSLQ.webp?r=439">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 35m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2015</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">16+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>Fresh out of a bad relationship, thrill-seeking Martha finds
                                                            romance and danger with an assassin who's decided to turn the
                                                            tables on his clients.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABVTKZmlR0aT7oLEcohbrL6tfcofZZ5YFxSGq_lzBup74_PNi6dqRfL8WhSzlUWVeIU05HBarPGusl6-HK0hWbE9DgmdpQwTu2OE.webp?r=017">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 45m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2005</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">13+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>When Simon meets his fiancee Theresa’s family, he tries to win
                                                            over her skeptical father, who’s determined to break their
                                                            engagement.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABdecW-Rcmt3Tfu0aiEdxkefxxHtyuRfu7BboHBeNismaA3FMNOnaR-tcKVqEjK93OuQFmAKrnP-y--O0kbTlBXVtcfVZOJPUUqhkf032b_0BXRmSnSLRWsE_31EUobgalcZrurDkgCsT4w3Yd1mLqHLaLUqCEpHa6OtcfXUwiORsCE1vFL3MOrKj-S90n1Dlp_Girxkf0CXkd9kNpMTVJGjmcAlfXFnv6eb1FZW6MjujkNAV1ek-AtgFbr0whQkcbJKtoUvdMWS3_TvIz1t7Jh3kWQ.webp?r=fbb">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 46m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2016</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">13+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>In the heart of the suburbs, a conventional couple find
                                                            themselves swept up in global espionage when mysterious new
                                                            neighbors move in.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABefSZM0ztznena-W6eir6r61LWtQSp3ns7wN0rzSbqLrzBC9rEY4qjHOo3nEFjGs45209lz5-PIjxL8ei07fy2WnDNmZ_kMs20Y.webp?r=706">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">2h 4m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2011</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">18+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>A down-on-her-luck maid of honor bungles her best friend's
                                                            pre-wedding parties in this critically acclaimed comedy
                                                            nominated for two Academy Awards.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABUwndFlyMrVmZLjA3aXjkJf1JeCo2Lp1YNgpOTQWVoS_8W30dok15Mg5pNO5_EwuK13U0noDwdNyLfR29c9kV44aiqxYJJ3Cz_73FUq4bQ9-RnLcRpvPesSEE-y5e-ceIwed.jpg?r=cad">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 45m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2023</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">7+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>Jennifer Garner and Ed Helms star as parents who get an
                                                            eye-opening look at what life is like for their two teens when
                                                            the family suddenly swaps bodies.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABXbLn7pE2CtRhllbXgsiMWSxoncK-icW85rlMDHkDbvBpZADYVAcPJybtS9hOPVJHtacPdFhmnhc3MLdFFgyRtpZrvJecQpSPD3S8rBWj1FlxozXsO4KdPDMQwCFEKjSh_aXXsj5xi_ZITNZPeFlZmODwTK8v5Un4xOFXiKp0o137f8qq92rVpK3Z-Nk7HzuZto55N0rojZz1mp6HhlbriJ5FRIqLJ6WGG-YBOy8zOjBplygJpdmYieOuBaXmf4rkzYWubfnq1QdSuDkmeDm96SbGw.webp?r=4a5">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 51m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2018</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">16+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>A high school dropout studying to pass his GED exam butts heads
                                                            with his feisty night school teacher and a vindictive principal.
                                                        </div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABe-v06pN0a79Ly1CB3Xy69ySKauhnBKtisgukrcDAVCPDGhJEx1xg8cKTrFhUVtexFAQEVVE32WiKw5PjkTLJeBmdBEI0TnZhPk.webp?r=87a">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 41m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2016</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">13+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>Before Ben can marry James's sister, the two Atlanta cops must
                                                            head to Miami to help the local police bring down a brutal drug
                                                            dealer.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABRl9EZo8BgV9zklJZZzs2YnFumNqO99RmOT0Bfb2SR2LIIl5kVkpNVehZvri0xKoF0xcueLOU-WDgiDLbCec6D0-pobzLmCu06vnCFcRAF-LDaNWQVWAWzk2GLcB04Xw7kA2.jpg?r=8fa">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 36m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2024</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">13+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>A heated battle over breakfast ignites in 1960s Michigan in
                                                            this Pop-Tart comedy starring Jerry Seinfeld, Melissa McCarthy,
                                                            Jim Gaffigan and Amy Schumer.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABZB0ttQLZoU8URDcknN-B0X865h4DiRI7CPROriO4MdmSaIOlRG9P-2eVpHyYLFCOgYNsVbxvBrvX8KvNZcfCPaO-Cs6yyKn0jM.webp?r=43f">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">2h 2m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2017</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">18+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>Four college friends go wild during a boozy reunion trip to the
                                                            annual Essence Festival in New Orleans that tests the strength
                                                            of their sisterhood.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABeiMzo0JyjHCoDCJWTNi9cnY9a49_9U1TzE0fg5KJEjnbqgMg80SyhwOzEqOVTRUofieIGVP7jMUUXQ2GcXcjdRX2a6DoJ32Q1c.webp?r=eed">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">2h</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">1992</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">10+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>After accidentally flying alone to New York, young Kevin
                                                            McCallister gets a hotel room and foils his old nemeses' plans
                                                            to rob a toy store.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="titleCard--container">
                                                <div class="titleCard-imageWrapper has-duration">
                                                    <div><img
                                                            src="https://occ-0-4609-784.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABRAA2MyXmYsBzBVw2ktyV1IXqIrob5-RRhgBvov1dRzMyo-11tFDuSEQzywBP7m-9ivPe54yBuxvMXhLcdMA4i371GVRwOD6Ac4.webp?r=4f7">
                                                    </div>
                                                    <div class="titleCard-playIcon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            role="img" data-icon="PlayStandard" aria-hidden="true"
                                                            class="titleCard-playSVG">
                                                            <path
                                                                d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z"
                                                                fill="currentColor"></path>
                                                        </svg></div><span class="duration">1h 42m</span>
                                                </div>
                                                <div class="titleCard--metadataWrapper">
                                                    <div>
                                                        <div class="videoMetadata--container-container">
                                                            <div
                                                                class="videoMetadata--container titlecard-videoMetadata videoMetadata--two-lines">
                                                                <div class="videoMetadata--second-line">
                                                                    <div class="year">2004</div><span
                                                                        class="maturity-rating"><span
                                                                            class="maturity-number">18+</span></span><span
                                                                        class="player-feature-badge">HD</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="ltr-bjn8wh">
                                                                    <div><button
                                                                            class="color-supplementary hasIcon round ltr-11vo9g5"
                                                                            type="button">
                                                                            <div class="ltr-1st24vv">
                                                                                <div class="small ltr-iyulz3"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none" width="24"
                                                                                        height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        role="img"
                                                                                        data-icon="PlusStandard"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M11 11V2H13V11H22V13H13V22H11V13H2V11H11Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="titleCard-synopsis previewModal--small-text"></p>
                                                    <div>
                                                        <div>When a music publicist suddenly faces single fatherhood and a
                                                            defunct career, only a new love and his daughter's courage can
                                                            help him bounce back.</div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-divider collapsed"><button
                                            class="color-supplementary section-expandButton hasIcon round ltr-11vo9g5"
                                            type="button">
                                            <div class="ltr-1st24vv">
                                                <div class="small ltr-iyulz3"><svg xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" width="24" height="24"
                                                        viewBox="0 0 24 24" role="img"
                                                        data-icon="ChevronDownStandard" aria-hidden="true">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z"
                                                            fill="currentColor"></path>
                                                    </svg></div>
                                            </div>
                                        </button></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="about-wrapper">
                                    <div class="about-header">
                                        <h3 id="" class="previewModal--section-header">About <strong>The Guilt
                                                Trip</strong></h3>
                                    </div>
                                    <div>
                                        <div class="previewModal--tags"><span
                                                class="previewModal--tags-label">Director:</span><span
                                                class="tag-item"><a href="/browse/m/person/30049011"> Anne
                                                    Fletcher</a></span></div>
                                        <div class="previewModal--tags"><span
                                                class="previewModal--tags-label">Cast:</span><span class="tag-item"><a
                                                    href="/browse/m/person/88704"> Barbra Streisand, </a></span><span
                                                class="tag-item"><a href="/browse/m/person/20058883">Seth Rogen,
                                                </a></span><span class="tag-item"><a
                                                    href="/browse/m/person/30006856">Julene Renee, </a></span><span
                                                class="tag-item"><a href="/browse/m/person/40099666">Zabryna Guevara,
                                                </a></span><span class="tag-item"><a
                                                    href="/browse/m/person/40064147">John Funk, </a></span><span
                                                class="tag-item"><a href="/browse/m/person/20058614">Robert Curtis
                                                    Brown, </a></span><span class="tag-item"><a
                                                    href="/browse/m/person/20002423">Kathy Najimy, </a></span><span
                                                class="tag-item"><a href="/browse/m/person/59174">Miriam Margolyes,
                                                </a></span><span class="tag-item"><a
                                                    href="/browse/m/person/30010142">Rose Abdoo, </a></span><span
                                                class="tag-item"><a href="/browse/m/person/20055701">Tom Virtue,
                                                </a></span><span class="tag-item"><a
                                                    href="/browse/m/person/40089071">Worth Howe</a></span></div>
                                        <div class="previewModal--tags"><span
                                                class="previewModal--tags-label">Writer:</span><span class="tag-item"><a
                                                    href="/browse/m/person/30171939"> Dan Fogelman</a></span></div>
                                        <div class="previewModal--tags"><span
                                                class="previewModal--tags-label">Genres:</span><span class="tag-item"><a
                                                    href="/browse/m/genre/6548"> Comedy Movies</a></span></div>
                                        <div class="previewModal--tags"><span class="previewModal--tags-label">This
                                                movie is:</span><span class="tag-item"><a href="/browse/m/genre/100054">
                                                    Sentimental, </a></span><span class="tag-item"><a
                                                    href="/browse/m/genre/100045">Heartfelt</a></span></div>
                                        <div class="maturity-rating-wrapper"><span class="title">Maturity
                                                rating:</span><span class="maturity-rating"><a
                                                    href="https://help.netflix.com/support/2064"
                                                    class="maturity-number">13+</a>
                                                <p>violence, language, mature themes</p>
                                                <p>Recommended for ages 13 and up</p>
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="scroll-menu-wrapper">
                <div class="scroll-left" id="scroll-left1">&#9664;</div> <!-- Left arrow -->

                <div class="scroll-menu-container" id="navbar22">

                    <?php $__currentLoopData = $Manuels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manuel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php

                            $filteredLevelName1 = str_replace('ابتدائي', '', $manuel->matiere->section->level->name);
                        ?>

                        <a href="/panel/scolaire/view/teacher/<?php echo e($manuel->id); ?>icon=1&page=<?php echo e($page); ?>"
                            class="scroll-menu-item1 <?php echo e($manuel->id == $id ? 'active' : ''); ?>"><?php echo e($filteredLevelName1); ?>

                            <?php echo e($manuel->matiere->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <div class="scroll-right" id="scroll-right1">&#9654;</div> <!-- Right arrow -->

            </div>

            <div style="padding:10px">
                
                
                
                <a href="https://www.abajim.com/FlowPaper/Publications/-1/-.html?reload=1718716725994#page=7"
                    class="fp-embed" data-fp-width="1100px" data-fp-height="950px" style="max-width: 100%"></a>
               
                <script async defer src="https://cdn-online.flowpaper.com/zine/3.8.4/js/embed.min.js"></script>


                
            </div>
        </div>

        <div class="col-lg-4  d-none d-sm-block" style="height:883px">

            <div>


                <?php if(!empty($videostitleAll)): ?>
                    <h2 style="margin-top:11px"> <span class="gradient-title"
                            style="padding: 54px!important;text-align: center;background: linear-gradient(to left,#1d3b65,#1d3b65);-webkit-background-clip: text;color: transparent;font-size:32px"><?php echo e($videostitleAll->titleAll); ?></span>
                    </h2>
                    <br>
                <?php endif; ?>
                <?php if($videos != '[]'): ?>
                    <div style="margin-top:15px;">

                        <div class="h-50">
                            <video id="mainVideoPlayer" controls></video>
                        </div>
                        <div id="title" class="style-scope ytd-watch-metadata" style="margin-top:10px">
                            <ytd-badge-supported-renderer class="style-scope ytd-watch-metadata" disable-upgrade=""
                                hidden="">
                            </ytd-badge-supported-renderer>


                            <ytd-badge-supported-renderer class="style-scope ytd-watch-metadata" disable-upgrade=""
                                hidden="">
                            </ytd-badge-supported-renderer>
                        </div>
                        <div id="top-row" class="style-scope ytd-watch-metadata">
                            <div id="owner" class="item style-scope ytd-watch-metadata">
                                <ytd-video-owner-renderer class="style-scope ytd-watch-metadata">

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-2">
                                                <a class="yt-simple-endpoint style-scope ytd-video-owner-renderer  ml-16"
                                                    href="">
                                                    <yt-img-shadow id="avatar" width="40"
                                                        class="style-scope ytd-video-owner-renderer no-transition style-oRzbr">

                                                        <img id="img" class="style-scope yt-img-shadow "
                                                            width="40" src="<?php echo e($videos[0]->teachers->avatar); ?>">

                                                    </yt-img-shadow>
                                                </a>
                                            </div>
                                            <div class="col-5">
                                                <h4 id="nameteacher" style="    margin-left: 14px;"
                                                    class="user-name mt-10 font-10" href="" dir="auto">
                                            </div>
                                            <div class="col-2">
                                                <!-- boutton ajouter -->
                                                <div style="margin-left:5px" class="style-scope ytd-watch-metadata">
                                                    <div class="style-scope ytd-subscribe-button-renderer">


                                                        <!-- <form action="/" method="POST"><?php echo csrf_field(); ?>-->

                                                        <button id="likeButton" class="like-button">
                                                            <i id="likeIcon" class="bi bi-hand-thumbs-up"></i>
                                                        </button>


                                                        <!-- </form> -->


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <!-- boutton   S'abonner -->
                                                <div id="subscribe-button" style="margin-left:5px"
                                                    class="style-scope ytd-watch-metadata">
                                                    <form action="/panel/add" method="POST">
                                                        <?php echo csrf_field(); ?>

                                                        <input id="user_iddteacher" name="trtr"
                                                            value="<?php echo e($videos[0]->teachers->id); ?>" hidden />
                                                        <button type="submit"
                                                            class="yt-spec-button-shape-next <?php echo e($isSubscribed ? 'yt-spec-button-shape-next--filled yt-spec-button-shape-next--mono yt-spec-button-shape-next--size-m' : 'yt-spec-button-shape-next--filled1 yt-spec-button-shape-next--mono yt-spec-button-shape-next--size-m'); ?> style-OodnQ ">
                                                            <span
                                                                class="yt-core-attributed-string yt-core-attributed-string--white-space-no-wrap">
                                                                <?php echo e($isSubscribed ? 'Se désabonner' : 'S\'abonner'); ?>

                                                            </span>
                                                        </button>




                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </ytd-video-owner-renderer>

                            </div>

                        </div>

                    </div>
                <?php else: ?>
                    <div class="no-result-logo p-50 m-30">
                        <img width="300px" src="/assets/default/img/no-results/242.png" />
                    </div>
                    <h2 class="section-title text-center">Sorry, no video capsules for this section.</h2>
                    <p class="mt-1 text-center"> Stay tuned for exciting updates!"</p>
                <?php endif; ?>



                <div class="scrollable-div" style="margin-top:40px" id="scrollable-div">
                    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="webinar-card webinar-list webinar-list-2 d-flex m-30">
                            <div class="image-box" style="min-width: 48%;margin-top: -88px!important"
                                onclick="playInMainPlayer('<?php echo e(asset($video->video)); ?>','<?php echo e($video->titre); ?>','<?php echo e($video->teachers->full_name); ?>','<?php echo e($video->user_id); ?>','<?php echo e($video->teachers->avatar); ?>')">

                                <video width="100%" height="128%"
                                    onclick="playInMainPlayer('<?php echo e(asset($video->video)); ?>','<?php echo e($video->titre); ?>','<?php echo e($video->teachers->full_name); ?>','<?php echo e($video->user_id); ?>','<?php echo e($video->teachers->avatar); ?>'); storeTeacherId('<?php echo e($video->teachers->id); ?>');">
                                    <source src="<?php echo e($video->video); ?>" type="video/mp4">
                                    <source src="<?php echo e($video->video); ?>" type="video/webm">
                                </video>

                                <div class="progress-and-bell d-flex align-items-center"
                                    style="    margin-bottom: -7px ;padding: 0px 6px!important">


                                    <a href="" target="_blank"
                                        class="webinar-notify d-flex align-items-center justify-content-center"
                                        style="width: 30px;height: 28px!important">
                                        <i data-feather="bell" width="20" height="20"
                                            class="webinar-icon"></i>
                                    </a>


                                    <div class="progress ml-10">
                                        <span class="progress-bar" style="width: 30%"></span>
                                    </div>

                                </div>
                            </div>
                            <div class="webinar-card-body w-100 d-flex flex-column">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a
                                        onclick="playInMainPlayer('<?php echo e(asset($video->video)); ?>','<?php echo e($video->titre); ?>','<?php echo e($video->teachers->full_name); ?>','<?php echo e($video->user_id); ?>','<?php echo e($video->teachers->avatar); ?>')">
                                        
                                    </a>
                                </div>
                                <div class="user-inline-avatar d-flex align-items-center">
                                    <div class="avatar bg-gray100">
                                        <img src="<?php echo e($video->teachers->avatar); ?>" class="img-cover" alt="">
                                    </div>
                                    <a href="" target="_blank" class="user-name ml-5 font-14">
                                        <?php echo e($video->teachers->full_name); ?></a>
                                </div>
                                <div class="mt-10 d-flex justify-content-between ">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img width="20" height="20" src="/oeil.png"
                                                class="webinar-icon" />
                                            <span style="font-size: small;"
                                                class="duration ml-5 font-8"><?php echo e($video->vues); ?> </span>
                                        </div>

                                        <div class="vertical-line h-25 mx-15"></div>

                                        <div class="d-flex align-items-center">
                                            <img width="15" height="15" src="/heart1.png"
                                                class="webinar-icon" />
                                            <span style="font-size: small;"
                                                class="date-published ml-5"><?php echo e($video->likes); ?> </span>
                                        </div>
                                    </div>

                                    <div
                                        class="webinar-price-box d-flex flex-column justify-content-center align-items-center">
                                        <span class="real"></span>
                                    </div>
                                </div>


                                

                                <!-- <div class="mt-10 d-flex justify-content-between ">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="clock" width="20" height="20" class="webinar-icon"></i>
                                            <span class="duration ml-5 font-6">0:30 h</span>
                                        </div>

                                        <div class="vertical-line h-25 mx-15"></div>

                                        <div class="d-flex align-items-center">
                                            <i data-feather="calendar" width="20" height="20" class="webinar-icon"></i>
                                            <span class="date-published ml-5 font-6"> <?php echo e($video->created_at); ?></span>
                                        </div>
                                    </div>

                                    <div
                                        class="webinar-price-box d-flex flex-column justify-content-center align-items-center">

                                        <span class="real"></span>


                                    </div>
                                </div> -->
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                </div>
            </div>
        </div>

        
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {

            const navbar = document.getElementById('navbar22');
            const scrollRightButton = document.getElementById('scroll-right1');
            const scrollLeftButton = document.getElementById('scroll-left1');
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
    <script>
        function hideMainPlayer() {
            var mainPlayer = document.getElementById('mainVideoPlayer');
            var title = document.getElementById('title');
            var toprow = document.getElementById('top-row');

            mainPlayer.style.display = 'none'; // Hide the main player
            title.style.display = 'none';
            toprow.style.display = 'none';
        }

        function showMainPlayer() {
            var mainPlayer = document.getElementById('mainVideoPlayer');
            var title = document.getElementById('title');
            var toprow = document.getElementById('top-row');
            var scrollablediv = document.getElementById('scrollable-div');

            mainPlayer.style.display = 'block'; // Show the main player
            title.style.display = 'block';
            toprow.style.display = 'block';
            scrollablediv.style.height = '400px';
        }

        function playInMainPlayer(url, title, nameteac, user_idd, imgteac) {


            var mainPlayer = document.getElementById('mainVideoPlayer');
            //   var titleshoww = document.getElementById('titleshoww');
            var nameteacher = document.getElementById('nameteacher');
            var user_iddteacher = document.getElementById('user_iddteacher');
            var scrollablediv = document.getElementById(' scrollable-div');

            //var user_iddteacher1 = document.getElementById('user_iddteacher1');

            var imgteacher = document.getElementById('img');

            // Update the source and load the video
            mainPlayer.src = url;

            mainPlayer.style.top = '0';
            mainPlayer.style.left = '0';
            mainPlayer.style.marginLeft = '30px';
            mainPlayer.style.width = '92%';
            mainPlayer.style.height = '92%';
            imgteacher.src = imgteac;

            nameteacher.textContent = nameteac;
            user_iddteacher.value = user_idd;
            // titleshoww.style.marginLeft = '30px';

            //  user_iddteacher1.value = user_idd;

            // titleshoww.textContent = title;

            mainPlayer.load();
            showMainPlayer();
            // Play the video
            mainPlayer.play();
        }
        window.onload = function() {
            hideMainPlayer(); // Hide the player when the page initially loads
        };
        document.getElementById('likeButton').addEventListener('click', function() {
            const icon = document.getElementById('likeIcon');
            icon.classList.toggle('bi-hand-thumbs-up');
            icon.classList.toggle('bi-hand-thumbs-up-fill');
            icon.classList.toggle('animated');
        });
    </script>


    <script>
        function storeTeacherId(teacherId) {
            fetch('/store-teacher-id', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Add CSRF token for Laravel
                },
                body: JSON.stringify({
                    teacher_id: teacherId
                })
            }).then(response => {
                // Handle the response, navigate to the show page or do something else
                //  window.location.href = '/show';
            });
        }
    </script>
    <?php if(empty($justMobileApp) and checkShowCookieSecurityDialog()): ?>
        <?php echo $__env->make('web.default.includes.cookie-security', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <script src="/assets/default/js/parts/main.min.js"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make(getTemplate() . '.panel.layouts.panel_layoutEnfant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moham\OneDrive\Desktop\Abajim\Abajimnew21052024\Abajimnew\Abajim\resources\views/web/default/panel/manuel_scolaire/lisr_free_parser.blade.php ENDPATH**/ ?>