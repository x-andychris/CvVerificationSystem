<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Evaluation and Accreditation System</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Online application for evaluation and authentication of Educational Qualifications and Results for Students intending to study abroad or those who studied abroad and wish to register for NYSC or gain employment by the Federal Ministry of Education, Abuja, Nigeria.">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/systemfiles/unnamed.png">
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">  -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet"> -->
    <!-- start of Site Script -->
    <link href="<?php echo base_url(); ?>assets/systemfiles/icon.css" rel="stylesheet">
    <!-- end of Site Script -->
    <style>
    @media print {
        .print-no {
            font-size: 27px !important;
            font-weight: 600;
        }

        .print-doc {
            font-size: 26px !important;
            font-weight: 600;
        }
    }
    </style>
    <style>
    /* Theme for the ripple elements.*/
    /* stylelint-disable material/no-prefixes */
    /* stylelint-enable */
    .mat-10x {
        font-size: 10px;
    }

    .mat-15x {
        font-size: 15px;
    }

    .mat-18x {
        font-size: 18px;
    }

    .mat-20x {
        font-size: 20px;
    }

    .mat-24x {
        font-size: 24px;
    }

    .mat-30x {
        font-size: 30px;
    }

    .flex-btw {
        display: -webkit-box;
        /* OLD - iOS 6-, Safari 3.1-6 */
        /* OLD - Firefox 19- (buggy but mostly works) */
        /* TWEENER - IE 10 */
        display: flex;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
    }

    .flex-btw.wrap {
        flex-wrap: wrap;
    }

    .flex-el {
        display: -webkit-box;
        /* OLD - iOS 6-, Safari 3.1-6 */
        /* OLD - Firefox 19- (buggy but mostly works) */
        /* TWEENER - IE 10 */
        display: flex;
        -webkit-box-align: center;
        align-items: center;
    }

    .flex-el.wrap {
        flex-wrap: wrap;
    }

    .flex-vertical {
        display: -webkit-box;
        /* OLD - iOS 6-, Safari 3.1-6 */
        /* OLD - Firefox 19- (buggy but mostly works) */
        /* TWEENER - IE 10 */
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
    }

    .flex-vertical.stretch {
        -webkit-box-pack: justify;
        justify-content: space-between;
    }

    .flex-even {
        display: -webkit-box;
        /* OLD - iOS 6-, Safari 3.1-6 */
        /* OLD - Firefox 19- (buggy but mostly works) */
        /* TWEENER - IE 10 */
        display: flex;
        -webkit-box-pack: space-evenly;
        justify-content: space-evenly;
        -webkit-box-align: center;
        align-items: center;
    }

    .flex-even.wrap {
        flex-wrap: wrap;
    }

    .flex-end {
        display: -webkit-box;
        /* OLD - iOS 6-, Safari 3.1-6 */
        /* OLD - Firefox 19- (buggy but mostly works) */
        /* TWEENER - IE 10 */
        display: flex;
        -webkit-box-pack: end;
        justify-content: flex-end;
        -webkit-box-align: center;
        align-items: center;
    }

    .flex-end.wrap {
        flex-wrap: wrap;
    }

    .flex-center {
        display: -webkit-box;
        /* OLD - iOS 6-, Safari 3.1-6 */
        /* OLD - Firefox 19- (buggy but mostly works) */
        /* TWEENER - IE 10 */
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        height: auto !important;
    }

    .flex-around {
        display: -webkit-box;
        /* OLD - iOS 6-, Safari 3.1-6 */
        /* OLD - Firefox 19- (buggy but mostly works) */
        /* TWEENER - IE 10 */
        display: flex;
        justify-content: space-around;
        -webkit-box-align: center;
        align-items: center;
    }

    .flex-around.wrap {
        flex-wrap: wrap;
    }

    .main-container {
        width: 90%;
        margin: 20px auto;
        background: white;
    }

    button:focus {
        outline: none !important;
    }

    sup {
        color: red;
        font-weight: 0;
    }

    .mat-button.mat-primary {
        border: 1px solid teal;
    }

    .warning-text {
        color: red;
        font-weight: 500;
    }

    .right-el {
        width: 40%;
    }

    .left-el {
        width: 30%;
    }

    .general-title {
        color: teal;
        font-size: large;
    }

    .right-form-el {
        width: 40%;
    }

    .left-form-el {
        width: 30%;
    }

    .has-text-primary {
        color: teal !important;
    }

    .attest-input {
        font-size: small !important;
        border: 1px solid #d1d7dc;
        background: transparent;
        padding: 5px 10px;
        width: 100%;
        border-radius: 5px;
    }

    .attest-input.mat-form-field-invalid {
        border: 1px solid red !important;
        color: red;
    }

    .attest-input .mat-form-field-wrapper {
        padding-bottom: 0 !important;
    }

    .attest-input .mat-form-field-infix {
        border-top: none !important;
    }

    .attest-input div.mat-form-field-underline,
    .attest-input div.mat-form-field-appearance-legacy {
        height: 0px !important;
        display: none !important;
    }

    ::ng-deep .ng-invalid .attest-input,
    .ng-dirty .attest-input,
    .mat-form-field-invalid .attest-input {
        font-size: small !important;
        border: 1px solid crimson !important;
        background: transparent;
        padding: 5px 10px;
        width: 100%;
        border-radius: 5px;
    }

    .single-date-input {
        width: 100px;
    }

    .tab-container {
        padding: 30px;
    }

    .botmfooter {
        position: absolute;
        bottom: 0;
        -webkit-box-flex: 1;
        flex: 1;
        align-self: center;
        margin-left: 20px;
    }

    .footer-section {
        background: #fafafa;
        position: fixed;
        bottom: 0;
        padding: 10px;
        z-index: 999;
        border-top: 1px solid #10afaf;
        width: 100%;
        text-align: right;
    }

    @media screen and (max-width: 600px) {
        .main-container {
            width: 100% !important;
            margin: 0px !important;
            padding: 0px !important;
            background: white;
        }
    }

    @media screen and (max-width: 512px) {
        .responsive {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            flex-direction: column !important;
            -webkit-box-align: start !important;
            align-items: flex-start !important;
        }

        .mobile-padding {
            padding: 0 !important;
        }

        .right-form-el {
            width: 85% !important;
        }

        .left-form-el {
            width: 100% !important;
        }

        .right-el {
            width: 85% !important;
        }

        .left-el {
            width: 100% !important;
        }

        .footer-section {
            background: #fafafa;
            position: fixed;
            bottom: 0;
            padding: 10px;
            z-index: 999;
            border-top: 1px solid #10afaf;
            width: 100%;
            text-align: center !important;
        }
    }

    .errormsg {
        color: red;
        font-weight: 500;
        margin: 5px 0;
    }

    .form-control {
        font-size: 0.9rem !important;
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #009688 !important;
        outline: 0;
        box-shadow: 0 0 0 0.1rem #00968833 !important;
    }

    .mat-form-field-invalid .ng-invalid {
        color: red !important;
    }

    .cdk-global-scrollblock {
        top: 0 !important;
        overflow-y: hidden !important;
    }

    .hide {
        display: none;
    }

    .mat-badge-content {
        font-weight: 600;
        font-size: 12px;
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-badge-small .mat-badge-content {
        font-size: 9px;
    }

    .mat-badge-large .mat-badge-content {
        font-size: 24px;
    }

    .mat-h1,
    .mat-headline,
    .mat-typography h1 {
        font: 400 24px/32px Roboto, "Helvetica Neue", sans-serif;
        margin: 0 0 16px;
    }

    .mat-h2,
    .mat-title,
    .mat-typography h2 {
        font: 500 20px/32px Roboto, "Helvetica Neue", sans-serif;
        margin: 0 0 16px;
    }

    .mat-h3,
    .mat-subheading-2,
    .mat-typography h3 {
        font: 400 16px/28px Roboto, "Helvetica Neue", sans-serif;
        margin: 0 0 16px;
    }

    .mat-h4,
    .mat-subheading-1,
    .mat-typography h4 {
        font: 400 15px/24px Roboto, "Helvetica Neue", sans-serif;
        margin: 0 0 16px;
    }

    .mat-h5,
    .mat-typography h5 {
        font: 400 calc(14px * 0.83)/20px Roboto, "Helvetica Neue", sans-serif;
        margin: 0 0 12px;
    }

    .mat-h6,
    .mat-typography h6 {
        font: 400 calc(14px * 0.67)/20px Roboto, "Helvetica Neue", sans-serif;
        margin: 0 0 12px;
    }

    .mat-body-strong,
    .mat-body-2 {
        font: 500 14px/24px Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-body,
    .mat-body-1,
    .mat-typography {
        font: 400 14px/20px Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-body p,
    .mat-body-1 p,
    .mat-typography p {
        margin: 0 0 12px;
    }

    .mat-small,
    .mat-caption {
        font: 400 12px/20px Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-display-4,
    .mat-typography .mat-display-4 {
        font: 300 112px/112px Roboto, "Helvetica Neue", sans-serif;
        letter-spacing: -0.05em;
        margin: 0 0 56px;
    }

    .mat-display-3,
    .mat-typography .mat-display-3 {
        font: 400 56px/56px Roboto, "Helvetica Neue", sans-serif;
        letter-spacing: -0.02em;
        margin: 0 0 64px;
    }

    .mat-display-2,
    .mat-typography .mat-display-2 {
        font: 400 45px/48px Roboto, "Helvetica Neue", sans-serif;
        letter-spacing: -0.005em;
        margin: 0 0 64px;
    }

    .mat-display-1,
    .mat-typography .mat-display-1 {
        font: 400 34px/40px Roboto, "Helvetica Neue", sans-serif;
        margin: 0 0 64px;
    }

    .mat-bottom-sheet-container {
        font: 400 14px/20px Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-button,
    .mat-raised-button,
    .mat-icon-button,
    .mat-stroked-button,
    .mat-flat-button,
    .mat-fab,
    .mat-mini-fab {
        font-family: Roboto, "Helvetica Neue", sans-serif;
        font-size: 14px;
        font-weight: 500;
    }

    .mat-button-toggle {
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-card {
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-card-title {
        font-size: 24px;
        font-weight: 500;
    }

    .mat-card-header .mat-card-title {
        font-size: 20px;
    }

    .mat-card-subtitle,
    .mat-card-content {
        font-size: 14px;
    }

    .mat-checkbox {
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-checkbox-layout .mat-checkbox-label {
        line-height: 24px;
    }

    .mat-chip {
        font-size: 14px;
        font-weight: 500;
    }

    .mat-chip .mat-chip-trailing-icon.mat-icon,
    .mat-chip .mat-chip-remove.mat-icon {
        font-size: 18px;
    }

    .mat-table {
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-header-cell {
        font-size: 12px;
        font-weight: 500;
    }

    .mat-cell,
    .mat-footer-cell {
        font-size: 14px;
    }

    .mat-calendar {
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-calendar-body {
        font-size: 13px;
    }

    .mat-calendar-body-label,
    .mat-calendar-period-button {
        font-size: 14px;
        font-weight: 500;
    }

    .mat-calendar-table-header th {
        font-size: 11px;
        font-weight: 400;
    }

    .mat-dialog-title {
        font: 500 20px/32px Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-expansion-panel-header {
        font-family: Roboto, "Helvetica Neue", sans-serif;
        font-size: 15px;
        font-weight: 400;
    }

    .mat-expansion-panel-content {
        font: 400 14px/20px Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-form-field {
        font-size: inherit;
        font-weight: 400;
        line-height: 1.125;
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-form-field-wrapper {
        padding-bottom: 1.34375em;
    }

    .mat-form-field-prefix .mat-icon,
    .mat-form-field-suffix .mat-icon {
        font-size: 150%;
        line-height: 1.125;
    }

    .mat-form-field-prefix .mat-icon-button,
    .mat-form-field-suffix .mat-icon-button {
        height: 1.5em;
        width: 1.5em;
    }

    .mat-form-field-prefix .mat-icon-button .mat-icon,
    .mat-form-field-suffix .mat-icon-button .mat-icon {
        height: 1.125em;
        line-height: 1.125;
    }

    .mat-form-field-infix {
        padding: 0.5em 0;
        border-top: 0.84375em solid transparent;
    }

    .mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label,
    .mat-form-field-can-float .mat-input-server:focus+.mat-form-field-label-wrapper .mat-form-field-label {
        -webkit-transform: translateY(-1.34375em) scale(0.75);
        transform: translateY(-1.34375em) scale(0.75);
        width: 133.3333333333%;
    }

    .mat-form-field-can-float .mat-input-server[label]:not(:label-shown)+.mat-form-field-label-wrapper .mat-form-field-label {
        -webkit-transform: translateY(-1.34374em) scale(0.75);
        transform: translateY(-1.34374em) scale(0.75);
        width: 133.3333433333%;
    }

    .mat-form-field-label-wrapper {
        top: -0.84375em;
        padding-top: 0.84375em;
    }

    .mat-form-field-label {
        top: 1.34375em;
    }

    .mat-form-field-underline {
        bottom: 1.34375em;
    }

    .mat-form-field-subscript-wrapper {
        font-size: 75%;
        margin-top: 0.6666666667em;
        top: calc(100% - 1.7916666667em);
    }

    .mat-form-field-appearance-legacy .mat-form-field-wrapper {
        padding-bottom: 1.25em;
    }

    .mat-form-field-appearance-legacy .mat-form-field-infix {
        padding: 0.4375em 0;
    }

    .mat-form-field-appearance-legacy.mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label,
    .mat-form-field-appearance-legacy.mat-form-field-can-float .mat-input-server:focus+.mat-form-field-label-wrapper .mat-form-field-label {
        -webkit-transform: translateY(-1.28125em) scale(0.75) perspective(100px) translateZ(0.001px);
        transform: translateY(-1.28125em) scale(0.75) perspective(100px) translateZ(0.001px);
        -ms-transform: translateY(-1.28125em) scale(0.75);
        width: 133.3333333333%;
    }

    .mat-form-field-appearance-legacy.mat-form-field-can-float .mat-form-field-autofill-control:-webkit-autofill+.mat-form-field-label-wrapper .mat-form-field-label {
        -webkit-transform: translateY(-1.28125em) scale(0.75) perspective(100px) translateZ(0.00101px);
        transform: translateY(-1.28125em) scale(0.75) perspective(100px) translateZ(0.00101px);
        -ms-transform: translateY(-1.28124em) scale(0.75);
        width: 133.3333433333%;
    }

    .mat-form-field-appearance-legacy.mat-form-field-can-float .mat-input-server[label]:not(:label-shown)+.mat-form-field-label-wrapper .mat-form-field-label {
        -webkit-transform: translateY(-1.28125em) scale(0.75) perspective(100px) translateZ(0.00102px);
        transform: translateY(-1.28125em) scale(0.75) perspective(100px) translateZ(0.00102px);
        -ms-transform: translateY(-1.28123em) scale(0.75);
        width: 133.3333533333%;
    }

    .mat-form-field-appearance-legacy .mat-form-field-label {
        top: 1.28125em;
    }

    .mat-form-field-appearance-legacy .mat-form-field-underline {
        bottom: 1.25em;
    }

    .mat-form-field-appearance-legacy .mat-form-field-subscript-wrapper {
        margin-top: 0.5416666667em;
        top: calc(100% - 1.6666666667em);
    }

    @media print {

        .mat-form-field-appearance-legacy.mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label,
        .mat-form-field-appearance-legacy.mat-form-field-can-float .mat-input-server:focus+.mat-form-field-label-wrapper .mat-form-field-label {
            -webkit-transform: translateY(-1.28122em) scale(0.75);
            transform: translateY(-1.28122em) scale(0.75);
        }

        .mat-form-field-appearance-legacy.mat-form-field-can-float .mat-form-field-autofill-control:-webkit-autofill+.mat-form-field-label-wrapper .mat-form-field-label {
            -webkit-transform: translateY(-1.28121em) scale(0.75);
            transform: translateY(-1.28121em) scale(0.75);
        }

        .mat-form-field-appearance-legacy.mat-form-field-can-float .mat-input-server[label]:not(:label-shown)+.mat-form-field-label-wrapper .mat-form-field-label {
            -webkit-transform: translateY(-1.2812em) scale(0.75);
            transform: translateY(-1.2812em) scale(0.75);
        }
    }

    .mat-form-field-appearance-fill .mat-form-field-infix {
        padding: 0.25em 0 0.75em 0;
    }

    .mat-form-field-appearance-fill .mat-form-field-label {
        top: 1.09375em;
        margin-top: -0.5em;
    }

    .mat-form-field-appearance-fill.mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label,
    .mat-form-field-appearance-fill.mat-form-field-can-float .mat-input-server:focus+.mat-form-field-label-wrapper .mat-form-field-label {
        -webkit-transform: translateY(-0.59375em) scale(0.75);
        transform: translateY(-0.59375em) scale(0.75);
        width: 133.3333333333%;
    }

    .mat-form-field-appearance-fill.mat-form-field-can-float .mat-input-server[label]:not(:label-shown)+.mat-form-field-label-wrapper .mat-form-field-label {
        -webkit-transform: translateY(-0.59374em) scale(0.75);
        transform: translateY(-0.59374em) scale(0.75);
        width: 133.3333433333%;
    }

    .mat-form-field-appearance-outline .mat-form-field-infix {
        padding: 1em 0 1em 0;
    }

    .mat-form-field-appearance-outline .mat-form-field-label {
        top: 1.84375em;
        margin-top: -0.25em;
    }

    .mat-form-field-appearance-outline.mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label,
    .mat-form-field-appearance-outline.mat-form-field-can-float .mat-input-server:focus+.mat-form-field-label-wrapper .mat-form-field-label {
        -webkit-transform: translateY(-1.59375em) scale(0.75);
        transform: translateY(-1.59375em) scale(0.75);
        width: 133.3333333333%;
    }

    .mat-form-field-appearance-outline.mat-form-field-can-float .mat-input-server[label]:not(:label-shown)+.mat-form-field-label-wrapper .mat-form-field-label {
        -webkit-transform: translateY(-1.59374em) scale(0.75);
        transform: translateY(-1.59374em) scale(0.75);
        width: 133.3333433333%;
    }

    .mat-grid-tile-header,
    .mat-grid-tile-footer {
        font-size: 14px;
    }

    .mat-grid-tile-header .mat-line,
    .mat-grid-tile-footer .mat-line {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        box-sizing: border-box;
    }

    .mat-grid-tile-header .mat-line:nth-child(n+2),
    .mat-grid-tile-footer .mat-line:nth-child(n+2) {
        font-size: 12px;
    }

    input.mat-input-element {
        margin-top: -0.0625em;
    }

    .mat-menu-item {
        font-family: Roboto, "Helvetica Neue", sans-serif;
        font-size: 14px;
        font-weight: 400;
    }

    .mat-paginator,
    .mat-paginator-page-size .mat-select-trigger {
        font-family: Roboto, "Helvetica Neue", sans-serif;
        font-size: 12px;
    }

    .mat-radio-button {
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-select {
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-select-trigger {
        height: 1.125em;
    }

    .mat-slide-toggle-content {
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-slider-thumb-label-text {
        font-family: Roboto, "Helvetica Neue", sans-serif;
        font-size: 12px;
        font-weight: 500;
    }

    .mat-stepper-vertical,
    .mat-stepper-horizontal {
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-step-label {
        font-size: 14px;
        font-weight: 400;
    }

    .mat-step-sub-label-error {
        font-weight: normal;
    }

    .mat-step-label-error {
        font-size: 14px;
    }

    .mat-step-label-selected {
        font-size: 14px;
        font-weight: 500;
    }

    .mat-tab-group {
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-tab-label,
    .mat-tab-link {
        font-family: Roboto, "Helvetica Neue", sans-serif;
        font-size: 14px;
        font-weight: 500;
    }

    .mat-toolbar,
    .mat-toolbar h1,
    .mat-toolbar h2,
    .mat-toolbar h3,
    .mat-toolbar h4,
    .mat-toolbar h5,
    .mat-toolbar h6 {
        font: 500 20px/32px Roboto, "Helvetica Neue", sans-serif;
        margin: 0;
    }

    .mat-tooltip {
        font-family: Roboto, "Helvetica Neue", sans-serif;
        font-size: 10px;
        padding-top: 6px;
        padding-bottom: 6px;
    }

    .mat-tooltip-handset {
        font-size: 14px;
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .mat-list-item {
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-list-option {
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-list-base .mat-list-item {
        font-size: 16px;
    }

    .mat-list-base .mat-list-item .mat-line {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        box-sizing: border-box;
    }

    .mat-list-base .mat-list-item .mat-line:nth-child(n+2) {
        font-size: 14px;
    }

    .mat-list-base .mat-list-option {
        font-size: 16px;
    }

    .mat-list-base .mat-list-option .mat-line {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        box-sizing: border-box;
    }

    .mat-list-base .mat-list-option .mat-line:nth-child(n+2) {
        font-size: 14px;
    }

    .mat-list-base .mat-subheader {
        font-family: Roboto, "Helvetica Neue", sans-serif;
        font-size: 14px;
        font-weight: 500;
    }

    .mat-list-base[dense] .mat-list-item {
        font-size: 12px;
    }

    .mat-list-base[dense] .mat-list-item .mat-line {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        box-sizing: border-box;
    }

    .mat-list-base[dense] .mat-list-item .mat-line:nth-child(n+2) {
        font-size: 12px;
    }

    .mat-list-base[dense] .mat-list-option {
        font-size: 12px;
    }

    .mat-list-base[dense] .mat-list-option .mat-line {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        box-sizing: border-box;
    }

    .mat-list-base[dense] .mat-list-option .mat-line:nth-child(n+2) {
        font-size: 12px;
    }

    .mat-list-base[dense] .mat-subheader {
        font-family: Roboto, "Helvetica Neue", sans-serif;
        font-size: 12px;
        font-weight: 500;
    }

    .mat-option {
        font-family: Roboto, "Helvetica Neue", sans-serif;
        font-size: 16px;
    }

    .mat-optgroup-label {
        font: 500 14px/24px Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-simple-snackbar {
        font-family: Roboto, "Helvetica Neue", sans-serif;
        font-size: 14px;
    }

    .mat-simple-snackbar-action {
        line-height: 1;
        font-family: inherit;
        font-size: inherit;
        font-weight: 500;
    }

    .mat-tree {
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }

    .mat-tree-node,
    .mat-nested-tree-node {
        font-weight: 400;
        font-size: 14px;
    }

    .mat-ripple {
        overflow: hidden;
        position: relative;
    }

    .mat-ripple.mat-ripple-unbounded {
        overflow: visible;
    }

    .mat-ripple-element {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        -webkit-transition: opacity, -webkit-transform 0ms cubic-bezier(0, 0, 0.2, 1);
        transition: opacity, -webkit-transform 0ms cubic-bezier(0, 0, 0.2, 1);
        transition: opacity, transform 0ms cubic-bezier(0, 0, 0.2, 1);
        transition: opacity, transform 0ms cubic-bezier(0, 0, 0.2, 1), -webkit-transform 0ms cubic-bezier(0, 0, 0.2, 1);
        -webkit-transform: scale(0);
        transform: scale(0);
    }

    @media (-ms-high-contrast: active) {
        .mat-ripple-element {
            display: none;
        }
    }

    .cdk-visually-hidden {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
        outline: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
    }

    .cdk-overlay-container,
    .cdk-global-overlay-wrapper {
        pointer-events: none;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
    }

    .cdk-overlay-container {
        position: fixed;
        z-index: 1000;
    }

    .cdk-overlay-container:empty {
        display: none;
    }

    .cdk-global-overlay-wrapper {
        display: -webkit-box;
        display: flex;
        position: absolute;
        z-index: 1000;
    }

    .cdk-overlay-pane {
        position: absolute;
        pointer-events: auto;
        box-sizing: border-box;
        z-index: 1000;
        display: -webkit-box;
        display: flex;
        max-width: 100%;
        max-height: 100%;
    }

    .cdk-overlay-backdrop {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        pointer-events: auto;
        -webkit-tap-highlight-color: transparent;
        -webkit-transition: opacity 400ms cubic-bezier(0.25, 0.8, 0.25, 1);
        transition: opacity 400ms cubic-bezier(0.25, 0.8, 0.25, 1);
        opacity: 0;
    }

    .cdk-overlay-backdrop.cdk-overlay-backdrop-showing {
        opacity: 1;
    }

    @media screen and (-ms-high-contrast: active) {
        .cdk-overlay-backdrop.cdk-overlay-backdrop-showing {
            opacity: 0.6;
        }
    }

    .cdk-overlay-dark-backdrop {
        background: rgba(0, 0, 0, 0.32);
    }

    .cdk-overlay-transparent-backdrop,
    .cdk-overlay-transparent-backdrop.cdk-overlay-backdrop-showing {
        opacity: 0;
    }

    .cdk-overlay-connected-position-bounding-box {
        position: absolute;
        z-index: 1000;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        min-width: 1px;
        min-height: 1px;
    }

    .cdk-global-scrollblock {
        position: fixed;
        width: 100%;
        overflow-y: scroll;
    }

    @-webkit-keyframes cdk-text-field-autofill-start {
        /*!*/
    }

    @keyframes cdk-text-field-autofill-start {
        /*!*/
    }

    @-webkit-keyframes cdk-text-field-autofill-end {
        /*!*/
    }

    @keyframes cdk-text-field-autofill-end {
        /*!*/
    }

    .cdk-text-field-autofill-monitored:-webkit-autofill {
        -webkit-animation-name: cdk-text-field-autofill-start;
        animation-name: cdk-text-field-autofill-start;
    }

    .cdk-text-field-autofill-monitored:not(:-webkit-autofill) {
        -webkit-animation-name: cdk-text-field-autofill-end;
        animation-name: cdk-text-field-autofill-end;
    }

    textarea.cdk-textarea-autosize {
        resize: none;
    }

    textarea.cdk-textarea-autosize-measuring {
        height: auto !important;
        overflow: hidden !important;
        padding: 2px 0 !important;
        box-sizing: content-box !important;
    }

    .mat-ripple-element {
        background-color: rgba(0, 0, 0, 0.1);
    }

    .mat-option {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-option:hover:not(.mat-option-disabled),
    .mat-option:focus:not(.mat-option-disabled) {
        background: rgba(0, 0, 0, 0.04);
    }

    .mat-option.mat-selected:not(.mat-option-multiple):not(.mat-option-disabled) {
        background: rgba(0, 0, 0, 0.04);
    }

    .mat-option.mat-active {
        background: rgba(0, 0, 0, 0.04);
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-option.mat-option-disabled {
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-primary .mat-option.mat-selected:not(.mat-option-disabled) {
        color: #009688;
    }

    .mat-accent .mat-option.mat-selected:not(.mat-option-disabled) {
        color: #ffd740;
    }

    .mat-warn .mat-option.mat-selected:not(.mat-option-disabled) {
        color: #f44336;
    }

    .mat-optgroup-label {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-optgroup-disabled .mat-optgroup-label {
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-pseudo-checkbox {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-pseudo-checkbox::after {
        color: #fafafa;
    }

    .mat-pseudo-checkbox-disabled {
        color: #b0b0b0;
    }

    .mat-pseudo-checkbox-checked,
    .mat-pseudo-checkbox-indeterminate,
    .mat-accent .mat-pseudo-checkbox-checked,
    .mat-accent .mat-pseudo-checkbox-indeterminate {
        background: #ffd740;
    }

    .mat-primary .mat-pseudo-checkbox-checked,
    .mat-primary .mat-pseudo-checkbox-indeterminate {
        background: #009688;
    }

    .mat-warn .mat-pseudo-checkbox-checked,
    .mat-warn .mat-pseudo-checkbox-indeterminate {
        background: #f44336;
    }

    .mat-pseudo-checkbox-checked.mat-pseudo-checkbox-disabled,
    .mat-pseudo-checkbox-indeterminate.mat-pseudo-checkbox-disabled {
        background: #b0b0b0;
    }

    .mat-elevation-z0 {
        box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z1 {
        box-shadow: 0px 2px 1px -1px rgba(0, 0, 0, 0.2), 0px 1px 1px 0px rgba(0, 0, 0, 0.14), 0px 1px 3px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z2 {
        box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z3 {
        box-shadow: 0px 3px 3px -2px rgba(0, 0, 0, 0.2), 0px 3px 4px 0px rgba(0, 0, 0, 0.14), 0px 1px 8px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z4 {
        box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z5 {
        box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 5px 8px 0px rgba(0, 0, 0, 0.14), 0px 1px 14px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z6 {
        box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z7 {
        box-shadow: 0px 4px 5px -2px rgba(0, 0, 0, 0.2), 0px 7px 10px 1px rgba(0, 0, 0, 0.14), 0px 2px 16px 1px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z8 {
        box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z9 {
        box-shadow: 0px 5px 6px -3px rgba(0, 0, 0, 0.2), 0px 9px 12px 1px rgba(0, 0, 0, 0.14), 0px 3px 16px 2px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z10 {
        box-shadow: 0px 6px 6px -3px rgba(0, 0, 0, 0.2), 0px 10px 14px 1px rgba(0, 0, 0, 0.14), 0px 4px 18px 3px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z11 {
        box-shadow: 0px 6px 7px -4px rgba(0, 0, 0, 0.2), 0px 11px 15px 1px rgba(0, 0, 0, 0.14), 0px 4px 20px 3px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z12 {
        box-shadow: 0px 7px 8px -4px rgba(0, 0, 0, 0.2), 0px 12px 17px 2px rgba(0, 0, 0, 0.14), 0px 5px 22px 4px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z13 {
        box-shadow: 0px 7px 8px -4px rgba(0, 0, 0, 0.2), 0px 13px 19px 2px rgba(0, 0, 0, 0.14), 0px 5px 24px 4px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z14 {
        box-shadow: 0px 7px 9px -4px rgba(0, 0, 0, 0.2), 0px 14px 21px 2px rgba(0, 0, 0, 0.14), 0px 5px 26px 4px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z15 {
        box-shadow: 0px 8px 9px -5px rgba(0, 0, 0, 0.2), 0px 15px 22px 2px rgba(0, 0, 0, 0.14), 0px 6px 28px 5px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z16 {
        box-shadow: 0px 8px 10px -5px rgba(0, 0, 0, 0.2), 0px 16px 24px 2px rgba(0, 0, 0, 0.14), 0px 6px 30px 5px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z17 {
        box-shadow: 0px 8px 11px -5px rgba(0, 0, 0, 0.2), 0px 17px 26px 2px rgba(0, 0, 0, 0.14), 0px 6px 32px 5px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z18 {
        box-shadow: 0px 9px 11px -5px rgba(0, 0, 0, 0.2), 0px 18px 28px 2px rgba(0, 0, 0, 0.14), 0px 7px 34px 6px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z19 {
        box-shadow: 0px 9px 12px -6px rgba(0, 0, 0, 0.2), 0px 19px 29px 2px rgba(0, 0, 0, 0.14), 0px 7px 36px 6px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z20 {
        box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.2), 0px 20px 31px 3px rgba(0, 0, 0, 0.14), 0px 8px 38px 7px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z21 {
        box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.2), 0px 21px 33px 3px rgba(0, 0, 0, 0.14), 0px 8px 40px 7px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z22 {
        box-shadow: 0px 10px 14px -6px rgba(0, 0, 0, 0.2), 0px 22px 35px 3px rgba(0, 0, 0, 0.14), 0px 8px 42px 7px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z23 {
        box-shadow: 0px 11px 14px -7px rgba(0, 0, 0, 0.2), 0px 23px 36px 3px rgba(0, 0, 0, 0.14), 0px 9px 44px 8px rgba(0, 0, 0, 0.12);
    }

    .mat-elevation-z24 {
        box-shadow: 0px 11px 15px -7px rgba(0, 0, 0, 0.2), 0px 24px 38px 3px rgba(0, 0, 0, 0.14), 0px 9px 46px 8px rgba(0, 0, 0, 0.12);
    }

    .mat-app-background {
        background-color: #fafafa;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-theme-loaded-marker {
        display: none;
    }

    .mat-autocomplete-panel {
        background: white;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-autocomplete-panel:not([class*=mat-elevation-z]) {
        box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-autocomplete-panel .mat-option.mat-selected:not(.mat-active):not(:hover) {
        background: white;
    }

    .mat-autocomplete-panel .mat-option.mat-selected:not(.mat-active):not(:hover):not(.mat-option-disabled) {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-badge-content {
        color: white;
        background: #009688;
    }

    @media (-ms-high-contrast: active) {
        .mat-badge-content {
            outline: solid 1px;
            border-radius: 0;
        }
    }

    .mat-badge-accent .mat-badge-content {
        background: #ffd740;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-badge-warn .mat-badge-content {
        color: white;
        background: #f44336;
    }

    .mat-badge {
        position: relative;
    }

    .mat-badge-hidden .mat-badge-content {
        display: none;
    }

    .mat-badge-disabled .mat-badge-content {
        background: #b9b9b9;
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-badge-content {
        position: absolute;
        text-align: center;
        display: inline-block;
        border-radius: 50%;
        -webkit-transition: -webkit-transform 200ms ease-in-out;
        transition: -webkit-transform 200ms ease-in-out;
        transition: transform 200ms ease-in-out;
        transition: transform 200ms ease-in-out, -webkit-transform 200ms ease-in-out;
        -webkit-transform: scale(0.6);
        transform: scale(0.6);
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        pointer-events: none;
    }

    .ng-animate-disabled .mat-badge-content,
    .mat-badge-content._mat-animation-noopable {
        -webkit-transition: none;
        transition: none;
    }

    .mat-badge-content.mat-badge-active {
        -webkit-transform: none;
        transform: none;
    }

    .mat-badge-small .mat-badge-content {
        width: 16px;
        height: 16px;
        line-height: 16px;
    }

    .mat-badge-small.mat-badge-above .mat-badge-content {
        top: -8px;
    }

    .mat-badge-small.mat-badge-below .mat-badge-content {
        bottom: -8px;
    }

    .mat-badge-small.mat-badge-before .mat-badge-content {
        left: -16px;
    }

    [dir=rtl] .mat-badge-small.mat-badge-before .mat-badge-content {
        left: auto;
        right: -16px;
    }

    .mat-badge-small.mat-badge-after .mat-badge-content {
        right: -16px;
    }

    [dir=rtl] .mat-badge-small.mat-badge-after .mat-badge-content {
        right: auto;
        left: -16px;
    }

    .mat-badge-small.mat-badge-overlap.mat-badge-before .mat-badge-content {
        left: -8px;
    }

    [dir=rtl] .mat-badge-small.mat-badge-overlap.mat-badge-before .mat-badge-content {
        left: auto;
        right: -8px;
    }

    .mat-badge-small.mat-badge-overlap.mat-badge-after .mat-badge-content {
        right: -8px;
    }

    [dir=rtl] .mat-badge-small.mat-badge-overlap.mat-badge-after .mat-badge-content {
        right: auto;
        left: -8px;
    }

    .mat-badge-medium .mat-badge-content {
        width: 22px;
        height: 22px;
        line-height: 22px;
    }

    .mat-badge-medium.mat-badge-above .mat-badge-content {
        top: -11px;
    }

    .mat-badge-medium.mat-badge-below .mat-badge-content {
        bottom: -11px;
    }

    .mat-badge-medium.mat-badge-before .mat-badge-content {
        left: -22px;
    }

    [dir=rtl] .mat-badge-medium.mat-badge-before .mat-badge-content {
        left: auto;
        right: -22px;
    }

    .mat-badge-medium.mat-badge-after .mat-badge-content {
        right: -22px;
    }

    [dir=rtl] .mat-badge-medium.mat-badge-after .mat-badge-content {
        right: auto;
        left: -22px;
    }

    .mat-badge-medium.mat-badge-overlap.mat-badge-before .mat-badge-content {
        left: -11px;
    }

    [dir=rtl] .mat-badge-medium.mat-badge-overlap.mat-badge-before .mat-badge-content {
        left: auto;
        right: -11px;
    }

    .mat-badge-medium.mat-badge-overlap.mat-badge-after .mat-badge-content {
        right: -11px;
    }

    [dir=rtl] .mat-badge-medium.mat-badge-overlap.mat-badge-after .mat-badge-content {
        right: auto;
        left: -11px;
    }

    .mat-badge-large .mat-badge-content {
        width: 28px;
        height: 28px;
        line-height: 28px;
    }

    .mat-badge-large.mat-badge-above .mat-badge-content {
        top: -14px;
    }

    .mat-badge-large.mat-badge-below .mat-badge-content {
        bottom: -14px;
    }

    .mat-badge-large.mat-badge-before .mat-badge-content {
        left: -28px;
    }

    [dir=rtl] .mat-badge-large.mat-badge-before .mat-badge-content {
        left: auto;
        right: -28px;
    }

    .mat-badge-large.mat-badge-after .mat-badge-content {
        right: -28px;
    }

    [dir=rtl] .mat-badge-large.mat-badge-after .mat-badge-content {
        right: auto;
        left: -28px;
    }

    .mat-badge-large.mat-badge-overlap.mat-badge-before .mat-badge-content {
        left: -14px;
    }

    [dir=rtl] .mat-badge-large.mat-badge-overlap.mat-badge-before .mat-badge-content {
        left: auto;
        right: -14px;
    }

    .mat-badge-large.mat-badge-overlap.mat-badge-after .mat-badge-content {
        right: -14px;
    }

    [dir=rtl] .mat-badge-large.mat-badge-overlap.mat-badge-after .mat-badge-content {
        right: auto;
        left: -14px;
    }

    .mat-bottom-sheet-container {
        box-shadow: 0px 8px 10px -5px rgba(0, 0, 0, 0.2), 0px 16px 24px 2px rgba(0, 0, 0, 0.14), 0px 6px 30px 5px rgba(0, 0, 0, 0.12);
        background: white;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-button,
    .mat-icon-button,
    .mat-stroked-button {
        color: inherit;
        background: transparent;
    }

    .mat-button.mat-primary,
    .mat-icon-button.mat-primary,
    .mat-stroked-button.mat-primary {
        color: #009688;
    }

    .mat-button.mat-accent,
    .mat-icon-button.mat-accent,
    .mat-stroked-button.mat-accent {
        color: #ffd740;
    }

    .mat-button.mat-warn,
    .mat-icon-button.mat-warn,
    .mat-stroked-button.mat-warn {
        color: #f44336;
    }

    .mat-button.mat-primary[disabled],
    .mat-button.mat-accent[disabled],
    .mat-button.mat-warn[disabled],
    .mat-button[disabled][disabled],
    .mat-icon-button.mat-primary[disabled],
    .mat-icon-button.mat-accent[disabled],
    .mat-icon-button.mat-warn[disabled],
    .mat-icon-button[disabled][disabled],
    .mat-stroked-button.mat-primary[disabled],
    .mat-stroked-button.mat-accent[disabled],
    .mat-stroked-button.mat-warn[disabled],
    .mat-stroked-button[disabled][disabled] {
        color: rgba(0, 0, 0, 0.26);
    }

    .mat-button.mat-primary .mat-button-focus-overlay,
    .mat-icon-button.mat-primary .mat-button-focus-overlay,
    .mat-stroked-button.mat-primary .mat-button-focus-overlay {
        background-color: #009688;
    }

    .mat-button.mat-accent .mat-button-focus-overlay,
    .mat-icon-button.mat-accent .mat-button-focus-overlay,
    .mat-stroked-button.mat-accent .mat-button-focus-overlay {
        background-color: #ffd740;
    }

    .mat-button.mat-warn .mat-button-focus-overlay,
    .mat-icon-button.mat-warn .mat-button-focus-overlay,
    .mat-stroked-button.mat-warn .mat-button-focus-overlay {
        background-color: #f44336;
    }

    .mat-button[disabled] .mat-button-focus-overlay,
    .mat-icon-button[disabled] .mat-button-focus-overlay,
    .mat-stroked-button[disabled] .mat-button-focus-overlay {
        background-color: transparent;
    }

    .mat-button .mat-ripple-element,
    .mat-icon-button .mat-ripple-element,
    .mat-stroked-button .mat-ripple-element {
        opacity: 0.1;
        background-color: currentColor;
    }

    .mat-button-focus-overlay {
        background: black;
    }

    .mat-stroked-button:not([disabled]) {
        border-color: rgba(0, 0, 0, 0.12);
    }

    .mat-flat-button,
    .mat-raised-button,
    .mat-fab,
    .mat-mini-fab {
        color: rgba(0, 0, 0, 0.87);
        background-color: white;
    }

    .mat-flat-button.mat-primary,
    .mat-raised-button.mat-primary,
    .mat-fab.mat-primary,
    .mat-mini-fab.mat-primary {
        color: white;
    }

    .mat-flat-button.mat-accent,
    .mat-raised-button.mat-accent,
    .mat-fab.mat-accent,
    .mat-mini-fab.mat-accent {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-flat-button.mat-warn,
    .mat-raised-button.mat-warn,
    .mat-fab.mat-warn,
    .mat-mini-fab.mat-warn {
        color: white;
    }

    .mat-flat-button.mat-primary[disabled],
    .mat-flat-button.mat-accent[disabled],
    .mat-flat-button.mat-warn[disabled],
    .mat-flat-button[disabled][disabled],
    .mat-raised-button.mat-primary[disabled],
    .mat-raised-button.mat-accent[disabled],
    .mat-raised-button.mat-warn[disabled],
    .mat-raised-button[disabled][disabled],
    .mat-fab.mat-primary[disabled],
    .mat-fab.mat-accent[disabled],
    .mat-fab.mat-warn[disabled],
    .mat-fab[disabled][disabled],
    .mat-mini-fab.mat-primary[disabled],
    .mat-mini-fab.mat-accent[disabled],
    .mat-mini-fab.mat-warn[disabled],
    .mat-mini-fab[disabled][disabled] {
        color: rgba(0, 0, 0, 0.26);
    }

    .mat-flat-button.mat-primary,
    .mat-raised-button.mat-primary,
    .mat-fab.mat-primary,
    .mat-mini-fab.mat-primary {
        background-color: #009688;
    }

    .mat-flat-button.mat-accent,
    .mat-raised-button.mat-accent,
    .mat-fab.mat-accent,
    .mat-mini-fab.mat-accent {
        background-color: #ffd740;
    }

    .mat-flat-button.mat-warn,
    .mat-raised-button.mat-warn,
    .mat-fab.mat-warn,
    .mat-mini-fab.mat-warn {
        background-color: #f44336;
    }

    .mat-flat-button.mat-primary[disabled],
    .mat-flat-button.mat-accent[disabled],
    .mat-flat-button.mat-warn[disabled],
    .mat-flat-button[disabled][disabled],
    .mat-raised-button.mat-primary[disabled],
    .mat-raised-button.mat-accent[disabled],
    .mat-raised-button.mat-warn[disabled],
    .mat-raised-button[disabled][disabled],
    .mat-fab.mat-primary[disabled],
    .mat-fab.mat-accent[disabled],
    .mat-fab.mat-warn[disabled],
    .mat-fab[disabled][disabled],
    .mat-mini-fab.mat-primary[disabled],
    .mat-mini-fab.mat-accent[disabled],
    .mat-mini-fab.mat-warn[disabled],
    .mat-mini-fab[disabled][disabled] {
        background-color: rgba(0, 0, 0, 0.12);
    }

    .mat-flat-button.mat-primary .mat-ripple-element,
    .mat-raised-button.mat-primary .mat-ripple-element,
    .mat-fab.mat-primary .mat-ripple-element,
    .mat-mini-fab.mat-primary .mat-ripple-element {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .mat-flat-button.mat-accent .mat-ripple-element,
    .mat-raised-button.mat-accent .mat-ripple-element,
    .mat-fab.mat-accent .mat-ripple-element,
    .mat-mini-fab.mat-accent .mat-ripple-element {
        background-color: rgba(0, 0, 0, 0.1);
    }

    .mat-flat-button.mat-warn .mat-ripple-element,
    .mat-raised-button.mat-warn .mat-ripple-element,
    .mat-fab.mat-warn .mat-ripple-element,
    .mat-mini-fab.mat-warn .mat-ripple-element {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .mat-stroked-button:not([class*=mat-elevation-z]),
    .mat-flat-button:not([class*=mat-elevation-z]) {
        box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-raised-button:not([class*=mat-elevation-z]) {
        box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-raised-button:not([disabled]):active:not([class*=mat-elevation-z]) {
        box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
    }

    .mat-raised-button[disabled]:not([class*=mat-elevation-z]) {
        box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-fab:not([class*=mat-elevation-z]),
    .mat-mini-fab:not([class*=mat-elevation-z]) {
        box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-fab:not([disabled]):active:not([class*=mat-elevation-z]),
    .mat-mini-fab:not([disabled]):active:not([class*=mat-elevation-z]) {
        box-shadow: 0px 7px 8px -4px rgba(0, 0, 0, 0.2), 0px 12px 17px 2px rgba(0, 0, 0, 0.14), 0px 5px 22px 4px rgba(0, 0, 0, 0.12);
    }

    .mat-fab[disabled]:not([class*=mat-elevation-z]),
    .mat-mini-fab[disabled]:not([class*=mat-elevation-z]) {
        box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-button-toggle-standalone,
    .mat-button-toggle-group {
        box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-button-toggle-standalone.mat-button-toggle-appearance-standard,
    .mat-button-toggle-group-appearance-standard {
        box-shadow: none;
    }

    .mat-button-toggle {
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-button-toggle .mat-button-toggle-focus-overlay {
        background-color: rgba(0, 0, 0, 0.12);
    }

    .mat-button-toggle-appearance-standard {
        color: rgba(0, 0, 0, 0.87);
        background: white;
    }

    .mat-button-toggle-appearance-standard .mat-button-toggle-focus-overlay {
        background-color: black;
    }

    .mat-button-toggle-group-appearance-standard .mat-button-toggle+.mat-button-toggle {
        border-left: solid 1px rgba(0, 0, 0, 0.12);
    }

    [dir=rtl] .mat-button-toggle-group-appearance-standard .mat-button-toggle+.mat-button-toggle {
        border-left: none;
        border-right: solid 1px rgba(0, 0, 0, 0.12);
    }

    .mat-button-toggle-group-appearance-standard.mat-button-toggle-vertical .mat-button-toggle+.mat-button-toggle {
        border-left: none;
        border-right: none;
        border-top: solid 1px rgba(0, 0, 0, 0.12);
    }

    .mat-button-toggle-checked {
        background-color: #e0e0e0;
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-button-toggle-checked.mat-button-toggle-appearance-standard {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-button-toggle-disabled {
        color: rgba(0, 0, 0, 0.26);
        background-color: #eeeeee;
    }

    .mat-button-toggle-disabled.mat-button-toggle-appearance-standard {
        background: white;
    }

    .mat-button-toggle-disabled.mat-button-toggle-checked {
        background-color: #bdbdbd;
    }

    .mat-button-toggle-standalone.mat-button-toggle-appearance-standard,
    .mat-button-toggle-group-appearance-standard {
        border: solid 1px rgba(0, 0, 0, 0.12);
    }

    .mat-card {
        background: white;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-card:not([class*=mat-elevation-z]) {
        box-shadow: 0px 2px 1px -1px rgba(0, 0, 0, 0.2), 0px 1px 1px 0px rgba(0, 0, 0, 0.14), 0px 1px 3px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-card.mat-card-flat:not([class*=mat-elevation-z]) {
        box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-card-subtitle {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-checkbox-frame {
        border-color: rgba(0, 0, 0, 0.54);
    }

    .mat-checkbox-checkmark {
        fill: #fafafa;
    }

    .mat-checkbox-checkmark-path {
        stroke: #fafafa !important;
    }

    @media (-ms-high-contrast: black-on-white) {
        .mat-checkbox-checkmark-path {
            stroke: #000 !important;
        }
    }

    .mat-checkbox-mixedmark {
        background-color: #fafafa;
    }

    .mat-checkbox-indeterminate.mat-primary .mat-checkbox-background,
    .mat-checkbox-checked.mat-primary .mat-checkbox-background {
        background-color: #009688;
    }

    .mat-checkbox-indeterminate.mat-accent .mat-checkbox-background,
    .mat-checkbox-checked.mat-accent .mat-checkbox-background {
        background-color: #ffd740;
    }

    .mat-checkbox-indeterminate.mat-warn .mat-checkbox-background,
    .mat-checkbox-checked.mat-warn .mat-checkbox-background {
        background-color: #f44336;
    }

    .mat-checkbox-disabled.mat-checkbox-checked .mat-checkbox-background,
    .mat-checkbox-disabled.mat-checkbox-indeterminate .mat-checkbox-background {
        background-color: #b0b0b0;
    }

    .mat-checkbox-disabled:not(.mat-checkbox-checked) .mat-checkbox-frame {
        border-color: #b0b0b0;
    }

    .mat-checkbox-disabled .mat-checkbox-label {
        color: rgba(0, 0, 0, 0.54);
    }

    @media (-ms-high-contrast: active) {
        .mat-checkbox-disabled {
            opacity: 0.5;
        }
    }

    @media (-ms-high-contrast: active) {
        .mat-checkbox-background {
            background: none;
        }
    }

    .mat-checkbox .mat-ripple-element {
        background-color: black;
    }

    .mat-checkbox-checked:not(.mat-checkbox-disabled).mat-primary .mat-ripple-element,
    .mat-checkbox:active:not(.mat-checkbox-disabled).mat-primary .mat-ripple-element {
        background: #009688;
    }

    .mat-checkbox-checked:not(.mat-checkbox-disabled).mat-accent .mat-ripple-element,
    .mat-checkbox:active:not(.mat-checkbox-disabled).mat-accent .mat-ripple-element {
        background: #ffd740;
    }

    .mat-checkbox-checked:not(.mat-checkbox-disabled).mat-warn .mat-ripple-element,
    .mat-checkbox:active:not(.mat-checkbox-disabled).mat-warn .mat-ripple-element {
        background: #f44336;
    }

    .mat-chip.mat-standard-chip {
        background-color: #e0e0e0;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-chip.mat-standard-chip .mat-chip-remove {
        color: rgba(0, 0, 0, 0.87);
        opacity: 0.4;
    }

    .mat-chip.mat-standard-chip:not(.mat-chip-disabled):active {
        box-shadow: 0px 3px 3px -2px rgba(0, 0, 0, 0.2), 0px 3px 4px 0px rgba(0, 0, 0, 0.14), 0px 1px 8px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-chip.mat-standard-chip:not(.mat-chip-disabled) .mat-chip-remove:hover {
        opacity: 0.54;
    }

    .mat-chip.mat-standard-chip.mat-chip-disabled {
        opacity: 0.4;
    }

    .mat-chip.mat-standard-chip::after {
        background: black;
    }

    .mat-chip.mat-standard-chip.mat-chip-selected.mat-primary {
        background-color: #009688;
        color: white;
    }

    .mat-chip.mat-standard-chip.mat-chip-selected.mat-primary .mat-chip-remove {
        color: white;
        opacity: 0.4;
    }

    .mat-chip.mat-standard-chip.mat-chip-selected.mat-primary .mat-ripple-element {
        background: rgba(255, 255, 255, 0.1);
    }

    .mat-chip.mat-standard-chip.mat-chip-selected.mat-warn {
        background-color: #f44336;
        color: white;
    }

    .mat-chip.mat-standard-chip.mat-chip-selected.mat-warn .mat-chip-remove {
        color: white;
        opacity: 0.4;
    }

    .mat-chip.mat-standard-chip.mat-chip-selected.mat-warn .mat-ripple-element {
        background: rgba(255, 255, 255, 0.1);
    }

    .mat-chip.mat-standard-chip.mat-chip-selected.mat-accent {
        background-color: #ffd740;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-chip.mat-standard-chip.mat-chip-selected.mat-accent .mat-chip-remove {
        color: rgba(0, 0, 0, 0.87);
        opacity: 0.4;
    }

    .mat-chip.mat-standard-chip.mat-chip-selected.mat-accent .mat-ripple-element {
        background: rgba(0, 0, 0, 0.1);
    }

    .mat-table {
        background: white;
    }

    .mat-table thead,
    .mat-table tbody,
    .mat-table tfoot,
    mat-header-row,
    mat-row,
    mat-footer-row,
    [mat-header-row],
    [mat-row],
    [mat-footer-row],
    .mat-table-sticky {
        background: inherit;
    }

    mat-row,
    mat-header-row,
    mat-footer-row,
    th.mat-header-cell,
    td.mat-cell,
    td.mat-footer-cell {
        border-bottom-color: rgba(0, 0, 0, 0.12);
    }

    .mat-header-cell {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-cell,
    .mat-footer-cell {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-calendar-arrow {
        border-top-color: rgba(0, 0, 0, 0.54);
    }

    .mat-datepicker-toggle,
    .mat-datepicker-content .mat-calendar-next-button,
    .mat-datepicker-content .mat-calendar-previous-button {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-calendar-table-header {
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-calendar-table-header-divider::after {
        background: rgba(0, 0, 0, 0.12);
    }

    .mat-calendar-body-label {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-calendar-body-cell-content {
        color: rgba(0, 0, 0, 0.87);
        border-color: transparent;
    }

    .mat-calendar-body-disabled>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected) {
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-calendar-body-cell:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
    .cdk-keyboard-focused .mat-calendar-body-active>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
    .cdk-program-focused .mat-calendar-body-active>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected) {
        background-color: rgba(0, 0, 0, 0.04);
    }

    .mat-calendar-body-today:not(.mat-calendar-body-selected) {
        border-color: rgba(0, 0, 0, 0.38);
    }

    .mat-calendar-body-disabled>.mat-calendar-body-today:not(.mat-calendar-body-selected) {
        border-color: rgba(0, 0, 0, 0.18);
    }

    .mat-calendar-body-selected {
        background-color: #009688;
        color: white;
    }

    .mat-calendar-body-disabled>.mat-calendar-body-selected {
        background-color: rgba(0, 150, 136, 0.4);
    }

    .mat-calendar-body-today.mat-calendar-body-selected {
        box-shadow: inset 0 0 0 1px white;
    }

    .mat-datepicker-content {
        box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
        background-color: white;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-datepicker-content.mat-accent .mat-calendar-body-selected {
        background-color: #ffd740;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-datepicker-content.mat-accent .mat-calendar-body-disabled>.mat-calendar-body-selected {
        background-color: rgba(255, 215, 64, 0.4);
    }

    .mat-datepicker-content.mat-accent .mat-calendar-body-today.mat-calendar-body-selected {
        box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.87);
    }

    .mat-datepicker-content.mat-warn .mat-calendar-body-selected {
        background-color: #f44336;
        color: white;
    }

    .mat-datepicker-content.mat-warn .mat-calendar-body-disabled>.mat-calendar-body-selected {
        background-color: rgba(244, 67, 54, 0.4);
    }

    .mat-datepicker-content.mat-warn .mat-calendar-body-today.mat-calendar-body-selected {
        box-shadow: inset 0 0 0 1px white;
    }

    .mat-datepicker-content-touch {
        box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-datepicker-toggle-active {
        color: #009688;
    }

    .mat-datepicker-toggle-active.mat-accent {
        color: #ffd740;
    }

    .mat-datepicker-toggle-active.mat-warn {
        color: #f44336;
    }

    .mat-dialog-container {
        box-shadow: 0px 11px 15px -7px rgba(0, 0, 0, 0.2), 0px 24px 38px 3px rgba(0, 0, 0, 0.14), 0px 9px 46px 8px rgba(0, 0, 0, 0.12);
        background: white;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-divider {
        border-top-color: rgba(0, 0, 0, 0.12);
    }

    .mat-divider-vertical {
        border-right-color: rgba(0, 0, 0, 0.12);
    }

    .mat-expansion-panel {
        background: white;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-expansion-panel:not([class*=mat-elevation-z]) {
        box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-action-row {
        border-top-color: rgba(0, 0, 0, 0.12);
    }

    .mat-expansion-panel .mat-expansion-panel-header.cdk-keyboard-focused:not([aria-disabled=true]),
    .mat-expansion-panel .mat-expansion-panel-header.cdk-program-focused:not([aria-disabled=true]),
    .mat-expansion-panel:not(.mat-expanded) .mat-expansion-panel-header:hover:not([aria-disabled=true]) {
        background: rgba(0, 0, 0, 0.04);
    }

    @media (hover: none) {
        .mat-expansion-panel:not(.mat-expanded):not([aria-disabled=true]) .mat-expansion-panel-header:hover {
            background: white;
        }
    }

    .mat-expansion-panel-header-title {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-expansion-panel-header-description,
    .mat-expansion-indicator::after {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-expansion-panel-header[aria-disabled=true] {
        color: rgba(0, 0, 0, 0.26);
    }

    .mat-expansion-panel-header[aria-disabled=true] .mat-expansion-panel-header-title,
    .mat-expansion-panel-header[aria-disabled=true] .mat-expansion-panel-header-description {
        color: inherit;
    }

    .mat-form-field-label {
        color: rgba(0, 0, 0, 0.6);
    }

    .mat-hint {
        color: rgba(0, 0, 0, 0.6);
    }

    .mat-form-field.mat-focused .mat-form-field-label {
        color: #009688;
    }

    .mat-form-field.mat-focused .mat-form-field-label.mat-accent {
        color: #ffd740;
    }

    .mat-form-field.mat-focused .mat-form-field-label.mat-warn {
        color: #f44336;
    }

    .mat-focused .mat-form-field-required-marker {
        color: #ffd740;
    }

    .mat-form-field-ripple {
        background-color: rgba(0, 0, 0, 0.87);
    }

    .mat-form-field.mat-focused .mat-form-field-ripple {
        background-color: #009688;
    }

    .mat-form-field.mat-focused .mat-form-field-ripple.mat-accent {
        background-color: #ffd740;
    }

    .mat-form-field.mat-focused .mat-form-field-ripple.mat-warn {
        background-color: #f44336;
    }

    .mat-form-field-type-mat-native-select.mat-focused:not(.mat-form-field-invalid) .mat-form-field-infix::after {
        color: #009688;
    }

    .mat-form-field-type-mat-native-select.mat-focused:not(.mat-form-field-invalid).mat-accent .mat-form-field-infix::after {
        color: #ffd740;
    }

    .mat-form-field-type-mat-native-select.mat-focused:not(.mat-form-field-invalid).mat-warn .mat-form-field-infix::after {
        color: #f44336;
    }

    .mat-form-field.mat-form-field-invalid .mat-form-field-label {
        color: #f44336;
    }

    .mat-form-field.mat-form-field-invalid .mat-form-field-label.mat-accent,
    .mat-form-field.mat-form-field-invalid .mat-form-field-label .mat-form-field-required-marker {
        color: #f44336;
    }

    .mat-form-field.mat-form-field-invalid .mat-form-field-ripple,
    .mat-form-field.mat-form-field-invalid .mat-form-field-ripple.mat-accent {
        background-color: #f44336;
    }

    .mat-error {
        color: #f44336;
    }

    .mat-form-field-appearance-legacy .mat-form-field-label {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-form-field-appearance-legacy .mat-hint {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-form-field-appearance-legacy .mat-form-field-underline {
        background-color: rgba(0, 0, 0, 0.42);
    }

    .mat-form-field-appearance-legacy.mat-form-field-disabled .mat-form-field-underline {
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.42)), color-stop(33%, rgba(0, 0, 0, 0.42)), color-stop(0%, transparent));
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.42) 0%, rgba(0, 0, 0, 0.42) 33%, transparent 0%);
        background-size: 4px 100%;
        background-repeat: repeat-x;
    }

    .mat-form-field-appearance-standard .mat-form-field-underline {
        background-color: rgba(0, 0, 0, 0.42);
    }

    .mat-form-field-appearance-standard.mat-form-field-disabled .mat-form-field-underline {
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.42)), color-stop(33%, rgba(0, 0, 0, 0.42)), color-stop(0%, transparent));
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.42) 0%, rgba(0, 0, 0, 0.42) 33%, transparent 0%);
        background-size: 4px 100%;
        background-repeat: repeat-x;
    }

    .mat-form-field-appearance-fill .mat-form-field-flex {
        background-color: rgba(0, 0, 0, 0.04);
    }

    .mat-form-field-appearance-fill.mat-form-field-disabled .mat-form-field-flex {
        background-color: rgba(0, 0, 0, 0.02);
    }

    .mat-form-field-appearance-fill .mat-form-field-underline::before {
        background-color: rgba(0, 0, 0, 0.42);
    }

    .mat-form-field-appearance-fill.mat-form-field-disabled .mat-form-field-label {
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-form-field-appearance-fill.mat-form-field-disabled .mat-form-field-underline::before {
        background-color: transparent;
    }

    .mat-form-field-appearance-outline .mat-form-field-outline {
        color: rgba(0, 0, 0, 0.12);
    }

    .mat-form-field-appearance-outline .mat-form-field-outline-thick {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-form-field-appearance-outline.mat-focused .mat-form-field-outline-thick {
        color: #009688;
    }

    .mat-form-field-appearance-outline.mat-focused.mat-accent .mat-form-field-outline-thick {
        color: #ffd740;
    }

    .mat-form-field-appearance-outline.mat-focused.mat-warn .mat-form-field-outline-thick {
        color: #f44336;
    }

    .mat-form-field-appearance-outline.mat-form-field-invalid.mat-form-field-invalid .mat-form-field-outline-thick {
        color: #f44336;
    }

    .mat-form-field-appearance-outline.mat-form-field-disabled .mat-form-field-label {
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-form-field-appearance-outline.mat-form-field-disabled .mat-form-field-outline {
        color: rgba(0, 0, 0, 0.06);
    }

    .mat-icon.mat-primary {
        color: #009688;
    }

    .mat-icon.mat-accent {
        color: #ffd740;
    }

    .mat-icon.mat-warn {
        color: #f44336;
    }

    .mat-form-field-type-mat-native-select .mat-form-field-infix::after {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-input-element:disabled,
    .mat-form-field-type-mat-native-select.mat-form-field-disabled .mat-form-field-infix::after {
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-input-element {
        caret-color: #009688;
    }

    .mat-input-element::-webkit-input-placeholder {
        color: rgba(0, 0, 0, 0.42);
    }

    .mat-input-element::-moz-placeholder {
        color: rgba(0, 0, 0, 0.42);
    }

    .mat-input-element::-ms-input-placeholder {
        color: rgba(0, 0, 0, 0.42);
    }

    .mat-input-element::placeholder {
        color: rgba(0, 0, 0, 0.42);
    }

    .mat-input-element::-moz-placeholder {
        color: rgba(0, 0, 0, 0.42);
    }

    .mat-input-element::-webkit-input-placeholder {
        color: rgba(0, 0, 0, 0.42);
    }

    .mat-input-element:-ms-input-placeholder {
        color: rgba(0, 0, 0, 0.42);
    }

    .mat-accent .mat-input-element {
        caret-color: #ffd740;
    }

    .mat-warn .mat-input-element,
    .mat-form-field-invalid .mat-input-element {
        caret-color: #f44336;
    }

    .mat-form-field-type-mat-native-select.mat-form-field-invalid .mat-form-field-infix::after {
        color: #f44336;
    }

    .mat-list-base .mat-list-item {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-list-base .mat-list-option {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-list-base .mat-subheader {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-list-item-disabled {
        background-color: #eeeeee;
    }

    .mat-list-option:hover,
    .mat-list-option:focus,
    .mat-nav-list .mat-list-item:hover,
    .mat-nav-list .mat-list-item:focus,
    .mat-action-list .mat-list-item:hover,
    .mat-action-list .mat-list-item:focus {
        background: rgba(0, 0, 0, 0.04);
    }

    .mat-menu-panel {
        background: white;
    }

    .mat-menu-panel:not([class*=mat-elevation-z]) {
        box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-menu-item {
        background: transparent;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-menu-item[disabled],
    .mat-menu-item[disabled]::after {
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-menu-item .mat-icon-no-color,
    .mat-menu-item-submenu-trigger::after {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-menu-item:hover:not([disabled]),
    .mat-menu-item.cdk-program-focused:not([disabled]),
    .mat-menu-item.cdk-keyboard-focused:not([disabled]),
    .mat-menu-item-highlighted:not([disabled]) {
        background: rgba(0, 0, 0, 0.04);
    }

    .mat-paginator {
        background: white;
    }

    .mat-paginator,
    .mat-paginator-page-size .mat-select-trigger {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-paginator-decrement,
    .mat-paginator-increment {
        border-top: 2px solid rgba(0, 0, 0, 0.54);
        border-right: 2px solid rgba(0, 0, 0, 0.54);
    }

    .mat-paginator-first,
    .mat-paginator-last {
        border-top: 2px solid rgba(0, 0, 0, 0.54);
    }

    .mat-icon-button[disabled] .mat-paginator-decrement,
    .mat-icon-button[disabled] .mat-paginator-increment,
    .mat-icon-button[disabled] .mat-paginator-first,
    .mat-icon-button[disabled] .mat-paginator-last {
        border-color: rgba(0, 0, 0, 0.38);
    }

    .mat-progress-bar-background {
        fill: #b2dfdb;
    }

    .mat-progress-bar-buffer {
        background-color: #b2dfdb;
    }

    .mat-progress-bar-fill::after {
        background-color: #009688;
    }

    .mat-progress-bar.mat-accent .mat-progress-bar-background {
        fill: #ffe57f;
    }

    .mat-progress-bar.mat-accent .mat-progress-bar-buffer {
        background-color: #ffe57f;
    }

    .mat-progress-bar.mat-accent .mat-progress-bar-fill::after {
        background-color: #ffd740;
    }

    .mat-progress-bar.mat-warn .mat-progress-bar-background {
        fill: #ffcdd2;
    }

    .mat-progress-bar.mat-warn .mat-progress-bar-buffer {
        background-color: #ffcdd2;
    }

    .mat-progress-bar.mat-warn .mat-progress-bar-fill::after {
        background-color: #f44336;
    }

    .mat-progress-spinner circle,
    .mat-spinner circle {
        stroke: #009688;
    }

    .mat-progress-spinner.mat-accent circle,
    .mat-spinner.mat-accent circle {
        stroke: #ffd740;
    }

    .mat-progress-spinner.mat-warn circle,
    .mat-spinner.mat-warn circle {
        stroke: #f44336;
    }

    .mat-radio-outer-circle {
        border-color: rgba(0, 0, 0, 0.54);
    }

    .mat-radio-button.mat-primary.mat-radio-checked .mat-radio-outer-circle {
        border-color: #009688;
    }

    .mat-radio-button.mat-primary .mat-radio-inner-circle,
    .mat-radio-button.mat-primary .mat-radio-ripple .mat-ripple-element:not(.mat-radio-persistent-ripple),
    .mat-radio-button.mat-primary.mat-radio-checked .mat-radio-persistent-ripple,
    .mat-radio-button.mat-primary:active .mat-radio-persistent-ripple {
        background-color: #009688;
    }

    .mat-radio-button.mat-accent.mat-radio-checked .mat-radio-outer-circle {
        border-color: #ffd740;
    }

    .mat-radio-button.mat-accent .mat-radio-inner-circle,
    .mat-radio-button.mat-accent .mat-radio-ripple .mat-ripple-element:not(.mat-radio-persistent-ripple),
    .mat-radio-button.mat-accent.mat-radio-checked .mat-radio-persistent-ripple,
    .mat-radio-button.mat-accent:active .mat-radio-persistent-ripple {
        background-color: #ffd740;
    }

    .mat-radio-button.mat-warn.mat-radio-checked .mat-radio-outer-circle {
        border-color: #f44336;
    }

    .mat-radio-button.mat-warn .mat-radio-inner-circle,
    .mat-radio-button.mat-warn .mat-radio-ripple .mat-ripple-element:not(.mat-radio-persistent-ripple),
    .mat-radio-button.mat-warn.mat-radio-checked .mat-radio-persistent-ripple,
    .mat-radio-button.mat-warn:active .mat-radio-persistent-ripple {
        background-color: #f44336;
    }

    .mat-radio-button.mat-radio-disabled.mat-radio-checked .mat-radio-outer-circle,
    .mat-radio-button.mat-radio-disabled .mat-radio-outer-circle {
        border-color: rgba(0, 0, 0, 0.38);
    }

    .mat-radio-button.mat-radio-disabled .mat-radio-ripple .mat-ripple-element,
    .mat-radio-button.mat-radio-disabled .mat-radio-inner-circle {
        background-color: rgba(0, 0, 0, 0.38);
    }

    .mat-radio-button.mat-radio-disabled .mat-radio-label-content {
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-radio-button .mat-ripple-element {
        background-color: black;
    }

    .mat-select-value {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-select-placeholder {
        color: rgba(0, 0, 0, 0.42);
    }

    .mat-select-disabled .mat-select-value {
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-select-arrow {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-select-panel {
        background: white;
    }

    .mat-select-panel:not([class*=mat-elevation-z]) {
        box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-select-panel .mat-option.mat-selected:not(.mat-option-multiple) {
        background: rgba(0, 0, 0, 0.12);
    }

    .mat-form-field.mat-focused.mat-primary .mat-select-arrow {
        color: #009688;
    }

    .mat-form-field.mat-focused.mat-accent .mat-select-arrow {
        color: #ffd740;
    }

    .mat-form-field.mat-focused.mat-warn .mat-select-arrow {
        color: #f44336;
    }

    .mat-form-field .mat-select.mat-select-invalid .mat-select-arrow {
        color: #f44336;
    }

    .mat-form-field .mat-select.mat-select-disabled .mat-select-arrow {
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-drawer-container {
        background-color: #fafafa;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-drawer {
        background-color: white;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-drawer.mat-drawer-push {
        background-color: white;
    }

    .mat-drawer:not(.mat-drawer-side) {
        box-shadow: 0px 8px 10px -5px rgba(0, 0, 0, 0.2), 0px 16px 24px 2px rgba(0, 0, 0, 0.14), 0px 6px 30px 5px rgba(0, 0, 0, 0.12);
    }

    .mat-drawer-side {
        border-right: solid 1px rgba(0, 0, 0, 0.12);
    }

    .mat-drawer-side.mat-drawer-end {
        border-left: solid 1px rgba(0, 0, 0, 0.12);
        border-right: none;
    }

    [dir=rtl] .mat-drawer-side {
        border-left: solid 1px rgba(0, 0, 0, 0.12);
        border-right: none;
    }

    [dir=rtl] .mat-drawer-side.mat-drawer-end {
        border-left: none;
        border-right: solid 1px rgba(0, 0, 0, 0.12);
    }

    .mat-drawer-backdrop.mat-drawer-shown {
        background-color: rgba(0, 0, 0, 0.6);
    }

    .mat-slide-toggle.mat-checked .mat-slide-toggle-thumb {
        background-color: #ffd740;
    }

    .mat-slide-toggle.mat-checked .mat-slide-toggle-bar {
        background-color: rgba(255, 215, 64, 0.54);
    }

    .mat-slide-toggle.mat-checked .mat-ripple-element {
        background-color: #ffd740;
    }

    .mat-slide-toggle.mat-primary.mat-checked .mat-slide-toggle-thumb {
        background-color: #009688;
    }

    .mat-slide-toggle.mat-primary.mat-checked .mat-slide-toggle-bar {
        background-color: rgba(0, 150, 136, 0.54);
    }

    .mat-slide-toggle.mat-primary.mat-checked .mat-ripple-element {
        background-color: #009688;
    }

    .mat-slide-toggle.mat-warn.mat-checked .mat-slide-toggle-thumb {
        background-color: #f44336;
    }

    .mat-slide-toggle.mat-warn.mat-checked .mat-slide-toggle-bar {
        background-color: rgba(244, 67, 54, 0.54);
    }

    .mat-slide-toggle.mat-warn.mat-checked .mat-ripple-element {
        background-color: #f44336;
    }

    .mat-slide-toggle:not(.mat-checked) .mat-ripple-element {
        background-color: black;
    }

    .mat-slide-toggle-thumb {
        box-shadow: 0px 2px 1px -1px rgba(0, 0, 0, 0.2), 0px 1px 1px 0px rgba(0, 0, 0, 0.14), 0px 1px 3px 0px rgba(0, 0, 0, 0.12);
        background-color: #fafafa;
    }

    .mat-slide-toggle-bar {
        background-color: rgba(0, 0, 0, 0.38);
    }

    .mat-slider-track-background {
        background-color: rgba(0, 0, 0, 0.26);
    }

    .mat-primary .mat-slider-track-fill,
    .mat-primary .mat-slider-thumb,
    .mat-primary .mat-slider-thumb-label {
        background-color: #009688;
    }

    .mat-primary .mat-slider-thumb-label-text {
        color: white;
    }

    .mat-accent .mat-slider-track-fill,
    .mat-accent .mat-slider-thumb,
    .mat-accent .mat-slider-thumb-label {
        background-color: #ffd740;
    }

    .mat-accent .mat-slider-thumb-label-text {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-warn .mat-slider-track-fill,
    .mat-warn .mat-slider-thumb,
    .mat-warn .mat-slider-thumb-label {
        background-color: #f44336;
    }

    .mat-warn .mat-slider-thumb-label-text {
        color: white;
    }

    .mat-slider-focus-ring {
        background-color: rgba(255, 215, 64, 0.2);
    }

    .mat-slider:hover .mat-slider-track-background,
    .cdk-focused .mat-slider-track-background {
        background-color: rgba(0, 0, 0, 0.38);
    }

    .mat-slider-disabled .mat-slider-track-background,
    .mat-slider-disabled .mat-slider-track-fill,
    .mat-slider-disabled .mat-slider-thumb {
        background-color: rgba(0, 0, 0, 0.26);
    }

    .mat-slider-disabled:hover .mat-slider-track-background {
        background-color: rgba(0, 0, 0, 0.26);
    }

    .mat-slider-min-value .mat-slider-focus-ring {
        background-color: rgba(0, 0, 0, 0.12);
    }

    .mat-slider-min-value.mat-slider-thumb-label-showing .mat-slider-thumb,
    .mat-slider-min-value.mat-slider-thumb-label-showing .mat-slider-thumb-label {
        background-color: rgba(0, 0, 0, 0.87);
    }

    .mat-slider-min-value.mat-slider-thumb-label-showing.cdk-focused .mat-slider-thumb,
    .mat-slider-min-value.mat-slider-thumb-label-showing.cdk-focused .mat-slider-thumb-label {
        background-color: rgba(0, 0, 0, 0.26);
    }

    .mat-slider-min-value:not(.mat-slider-thumb-label-showing) .mat-slider-thumb {
        border-color: rgba(0, 0, 0, 0.26);
        background-color: transparent;
    }

    .mat-slider-min-value:not(.mat-slider-thumb-label-showing):hover .mat-slider-thumb,
    .mat-slider-min-value:not(.mat-slider-thumb-label-showing).cdk-focused .mat-slider-thumb {
        border-color: rgba(0, 0, 0, 0.38);
    }

    .mat-slider-min-value:not(.mat-slider-thumb-label-showing):hover.mat-slider-disabled .mat-slider-thumb,
    .mat-slider-min-value:not(.mat-slider-thumb-label-showing).cdk-focused.mat-slider-disabled .mat-slider-thumb {
        border-color: rgba(0, 0, 0, 0.26);
    }

    .mat-slider-has-ticks .mat-slider-wrapper::after {
        border-color: rgba(0, 0, 0, 0.7);
    }

    .mat-slider-horizontal .mat-slider-ticks {
        background-image: repeating-linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) 2px, transparent 0, transparent);
        background-image: -moz-repeating-linear-gradient(0.0001deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) 2px, transparent 0, transparent);
    }

    .mat-slider-vertical .mat-slider-ticks {
        background-image: repeating-linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) 2px, transparent 0, transparent);
    }

    .mat-step-header.cdk-keyboard-focused,
    .mat-step-header.cdk-program-focused,
    .mat-step-header:hover {
        background-color: rgba(0, 0, 0, 0.04);
    }

    @media (hover: none) {
        .mat-step-header:hover {
            background: none;
        }
    }

    .mat-step-header .mat-step-label,
    .mat-step-header .mat-step-optional {
        color: rgba(0, 0, 0, 0.54);
    }

    .mat-step-header .mat-step-icon {
        background-color: rgba(0, 0, 0, 0.54);
        color: white;
    }

    .mat-step-header .mat-step-icon-selected,
    .mat-step-header .mat-step-icon-state-done,
    .mat-step-header .mat-step-icon-state-edit {
        background-color: #009688;
        color: white;
    }

    .mat-step-header .mat-step-icon-state-error {
        background-color: transparent;
        color: #f44336;
    }

    .mat-step-header .mat-step-label.mat-step-label-active {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-step-header .mat-step-label.mat-step-label-error {
        color: #f44336;
    }

    .mat-stepper-horizontal,
    .mat-stepper-vertical {
        background-color: white;
    }

    .mat-stepper-vertical-line::before {
        border-left-color: rgba(0, 0, 0, 0.12);
    }

    .mat-horizontal-stepper-header::before,
    .mat-horizontal-stepper-header::after,
    .mat-stepper-horizontal-line {
        border-top-color: rgba(0, 0, 0, 0.12);
    }

    .mat-sort-header-arrow {
        color: #757575;
    }

    .mat-tab-nav-bar,
    .mat-tab-header {
        border-bottom: 1px solid rgba(0, 0, 0, 0.12);
    }

    .mat-tab-group-inverted-header .mat-tab-nav-bar,
    .mat-tab-group-inverted-header .mat-tab-header {
        border-top: 1px solid rgba(0, 0, 0, 0.12);
        border-bottom: none;
    }

    .mat-tab-label,
    .mat-tab-link {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-tab-label.mat-tab-disabled,
    .mat-tab-link.mat-tab-disabled {
        color: rgba(0, 0, 0, 0.38);
    }

    .mat-tab-header-pagination-chevron {
        border-color: rgba(0, 0, 0, 0.87);
    }

    .mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron {
        border-color: rgba(0, 0, 0, 0.38);
    }

    .mat-tab-group[class*=mat-background-] .mat-tab-header,
    .mat-tab-nav-bar[class*=mat-background-] {
        border-bottom: none;
        border-top: none;
    }

    .mat-tab-group.mat-primary .mat-tab-label.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-primary .mat-tab-label.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-primary .mat-tab-link.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-primary .mat-tab-link.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-primary .mat-tab-label.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-primary .mat-tab-label.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-primary .mat-tab-link.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-primary .mat-tab-link.cdk-program-focused:not(.mat-tab-disabled) {
        background-color: rgba(178, 223, 219, 0.3);
    }

    .mat-tab-group.mat-primary .mat-ink-bar,
    .mat-tab-nav-bar.mat-primary .mat-ink-bar {
        background-color: #009688;
    }

    .mat-tab-group.mat-primary.mat-background-primary .mat-ink-bar,
    .mat-tab-nav-bar.mat-primary.mat-background-primary .mat-ink-bar {
        background-color: white;
    }

    .mat-tab-group.mat-accent .mat-tab-label.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-accent .mat-tab-label.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-accent .mat-tab-link.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-accent .mat-tab-link.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-accent .mat-tab-label.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-accent .mat-tab-label.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-accent .mat-tab-link.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-accent .mat-tab-link.cdk-program-focused:not(.mat-tab-disabled) {
        background-color: rgba(255, 229, 127, 0.3);
    }

    .mat-tab-group.mat-accent .mat-ink-bar,
    .mat-tab-nav-bar.mat-accent .mat-ink-bar {
        background-color: #ffd740;
    }

    .mat-tab-group.mat-accent.mat-background-accent .mat-ink-bar,
    .mat-tab-nav-bar.mat-accent.mat-background-accent .mat-ink-bar {
        background-color: rgba(0, 0, 0, 0.87);
    }

    .mat-tab-group.mat-warn .mat-tab-label.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-warn .mat-tab-label.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-warn .mat-tab-link.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-warn .mat-tab-link.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-warn .mat-tab-label.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-warn .mat-tab-label.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-warn .mat-tab-link.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-warn .mat-tab-link.cdk-program-focused:not(.mat-tab-disabled) {
        background-color: rgba(255, 205, 210, 0.3);
    }

    .mat-tab-group.mat-warn .mat-ink-bar,
    .mat-tab-nav-bar.mat-warn .mat-ink-bar {
        background-color: #f44336;
    }

    .mat-tab-group.mat-warn.mat-background-warn .mat-ink-bar,
    .mat-tab-nav-bar.mat-warn.mat-background-warn .mat-ink-bar {
        background-color: white;
    }

    .mat-tab-group.mat-background-primary .mat-tab-label.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-background-primary .mat-tab-label.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-background-primary .mat-tab-link.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-background-primary .mat-tab-link.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-background-primary .mat-tab-label.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-background-primary .mat-tab-label.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-background-primary .mat-tab-link.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-background-primary .mat-tab-link.cdk-program-focused:not(.mat-tab-disabled) {
        background-color: rgba(178, 223, 219, 0.3);
    }

    .mat-tab-group.mat-background-primary .mat-tab-header,
    .mat-tab-group.mat-background-primary .mat-tab-links,
    .mat-tab-group.mat-background-primary .mat-tab-header-pagination,
    .mat-tab-nav-bar.mat-background-primary .mat-tab-header,
    .mat-tab-nav-bar.mat-background-primary .mat-tab-links,
    .mat-tab-nav-bar.mat-background-primary .mat-tab-header-pagination {
        background-color: #009688;
    }

    .mat-tab-group.mat-background-primary .mat-tab-label,
    .mat-tab-group.mat-background-primary .mat-tab-link,
    .mat-tab-nav-bar.mat-background-primary .mat-tab-label,
    .mat-tab-nav-bar.mat-background-primary .mat-tab-link {
        color: white;
    }

    .mat-tab-group.mat-background-primary .mat-tab-label.mat-tab-disabled,
    .mat-tab-group.mat-background-primary .mat-tab-link.mat-tab-disabled,
    .mat-tab-nav-bar.mat-background-primary .mat-tab-label.mat-tab-disabled,
    .mat-tab-nav-bar.mat-background-primary .mat-tab-link.mat-tab-disabled {
        color: rgba(255, 255, 255, 0.4);
    }

    .mat-tab-group.mat-background-primary .mat-tab-header-pagination-chevron,
    .mat-tab-nav-bar.mat-background-primary .mat-tab-header-pagination-chevron {
        border-color: white;
    }

    .mat-tab-group.mat-background-primary .mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron,
    .mat-tab-nav-bar.mat-background-primary .mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron {
        border-color: rgba(255, 255, 255, 0.4);
    }

    .mat-tab-group.mat-background-primary .mat-ripple-element,
    .mat-tab-nav-bar.mat-background-primary .mat-ripple-element {
        background-color: rgba(255, 255, 255, 0.12);
    }

    .mat-tab-group.mat-background-accent .mat-tab-label.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-background-accent .mat-tab-label.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-background-accent .mat-tab-link.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-background-accent .mat-tab-link.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-background-accent .mat-tab-label.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-background-accent .mat-tab-label.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-background-accent .mat-tab-link.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-background-accent .mat-tab-link.cdk-program-focused:not(.mat-tab-disabled) {
        background-color: rgba(255, 229, 127, 0.3);
    }

    .mat-tab-group.mat-background-accent .mat-tab-header,
    .mat-tab-group.mat-background-accent .mat-tab-links,
    .mat-tab-group.mat-background-accent .mat-tab-header-pagination,
    .mat-tab-nav-bar.mat-background-accent .mat-tab-header,
    .mat-tab-nav-bar.mat-background-accent .mat-tab-links,
    .mat-tab-nav-bar.mat-background-accent .mat-tab-header-pagination {
        background-color: #ffd740;
    }

    .mat-tab-group.mat-background-accent .mat-tab-label,
    .mat-tab-group.mat-background-accent .mat-tab-link,
    .mat-tab-nav-bar.mat-background-accent .mat-tab-label,
    .mat-tab-nav-bar.mat-background-accent .mat-tab-link {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-tab-group.mat-background-accent .mat-tab-label.mat-tab-disabled,
    .mat-tab-group.mat-background-accent .mat-tab-link.mat-tab-disabled,
    .mat-tab-nav-bar.mat-background-accent .mat-tab-label.mat-tab-disabled,
    .mat-tab-nav-bar.mat-background-accent .mat-tab-link.mat-tab-disabled {
        color: rgba(0, 0, 0, 0.4);
    }

    .mat-tab-group.mat-background-accent .mat-tab-header-pagination-chevron,
    .mat-tab-nav-bar.mat-background-accent .mat-tab-header-pagination-chevron {
        border-color: rgba(0, 0, 0, 0.87);
    }

    .mat-tab-group.mat-background-accent .mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron,
    .mat-tab-nav-bar.mat-background-accent .mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron {
        border-color: rgba(0, 0, 0, 0.4);
    }

    .mat-tab-group.mat-background-accent .mat-ripple-element,
    .mat-tab-nav-bar.mat-background-accent .mat-ripple-element {
        background-color: rgba(0, 0, 0, 0.12);
    }

    .mat-tab-group.mat-background-warn .mat-tab-label.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-background-warn .mat-tab-label.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-background-warn .mat-tab-link.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-group.mat-background-warn .mat-tab-link.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-background-warn .mat-tab-label.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-background-warn .mat-tab-label.cdk-program-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-background-warn .mat-tab-link.cdk-keyboard-focused:not(.mat-tab-disabled),
    .mat-tab-nav-bar.mat-background-warn .mat-tab-link.cdk-program-focused:not(.mat-tab-disabled) {
        background-color: rgba(255, 205, 210, 0.3);
    }

    .mat-tab-group.mat-background-warn .mat-tab-header,
    .mat-tab-group.mat-background-warn .mat-tab-links,
    .mat-tab-group.mat-background-warn .mat-tab-header-pagination,
    .mat-tab-nav-bar.mat-background-warn .mat-tab-header,
    .mat-tab-nav-bar.mat-background-warn .mat-tab-links,
    .mat-tab-nav-bar.mat-background-warn .mat-tab-header-pagination {
        background-color: #f44336;
    }

    .mat-tab-group.mat-background-warn .mat-tab-label,
    .mat-tab-group.mat-background-warn .mat-tab-link,
    .mat-tab-nav-bar.mat-background-warn .mat-tab-label,
    .mat-tab-nav-bar.mat-background-warn .mat-tab-link {
        color: white;
    }

    .mat-tab-group.mat-background-warn .mat-tab-label.mat-tab-disabled,
    .mat-tab-group.mat-background-warn .mat-tab-link.mat-tab-disabled,
    .mat-tab-nav-bar.mat-background-warn .mat-tab-label.mat-tab-disabled,
    .mat-tab-nav-bar.mat-background-warn .mat-tab-link.mat-tab-disabled {
        color: rgba(255, 255, 255, 0.4);
    }

    .mat-tab-group.mat-background-warn .mat-tab-header-pagination-chevron,
    .mat-tab-nav-bar.mat-background-warn .mat-tab-header-pagination-chevron {
        border-color: white;
    }

    .mat-tab-group.mat-background-warn .mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron,
    .mat-tab-nav-bar.mat-background-warn .mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron {
        border-color: rgba(255, 255, 255, 0.4);
    }

    .mat-tab-group.mat-background-warn .mat-ripple-element,
    .mat-tab-nav-bar.mat-background-warn .mat-ripple-element {
        background-color: rgba(255, 255, 255, 0.12);
    }

    .mat-toolbar {
        background: whitesmoke;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-toolbar.mat-primary {
        background: #009688;
        color: white;
    }

    .mat-toolbar.mat-accent {
        background: #ffd740;
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-toolbar.mat-warn {
        background: #f44336;
        color: white;
    }

    .mat-toolbar .mat-form-field-underline,
    .mat-toolbar .mat-form-field-ripple,
    .mat-toolbar .mat-focused .mat-form-field-ripple {
        background-color: currentColor;
    }

    .mat-toolbar .mat-form-field-label,
    .mat-toolbar .mat-focused .mat-form-field-label,
    .mat-toolbar .mat-select-value,
    .mat-toolbar .mat-select-arrow,
    .mat-toolbar .mat-form-field.mat-focused .mat-select-arrow {
        color: inherit;
    }

    .mat-toolbar .mat-input-element {
        caret-color: currentColor;
    }

    .mat-tooltip {
        background: rgba(97, 97, 97, 0.9);
    }

    .mat-tree {
        background: white;
    }

    .mat-tree-node,
    .mat-nested-tree-node {
        color: rgba(0, 0, 0, 0.87);
    }

    .mat-snack-bar-container {
        color: rgba(255, 255, 255, 0.7);
        background: #323232;
        box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0, 0, 0, 0.12);
    }

    .mat-simple-snackbar-action {
        color: #ffd740;
    }

    /* You can add global styles to this file, and also import other style files */
    html,
    body {
        height: 100%;
        background-color: #e2e2e2 !important;
        overflow-x: hidden !important;
    }

    body {
        margin: 0;
        font-family: Roboto, "Helvetica Neue", sans-serif;
    }
    </style>
    <style>
    @charset "UTF-8";

    /*!
 * Bootstrap v4.3.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
    :root {
        --blue: #007bff;
        --indigo: #6610f2;
        --purple: #6f42c1;
        --pink: #e83e8c;
        --red: #dc3545;
        --orange: #fd7e14;
        --yellow: #ffc107;
        --green: #28a745;
        --teal: #20c997;
        --cyan: #17a2b8;
        --white: #fff;
        --gray: #6c757d;
        --gray-dark: #343a40;
        --primary: #007bff;
        --secondary: #6c757d;
        --success: #28a745;
        --info: #17a2b8;
        --warning: #ffc107;
        --danger: #dc3545;
        --light: #f8f9fa;
        --dark: #343a40;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1200px;
        --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    article,
    aside,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    nav,
    section {
        display: block;
    }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff;
    }

    [tabindex="-1"]:focus {
        outline: 0 !important;
    }

    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    abbr[title],
    abbr[data-original-title] {
        text-decoration: underline;
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
        cursor: help;
        border-bottom: 0;
        -webkit-text-decoration-skip-ink: none;
        text-decoration-skip-ink: none;
    }

    address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit;
    }

    ol,
    ul,
    dl {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    ol ol,
    ul ul,
    ol ul,
    ul ol {
        margin-bottom: 0;
    }

    dt {
        font-weight: 700;
    }

    dd {
        margin-bottom: 0.5rem;
        margin-left: 0;
    }

    blockquote {
        margin: 0 0 1rem;
    }

    b,
    strong {
        font-weight: bolder;
    }

    small {
        font-size: 80%;
    }

    sub,
    sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline;
    }

    sub {
        bottom: -0.25em;
    }

    sup {
        top: -0.5em;
    }

    a {
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
    }

    a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none;
    }

    a:not([href]):not([tabindex]):hover,
    a:not([href]):not([tabindex]):focus {
        color: inherit;
        text-decoration: none;
    }

    a:not([href]):not([tabindex]):focus {
        outline: 0;
    }

    pre,
    code,
    kbd,
    samp {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        font-size: 1em;
    }

    pre {
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto;
    }

    figure {
        margin: 0 0 1rem;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    svg {
        overflow: hidden;
        vertical-align: middle;
    }

    table {
        border-collapse: collapse;
    }

    caption {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        color: #6c757d;
        text-align: left;
        caption-side: bottom;
    }

    th {
        text-align: inherit;
    }

    label {
        display: inline-block;
        margin-bottom: 0.5rem;
    }

    button {
        border-radius: 0;
    }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color;
    }

    input,
    button,
    select,
    optgroup,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    button,
    input {
        overflow: visible;
    }

    button,
    select {
        text-transform: none;
    }

    select {
        word-wrap: normal;
    }

    button,
    [type=button],
    [type=reset],
    [type=submit] {
        -webkit-appearance: button;
    }

    button:not(:disabled),
    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled) {
        cursor: pointer;
    }

    button::-moz-focus-inner,
    [type=button]::-moz-focus-inner,
    [type=reset]::-moz-focus-inner,
    [type=submit]::-moz-focus-inner {
        padding: 0;
        border-style: none;
    }

    input[type=radio],
    input[type=checkbox] {
        box-sizing: border-box;
        padding: 0;
    }

    input[type=date],
    input[type=time],
    input[type=datetime-local],
    input[type=month] {
        -webkit-appearance: listbox;
    }

    textarea {
        overflow: auto;
        resize: vertical;
    }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0;
    }

    legend {
        display: block;
        width: 100%;
        max-width: 100%;
        padding: 0;
        margin-bottom: 0.5rem;
        font-size: 1.5rem;
        line-height: inherit;
        color: inherit;
        white-space: normal;
    }

    progress {
        vertical-align: baseline;
    }

    [type=number]::-webkit-inner-spin-button,
    [type=number]::-webkit-outer-spin-button {
        height: auto;
    }

    [type=search] {
        outline-offset: -2px;
        -webkit-appearance: none;
    }

    [type=search]::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button;
    }

    output {
        display: inline-block;
    }

    summary {
        display: list-item;
        cursor: pointer;
    }

    template {
        display: none;
    }

    [hidden] {
        display: none !important;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
    }

    h1,
    .h1 {
        font-size: 2.5rem;
    }

    h2,
    .h2 {
        font-size: 2rem;
    }

    h3,
    .h3 {
        font-size: 1.75rem;
    }

    h4,
    .h4 {
        font-size: 1.5rem;
    }

    h5,
    .h5 {
        font-size: 1.25rem;
    }

    h6,
    .h6 {
        font-size: 1rem;
    }

    .lead {
        font-size: 1.25rem;
        font-weight: 300;
    }

    .display-1 {
        font-size: 6rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .display-2 {
        font-size: 5.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .display-3 {
        font-size: 4.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .display-4 {
        font-size: 3.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    small,
    .small {
        font-size: 80%;
        font-weight: 400;
    }

    mark,
    .mark {
        padding: 0.2em;
        background-color: #fcf8e3;
    }

    .list-unstyled {
        padding-left: 0;
        list-style: none;
    }

    .list-inline {
        padding-left: 0;
        list-style: none;
    }

    .list-inline-item {
        display: inline-block;
    }

    .list-inline-item:not(:last-child) {
        margin-right: 0.5rem;
    }

    .initialism {
        font-size: 90%;
        text-transform: uppercase;
    }

    .blockquote {
        margin-bottom: 1rem;
        font-size: 1.25rem;
    }

    .blockquote-footer {
        display: block;
        font-size: 80%;
        color: #6c757d;
    }

    .blockquote-footer::before {
        content: "— ";
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .img-thumbnail {
        padding: 0.25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        max-width: 100%;
        height: auto;
    }

    .figure {
        display: inline-block;
    }

    .figure-img {
        margin-bottom: 0.5rem;
        line-height: 1;
    }

    .figure-caption {
        font-size: 90%;
        color: #6c757d;
    }

    code {
        font-size: 87.5%;
        color: #e83e8c;
        word-break: break-word;
    }

    a>code {
        color: inherit;
    }

    kbd {
        padding: 0.2rem 0.4rem;
        font-size: 87.5%;
        color: #fff;
        background-color: #212529;
        border-radius: 0.2rem;
    }

    kbd kbd {
        padding: 0;
        font-size: 100%;
        font-weight: 700;
    }

    pre {
        display: block;
        font-size: 87.5%;
        color: #212529;
    }

    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal;
    }

    .pre-scrollable {
        max-height: 340px;
        overflow-y: scroll;
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }

    .container-fluid {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    .row {
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .no-gutters {
        margin-right: 0;
        margin-left: 0;
    }

    .no-gutters>.col,
    .no-gutters>[class*=col-] {
        padding-right: 0;
        padding-left: 0;
    }

    .col-xl,
    .col-xl-auto,
    .col-xl-12,
    .col-xl-11,
    .col-xl-10,
    .col-xl-9,
    .col-xl-8,
    .col-xl-7,
    .col-xl-6,
    .col-xl-5,
    .col-xl-4,
    .col-xl-3,
    .col-xl-2,
    .col-xl-1,
    .col-lg,
    .col-lg-auto,
    .col-lg-12,
    .col-lg-11,
    .col-lg-10,
    .col-lg-9,
    .col-lg-8,
    .col-lg-7,
    .col-lg-6,
    .col-lg-5,
    .col-lg-4,
    .col-lg-3,
    .col-lg-2,
    .col-lg-1,
    .col-md,
    .col-md-auto,
    .col-md-12,
    .col-md-11,
    .col-md-10,
    .col-md-9,
    .col-md-8,
    .col-md-7,
    .col-md-6,
    .col-md-5,
    .col-md-4,
    .col-md-3,
    .col-md-2,
    .col-md-1,
    .col-sm,
    .col-sm-auto,
    .col-sm-12,
    .col-sm-11,
    .col-sm-10,
    .col-sm-9,
    .col-sm-8,
    .col-sm-7,
    .col-sm-6,
    .col-sm-5,
    .col-sm-4,
    .col-sm-3,
    .col-sm-2,
    .col-sm-1,
    .col,
    .col-auto,
    .col-12,
    .col-11,
    .col-10,
    .col-9,
    .col-8,
    .col-7,
    .col-6,
    .col-5,
    .col-4,
    .col-3,
    .col-2,
    .col-1 {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .col {
        flex-basis: 0;
        -webkit-box-flex: 1;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-auto {
        -webkit-box-flex: 0;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-1 {
        -webkit-box-flex: 0;
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%;
    }

    .col-2 {
        -webkit-box-flex: 0;
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%;
    }

    .col-3 {
        -webkit-box-flex: 0;
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-4 {
        -webkit-box-flex: 0;
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%;
    }

    .col-5 {
        -webkit-box-flex: 0;
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%;
    }

    .col-6 {
        -webkit-box-flex: 0;
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-7 {
        -webkit-box-flex: 0;
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%;
    }

    .col-8 {
        -webkit-box-flex: 0;
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%;
    }

    .col-9 {
        -webkit-box-flex: 0;
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-10 {
        -webkit-box-flex: 0;
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%;
    }

    .col-11 {
        -webkit-box-flex: 0;
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%;
    }

    .col-12 {
        -webkit-box-flex: 0;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-first {
        -webkit-box-ordinal-group: 0;
        order: -1;
    }

    .order-last {
        -webkit-box-ordinal-group: 14;
        order: 13;
    }

    .order-0 {
        -webkit-box-ordinal-group: 1;
        order: 0;
    }

    .order-1 {
        -webkit-box-ordinal-group: 2;
        order: 1;
    }

    .order-2 {
        -webkit-box-ordinal-group: 3;
        order: 2;
    }

    .order-3 {
        -webkit-box-ordinal-group: 4;
        order: 3;
    }

    .order-4 {
        -webkit-box-ordinal-group: 5;
        order: 4;
    }

    .order-5 {
        -webkit-box-ordinal-group: 6;
        order: 5;
    }

    .order-6 {
        -webkit-box-ordinal-group: 7;
        order: 6;
    }

    .order-7 {
        -webkit-box-ordinal-group: 8;
        order: 7;
    }

    .order-8 {
        -webkit-box-ordinal-group: 9;
        order: 8;
    }

    .order-9 {
        -webkit-box-ordinal-group: 10;
        order: 9;
    }

    .order-10 {
        -webkit-box-ordinal-group: 11;
        order: 10;
    }

    .order-11 {
        -webkit-box-ordinal-group: 12;
        order: 11;
    }

    .order-12 {
        -webkit-box-ordinal-group: 13;
        order: 12;
    }

    .offset-1 {
        margin-left: 8.3333333333%;
    }

    .offset-2 {
        margin-left: 16.6666666667%;
    }

    .offset-3 {
        margin-left: 25%;
    }

    .offset-4 {
        margin-left: 33.3333333333%;
    }

    .offset-5 {
        margin-left: 41.6666666667%;
    }

    .offset-6 {
        margin-left: 50%;
    }

    .offset-7 {
        margin-left: 58.3333333333%;
    }

    .offset-8 {
        margin-left: 66.6666666667%;
    }

    .offset-9 {
        margin-left: 75%;
    }

    .offset-10 {
        margin-left: 83.3333333333%;
    }

    .offset-11 {
        margin-left: 91.6666666667%;
    }

    @media (min-width: 576px) {
        .col-sm {
            flex-basis: 0;
            -webkit-box-flex: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .col-sm-auto {
            -webkit-box-flex: 0;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-sm-1 {
            -webkit-box-flex: 0;
            flex: 0 0 8.3333333333%;
            max-width: 8.3333333333%;
        }

        .col-sm-2 {
            -webkit-box-flex: 0;
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        .col-sm-3 {
            -webkit-box-flex: 0;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-sm-4 {
            -webkit-box-flex: 0;
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        .col-sm-5 {
            -webkit-box-flex: 0;
            flex: 0 0 41.6666666667%;
            max-width: 41.6666666667%;
        }

        .col-sm-6 {
            -webkit-box-flex: 0;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-sm-7 {
            -webkit-box-flex: 0;
            flex: 0 0 58.3333333333%;
            max-width: 58.3333333333%;
        }

        .col-sm-8 {
            -webkit-box-flex: 0;
            flex: 0 0 66.6666666667%;
            max-width: 66.6666666667%;
        }

        .col-sm-9 {
            -webkit-box-flex: 0;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-sm-10 {
            -webkit-box-flex: 0;
            flex: 0 0 83.3333333333%;
            max-width: 83.3333333333%;
        }

        .col-sm-11 {
            -webkit-box-flex: 0;
            flex: 0 0 91.6666666667%;
            max-width: 91.6666666667%;
        }

        .col-sm-12 {
            -webkit-box-flex: 0;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .order-sm-first {
            -webkit-box-ordinal-group: 0;
            order: -1;
        }

        .order-sm-last {
            -webkit-box-ordinal-group: 14;
            order: 13;
        }

        .order-sm-0 {
            -webkit-box-ordinal-group: 1;
            order: 0;
        }

        .order-sm-1 {
            -webkit-box-ordinal-group: 2;
            order: 1;
        }

        .order-sm-2 {
            -webkit-box-ordinal-group: 3;
            order: 2;
        }

        .order-sm-3 {
            -webkit-box-ordinal-group: 4;
            order: 3;
        }

        .order-sm-4 {
            -webkit-box-ordinal-group: 5;
            order: 4;
        }

        .order-sm-5 {
            -webkit-box-ordinal-group: 6;
            order: 5;
        }

        .order-sm-6 {
            -webkit-box-ordinal-group: 7;
            order: 6;
        }

        .order-sm-7 {
            -webkit-box-ordinal-group: 8;
            order: 7;
        }

        .order-sm-8 {
            -webkit-box-ordinal-group: 9;
            order: 8;
        }

        .order-sm-9 {
            -webkit-box-ordinal-group: 10;
            order: 9;
        }

        .order-sm-10 {
            -webkit-box-ordinal-group: 11;
            order: 10;
        }

        .order-sm-11 {
            -webkit-box-ordinal-group: 12;
            order: 11;
        }

        .order-sm-12 {
            -webkit-box-ordinal-group: 13;
            order: 12;
        }

        .offset-sm-0 {
            margin-left: 0;
        }

        .offset-sm-1 {
            margin-left: 8.3333333333%;
        }

        .offset-sm-2 {
            margin-left: 16.6666666667%;
        }

        .offset-sm-3 {
            margin-left: 25%;
        }

        .offset-sm-4 {
            margin-left: 33.3333333333%;
        }

        .offset-sm-5 {
            margin-left: 41.6666666667%;
        }

        .offset-sm-6 {
            margin-left: 50%;
        }

        .offset-sm-7 {
            margin-left: 58.3333333333%;
        }

        .offset-sm-8 {
            margin-left: 66.6666666667%;
        }

        .offset-sm-9 {
            margin-left: 75%;
        }

        .offset-sm-10 {
            margin-left: 83.3333333333%;
        }

        .offset-sm-11 {
            margin-left: 91.6666666667%;
        }
    }

    @media (min-width: 768px) {
        .col-md {
            flex-basis: 0;
            -webkit-box-flex: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .col-md-auto {
            -webkit-box-flex: 0;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-md-1 {
            -webkit-box-flex: 0;
            flex: 0 0 8.3333333333%;
            max-width: 8.3333333333%;
        }

        .col-md-2 {
            -webkit-box-flex: 0;
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        .col-md-3 {
            -webkit-box-flex: 0;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-md-4 {
            -webkit-box-flex: 0;
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        .col-md-5 {
            -webkit-box-flex: 0;
            flex: 0 0 41.6666666667%;
            max-width: 41.6666666667%;
        }

        .col-md-6 {
            -webkit-box-flex: 0;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-7 {
            -webkit-box-flex: 0;
            flex: 0 0 58.3333333333%;
            max-width: 58.3333333333%;
        }

        .col-md-8 {
            -webkit-box-flex: 0;
            flex: 0 0 66.6666666667%;
            max-width: 66.6666666667%;
        }

        .col-md-9 {
            -webkit-box-flex: 0;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-md-10 {
            -webkit-box-flex: 0;
            flex: 0 0 83.3333333333%;
            max-width: 83.3333333333%;
        }

        .col-md-11 {
            -webkit-box-flex: 0;
            flex: 0 0 91.6666666667%;
            max-width: 91.6666666667%;
        }

        .col-md-12 {
            -webkit-box-flex: 0;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .order-md-first {
            -webkit-box-ordinal-group: 0;
            order: -1;
        }

        .order-md-last {
            -webkit-box-ordinal-group: 14;
            order: 13;
        }

        .order-md-0 {
            -webkit-box-ordinal-group: 1;
            order: 0;
        }

        .order-md-1 {
            -webkit-box-ordinal-group: 2;
            order: 1;
        }

        .order-md-2 {
            -webkit-box-ordinal-group: 3;
            order: 2;
        }

        .order-md-3 {
            -webkit-box-ordinal-group: 4;
            order: 3;
        }

        .order-md-4 {
            -webkit-box-ordinal-group: 5;
            order: 4;
        }

        .order-md-5 {
            -webkit-box-ordinal-group: 6;
            order: 5;
        }

        .order-md-6 {
            -webkit-box-ordinal-group: 7;
            order: 6;
        }

        .order-md-7 {
            -webkit-box-ordinal-group: 8;
            order: 7;
        }

        .order-md-8 {
            -webkit-box-ordinal-group: 9;
            order: 8;
        }

        .order-md-9 {
            -webkit-box-ordinal-group: 10;
            order: 9;
        }

        .order-md-10 {
            -webkit-box-ordinal-group: 11;
            order: 10;
        }

        .order-md-11 {
            -webkit-box-ordinal-group: 12;
            order: 11;
        }

        .order-md-12 {
            -webkit-box-ordinal-group: 13;
            order: 12;
        }

        .offset-md-0 {
            margin-left: 0;
        }

        .offset-md-1 {
            margin-left: 8.3333333333%;
        }

        .offset-md-2 {
            margin-left: 16.6666666667%;
        }

        .offset-md-3 {
            margin-left: 25%;
        }

        .offset-md-4 {
            margin-left: 33.3333333333%;
        }

        .offset-md-5 {
            margin-left: 41.6666666667%;
        }

        .offset-md-6 {
            margin-left: 50%;
        }

        .offset-md-7 {
            margin-left: 58.3333333333%;
        }

        .offset-md-8 {
            margin-left: 66.6666666667%;
        }

        .offset-md-9 {
            margin-left: 75%;
        }

        .offset-md-10 {
            margin-left: 83.3333333333%;
        }

        .offset-md-11 {
            margin-left: 91.6666666667%;
        }
    }

    @media (min-width: 992px) {
        .col-lg {
            flex-basis: 0;
            -webkit-box-flex: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .col-lg-auto {
            -webkit-box-flex: 0;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-lg-1 {
            -webkit-box-flex: 0;
            flex: 0 0 8.3333333333%;
            max-width: 8.3333333333%;
        }

        .col-lg-2 {
            -webkit-box-flex: 0;
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        .col-lg-3 {
            -webkit-box-flex: 0;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-lg-4 {
            -webkit-box-flex: 0;
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        .col-lg-5 {
            -webkit-box-flex: 0;
            flex: 0 0 41.6666666667%;
            max-width: 41.6666666667%;
        }

        .col-lg-6 {
            -webkit-box-flex: 0;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-lg-7 {
            -webkit-box-flex: 0;
            flex: 0 0 58.3333333333%;
            max-width: 58.3333333333%;
        }

        .col-lg-8 {
            -webkit-box-flex: 0;
            flex: 0 0 66.6666666667%;
            max-width: 66.6666666667%;
        }

        .col-lg-9 {
            -webkit-box-flex: 0;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-lg-10 {
            -webkit-box-flex: 0;
            flex: 0 0 83.3333333333%;
            max-width: 83.3333333333%;
        }

        .col-lg-11 {
            -webkit-box-flex: 0;
            flex: 0 0 91.6666666667%;
            max-width: 91.6666666667%;
        }

        .col-lg-12 {
            -webkit-box-flex: 0;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .order-lg-first {
            -webkit-box-ordinal-group: 0;
            order: -1;
        }

        .order-lg-last {
            -webkit-box-ordinal-group: 14;
            order: 13;
        }

        .order-lg-0 {
            -webkit-box-ordinal-group: 1;
            order: 0;
        }

        .order-lg-1 {
            -webkit-box-ordinal-group: 2;
            order: 1;
        }

        .order-lg-2 {
            -webkit-box-ordinal-group: 3;
            order: 2;
        }

        .order-lg-3 {
            -webkit-box-ordinal-group: 4;
            order: 3;
        }

        .order-lg-4 {
            -webkit-box-ordinal-group: 5;
            order: 4;
        }

        .order-lg-5 {
            -webkit-box-ordinal-group: 6;
            order: 5;
        }

        .order-lg-6 {
            -webkit-box-ordinal-group: 7;
            order: 6;
        }

        .order-lg-7 {
            -webkit-box-ordinal-group: 8;
            order: 7;
        }

        .order-lg-8 {
            -webkit-box-ordinal-group: 9;
            order: 8;
        }

        .order-lg-9 {
            -webkit-box-ordinal-group: 10;
            order: 9;
        }

        .order-lg-10 {
            -webkit-box-ordinal-group: 11;
            order: 10;
        }

        .order-lg-11 {
            -webkit-box-ordinal-group: 12;
            order: 11;
        }

        .order-lg-12 {
            -webkit-box-ordinal-group: 13;
            order: 12;
        }

        .offset-lg-0 {
            margin-left: 0;
        }

        .offset-lg-1 {
            margin-left: 8.3333333333%;
        }

        .offset-lg-2 {
            margin-left: 16.6666666667%;
        }

        .offset-lg-3 {
            margin-left: 25%;
        }

        .offset-lg-4 {
            margin-left: 33.3333333333%;
        }

        .offset-lg-5 {
            margin-left: 41.6666666667%;
        }

        .offset-lg-6 {
            margin-left: 50%;
        }

        .offset-lg-7 {
            margin-left: 58.3333333333%;
        }

        .offset-lg-8 {
            margin-left: 66.6666666667%;
        }

        .offset-lg-9 {
            margin-left: 75%;
        }

        .offset-lg-10 {
            margin-left: 83.3333333333%;
        }

        .offset-lg-11 {
            margin-left: 91.6666666667%;
        }
    }

    @media (min-width: 1200px) {
        .col-xl {
            flex-basis: 0;
            -webkit-box-flex: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .col-xl-auto {
            -webkit-box-flex: 0;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-xl-1 {
            -webkit-box-flex: 0;
            flex: 0 0 8.3333333333%;
            max-width: 8.3333333333%;
        }

        .col-xl-2 {
            -webkit-box-flex: 0;
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        .col-xl-3 {
            -webkit-box-flex: 0;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-xl-4 {
            -webkit-box-flex: 0;
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        .col-xl-5 {
            -webkit-box-flex: 0;
            flex: 0 0 41.6666666667%;
            max-width: 41.6666666667%;
        }

        .col-xl-6 {
            -webkit-box-flex: 0;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-xl-7 {
            -webkit-box-flex: 0;
            flex: 0 0 58.3333333333%;
            max-width: 58.3333333333%;
        }

        .col-xl-8 {
            -webkit-box-flex: 0;
            flex: 0 0 66.6666666667%;
            max-width: 66.6666666667%;
        }

        .col-xl-9 {
            -webkit-box-flex: 0;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-xl-10 {
            -webkit-box-flex: 0;
            flex: 0 0 83.3333333333%;
            max-width: 83.3333333333%;
        }

        .col-xl-11 {
            -webkit-box-flex: 0;
            flex: 0 0 91.6666666667%;
            max-width: 91.6666666667%;
        }

        .col-xl-12 {
            -webkit-box-flex: 0;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .order-xl-first {
            -webkit-box-ordinal-group: 0;
            order: -1;
        }

        .order-xl-last {
            -webkit-box-ordinal-group: 14;
            order: 13;
        }

        .order-xl-0 {
            -webkit-box-ordinal-group: 1;
            order: 0;
        }

        .order-xl-1 {
            -webkit-box-ordinal-group: 2;
            order: 1;
        }

        .order-xl-2 {
            -webkit-box-ordinal-group: 3;
            order: 2;
        }

        .order-xl-3 {
            -webkit-box-ordinal-group: 4;
            order: 3;
        }

        .order-xl-4 {
            -webkit-box-ordinal-group: 5;
            order: 4;
        }

        .order-xl-5 {
            -webkit-box-ordinal-group: 6;
            order: 5;
        }

        .order-xl-6 {
            -webkit-box-ordinal-group: 7;
            order: 6;
        }

        .order-xl-7 {
            -webkit-box-ordinal-group: 8;
            order: 7;
        }

        .order-xl-8 {
            -webkit-box-ordinal-group: 9;
            order: 8;
        }

        .order-xl-9 {
            -webkit-box-ordinal-group: 10;
            order: 9;
        }

        .order-xl-10 {
            -webkit-box-ordinal-group: 11;
            order: 10;
        }

        .order-xl-11 {
            -webkit-box-ordinal-group: 12;
            order: 11;
        }

        .order-xl-12 {
            -webkit-box-ordinal-group: 13;
            order: 12;
        }

        .offset-xl-0 {
            margin-left: 0;
        }

        .offset-xl-1 {
            margin-left: 8.3333333333%;
        }

        .offset-xl-2 {
            margin-left: 16.6666666667%;
        }

        .offset-xl-3 {
            margin-left: 25%;
        }

        .offset-xl-4 {
            margin-left: 33.3333333333%;
        }

        .offset-xl-5 {
            margin-left: 41.6666666667%;
        }

        .offset-xl-6 {
            margin-left: 50%;
        }

        .offset-xl-7 {
            margin-left: 58.3333333333%;
        }

        .offset-xl-8 {
            margin-left: 66.6666666667%;
        }

        .offset-xl-9 {
            margin-left: 75%;
        }

        .offset-xl-10 {
            margin-left: 83.3333333333%;
        }

        .offset-xl-11 {
            margin-left: 91.6666666667%;
        }
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    .table tbody+tbody {
        border-top: 2px solid #dee2e6;
    }

    .table-sm th,
    .table-sm td {
        padding: 0.3rem;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }

    .table-bordered thead th,
    .table-bordered thead td {
        border-bottom-width: 2px;
    }

    .table-borderless th,
    .table-borderless td,
    .table-borderless thead th,
    .table-borderless tbody+tbody {
        border: 0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .table-hover tbody tr:hover {
        color: #212529;
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-primary,
    .table-primary>th,
    .table-primary>td {
        background-color: #b8daff;
    }

    .table-primary th,
    .table-primary td,
    .table-primary thead th,
    .table-primary tbody+tbody {
        border-color: #7abaff;
    }

    .table-hover .table-primary:hover {
        background-color: #9fcdff;
    }

    .table-hover .table-primary:hover>td,
    .table-hover .table-primary:hover>th {
        background-color: #9fcdff;
    }

    .table-secondary,
    .table-secondary>th,
    .table-secondary>td {
        background-color: #d6d8db;
    }

    .table-secondary th,
    .table-secondary td,
    .table-secondary thead th,
    .table-secondary tbody+tbody {
        border-color: #b3b7bb;
    }

    .table-hover .table-secondary:hover {
        background-color: #c8cbcf;
    }

    .table-hover .table-secondary:hover>td,
    .table-hover .table-secondary:hover>th {
        background-color: #c8cbcf;
    }

    .table-success,
    .table-success>th,
    .table-success>td {
        background-color: #c3e6cb;
    }

    .table-success th,
    .table-success td,
    .table-success thead th,
    .table-success tbody+tbody {
        border-color: #8fd19e;
    }

    .table-hover .table-success:hover {
        background-color: #b1dfbb;
    }

    .table-hover .table-success:hover>td,
    .table-hover .table-success:hover>th {
        background-color: #b1dfbb;
    }

    .table-info,
    .table-info>th,
    .table-info>td {
        background-color: #bee5eb;
    }

    .table-info th,
    .table-info td,
    .table-info thead th,
    .table-info tbody+tbody {
        border-color: #86cfda;
    }

    .table-hover .table-info:hover {
        background-color: #abdde5;
    }

    .table-hover .table-info:hover>td,
    .table-hover .table-info:hover>th {
        background-color: #abdde5;
    }

    .table-warning,
    .table-warning>th,
    .table-warning>td {
        background-color: #ffeeba;
    }

    .table-warning th,
    .table-warning td,
    .table-warning thead th,
    .table-warning tbody+tbody {
        border-color: #ffdf7e;
    }

    .table-hover .table-warning:hover {
        background-color: #ffe8a1;
    }

    .table-hover .table-warning:hover>td,
    .table-hover .table-warning:hover>th {
        background-color: #ffe8a1;
    }

    .table-danger,
    .table-danger>th,
    .table-danger>td {
        background-color: #f5c6cb;
    }

    .table-danger th,
    .table-danger td,
    .table-danger thead th,
    .table-danger tbody+tbody {
        border-color: #ed969e;
    }

    .table-hover .table-danger:hover {
        background-color: #f1b0b7;
    }

    .table-hover .table-danger:hover>td,
    .table-hover .table-danger:hover>th {
        background-color: #f1b0b7;
    }

    .table-light,
    .table-light>th,
    .table-light>td {
        background-color: #fdfdfe;
    }

    .table-light th,
    .table-light td,
    .table-light thead th,
    .table-light tbody+tbody {
        border-color: #fbfcfc;
    }

    .table-hover .table-light:hover {
        background-color: #ececf6;
    }

    .table-hover .table-light:hover>td,
    .table-hover .table-light:hover>th {
        background-color: #ececf6;
    }

    .table-dark,
    .table-dark>th,
    .table-dark>td {
        background-color: #c6c8ca;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody+tbody {
        border-color: #95999c;
    }

    .table-hover .table-dark:hover {
        background-color: #b9bbbe;
    }

    .table-hover .table-dark:hover>td,
    .table-hover .table-dark:hover>th {
        background-color: #b9bbbe;
    }

    .table-active,
    .table-active>th,
    .table-active>td {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover>td,
    .table-hover .table-active:hover>th {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table .thead-dark th {
        color: #fff;
        background-color: #343a40;
        border-color: #454d55;
    }

    .table .thead-light th {
        color: #495057;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }

    .table-dark {
        color: #fff;
        background-color: #343a40;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th {
        border-color: #454d55;
    }

    .table-dark.table-bordered {
        border: 0;
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .table-dark.table-hover tbody tr:hover {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.075);
    }

    @media (max-width: 575.98px) {
        .table-responsive-sm {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive-sm>.table-bordered {
            border: 0;
        }
    }

    @media (max-width: 767.98px) {
        .table-responsive-md {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive-md>.table-bordered {
            border: 0;
        }
    }

    @media (max-width: 991.98px) {
        .table-responsive-lg {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive-lg>.table-bordered {
            border: 0;
        }
    }

    @media (max-width: 1199.98px) {
        .table-responsive-xl {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive-xl>.table-bordered {
            border: 0;
        }
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive>.table-bordered {
        border: 0;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        -webkit-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .form-control {
            -webkit-transition: none;
            transition: none;
        }
    }

    .form-control::-ms-expand {
        background-color: transparent;
        border: 0;
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .form-control::-webkit-input-placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control::-moz-placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control::-ms-input-placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control::placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #e9ecef;
        opacity: 1;
    }

    select.form-control:focus::-ms-value {
        color: #495057;
        background-color: #fff;
    }

    .form-control-file,
    .form-control-range {
        display: block;
        width: 100%;
    }

    .col-form-label {
        padding-top: calc(0.375rem + 1px);
        padding-bottom: calc(0.375rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.5;
    }

    .col-form-label-lg {
        padding-top: calc(0.5rem + 1px);
        padding-bottom: calc(0.5rem + 1px);
        font-size: 1.25rem;
        line-height: 1.5;
    }

    .col-form-label-sm {
        padding-top: calc(0.25rem + 1px);
        padding-bottom: calc(0.25rem + 1px);
        font-size: 0.875rem;
        line-height: 1.5;
    }

    .form-control-plaintext {
        display: block;
        width: 100%;
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
        margin-bottom: 0;
        line-height: 1.5;
        color: #212529;
        background-color: transparent;
        border: solid transparent;
        border-width: 1px 0;
    }

    .form-control-plaintext.form-control-sm,
    .form-control-plaintext.form-control-lg {
        padding-right: 0;
        padding-left: 0;
    }

    .form-control-sm {
        height: calc(1.5em + 0.5rem + 2px);
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }

    .form-control-lg {
        height: calc(1.5em + 1rem + 2px);
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: 0.3rem;
    }

    select.form-control[size],
    select.form-control[multiple] {
        height: auto;
    }

    textarea.form-control {
        height: auto;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-text {
        display: block;
        margin-top: 0.25rem;
    }

    .form-row {
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        margin-right: -5px;
        margin-left: -5px;
    }

    .form-row>.col,
    .form-row>[class*=col-] {
        padding-right: 5px;
        padding-left: 5px;
    }

    .form-check {
        position: relative;
        display: block;
        padding-left: 1.25rem;
    }

    .form-check-input {
        position: absolute;
        margin-top: 0.3rem;
        margin-left: -1.25rem;
    }

    .form-check-input:disabled~.form-check-label {
        color: #6c757d;
    }

    .form-check-label {
        margin-bottom: 0;
    }

    .form-check-inline {
        display: -webkit-inline-box;
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        padding-left: 0;
        margin-right: 0.75rem;
    }

    .form-check-inline .form-check-input {
        position: static;
        margin-top: 0;
        margin-right: 0.3125rem;
        margin-left: 0;
    }

    .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #28a745;
    }

    .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.25rem 0.5rem;
        margin-top: 0.1rem;
        font-size: 0.875rem;
        line-height: 1.5;
        color: #fff;
        background-color: rgba(40, 167, 69, 0.9);
        border-radius: 0.25rem;
    }

    .was-validated .form-control:valid,
    .form-control.is-valid {
        border-color: #28a745;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: center right calc(0.375em + 0.1875rem);
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .form-control:valid:focus,
    .form-control.is-valid:focus {
        border-color: #28a745;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    .was-validated .form-control:valid~.valid-feedback,
    .was-validated .form-control:valid~.valid-tooltip,
    .form-control.is-valid~.valid-feedback,
    .form-control.is-valid~.valid-tooltip {
        display: block;
    }

    .was-validated textarea.form-control:valid,
    textarea.form-control.is-valid {
        padding-right: calc(1.5em + 0.75rem);
        background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
    }

    .was-validated .custom-select:valid,
    .custom-select.is-valid {
        border-color: #28a745;
        padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .custom-select:valid:focus,
    .custom-select.is-valid:focus {
        border-color: #28a745;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    .was-validated .custom-select:valid~.valid-feedback,
    .was-validated .custom-select:valid~.valid-tooltip,
    .custom-select.is-valid~.valid-feedback,
    .custom-select.is-valid~.valid-tooltip {
        display: block;
    }

    .was-validated .form-control-file:valid~.valid-feedback,
    .was-validated .form-control-file:valid~.valid-tooltip,
    .form-control-file.is-valid~.valid-feedback,
    .form-control-file.is-valid~.valid-tooltip {
        display: block;
    }

    .was-validated .form-check-input:valid~.form-check-label,
    .form-check-input.is-valid~.form-check-label {
        color: #28a745;
    }

    .was-validated .form-check-input:valid~.valid-feedback,
    .was-validated .form-check-input:valid~.valid-tooltip,
    .form-check-input.is-valid~.valid-feedback,
    .form-check-input.is-valid~.valid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:valid~.custom-control-label,
    .custom-control-input.is-valid~.custom-control-label {
        color: #28a745;
    }

    .was-validated .custom-control-input:valid~.custom-control-label::before,
    .custom-control-input.is-valid~.custom-control-label::before {
        border-color: #28a745;
    }

    .was-validated .custom-control-input:valid~.valid-feedback,
    .was-validated .custom-control-input:valid~.valid-tooltip,
    .custom-control-input.is-valid~.valid-feedback,
    .custom-control-input.is-valid~.valid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:valid:checked~.custom-control-label::before,
    .custom-control-input.is-valid:checked~.custom-control-label::before {
        border-color: #34ce57;
        background-color: #34ce57;
    }

    .was-validated .custom-control-input:valid:focus~.custom-control-label::before,
    .custom-control-input.is-valid:focus~.custom-control-label::before {
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    .was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before,
    .custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before {
        border-color: #28a745;
    }

    .was-validated .custom-file-input:valid~.custom-file-label,
    .custom-file-input.is-valid~.custom-file-label {
        border-color: #28a745;
    }

    .was-validated .custom-file-input:valid~.valid-feedback,
    .was-validated .custom-file-input:valid~.valid-tooltip,
    .custom-file-input.is-valid~.valid-feedback,
    .custom-file-input.is-valid~.valid-tooltip {
        display: block;
    }

    .was-validated .custom-file-input:valid:focus~.custom-file-label,
    .custom-file-input.is-valid:focus~.custom-file-label {
        border-color: #28a745;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #dc3545;
    }

    .invalid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.25rem 0.5rem;
        margin-top: 0.1rem;
        font-size: 0.875rem;
        line-height: 1.5;
        color: #fff;
        background-color: rgba(220, 53, 69, 0.9);
        border-radius: 0.25rem;
    }

    .was-validated .form-control:invalid,
    .form-control.is-invalid {
        border-color: #dc3545;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
        background-repeat: no-repeat;
        background-position: center right calc(0.375em + 0.1875rem);
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .form-control:invalid:focus,
    .form-control.is-invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .was-validated .form-control:invalid~.invalid-feedback,
    .was-validated .form-control:invalid~.invalid-tooltip,
    .form-control.is-invalid~.invalid-feedback,
    .form-control.is-invalid~.invalid-tooltip {
        display: block;
    }

    .was-validated textarea.form-control:invalid,
    textarea.form-control.is-invalid {
        padding-right: calc(1.5em + 0.75rem);
        background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
    }

    .was-validated .custom-select:invalid,
    .custom-select.is-invalid {
        border-color: #dc3545;
        padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .custom-select:invalid:focus,
    .custom-select.is-invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .was-validated .custom-select:invalid~.invalid-feedback,
    .was-validated .custom-select:invalid~.invalid-tooltip,
    .custom-select.is-invalid~.invalid-feedback,
    .custom-select.is-invalid~.invalid-tooltip {
        display: block;
    }

    .was-validated .form-control-file:invalid~.invalid-feedback,
    .was-validated .form-control-file:invalid~.invalid-tooltip,
    .form-control-file.is-invalid~.invalid-feedback,
    .form-control-file.is-invalid~.invalid-tooltip {
        display: block;
    }

    .was-validated .form-check-input:invalid~.form-check-label,
    .form-check-input.is-invalid~.form-check-label {
        color: #dc3545;
    }

    .was-validated .form-check-input:invalid~.invalid-feedback,
    .was-validated .form-check-input:invalid~.invalid-tooltip,
    .form-check-input.is-invalid~.invalid-feedback,
    .form-check-input.is-invalid~.invalid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:invalid~.custom-control-label,
    .custom-control-input.is-invalid~.custom-control-label {
        color: #dc3545;
    }

    .was-validated .custom-control-input:invalid~.custom-control-label::before,
    .custom-control-input.is-invalid~.custom-control-label::before {
        border-color: #dc3545;
    }

    .was-validated .custom-control-input:invalid~.invalid-feedback,
    .was-validated .custom-control-input:invalid~.invalid-tooltip,
    .custom-control-input.is-invalid~.invalid-feedback,
    .custom-control-input.is-invalid~.invalid-tooltip {
        display: block;
    }

    .was-validated .custom-control-input:invalid:checked~.custom-control-label::before,
    .custom-control-input.is-invalid:checked~.custom-control-label::before {
        border-color: #e4606d;
        background-color: #e4606d;
    }

    .was-validated .custom-control-input:invalid:focus~.custom-control-label::before,
    .custom-control-input.is-invalid:focus~.custom-control-label::before {
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before,
    .custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before {
        border-color: #dc3545;
    }

    .was-validated .custom-file-input:invalid~.custom-file-label,
    .custom-file-input.is-invalid~.custom-file-label {
        border-color: #dc3545;
    }

    .was-validated .custom-file-input:invalid~.invalid-feedback,
    .was-validated .custom-file-input:invalid~.invalid-tooltip,
    .custom-file-input.is-invalid~.invalid-feedback,
    .custom-file-input.is-invalid~.invalid-tooltip {
        display: block;
    }

    .was-validated .custom-file-input:invalid:focus~.custom-file-label,
    .custom-file-input.is-invalid:focus~.custom-file-label {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .form-inline {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-flow: row wrap;
        -webkit-box-align: center;
        align-items: center;
    }

    .form-inline .form-check {
        width: 100%;
    }

    @media (min-width: 576px) {
        .form-inline label {
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            margin-bottom: 0;
        }

        .form-inline .form-group {
            display: -webkit-box;
            display: flex;
            -webkit-box-flex: 0;
            flex: 0 0 auto;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row wrap;
            -webkit-box-align: center;
            align-items: center;
            margin-bottom: 0;
        }

        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle;
        }

        .form-inline .form-control-plaintext {
            display: inline-block;
        }

        .form-inline .input-group,
        .form-inline .custom-select {
            width: auto;
        }

        .form-inline .form-check {
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            width: auto;
            padding-left: 0;
        }

        .form-inline .form-check-input {
            position: relative;
            flex-shrink: 0;
            margin-top: 0;
            margin-right: 0.25rem;
            margin-left: 0;
        }

        .form-inline .custom-control {
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
        }

        .form-inline .custom-control-label {
            margin-bottom: 0;
        }
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .btn {
            -webkit-transition: none;
            transition: none;
        }
    }

    .btn:hover {
        color: #212529;
        text-decoration: none;
    }

    .btn:focus,
    .btn.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .btn.disabled,
    .btn:disabled {
        opacity: 0.65;
    }

    a.btn.disabled,
    fieldset:disabled a.btn {
        pointer-events: none;
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-primary:focus,
    .btn-primary.focus {
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:not(:disabled):not(.disabled):active,
    .btn-primary:not(:disabled):not(.disabled).active,
    .show>.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #0062cc;
        border-color: #005cbf;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus,
    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    }

    .btn-secondary {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62;
    }

    .btn-secondary:focus,
    .btn-secondary.focus {
        box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
    }

    .btn-secondary.disabled,
    .btn-secondary:disabled {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:not(:disabled):not(.disabled):active,
    .btn-secondary:not(:disabled):not(.disabled).active,
    .show>.btn-secondary.dropdown-toggle {
        color: #fff;
        background-color: #545b62;
        border-color: #4e555b;
    }

    .btn-secondary:not(:disabled):not(.disabled):active:focus,
    .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
    }

    .btn-success {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:hover {
        color: #fff;
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-success:focus,
    .btn-success.focus {
        box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
    }

    .btn-success.disabled,
    .btn-success:disabled {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:not(:disabled):not(.disabled):active,
    .btn-success:not(:disabled):not(.disabled).active,
    .show>.btn-success.dropdown-toggle {
        color: #fff;
        background-color: #1e7e34;
        border-color: #1c7430;
    }

    .btn-success:not(:disabled):not(.disabled):active:focus,
    .btn-success:not(:disabled):not(.disabled).active:focus,
    .show>.btn-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
    }

    .btn-info {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-info:hover {
        color: #fff;
        background-color: #138496;
        border-color: #117a8b;
    }

    .btn-info:focus,
    .btn-info.focus {
        box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
    }

    .btn-info.disabled,
    .btn-info:disabled {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-info:not(:disabled):not(.disabled):active,
    .btn-info:not(:disabled):not(.disabled).active,
    .show>.btn-info.dropdown-toggle {
        color: #fff;
        background-color: #117a8b;
        border-color: #10707f;
    }

    .btn-info:not(:disabled):not(.disabled):active:focus,
    .btn-info:not(:disabled):not(.disabled).active:focus,
    .show>.btn-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
    }

    .btn-warning {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-warning:hover {
        color: #212529;
        background-color: #e0a800;
        border-color: #d39e00;
    }

    .btn-warning:focus,
    .btn-warning.focus {
        box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
    }

    .btn-warning.disabled,
    .btn-warning:disabled {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-warning:not(:disabled):not(.disabled):active,
    .btn-warning:not(:disabled):not(.disabled).active,
    .show>.btn-warning.dropdown-toggle {
        color: #212529;
        background-color: #d39e00;
        border-color: #c69500;
    }

    .btn-warning:not(:disabled):not(.disabled):active:focus,
    .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show>.btn-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
    }

    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c82333;
        border-color: #bd2130;
    }

    .btn-danger:focus,
    .btn-danger.focus {
        box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
    }

    .btn-danger.disabled,
    .btn-danger:disabled {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:not(:disabled):not(.disabled):active,
    .btn-danger:not(:disabled):not(.disabled).active,
    .show>.btn-danger.dropdown-toggle {
        color: #fff;
        background-color: #bd2130;
        border-color: #b21f2d;
    }

    .btn-danger:not(:disabled):not(.disabled):active:focus,
    .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show>.btn-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
    }

    .btn-light {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-light:hover {
        color: #212529;
        background-color: #e2e6ea;
        border-color: #dae0e5;
    }

    .btn-light:focus,
    .btn-light.focus {
        box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
    }

    .btn-light.disabled,
    .btn-light:disabled {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-light:not(:disabled):not(.disabled):active,
    .btn-light:not(:disabled):not(.disabled).active,
    .show>.btn-light.dropdown-toggle {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df;
    }

    .btn-light:not(:disabled):not(.disabled):active:focus,
    .btn-light:not(:disabled):not(.disabled).active:focus,
    .show>.btn-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
    }

    .btn-dark {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-dark:hover {
        color: #fff;
        background-color: #23272b;
        border-color: #1d2124;
    }

    .btn-dark:focus,
    .btn-dark.focus {
        box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
    }

    .btn-dark.disabled,
    .btn-dark:disabled {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-dark:not(:disabled):not(.disabled):active,
    .btn-dark:not(:disabled):not(.disabled).active,
    .show>.btn-dark.dropdown-toggle {
        color: #fff;
        background-color: #1d2124;
        border-color: #171a1d;
    }

    .btn-dark:not(:disabled):not(.disabled):active:focus,
    .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show>.btn-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
    }

    .btn-outline-primary {
        color: #007bff;
        border-color: #007bff;
    }

    .btn-outline-primary:hover {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-outline-primary:focus,
    .btn-outline-primary.focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
    }

    .btn-outline-primary.disabled,
    .btn-outline-primary:disabled {
        color: #007bff;
        background-color: transparent;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active,
    .btn-outline-primary:not(:disabled):not(.disabled).active,
    .show>.btn-outline-primary.dropdown-toggle {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
    .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
    }

    .btn-outline-secondary {
        color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:focus,
    .btn-outline-secondary.focus {
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }

    .btn-outline-secondary.disabled,
    .btn-outline-secondary:disabled {
        color: #6c757d;
        background-color: transparent;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active,
    .btn-outline-secondary:not(:disabled):not(.disabled).active,
    .show>.btn-outline-secondary.dropdown-toggle {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
    .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }

    .btn-outline-success {
        color: #28a745;
        border-color: #28a745;
    }

    .btn-outline-success:hover {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-outline-success:focus,
    .btn-outline-success.focus {
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    }

    .btn-outline-success.disabled,
    .btn-outline-success:disabled {
        color: #28a745;
        background-color: transparent;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active,
    .btn-outline-success:not(:disabled):not(.disabled).active,
    .show>.btn-outline-success.dropdown-toggle {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active:focus,
    .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    }

    .btn-outline-info {
        color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-outline-info:hover {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-outline-info:focus,
    .btn-outline-info.focus {
        box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
    }

    .btn-outline-info.disabled,
    .btn-outline-info:disabled {
        color: #17a2b8;
        background-color: transparent;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active,
    .btn-outline-info:not(:disabled):not(.disabled).active,
    .show>.btn-outline-info.dropdown-toggle {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active:focus,
    .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
    }

    .btn-outline-warning {
        color: #ffc107;
        border-color: #ffc107;
    }

    .btn-outline-warning:hover {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-outline-warning:focus,
    .btn-outline-warning.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
    }

    .btn-outline-warning.disabled,
    .btn-outline-warning:disabled {
        color: #ffc107;
        background-color: transparent;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active,
    .btn-outline-warning:not(:disabled):not(.disabled).active,
    .show>.btn-outline-warning.dropdown-toggle {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
    .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
    }

    .btn-outline-danger {
        color: #dc3545;
        border-color: #dc3545;
    }

    .btn-outline-danger:hover {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-outline-danger:focus,
    .btn-outline-danger.focus {
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    }

    .btn-outline-danger.disabled,
    .btn-outline-danger:disabled {
        color: #dc3545;
        background-color: transparent;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active,
    .btn-outline-danger:not(:disabled):not(.disabled).active,
    .show>.btn-outline-danger.dropdown-toggle {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
    .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    }

    .btn-outline-light {
        color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-outline-light:hover {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-outline-light:focus,
    .btn-outline-light.focus {
        box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    }

    .btn-outline-light.disabled,
    .btn-outline-light:disabled {
        color: #f8f9fa;
        background-color: transparent;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active,
    .btn-outline-light:not(:disabled):not(.disabled).active,
    .show>.btn-outline-light.dropdown-toggle {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active:focus,
    .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    }

    .btn-outline-dark {
        color: #343a40;
        border-color: #343a40;
    }

    .btn-outline-dark:hover {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-outline-dark:focus,
    .btn-outline-dark.focus {
        box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    }

    .btn-outline-dark.disabled,
    .btn-outline-dark:disabled {
        color: #343a40;
        background-color: transparent;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active,
    .btn-outline-dark:not(:disabled):not(.disabled).active,
    .show>.btn-outline-dark.dropdown-toggle {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
    .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    }

    .btn-link {
        font-weight: 400;
        color: #007bff;
        text-decoration: none;
    }

    .btn-link:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    .btn-link:focus,
    .btn-link.focus {
        text-decoration: underline;
        box-shadow: none;
    }

    .btn-link:disabled,
    .btn-link.disabled {
        color: #6c757d;
        pointer-events: none;
    }

    .btn-lg,
    .btn-group-lg>.btn {
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: 0.3rem;
    }

    .btn-sm,
    .btn-group-sm>.btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }

    .btn-block {
        display: block;
        width: 100%;
    }

    .btn-block+.btn-block {
        margin-top: 0.5rem;
    }

    input[type=submit].btn-block,
    input[type=reset].btn-block,
    input[type=button].btn-block {
        width: 100%;
    }

    .fade {
        -webkit-transition: opacity 0.15s linear;
        transition: opacity 0.15s linear;
    }

    @media (prefers-reduced-motion: reduce) {
        .fade {
            -webkit-transition: none;
            transition: none;
        }
    }

    .fade:not(.show) {
        opacity: 0;
    }

    .collapse:not(.show) {
        display: none;
    }

    .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        -webkit-transition: height 0.35s ease;
        transition: height 0.35s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .collapsing {
            -webkit-transition: none;
            transition: none;
        }
    }

    .dropup,
    .dropright,
    .dropdown,
    .dropleft {
        position: relative;
    }

    .dropdown-toggle {
        white-space: nowrap;
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    }

    .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: 0.5rem 0;
        margin: 0.125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 0.25rem;
    }

    .dropdown-menu-left {
        right: auto;
        left: 0;
    }

    .dropdown-menu-right {
        right: 0;
        left: auto;
    }

    @media (min-width: 576px) {
        .dropdown-menu-sm-left {
            right: auto;
            left: 0;
        }

        .dropdown-menu-sm-right {
            right: 0;
            left: auto;
        }
    }

    @media (min-width: 768px) {
        .dropdown-menu-md-left {
            right: auto;
            left: 0;
        }

        .dropdown-menu-md-right {
            right: 0;
            left: auto;
        }
    }

    @media (min-width: 992px) {
        .dropdown-menu-lg-left {
            right: auto;
            left: 0;
        }

        .dropdown-menu-lg-right {
            right: 0;
            left: auto;
        }
    }

    @media (min-width: 1200px) {
        .dropdown-menu-xl-left {
            right: auto;
            left: 0;
        }

        .dropdown-menu-xl-right {
            right: 0;
            left: auto;
        }
    }

    .dropup .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-top: 0;
        margin-bottom: 0.125rem;
    }

    .dropup .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0;
        border-right: 0.3em solid transparent;
        border-bottom: 0.3em solid;
        border-left: 0.3em solid transparent;
    }

    .dropup .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropright .dropdown-menu {
        top: 0;
        right: auto;
        left: 100%;
        margin-top: 0;
        margin-left: 0.125rem;
    }

    .dropright .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0;
        border-bottom: 0.3em solid transparent;
        border-left: 0.3em solid;
    }

    .dropright .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropright .dropdown-toggle::after {
        vertical-align: 0;
    }

    .dropleft .dropdown-menu {
        top: 0;
        right: 100%;
        left: auto;
        margin-top: 0;
        margin-right: 0.125rem;
    }

    .dropleft .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
    }

    .dropleft .dropdown-toggle::after {
        display: none;
    }

    .dropleft .dropdown-toggle::before {
        display: inline-block;
        margin-right: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0.3em solid;
        border-bottom: 0.3em solid transparent;
    }

    .dropleft .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropleft .dropdown-toggle::before {
        vertical-align: 0;
    }

    .dropdown-menu[x-placement^=top],
    .dropdown-menu[x-placement^=right],
    .dropdown-menu[x-placement^=bottom],
    .dropdown-menu[x-placement^=left] {
        right: auto;
        bottom: auto;
    }

    .dropdown-divider {
        height: 0;
        margin: 0.5rem 0;
        overflow: hidden;
        border-top: 1px solid #e9ecef;
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
        color: #16181b;
        text-decoration: none;
        background-color: #f8f9fa;
    }

    .dropdown-item.active,
    .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #007bff;
    }

    .dropdown-item.disabled,
    .dropdown-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: transparent;
    }

    .dropdown-menu.show {
        display: block;
    }

    .dropdown-header {
        display: block;
        padding: 0.5rem 1.5rem;
        margin-bottom: 0;
        font-size: 0.875rem;
        color: #6c757d;
        white-space: nowrap;
    }

    .dropdown-item-text {
        display: block;
        padding: 0.25rem 1.5rem;
        color: #212529;
    }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: -webkit-inline-box;
        display: inline-flex;
        vertical-align: middle;
    }

    .btn-group>.btn,
    .btn-group-vertical>.btn {
        position: relative;
        -webkit-box-flex: 1;
        flex: 1 1 auto;
    }

    .btn-group>.btn:hover,
    .btn-group-vertical>.btn:hover {
        z-index: 1;
    }

    .btn-group>.btn:focus,
    .btn-group>.btn:active,
    .btn-group>.btn.active,
    .btn-group-vertical>.btn:focus,
    .btn-group-vertical>.btn:active,
    .btn-group-vertical>.btn.active {
        z-index: 1;
    }

    .btn-toolbar {
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        -webkit-box-pack: start;
        justify-content: flex-start;
    }

    .btn-toolbar .input-group {
        width: auto;
    }

    .btn-group>.btn:not(:first-child),
    .btn-group>.btn-group:not(:first-child) {
        margin-left: -1px;
    }

    .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
    .btn-group>.btn-group:not(:last-child)>.btn {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .btn-group>.btn:not(:first-child),
    .btn-group>.btn-group:not(:first-child)>.btn {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .dropdown-toggle-split {
        padding-right: 0.5625rem;
        padding-left: 0.5625rem;
    }

    .dropdown-toggle-split::after,
    .dropup .dropdown-toggle-split::after,
    .dropright .dropdown-toggle-split::after {
        margin-left: 0;
    }

    .dropleft .dropdown-toggle-split::before {
        margin-right: 0;
    }

    .btn-sm+.dropdown-toggle-split,
    .btn-group-sm>.btn+.dropdown-toggle-split {
        padding-right: 0.375rem;
        padding-left: 0.375rem;
    }

    .btn-lg+.dropdown-toggle-split,
    .btn-group-lg>.btn+.dropdown-toggle-split {
        padding-right: 0.75rem;
        padding-left: 0.75rem;
    }

    .btn-group-vertical {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-align: start;
        align-items: flex-start;
        -webkit-box-pack: center;
        justify-content: center;
    }

    .btn-group-vertical>.btn,
    .btn-group-vertical>.btn-group {
        width: 100%;
    }

    .btn-group-vertical>.btn:not(:first-child),
    .btn-group-vertical>.btn-group:not(:first-child) {
        margin-top: -1px;
    }

    .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
    .btn-group-vertical>.btn-group:not(:last-child)>.btn {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .btn-group-vertical>.btn:not(:first-child),
    .btn-group-vertical>.btn-group:not(:first-child)>.btn {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .btn-group-toggle>.btn,
    .btn-group-toggle>.btn-group>.btn {
        margin-bottom: 0;
    }

    .btn-group-toggle>.btn input[type=radio],
    .btn-group-toggle>.btn input[type=checkbox],
    .btn-group-toggle>.btn-group>.btn input[type=radio],
    .btn-group-toggle>.btn-group>.btn input[type=checkbox] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none;
    }

    .input-group {
        position: relative;
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        -webkit-box-align: stretch;
        align-items: stretch;
        width: 100%;
    }

    .input-group>.form-control,
    .input-group>.form-control-plaintext,
    .input-group>.custom-select,
    .input-group>.custom-file {
        position: relative;
        -webkit-box-flex: 1;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0;
    }

    .input-group>.form-control+.form-control,
    .input-group>.form-control+.custom-select,
    .input-group>.form-control+.custom-file,
    .input-group>.form-control-plaintext+.form-control,
    .input-group>.form-control-plaintext+.custom-select,
    .input-group>.form-control-plaintext+.custom-file,
    .input-group>.custom-select+.form-control,
    .input-group>.custom-select+.custom-select,
    .input-group>.custom-select+.custom-file,
    .input-group>.custom-file+.form-control,
    .input-group>.custom-file+.custom-select,
    .input-group>.custom-file+.custom-file {
        margin-left: -1px;
    }

    .input-group>.form-control:focus,
    .input-group>.custom-select:focus,
    .input-group>.custom-file .custom-file-input:focus~.custom-file-label {
        z-index: 3;
    }

    .input-group>.custom-file .custom-file-input:focus {
        z-index: 4;
    }

    .input-group>.form-control:not(:last-child),
    .input-group>.custom-select:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group>.form-control:not(:first-child),
    .input-group>.custom-select:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .input-group>.custom-file {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
    }

    .input-group>.custom-file:not(:last-child) .custom-file-label,
    .input-group>.custom-file:not(:last-child) .custom-file-label::after {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group>.custom-file:not(:first-child) .custom-file-label {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .input-group-prepend,
    .input-group-append {
        display: -webkit-box;
        display: flex;
    }

    .input-group-prepend .btn,
    .input-group-append .btn {
        position: relative;
        z-index: 2;
    }

    .input-group-prepend .btn:focus,
    .input-group-append .btn:focus {
        z-index: 3;
    }

    .input-group-prepend .btn+.btn,
    .input-group-prepend .btn+.input-group-text,
    .input-group-prepend .input-group-text+.input-group-text,
    .input-group-prepend .input-group-text+.btn,
    .input-group-append .btn+.btn,
    .input-group-append .btn+.input-group-text,
    .input-group-append .input-group-text+.input-group-text,
    .input-group-append .input-group-text+.btn {
        margin-left: -1px;
    }

    .input-group-prepend {
        margin-right: -1px;
    }

    .input-group-append {
        margin-left: -1px;
    }

    .input-group-text {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        padding: 0.375rem 0.75rem;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }

    .input-group-text input[type=radio],
    .input-group-text input[type=checkbox] {
        margin-top: 0;
    }

    .input-group-lg>.form-control:not(textarea),
    .input-group-lg>.custom-select {
        height: calc(1.5em + 1rem + 2px);
    }

    .input-group-lg>.form-control,
    .input-group-lg>.custom-select,
    .input-group-lg>.input-group-prepend>.input-group-text,
    .input-group-lg>.input-group-append>.input-group-text,
    .input-group-lg>.input-group-prepend>.btn,
    .input-group-lg>.input-group-append>.btn {
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: 0.3rem;
    }

    .input-group-sm>.form-control:not(textarea),
    .input-group-sm>.custom-select {
        height: calc(1.5em + 0.5rem + 2px);
    }

    .input-group-sm>.form-control,
    .input-group-sm>.custom-select,
    .input-group-sm>.input-group-prepend>.input-group-text,
    .input-group-sm>.input-group-append>.input-group-text,
    .input-group-sm>.input-group-prepend>.btn,
    .input-group-sm>.input-group-append>.btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }

    .input-group-lg>.custom-select,
    .input-group-sm>.custom-select {
        padding-right: 1.75rem;
    }

    .input-group>.input-group-prepend>.btn,
    .input-group>.input-group-prepend>.input-group-text,
    .input-group>.input-group-append:not(:last-child)>.btn,
    .input-group>.input-group-append:not(:last-child)>.input-group-text,
    .input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
    .input-group>.input-group-append:last-child>.input-group-text:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group>.input-group-append>.btn,
    .input-group>.input-group-append>.input-group-text,
    .input-group>.input-group-prepend:not(:first-child)>.btn,
    .input-group>.input-group-prepend:not(:first-child)>.input-group-text,
    .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
    .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .custom-control {
        position: relative;
        display: block;
        min-height: 1.5rem;
        padding-left: 1.5rem;
    }

    .custom-control-inline {
        display: -webkit-inline-box;
        display: inline-flex;
        margin-right: 1rem;
    }

    .custom-control-input {
        position: absolute;
        z-index: -1;
        opacity: 0;
    }

    .custom-control-input:checked~.custom-control-label::before {
        color: #fff;
        border-color: #007bff;
        background-color: #007bff;
    }

    .custom-control-input:focus~.custom-control-label::before {
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-control-input:focus:not(:checked)~.custom-control-label::before {
        border-color: #80bdff;
    }

    .custom-control-input:not(:disabled):active~.custom-control-label::before {
        color: #fff;
        background-color: #b3d7ff;
        border-color: #b3d7ff;
    }

    .custom-control-input:disabled~.custom-control-label {
        color: #6c757d;
    }

    .custom-control-input:disabled~.custom-control-label::before {
        background-color: #e9ecef;
    }

    .custom-control-label {
        position: relative;
        margin-bottom: 0;
        vertical-align: top;
    }

    .custom-control-label::before {
        position: absolute;
        top: 0.25rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        pointer-events: none;
        content: "";
        background-color: #fff;
        border: #adb5bd solid 1px;
    }

    .custom-control-label::after {
        position: absolute;
        top: 0.25rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        content: "";
        background: no-repeat 50%/50% 50%;
    }

    .custom-checkbox .custom-control-label::before {
        border-radius: 0.25rem;
    }

    .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
    }

    .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
        border-color: #007bff;
        background-color: #007bff;
    }

    .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
    }

    .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
        background-color: rgba(0, 123, 255, 0.5);
    }

    .custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
        background-color: rgba(0, 123, 255, 0.5);
    }

    .custom-radio .custom-control-label::before {
        border-radius: 50%;
    }

    .custom-radio .custom-control-input:checked~.custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
    }

    .custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
        background-color: rgba(0, 123, 255, 0.5);
    }

    .custom-switch {
        padding-left: 2.25rem;
    }

    .custom-switch .custom-control-label::before {
        left: -2.25rem;
        width: 1.75rem;
        pointer-events: all;
        border-radius: 0.5rem;
    }

    .custom-switch .custom-control-label::after {
        top: calc(0.25rem + 2px);
        left: calc(-2.25rem + 2px);
        width: calc(1rem - 4px);
        height: calc(1rem - 4px);
        background-color: #adb5bd;
        border-radius: 0.5rem;
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out;
        transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-switch .custom-control-label::after {
            -webkit-transition: none;
            transition: none;
        }
    }

    .custom-switch .custom-control-input:checked~.custom-control-label::after {
        background-color: #fff;
        -webkit-transform: translateX(0.75rem);
        transform: translateX(0.75rem);
    }

    .custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
        background-color: rgba(0, 123, 255, 0.5);
    }

    .custom-select {
        display: inline-block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 1.75rem 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        vertical-align: middle;
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .custom-select:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-select:focus::-ms-value {
        color: #495057;
        background-color: #fff;
    }

    .custom-select[multiple],
    .custom-select[size]:not([size="1"]) {
        height: auto;
        padding-right: 0.75rem;
        background-image: none;
    }

    .custom-select:disabled {
        color: #6c757d;
        background-color: #e9ecef;
    }

    .custom-select::-ms-expand {
        display: none;
    }

    .custom-select-sm {
        height: calc(1.5em + 0.5rem + 2px);
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        padding-left: 0.5rem;
        font-size: 0.875rem;
    }

    .custom-select-lg {
        height: calc(1.5em + 1rem + 2px);
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 1rem;
        font-size: 1.25rem;
    }

    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        margin-bottom: 0;
    }

    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        margin: 0;
        opacity: 0;
    }

    .custom-file-input:focus~.custom-file-label {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-file-input:disabled~.custom-file-label {
        background-color: #e9ecef;
    }

    .custom-file-input:lang(en)~.custom-file-label::after {
        content: "Browse";
    }

    .custom-file-input~.custom-file-label[data-browse]::after {
        content: attr(data-browse);
    }

    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }

    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: calc(1.5em + 0.75rem);
        padding: 0.375rem 0.75rem;
        line-height: 1.5;
        color: #495057;
        content: "Browse";
        background-color: #e9ecef;
        border-left: inherit;
        border-radius: 0 0.25rem 0.25rem 0;
    }

    .custom-range {
        width: 100%;
        height: calc(1rem + 0.4rem);
        padding: 0;
        background-color: transparent;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .custom-range:focus {
        outline: none;
    }

    .custom-range:focus::-webkit-slider-thumb {
        box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-range:focus::-moz-range-thumb {
        box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-range:focus::-ms-thumb {
        box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-range::-moz-focus-outer {
        border: 0;
    }

    .custom-range::-webkit-slider-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: -0.25rem;
        background-color: #007bff;
        border: 0;
        border-radius: 1rem;
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        -webkit-appearance: none;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-range::-webkit-slider-thumb {
            -webkit-transition: none;
            transition: none;
        }
    }

    .custom-range::-webkit-slider-thumb:active {
        background-color: #b3d7ff;
    }

    .custom-range::-webkit-slider-runnable-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #dee2e6;
        border-color: transparent;
        border-radius: 1rem;
    }

    .custom-range::-moz-range-thumb {
        width: 1rem;
        height: 1rem;
        background-color: #007bff;
        border: 0;
        border-radius: 1rem;
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        -moz-appearance: none;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-range::-moz-range-thumb {
            -webkit-transition: none;
            transition: none;
        }
    }

    .custom-range::-moz-range-thumb:active {
        background-color: #b3d7ff;
    }

    .custom-range::-moz-range-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #dee2e6;
        border-color: transparent;
        border-radius: 1rem;
    }

    .custom-range::-ms-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: 0;
        margin-right: 0.2rem;
        margin-left: 0.2rem;
        background-color: #007bff;
        border: 0;
        border-radius: 1rem;
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .custom-range::-ms-thumb {
            -webkit-transition: none;
            transition: none;
        }
    }

    .custom-range::-ms-thumb:active {
        background-color: #b3d7ff;
    }

    .custom-range::-ms-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: transparent;
        border-color: transparent;
        border-width: 0.5rem;
    }

    .custom-range::-ms-fill-lower {
        background-color: #dee2e6;
        border-radius: 1rem;
    }

    .custom-range::-ms-fill-upper {
        margin-right: 15px;
        background-color: #dee2e6;
        border-radius: 1rem;
    }

    .custom-range:disabled::-webkit-slider-thumb {
        background-color: #adb5bd;
    }

    .custom-range:disabled::-webkit-slider-runnable-track {
        cursor: default;
    }

    .custom-range:disabled::-moz-range-thumb {
        background-color: #adb5bd;
    }

    .custom-range:disabled::-moz-range-track {
        cursor: default;
    }

    .custom-range:disabled::-ms-thumb {
        background-color: #adb5bd;
    }

    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {

        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            -webkit-transition: none;
            transition: none;
        }
    }

    .nav {
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .nav-link {
        display: block;
        padding: 0.5rem 1rem;
    }

    .nav-link:hover,
    .nav-link:focus {
        text-decoration: none;
    }

    .nav-link.disabled {
        color: #6c757d;
        pointer-events: none;
        cursor: default;
    }

    .nav-tabs {
        border-bottom: 1px solid #dee2e6;
    }

    .nav-tabs .nav-item {
        margin-bottom: -1px;
    }

    .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
    }

    .nav-tabs .nav-link:hover,
    .nav-tabs .nav-link:focus {
        border-color: #e9ecef #e9ecef #dee2e6;
    }

    .nav-tabs .nav-link.disabled {
        color: #6c757d;
        background-color: transparent;
        border-color: transparent;
    }

    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
        color: #495057;
        background-color: #fff;
        border-color: #dee2e6 #dee2e6 #fff;
    }

    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .nav-pills .nav-link {
        border-radius: 0.25rem;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #007bff;
    }

    .nav-fill .nav-item {
        -webkit-box-flex: 1;
        flex: 1 1 auto;
        text-align: center;
    }

    .nav-justified .nav-item {
        flex-basis: 0;
        -webkit-box-flex: 1;
        flex-grow: 1;
        text-align: center;
    }

    .tab-content>.tab-pane {
        display: none;
    }

    .tab-content>.active {
        display: block;
    }

    .navbar {
        position: relative;
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between;
        padding: 0.5rem 1rem;
    }

    .navbar>.container,
    .navbar>.container-fluid {
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between;
    }

    .navbar-brand {
        display: inline-block;
        padding-top: 0.3125rem;
        padding-bottom: 0.3125rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit;
        white-space: nowrap;
    }

    .navbar-brand:hover,
    .navbar-brand:focus {
        text-decoration: none;
    }

    .navbar-nav {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .navbar-nav .nav-link {
        padding-right: 0;
        padding-left: 0;
    }

    .navbar-nav .dropdown-menu {
        position: static;
        float: none;
    }

    .navbar-text {
        display: inline-block;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .navbar-collapse {
        flex-basis: 100%;
        -webkit-box-flex: 1;
        flex-grow: 1;
        -webkit-box-align: center;
        align-items: center;
    }

    .navbar-toggler {
        padding: 0.25rem 0.75rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .navbar-toggler:hover,
    .navbar-toggler:focus {
        text-decoration: none;
    }

    .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        content: "";
        background: no-repeat center center;
        background-size: 100% 100%;
    }

    @media (max-width: 575.98px) {

        .navbar-expand-sm>.container,
        .navbar-expand-sm>.container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 576px) {
        .navbar-expand-sm {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand-sm .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
        }

        .navbar-expand-sm .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand-sm>.container,
        .navbar-expand-sm>.container-fluid {
            flex-wrap: nowrap;
        }

        .navbar-expand-sm .navbar-collapse {
            display: -webkit-box !important;
            display: flex !important;
            flex-basis: auto;
        }

        .navbar-expand-sm .navbar-toggler {
            display: none;
        }
    }

    @media (max-width: 767.98px) {

        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 768px) {
        .navbar-expand-md {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand-md .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
        }

        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid {
            flex-wrap: nowrap;
        }

        .navbar-expand-md .navbar-collapse {
            display: -webkit-box !important;
            display: flex !important;
            flex-basis: auto;
        }

        .navbar-expand-md .navbar-toggler {
            display: none;
        }
    }

    @media (max-width: 991.98px) {

        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 992px) {
        .navbar-expand-lg {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand-lg .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid {
            flex-wrap: nowrap;
        }

        .navbar-expand-lg .navbar-collapse {
            display: -webkit-box !important;
            display: flex !important;
            flex-basis: auto;
        }

        .navbar-expand-lg .navbar-toggler {
            display: none;
        }
    }

    @media (max-width: 1199.98px) {

        .navbar-expand-xl>.container,
        .navbar-expand-xl>.container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 1200px) {
        .navbar-expand-xl {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand-xl .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
        }

        .navbar-expand-xl .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand-xl>.container,
        .navbar-expand-xl>.container-fluid {
            flex-wrap: nowrap;
        }

        .navbar-expand-xl .navbar-collapse {
            display: -webkit-box !important;
            display: flex !important;
            flex-basis: auto;
        }

        .navbar-expand-xl .navbar-toggler {
            display: none;
        }
    }

    .navbar-expand {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        justify-content: flex-start;
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid {
        padding-right: 0;
        padding-left: 0;
    }

    .navbar-expand .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-direction: row;
    }

    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid {
        flex-wrap: nowrap;
    }

    .navbar-expand .navbar-collapse {
        display: -webkit-box !important;
        display: flex !important;
        flex-basis: auto;
    }

    .navbar-expand .navbar-toggler {
        display: none;
    }

    .navbar-light .navbar-brand {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-brand:hover,
    .navbar-light .navbar-brand:focus {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, 0.5);
    }

    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link:focus {
        color: rgba(0, 0, 0, 0.7);
    }

    .navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(0, 0, 0, 0.3);
    }

    .navbar-light .navbar-nav .show>.nav-link,
    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .nav-link.active {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 0, 0, 0.1);
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, 0.5);
    }

    .navbar-light .navbar-text a {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-text a:hover,
    .navbar-light .navbar-text a:focus {
        color: rgba(0, 0, 0, 0.9);
    }

    .navbar-dark .navbar-brand {
        color: #fff;
    }

    .navbar-dark .navbar-brand:hover,
    .navbar-dark .navbar-brand:focus {
        color: #fff;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.5);
    }

    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link:focus {
        color: rgba(255, 255, 255, 0.75);
    }

    .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, 0.25);
    }

    .navbar-dark .navbar-nav .show>.nav-link,
    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .nav-link.active {
        color: #fff;
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, 0.5);
        border-color: rgba(255, 255, 255, 0.1);
    }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, 0.5);
    }

    .navbar-dark .navbar-text a {
        color: #fff;
    }

    .navbar-dark .navbar-text a:hover,
    .navbar-dark .navbar-text a:focus {
        color: #fff;
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
    }

    .card>hr {
        margin-right: 0;
        margin-left: 0;
    }

    .card>.list-group:first-child .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
    }

    .card>.list-group:last-child .list-group-item:last-child {
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }

    .card-body {
        -webkit-box-flex: 1;
        flex: 1 1 auto;
        padding: 1.25rem;
    }

    .card-title {
        margin-bottom: 0.75rem;
    }

    .card-subtitle {
        margin-top: -0.375rem;
        margin-bottom: 0;
    }

    .card-text:last-child {
        margin-bottom: 0;
    }

    .card-link:hover {
        text-decoration: none;
    }

    .card-link+.card-link {
        margin-left: 1.25rem;
    }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, 0.03);
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }

    .card-header:first-child {
        border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
    }

    .card-header+.list-group .list-group-item:first-child {
        border-top: 0;
    }

    .card-footer {
        padding: 0.75rem 1.25rem;
        background-color: rgba(0, 0, 0, 0.03);
        border-top: 1px solid rgba(0, 0, 0, 0.125);
    }

    .card-footer:last-child {
        border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
    }

    .card-header-tabs {
        margin-right: -0.625rem;
        margin-bottom: -0.75rem;
        margin-left: -0.625rem;
        border-bottom: 0;
    }

    .card-header-pills {
        margin-right: -0.625rem;
        margin-left: -0.625rem;
    }

    .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1.25rem;
    }

    .card-img {
        width: 100%;
        border-radius: calc(0.25rem - 1px);
    }

    .card-img-top {
        width: 100%;
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
    }

    .card-img-bottom {
        width: 100%;
        border-bottom-right-radius: calc(0.25rem - 1px);
        border-bottom-left-radius: calc(0.25rem - 1px);
    }

    .card-deck {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
    }

    .card-deck .card {
        margin-bottom: 15px;
    }

    @media (min-width: 576px) {
        .card-deck {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .card-deck .card {
            display: -webkit-box;
            display: flex;
            -webkit-box-flex: 1;
            flex: 1 0 0%;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            margin-right: 15px;
            margin-bottom: 0;
            margin-left: 15px;
        }
    }

    .card-group {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
    }

    .card-group>.card {
        margin-bottom: 15px;
    }

    @media (min-width: 576px) {
        .card-group {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row wrap;
        }

        .card-group>.card {
            -webkit-box-flex: 1;
            flex: 1 0 0%;
            margin-bottom: 0;
        }

        .card-group>.card+.card {
            margin-left: 0;
            border-left: 0;
        }

        .card-group>.card:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .card-group>.card:not(:last-child) .card-img-top,
        .card-group>.card:not(:last-child) .card-header {
            border-top-right-radius: 0;
        }

        .card-group>.card:not(:last-child) .card-img-bottom,
        .card-group>.card:not(:last-child) .card-footer {
            border-bottom-right-radius: 0;
        }

        .card-group>.card:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .card-group>.card:not(:first-child) .card-img-top,
        .card-group>.card:not(:first-child) .card-header {
            border-top-left-radius: 0;
        }

        .card-group>.card:not(:first-child) .card-img-bottom,
        .card-group>.card:not(:first-child) .card-footer {
            border-bottom-left-radius: 0;
        }
    }

    .card-columns .card {
        margin-bottom: 0.75rem;
    }

    @media (min-width: 576px) {
        .card-columns {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-gap: 1.25rem;
            -moz-column-gap: 1.25rem;
            column-gap: 1.25rem;
            orphans: 1;
            widows: 1;
        }

        .card-columns .card {
            display: inline-block;
            width: 100%;
        }
    }

    .accordion>.card {
        overflow: hidden;
    }

    .accordion>.card:not(:first-of-type) .card-header:first-child {
        border-radius: 0;
    }

    .accordion>.card:not(:first-of-type):not(:last-of-type) {
        border-bottom: 0;
        border-radius: 0;
    }

    .accordion>.card:first-of-type {
        border-bottom: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .accordion>.card:last-of-type {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .accordion>.card .card-header {
        margin-bottom: -1px;
    }

    .breadcrumb {
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: #e9ecef;
        border-radius: 0.25rem;
    }

    .breadcrumb-item+.breadcrumb-item {
        padding-left: 0.5rem;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        display: inline-block;
        padding-right: 0.5rem;
        color: #6c757d;
        content: "/";
    }

    .breadcrumb-item+.breadcrumb-item:hover::before {
        text-decoration: underline;
    }

    .breadcrumb-item+.breadcrumb-item:hover::before {
        text-decoration: none;
    }

    .breadcrumb-item.active {
        color: #6c757d;
    }

    .pagination {
        display: -webkit-box;
        display: flex;
        padding-left: 0;
        list-style: none;
        border-radius: 0.25rem;
    }

    .page-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #007bff;
        background-color: #fff;
        border: 1px solid #dee2e6;
    }

    .page-link:hover {
        z-index: 2;
        color: #0056b3;
        text-decoration: none;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }

    .page-link:focus {
        z-index: 2;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .page-item:first-child .page-link {
        margin-left: 0;
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }

    .page-item:last-child .page-link {
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
    }

    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .page-item.disabled .page-link {
        color: #6c757d;
        pointer-events: none;
        cursor: auto;
        background-color: #fff;
        border-color: #dee2e6;
    }

    .pagination-lg .page-link {
        padding: 0.75rem 1.5rem;
        font-size: 1.25rem;
        line-height: 1.5;
    }

    .pagination-lg .page-item:first-child .page-link {
        border-top-left-radius: 0.3rem;
        border-bottom-left-radius: 0.3rem;
    }

    .pagination-lg .page-item:last-child .page-link {
        border-top-right-radius: 0.3rem;
        border-bottom-right-radius: 0.3rem;
    }

    .pagination-sm .page-link {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
    }

    .pagination-sm .page-item:first-child .page-link {
        border-top-left-radius: 0.2rem;
        border-bottom-left-radius: 0.2rem;
    }

    .pagination-sm .page-item:last-child .page-link {
        border-top-right-radius: 0.2rem;
        border-bottom-right-radius: 0.2rem;
    }

    .badge {
        display: inline-block;
        padding: 0.25em 0.4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.25rem;
        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .badge {
            -webkit-transition: none;
            transition: none;
        }
    }

    a.badge:hover,
    a.badge:focus {
        text-decoration: none;
    }

    .badge:empty {
        display: none;
    }

    .btn .badge {
        position: relative;
        top: -1px;
    }

    .badge-pill {
        padding-right: 0.6em;
        padding-left: 0.6em;
        border-radius: 10rem;
    }

    .badge-primary {
        color: #fff;
        background-color: #007bff;
    }

    a.badge-primary:hover,
    a.badge-primary:focus {
        color: #fff;
        background-color: #0062cc;
    }

    a.badge-primary:focus,
    a.badge-primary.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
    }

    .badge-secondary {
        color: #fff;
        background-color: #6c757d;
    }

    a.badge-secondary:hover,
    a.badge-secondary:focus {
        color: #fff;
        background-color: #545b62;
    }

    a.badge-secondary:focus,
    a.badge-secondary.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }

    .badge-success {
        color: #fff;
        background-color: #28a745;
    }

    a.badge-success:hover,
    a.badge-success:focus {
        color: #fff;
        background-color: #1e7e34;
    }

    a.badge-success:focus,
    a.badge-success.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    }

    .badge-info {
        color: #fff;
        background-color: #17a2b8;
    }

    a.badge-info:hover,
    a.badge-info:focus {
        color: #fff;
        background-color: #117a8b;
    }

    a.badge-info:focus,
    a.badge-info.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
    }

    .badge-warning {
        color: #212529;
        background-color: #ffc107;
    }

    a.badge-warning:hover,
    a.badge-warning:focus {
        color: #212529;
        background-color: #d39e00;
    }

    a.badge-warning:focus,
    a.badge-warning.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
    }

    .badge-danger {
        color: #fff;
        background-color: #dc3545;
    }

    a.badge-danger:hover,
    a.badge-danger:focus {
        color: #fff;
        background-color: #bd2130;
    }

    a.badge-danger:focus,
    a.badge-danger.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    }

    .badge-light {
        color: #212529;
        background-color: #f8f9fa;
    }

    a.badge-light:hover,
    a.badge-light:focus {
        color: #212529;
        background-color: #dae0e5;
    }

    a.badge-light:focus,
    a.badge-light.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    }

    .badge-dark {
        color: #fff;
        background-color: #343a40;
    }

    a.badge-dark:hover,
    a.badge-dark:focus {
        color: #fff;
        background-color: #1d2124;
    }

    a.badge-dark:focus,
    a.badge-dark.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    }

    .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        background-color: #e9ecef;
        border-radius: 0.3rem;
    }

    @media (min-width: 576px) {
        .jumbotron {
            padding: 4rem 2rem;
        }
    }

    .jumbotron-fluid {
        padding-right: 0;
        padding-left: 0;
        border-radius: 0;
    }

    .alert {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .alert-heading {
        color: inherit;
    }

    .alert-link {
        font-weight: 700;
    }

    .alert-dismissible {
        padding-right: 4rem;
    }

    .alert-dismissible .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: 0.75rem 1.25rem;
        color: inherit;
    }

    .alert-primary {
        color: #004085;
        background-color: #cce5ff;
        border-color: #b8daff;
    }

    .alert-primary hr {
        border-top-color: #9fcdff;
    }

    .alert-primary .alert-link {
        color: #002752;
    }

    .alert-secondary {
        color: #383d41;
        background-color: #e2e3e5;
        border-color: #d6d8db;
    }

    .alert-secondary hr {
        border-top-color: #c8cbcf;
    }

    .alert-secondary .alert-link {
        color: #202326;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .alert-success hr {
        border-top-color: #b1dfbb;
    }

    .alert-success .alert-link {
        color: #0b2e13;
    }

    .alert-info {
        color: #0c5460;
        background-color: #d1ecf1;
        border-color: #bee5eb;
    }

    .alert-info hr {
        border-top-color: #abdde5;
    }

    .alert-info .alert-link {
        color: #062c33;
    }

    .alert-warning {
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba;
    }

    .alert-warning hr {
        border-top-color: #ffe8a1;
    }

    .alert-warning .alert-link {
        color: #533f03;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }

    .alert-danger hr {
        border-top-color: #f1b0b7;
    }

    .alert-danger .alert-link {
        color: #491217;
    }

    .alert-light {
        color: #818182;
        background-color: #fefefe;
        border-color: #fdfdfe;
    }

    .alert-light hr {
        border-top-color: #ececf6;
    }

    .alert-light .alert-link {
        color: #686868;
    }

    .alert-dark {
        color: #1b1e21;
        background-color: #d6d8d9;
        border-color: #c6c8ca;
    }

    .alert-dark hr {
        border-top-color: #b9bbbe;
    }

    .alert-dark .alert-link {
        color: #040505;
    }

    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0;
        }

        to {
            background-position: 0 0;
        }
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0;
        }

        to {
            background-position: 0 0;
        }
    }

    .progress {
        display: -webkit-box;
        display: flex;
        height: 1rem;
        overflow: hidden;
        font-size: 0.75rem;
        background-color: #e9ecef;
        border-radius: 0.25rem;
    }

    .progress-bar {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        background-color: #007bff;
        -webkit-transition: width 0.6s ease;
        transition: width 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .progress-bar {
            -webkit-transition: none;
            transition: none;
        }
    }

    .progress-bar-striped {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-size: 1rem 1rem;
    }

    .progress-bar-animated {
        -webkit-animation: progress-bar-stripes 1s linear infinite;
        animation: progress-bar-stripes 1s linear infinite;
    }

    @media (prefers-reduced-motion: reduce) {
        .progress-bar-animated {
            -webkit-animation: none;
            animation: none;
        }
    }

    .media {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: start;
        align-items: flex-start;
    }

    .media-body {
        -webkit-box-flex: 1;
        flex: 1;
    }

    .list-group {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
    }

    .list-group-item-action {
        width: 100%;
        color: #495057;
        text-align: inherit;
    }

    .list-group-item-action:hover,
    .list-group-item-action:focus {
        z-index: 1;
        color: #495057;
        text-decoration: none;
        background-color: #f8f9fa;
    }

    .list-group-item-action:active {
        color: #212529;
        background-color: #e9ecef;
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: 0.75rem 1.25rem;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.125);
    }

    .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
    }

    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }

    .list-group-item.disabled,
    .list-group-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: #fff;
    }

    .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .list-group-horizontal {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-direction: row;
    }

    .list-group-horizontal .list-group-item {
        margin-right: -1px;
        margin-bottom: 0;
    }

    .list-group-horizontal .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }

    .list-group-horizontal .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }

    @media (min-width: 576px) {
        .list-group-horizontal-sm {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
        }

        .list-group-horizontal-sm .list-group-item {
            margin-right: -1px;
            margin-bottom: 0;
        }

        .list-group-horizontal-sm .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }

        .list-group-horizontal-sm .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }
    }

    @media (min-width: 768px) {
        .list-group-horizontal-md {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
        }

        .list-group-horizontal-md .list-group-item {
            margin-right: -1px;
            margin-bottom: 0;
        }

        .list-group-horizontal-md .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }

        .list-group-horizontal-md .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }
    }

    @media (min-width: 992px) {
        .list-group-horizontal-lg {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
        }

        .list-group-horizontal-lg .list-group-item {
            margin-right: -1px;
            margin-bottom: 0;
        }

        .list-group-horizontal-lg .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }

        .list-group-horizontal-lg .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }
    }

    @media (min-width: 1200px) {
        .list-group-horizontal-xl {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
        }

        .list-group-horizontal-xl .list-group-item {
            margin-right: -1px;
            margin-bottom: 0;
        }

        .list-group-horizontal-xl .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }

        .list-group-horizontal-xl .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }
    }

    .list-group-flush .list-group-item {
        border-right: 0;
        border-left: 0;
        border-radius: 0;
    }

    .list-group-flush .list-group-item:last-child {
        margin-bottom: -1px;
    }

    .list-group-flush:first-child .list-group-item:first-child {
        border-top: 0;
    }

    .list-group-flush:last-child .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom: 0;
    }

    .list-group-item-primary {
        color: #004085;
        background-color: #b8daff;
    }

    .list-group-item-primary.list-group-item-action:hover,
    .list-group-item-primary.list-group-item-action:focus {
        color: #004085;
        background-color: #9fcdff;
    }

    .list-group-item-primary.list-group-item-action.active {
        color: #fff;
        background-color: #004085;
        border-color: #004085;
    }

    .list-group-item-secondary {
        color: #383d41;
        background-color: #d6d8db;
    }

    .list-group-item-secondary.list-group-item-action:hover,
    .list-group-item-secondary.list-group-item-action:focus {
        color: #383d41;
        background-color: #c8cbcf;
    }

    .list-group-item-secondary.list-group-item-action.active {
        color: #fff;
        background-color: #383d41;
        border-color: #383d41;
    }

    .list-group-item-success {
        color: #155724;
        background-color: #c3e6cb;
    }

    .list-group-item-success.list-group-item-action:hover,
    .list-group-item-success.list-group-item-action:focus {
        color: #155724;
        background-color: #b1dfbb;
    }

    .list-group-item-success.list-group-item-action.active {
        color: #fff;
        background-color: #155724;
        border-color: #155724;
    }

    .list-group-item-info {
        color: #0c5460;
        background-color: #bee5eb;
    }

    .list-group-item-info.list-group-item-action:hover,
    .list-group-item-info.list-group-item-action:focus {
        color: #0c5460;
        background-color: #abdde5;
    }

    .list-group-item-info.list-group-item-action.active {
        color: #fff;
        background-color: #0c5460;
        border-color: #0c5460;
    }

    .list-group-item-warning {
        color: #856404;
        background-color: #ffeeba;
    }

    .list-group-item-warning.list-group-item-action:hover,
    .list-group-item-warning.list-group-item-action:focus {
        color: #856404;
        background-color: #ffe8a1;
    }

    .list-group-item-warning.list-group-item-action.active {
        color: #fff;
        background-color: #856404;
        border-color: #856404;
    }

    .list-group-item-danger {
        color: #721c24;
        background-color: #f5c6cb;
    }

    .list-group-item-danger.list-group-item-action:hover,
    .list-group-item-danger.list-group-item-action:focus {
        color: #721c24;
        background-color: #f1b0b7;
    }

    .list-group-item-danger.list-group-item-action.active {
        color: #fff;
        background-color: #721c24;
        border-color: #721c24;
    }

    .list-group-item-light {
        color: #818182;
        background-color: #fdfdfe;
    }

    .list-group-item-light.list-group-item-action:hover,
    .list-group-item-light.list-group-item-action:focus {
        color: #818182;
        background-color: #ececf6;
    }

    .list-group-item-light.list-group-item-action.active {
        color: #fff;
        background-color: #818182;
        border-color: #818182;
    }

    .list-group-item-dark {
        color: #1b1e21;
        background-color: #c6c8ca;
    }

    .list-group-item-dark.list-group-item-action:hover,
    .list-group-item-dark.list-group-item-action:focus {
        color: #1b1e21;
        background-color: #b9bbbe;
    }

    .list-group-item-dark.list-group-item-action.active {
        color: #fff;
        background-color: #1b1e21;
        border-color: #1b1e21;
    }

    .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: 0.5;
    }

    .close:hover {
        color: #000;
        text-decoration: none;
    }

    .close:not(:disabled):not(.disabled):hover,
    .close:not(:disabled):not(.disabled):focus {
        opacity: 0.75;
    }

    button.close {
        padding: 0;
        background-color: transparent;
        border: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    a.close.disabled {
        pointer-events: none;
    }

    .toast {
        max-width: 350px;
        overflow: hidden;
        font-size: 0.875rem;
        background-color: rgba(255, 255, 255, 0.85);
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        opacity: 0;
        border-radius: 0.25rem;
    }

    .toast:not(:last-child) {
        margin-bottom: 0.75rem;
    }

    .toast.showing {
        opacity: 1;
    }

    .toast.show {
        display: block;
        opacity: 1;
    }

    .toast.hide {
        display: none;
    }

    .toast-header {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        padding: 0.25rem 0.75rem;
        color: #6c757d;
        background-color: rgba(255, 255, 255, 0.85);
        background-clip: padding-box;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .toast-body {
        padding: 0.75rem;
    }

    .modal-open {
        overflow: hidden;
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto;
    }

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        display: none;
        width: 100%;
        height: 100%;
        overflow: hidden;
        outline: 0;
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 0.5rem;
        pointer-events: none;
    }

    .modal.fade .modal-dialog {
        -webkit-transition: -webkit-transform 0.3s ease-out;
        transition: -webkit-transform 0.3s ease-out;
        transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
        -webkit-transform: translate(0, -50px);
        transform: translate(0, -50px);
    }

    @media (prefers-reduced-motion: reduce) {
        .modal.fade .modal-dialog {
            -webkit-transition: none;
            transition: none;
        }
    }

    .modal.show .modal-dialog {
        -webkit-transform: none;
        transform: none;
    }

    .modal-dialog-scrollable {
        display: -webkit-box;
        display: flex;
        max-height: calc(100% - 1rem);
    }

    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 1rem);
        overflow: hidden;
    }

    .modal-dialog-scrollable .modal-header,
    .modal-dialog-scrollable .modal-footer {
        flex-shrink: 0;
    }

    .modal-dialog-scrollable .modal-body {
        overflow-y: auto;
    }

    .modal-dialog-centered {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        min-height: calc(100% - 1rem);
    }

    .modal-dialog-centered::before {
        display: block;
        height: calc(100vh - 1rem);
        content: "";
    }

    .modal-dialog-centered.modal-dialog-scrollable {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        height: 100%;
    }

    .modal-dialog-centered.modal-dialog-scrollable .modal-content {
        max-height: none;
    }

    .modal-dialog-centered.modal-dialog-scrollable::before {
        content: none;
    }

    .modal-content {
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 0.3rem;
        outline: 0;
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1040;
        width: 100vw;
        height: 100vh;
        background-color: #000;
    }

    .modal-backdrop.fade {
        opacity: 0;
    }

    .modal-backdrop.show {
        opacity: 0.5;
    }

    .modal-header {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: start;
        align-items: flex-start;
        -webkit-box-pack: justify;
        justify-content: space-between;
        padding: 1rem 1rem;
        border-bottom: 1px solid #dee2e6;
        border-top-left-radius: 0.3rem;
        border-top-right-radius: 0.3rem;
    }

    .modal-header .close {
        padding: 1rem 1rem;
        margin: -1rem -1rem -1rem auto;
    }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5;
    }

    .modal-body {
        position: relative;
        -webkit-box-flex: 1;
        flex: 1 1 auto;
        padding: 1rem;
    }

    .modal-footer {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: end;
        justify-content: flex-end;
        padding: 1rem;
        border-top: 1px solid #dee2e6;
        border-bottom-right-radius: 0.3rem;
        border-bottom-left-radius: 0.3rem;
    }

    .modal-footer> :not(:first-child) {
        margin-left: 0.25rem;
    }

    .modal-footer> :not(:last-child) {
        margin-right: 0.25rem;
    }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll;
    }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto;
        }

        .modal-dialog-scrollable {
            max-height: calc(100% - 3.5rem);
        }

        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 3.5rem);
        }

        .modal-dialog-centered {
            min-height: calc(100% - 3.5rem);
        }

        .modal-dialog-centered::before {
            height: calc(100vh - 3.5rem);
        }

        .modal-sm {
            max-width: 300px;
        }
    }

    @media (min-width: 992px) {

        .modal-lg,
        .modal-xl {
            max-width: 800px;
        }
    }

    @media (min-width: 1200px) {
        .modal-xl {
            max-width: 1140px;
        }
    }

    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 0.875rem;
        word-wrap: break-word;
        opacity: 0;
    }

    .tooltip.show {
        opacity: 0.9;
    }

    .tooltip .arrow {
        position: absolute;
        display: block;
        width: 0.8rem;
        height: 0.4rem;
    }

    .tooltip .arrow::before {
        position: absolute;
        content: "";
        border-color: transparent;
        border-style: solid;
    }

    .bs-tooltip-top,
    .bs-tooltip-auto[x-placement^=top] {
        padding: 0.4rem 0;
    }

    .bs-tooltip-top .arrow,
    .bs-tooltip-auto[x-placement^=top] .arrow {
        bottom: 0;
    }

    .bs-tooltip-top .arrow::before,
    .bs-tooltip-auto[x-placement^=top] .arrow::before {
        top: 0;
        border-width: 0.4rem 0.4rem 0;
        border-top-color: #000;
    }

    .bs-tooltip-right,
    .bs-tooltip-auto[x-placement^=right] {
        padding: 0 0.4rem;
    }

    .bs-tooltip-right .arrow,
    .bs-tooltip-auto[x-placement^=right] .arrow {
        left: 0;
        width: 0.4rem;
        height: 0.8rem;
    }

    .bs-tooltip-right .arrow::before,
    .bs-tooltip-auto[x-placement^=right] .arrow::before {
        right: 0;
        border-width: 0.4rem 0.4rem 0.4rem 0;
        border-right-color: #000;
    }

    .bs-tooltip-bottom,
    .bs-tooltip-auto[x-placement^=bottom] {
        padding: 0.4rem 0;
    }

    .bs-tooltip-bottom .arrow,
    .bs-tooltip-auto[x-placement^=bottom] .arrow {
        top: 0;
    }

    .bs-tooltip-bottom .arrow::before,
    .bs-tooltip-auto[x-placement^=bottom] .arrow::before {
        bottom: 0;
        border-width: 0 0.4rem 0.4rem;
        border-bottom-color: #000;
    }

    .bs-tooltip-left,
    .bs-tooltip-auto[x-placement^=left] {
        padding: 0 0.4rem;
    }

    .bs-tooltip-left .arrow,
    .bs-tooltip-auto[x-placement^=left] .arrow {
        right: 0;
        width: 0.4rem;
        height: 0.8rem;
    }

    .bs-tooltip-left .arrow::before,
    .bs-tooltip-auto[x-placement^=left] .arrow::before {
        left: 0;
        border-width: 0.4rem 0 0.4rem 0.4rem;
        border-left-color: #000;
    }

    .tooltip-inner {
        max-width: 200px;
        padding: 0.25rem 0.5rem;
        color: #fff;
        text-align: center;
        background-color: #000;
        border-radius: 0.25rem;
    }

    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: block;
        max-width: 276px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 0.875rem;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 0.3rem;
    }

    .popover .arrow {
        position: absolute;
        display: block;
        width: 1rem;
        height: 0.5rem;
        margin: 0 0.3rem;
    }

    .popover .arrow::before,
    .popover .arrow::after {
        position: absolute;
        display: block;
        content: "";
        border-color: transparent;
        border-style: solid;
    }

    .bs-popover-top,
    .bs-popover-auto[x-placement^=top] {
        margin-bottom: 0.5rem;
    }

    .bs-popover-top>.arrow,
    .bs-popover-auto[x-placement^=top]>.arrow {
        bottom: calc((0.5rem + 1px) * -1);
    }

    .bs-popover-top>.arrow::before,
    .bs-popover-auto[x-placement^=top]>.arrow::before {
        bottom: 0;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-top>.arrow::after,
    .bs-popover-auto[x-placement^=top]>.arrow::after {
        bottom: 1px;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: #fff;
    }

    .bs-popover-right,
    .bs-popover-auto[x-placement^=right] {
        margin-left: 0.5rem;
    }

    .bs-popover-right>.arrow,
    .bs-popover-auto[x-placement^=right]>.arrow {
        left: calc((0.5rem + 1px) * -1);
        width: 0.5rem;
        height: 1rem;
        margin: 0.3rem 0;
    }

    .bs-popover-right>.arrow::before,
    .bs-popover-auto[x-placement^=right]>.arrow::before {
        left: 0;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-right>.arrow::after,
    .bs-popover-auto[x-placement^=right]>.arrow::after {
        left: 1px;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: #fff;
    }

    .bs-popover-bottom,
    .bs-popover-auto[x-placement^=bottom] {
        margin-top: 0.5rem;
    }

    .bs-popover-bottom>.arrow,
    .bs-popover-auto[x-placement^=bottom]>.arrow {
        top: calc((0.5rem + 1px) * -1);
    }

    .bs-popover-bottom>.arrow::before,
    .bs-popover-auto[x-placement^=bottom]>.arrow::before {
        top: 0;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-bottom>.arrow::after,
    .bs-popover-auto[x-placement^=bottom]>.arrow::after {
        top: 1px;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: #fff;
    }

    .bs-popover-bottom .popover-header::before,
    .bs-popover-auto[x-placement^=bottom] .popover-header::before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 1rem;
        margin-left: -0.5rem;
        content: "";
        border-bottom: 1px solid #f7f7f7;
    }

    .bs-popover-left,
    .bs-popover-auto[x-placement^=left] {
        margin-right: 0.5rem;
    }

    .bs-popover-left>.arrow,
    .bs-popover-auto[x-placement^=left]>.arrow {
        right: calc((0.5rem + 1px) * -1);
        width: 0.5rem;
        height: 1rem;
        margin: 0.3rem 0;
    }

    .bs-popover-left>.arrow::before,
    .bs-popover-auto[x-placement^=left]>.arrow::before {
        right: 0;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-left>.arrow::after,
    .bs-popover-auto[x-placement^=left]>.arrow::after {
        right: 1px;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: #fff;
    }

    .popover-header {
        padding: 0.5rem 0.75rem;
        margin-bottom: 0;
        font-size: 1rem;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
        border-top-left-radius: calc(0.3rem - 1px);
        border-top-right-radius: calc(0.3rem - 1px);
    }

    .popover-header:empty {
        display: none;
    }

    .popover-body {
        padding: 0.5rem 0.75rem;
        color: #212529;
    }

    .carousel {
        position: relative;
    }

    .carousel.pointer-event {
        touch-action: pan-y;
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .carousel-inner::after {
        display: block;
        clear: both;
        content: "";
    }

    .carousel-item {
        position: relative;
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: -webkit-transform 0.6s ease-in-out;
        transition: -webkit-transform 0.6s ease-in-out;
        transition: transform 0.6s ease-in-out;
        transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-item {
            -webkit-transition: none;
            transition: none;
        }
    }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }

    .carousel-item-next:not(.carousel-item-left),
    .active.carousel-item-right {
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
    }

    .carousel-item-prev:not(.carousel-item-right),
    .active.carousel-item-left {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
    }

    .carousel-fade .carousel-item {
        opacity: 0;
        -webkit-transition-property: opacity;
        transition-property: opacity;
        -webkit-transform: none;
        transform: none;
    }

    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right {
        z-index: 1;
        opacity: 1;
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        z-index: 0;
        opacity: 0;
        -webkit-transition: 0s 0.6s opacity;
        transition: 0s 0.6s opacity;
    }

    @media (prefers-reduced-motion: reduce) {

        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            -webkit-transition: none;
            transition: none;
        }
    }

    .carousel-control-prev,
    .carousel-control-next {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: 0.5;
        -webkit-transition: opacity 0.15s ease;
        transition: opacity 0.15s ease;
    }

    @media (prefers-reduced-motion: reduce) {

        .carousel-control-prev,
        .carousel-control-next {
            -webkit-transition: none;
            transition: none;
        }
    }

    .carousel-control-prev:hover,
    .carousel-control-prev:focus,
    .carousel-control-next:hover,
    .carousel-control-next:focus {
        color: #fff;
        text-decoration: none;
        outline: 0;
        opacity: 0.9;
    }

    .carousel-control-prev {
        left: 0;
    }

    .carousel-control-next {
        right: 0;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: no-repeat 50%/100% 100%;
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e");
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e");
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 15;
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none;
    }

    .carousel-indicators li {
        box-sizing: content-box;
        -webkit-box-flex: 0;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #fff;
        background-clip: padding-box;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: 0.5;
        -webkit-transition: opacity 0.6s ease;
        transition: opacity 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-indicators li {
            -webkit-transition: none;
            transition: none;
        }
    }

    .carousel-indicators .active {
        opacity: 1;
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center;
    }

    @-webkit-keyframes spinner-border {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes spinner-border {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    .spinner-border {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        border: 0.25em solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner-border 0.75s linear infinite;
        animation: spinner-border 0.75s linear infinite;
    }

    .spinner-border-sm {
        width: 1rem;
        height: 1rem;
        border-width: 0.2em;
    }

    @-webkit-keyframes spinner-grow {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        50% {
            opacity: 1;
        }
    }

    @keyframes spinner-grow {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        50% {
            opacity: 1;
        }
    }

    .spinner-grow {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        background-color: currentColor;
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner-grow 0.75s linear infinite;
        animation: spinner-grow 0.75s linear infinite;
    }

    .spinner-grow-sm {
        width: 1rem;
        height: 1rem;
    }

    .align-baseline {
        vertical-align: baseline !important;
    }

    .align-top {
        vertical-align: top !important;
    }

    .align-middle {
        vertical-align: middle !important;
    }

    .align-bottom {
        vertical-align: bottom !important;
    }

    .align-text-bottom {
        vertical-align: text-bottom !important;
    }

    .align-text-top {
        vertical-align: text-top !important;
    }

    .bg-primary {
        background-color: #007bff !important;
    }

    a.bg-primary:hover,
    a.bg-primary:focus,
    button.bg-primary:hover,
    button.bg-primary:focus {
        background-color: #0062cc !important;
    }

    .bg-secondary {
        background-color: #6c757d !important;
    }

    a.bg-secondary:hover,
    a.bg-secondary:focus,
    button.bg-secondary:hover,
    button.bg-secondary:focus {
        background-color: #545b62 !important;
    }

    .bg-success {
        background-color: #28a745 !important;
    }

    a.bg-success:hover,
    a.bg-success:focus,
    button.bg-success:hover,
    button.bg-success:focus {
        background-color: #1e7e34 !important;
    }

    .bg-info {
        background-color: #17a2b8 !important;
    }

    a.bg-info:hover,
    a.bg-info:focus,
    button.bg-info:hover,
    button.bg-info:focus {
        background-color: #117a8b !important;
    }

    .bg-warning {
        background-color: #ffc107 !important;
    }

    a.bg-warning:hover,
    a.bg-warning:focus,
    button.bg-warning:hover,
    button.bg-warning:focus {
        background-color: #d39e00 !important;
    }

    .bg-danger {
        background-color: #dc3545 !important;
    }

    a.bg-danger:hover,
    a.bg-danger:focus,
    button.bg-danger:hover,
    button.bg-danger:focus {
        background-color: #bd2130 !important;
    }

    .bg-light {
        background-color: #f8f9fa !important;
    }

    a.bg-light:hover,
    a.bg-light:focus,
    button.bg-light:hover,
    button.bg-light:focus {
        background-color: #dae0e5 !important;
    }

    .bg-dark {
        background-color: #343a40 !important;
    }

    a.bg-dark:hover,
    a.bg-dark:focus,
    button.bg-dark:hover,
    button.bg-dark:focus {
        background-color: #1d2124 !important;
    }

    .bg-white {
        background-color: #fff !important;
    }

    .bg-transparent {
        background-color: transparent !important;
    }

    .border {
        border: 1px solid #dee2e6 !important;
    }

    .border-top {
        border-top: 1px solid #dee2e6 !important;
    }

    .border-right {
        border-right: 1px solid #dee2e6 !important;
    }

    .border-bottom {
        border-bottom: 1px solid #dee2e6 !important;
    }

    .border-left {
        border-left: 1px solid #dee2e6 !important;
    }

    .border-0 {
        border: 0 !important;
    }

    .border-top-0 {
        border-top: 0 !important;
    }

    .border-right-0 {
        border-right: 0 !important;
    }

    .border-bottom-0 {
        border-bottom: 0 !important;
    }

    .border-left-0 {
        border-left: 0 !important;
    }

    .border-primary {
        border-color: #007bff !important;
    }

    .border-secondary {
        border-color: #6c757d !important;
    }

    .border-success {
        border-color: #28a745 !important;
    }

    .border-info {
        border-color: #17a2b8 !important;
    }

    .border-warning {
        border-color: #ffc107 !important;
    }

    .border-danger {
        border-color: #dc3545 !important;
    }

    .border-light {
        border-color: #f8f9fa !important;
    }

    .border-dark {
        border-color: #343a40 !important;
    }

    .border-white {
        border-color: #fff !important;
    }

    .rounded-sm {
        border-radius: 0.2rem !important;
    }

    .rounded {
        border-radius: 0.25rem !important;
    }

    .rounded-top {
        border-top-left-radius: 0.25rem !important;
        border-top-right-radius: 0.25rem !important;
    }

    .rounded-right {
        border-top-right-radius: 0.25rem !important;
        border-bottom-right-radius: 0.25rem !important;
    }

    .rounded-bottom {
        border-bottom-right-radius: 0.25rem !important;
        border-bottom-left-radius: 0.25rem !important;
    }

    .rounded-left {
        border-top-left-radius: 0.25rem !important;
        border-bottom-left-radius: 0.25rem !important;
    }

    .rounded-lg {
        border-radius: 0.3rem !important;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .rounded-pill {
        border-radius: 50rem !important;
    }

    .rounded-0 {
        border-radius: 0 !important;
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: "";
    }

    .d-none {
        display: none !important;
    }

    .d-inline {
        display: inline !important;
    }

    .d-inline-block {
        display: inline-block !important;
    }

    .d-block {
        display: block !important;
    }

    .d-table {
        display: table !important;
    }

    .d-table-row {
        display: table-row !important;
    }

    .d-table-cell {
        display: table-cell !important;
    }

    .d-flex {
        display: -webkit-box !important;
        display: flex !important;
    }

    .d-inline-flex {
        display: -webkit-inline-box !important;
        display: inline-flex !important;
    }

    @media (min-width: 576px) {
        .d-sm-none {
            display: none !important;
        }

        .d-sm-inline {
            display: inline !important;
        }

        .d-sm-inline-block {
            display: inline-block !important;
        }

        .d-sm-block {
            display: block !important;
        }

        .d-sm-table {
            display: table !important;
        }

        .d-sm-table-row {
            display: table-row !important;
        }

        .d-sm-table-cell {
            display: table-cell !important;
        }

        .d-sm-flex {
            display: -webkit-box !important;
            display: flex !important;
        }

        .d-sm-inline-flex {
            display: -webkit-inline-box !important;
            display: inline-flex !important;
        }
    }

    @media (min-width: 768px) {
        .d-md-none {
            display: none !important;
        }

        .d-md-inline {
            display: inline !important;
        }

        .d-md-inline-block {
            display: inline-block !important;
        }

        .d-md-block {
            display: block !important;
        }

        .d-md-table {
            display: table !important;
        }

        .d-md-table-row {
            display: table-row !important;
        }

        .d-md-table-cell {
            display: table-cell !important;
        }

        .d-md-flex {
            display: -webkit-box !important;
            display: flex !important;
        }

        .d-md-inline-flex {
            display: -webkit-inline-box !important;
            display: inline-flex !important;
        }
    }

    @media (min-width: 992px) {
        .d-lg-none {
            display: none !important;
        }

        .d-lg-inline {
            display: inline !important;
        }

        .d-lg-inline-block {
            display: inline-block !important;
        }

        .d-lg-block {
            display: block !important;
        }

        .d-lg-table {
            display: table !important;
        }

        .d-lg-table-row {
            display: table-row !important;
        }

        .d-lg-table-cell {
            display: table-cell !important;
        }

        .d-lg-flex {
            display: -webkit-box !important;
            display: flex !important;
        }

        .d-lg-inline-flex {
            display: -webkit-inline-box !important;
            display: inline-flex !important;
        }
    }

    @media (min-width: 1200px) {
        .d-xl-none {
            display: none !important;
        }

        .d-xl-inline {
            display: inline !important;
        }

        .d-xl-inline-block {
            display: inline-block !important;
        }

        .d-xl-block {
            display: block !important;
        }

        .d-xl-table {
            display: table !important;
        }

        .d-xl-table-row {
            display: table-row !important;
        }

        .d-xl-table-cell {
            display: table-cell !important;
        }

        .d-xl-flex {
            display: -webkit-box !important;
            display: flex !important;
        }

        .d-xl-inline-flex {
            display: -webkit-inline-box !important;
            display: inline-flex !important;
        }
    }

    @media print {
        .d-print-none {
            display: none !important;
        }

        .d-print-inline {
            display: inline !important;
        }

        .d-print-inline-block {
            display: inline-block !important;
        }

        .d-print-block {
            display: block !important;
        }

        .d-print-table {
            display: table !important;
        }

        .d-print-table-row {
            display: table-row !important;
        }

        .d-print-table-cell {
            display: table-cell !important;
        }

        .d-print-flex {
            display: -webkit-box !important;
            display: flex !important;
        }

        .d-print-inline-flex {
            display: -webkit-inline-box !important;
            display: inline-flex !important;
        }
    }

    .embed-responsive {
        position: relative;
        display: block;
        width: 100%;
        padding: 0;
        overflow: hidden;
    }

    .embed-responsive::before {
        display: block;
        content: "";
    }

    .embed-responsive .embed-responsive-item,
    .embed-responsive iframe,
    .embed-responsive embed,
    .embed-responsive object,
    .embed-responsive video {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .embed-responsive-21by9::before {
        padding-top: 42.8571428571%;
    }

    .embed-responsive-16by9::before {
        padding-top: 56.25%;
    }

    .embed-responsive-4by3::before {
        padding-top: 75%;
    }

    .embed-responsive-1by1::before {
        padding-top: 100%;
    }

    .flex-row {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: normal !important;
        flex-direction: row !important;
    }

    .flex-column {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: normal !important;
        flex-direction: column !important;
    }

    .flex-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        flex-direction: row-reverse !important;
    }

    .flex-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        flex-direction: column-reverse !important;
    }

    .flex-wrap {
        flex-wrap: wrap !important;
    }

    .flex-nowrap {
        flex-wrap: nowrap !important;
    }

    .flex-wrap-reverse {
        flex-wrap: wrap-reverse !important;
    }

    .flex-fill {
        -webkit-box-flex: 1 !important;
        flex: 1 1 auto !important;
    }

    .flex-grow-0 {
        -webkit-box-flex: 0 !important;
        flex-grow: 0 !important;
    }

    .flex-grow-1 {
        -webkit-box-flex: 1 !important;
        flex-grow: 1 !important;
    }

    .flex-shrink-0 {
        flex-shrink: 0 !important;
    }

    .flex-shrink-1 {
        flex-shrink: 1 !important;
    }

    .justify-content-start {
        -webkit-box-pack: start !important;
        justify-content: flex-start !important;
    }

    .justify-content-end {
        -webkit-box-pack: end !important;
        justify-content: flex-end !important;
    }

    .justify-content-center {
        -webkit-box-pack: center !important;
        justify-content: center !important;
    }

    .justify-content-between {
        -webkit-box-pack: justify !important;
        justify-content: space-between !important;
    }

    .justify-content-around {
        justify-content: space-around !important;
    }

    .align-items-start {
        -webkit-box-align: start !important;
        align-items: flex-start !important;
    }

    .align-items-end {
        -webkit-box-align: end !important;
        align-items: flex-end !important;
    }

    .align-items-center {
        -webkit-box-align: center !important;
        align-items: center !important;
    }

    .align-items-baseline {
        -webkit-box-align: baseline !important;
        align-items: baseline !important;
    }

    .align-items-stretch {
        -webkit-box-align: stretch !important;
        align-items: stretch !important;
    }

    .align-content-start {
        align-content: flex-start !important;
    }

    .align-content-end {
        align-content: flex-end !important;
    }

    .align-content-center {
        align-content: center !important;
    }

    .align-content-between {
        align-content: space-between !important;
    }

    .align-content-around {
        align-content: space-around !important;
    }

    .align-content-stretch {
        align-content: stretch !important;
    }

    .align-self-auto {
        align-self: auto !important;
    }

    .align-self-start {
        align-self: flex-start !important;
    }

    .align-self-end {
        align-self: flex-end !important;
    }

    .align-self-center {
        align-self: center !important;
    }

    .align-self-baseline {
        align-self: baseline !important;
    }

    .align-self-stretch {
        align-self: stretch !important;
    }

    @media (min-width: 576px) {
        .flex-sm-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            flex-direction: row !important;
        }

        .flex-sm-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            flex-direction: column !important;
        }

        .flex-sm-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-sm-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-sm-wrap {
            flex-wrap: wrap !important;
        }

        .flex-sm-nowrap {
            flex-wrap: nowrap !important;
        }

        .flex-sm-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .flex-sm-fill {
            -webkit-box-flex: 1 !important;
            flex: 1 1 auto !important;
        }

        .flex-sm-grow-0 {
            -webkit-box-flex: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-sm-grow-1 {
            -webkit-box-flex: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-sm-shrink-0 {
            flex-shrink: 0 !important;
        }

        .flex-sm-shrink-1 {
            flex-shrink: 1 !important;
        }

        .justify-content-sm-start {
            -webkit-box-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-sm-end {
            -webkit-box-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-sm-center {
            -webkit-box-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-sm-between {
            -webkit-box-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-sm-around {
            justify-content: space-around !important;
        }

        .align-items-sm-start {
            -webkit-box-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-sm-end {
            -webkit-box-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-sm-center {
            -webkit-box-align: center !important;
            align-items: center !important;
        }

        .align-items-sm-baseline {
            -webkit-box-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-sm-stretch {
            -webkit-box-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-sm-start {
            align-content: flex-start !important;
        }

        .align-content-sm-end {
            align-content: flex-end !important;
        }

        .align-content-sm-center {
            align-content: center !important;
        }

        .align-content-sm-between {
            align-content: space-between !important;
        }

        .align-content-sm-around {
            align-content: space-around !important;
        }

        .align-content-sm-stretch {
            align-content: stretch !important;
        }

        .align-self-sm-auto {
            align-self: auto !important;
        }

        .align-self-sm-start {
            align-self: flex-start !important;
        }

        .align-self-sm-end {
            align-self: flex-end !important;
        }

        .align-self-sm-center {
            align-self: center !important;
        }

        .align-self-sm-baseline {
            align-self: baseline !important;
        }

        .align-self-sm-stretch {
            align-self: stretch !important;
        }
    }

    @media (min-width: 768px) {
        .flex-md-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            flex-direction: row !important;
        }

        .flex-md-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            flex-direction: column !important;
        }

        .flex-md-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-md-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-md-wrap {
            flex-wrap: wrap !important;
        }

        .flex-md-nowrap {
            flex-wrap: nowrap !important;
        }

        .flex-md-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .flex-md-fill {
            -webkit-box-flex: 1 !important;
            flex: 1 1 auto !important;
        }

        .flex-md-grow-0 {
            -webkit-box-flex: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-md-grow-1 {
            -webkit-box-flex: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-md-shrink-0 {
            flex-shrink: 0 !important;
        }

        .flex-md-shrink-1 {
            flex-shrink: 1 !important;
        }

        .justify-content-md-start {
            -webkit-box-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-md-end {
            -webkit-box-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-md-center {
            -webkit-box-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-md-between {
            -webkit-box-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-md-around {
            justify-content: space-around !important;
        }

        .align-items-md-start {
            -webkit-box-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-md-end {
            -webkit-box-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-md-center {
            -webkit-box-align: center !important;
            align-items: center !important;
        }

        .align-items-md-baseline {
            -webkit-box-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-md-stretch {
            -webkit-box-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-md-start {
            align-content: flex-start !important;
        }

        .align-content-md-end {
            align-content: flex-end !important;
        }

        .align-content-md-center {
            align-content: center !important;
        }

        .align-content-md-between {
            align-content: space-between !important;
        }

        .align-content-md-around {
            align-content: space-around !important;
        }

        .align-content-md-stretch {
            align-content: stretch !important;
        }

        .align-self-md-auto {
            align-self: auto !important;
        }

        .align-self-md-start {
            align-self: flex-start !important;
        }

        .align-self-md-end {
            align-self: flex-end !important;
        }

        .align-self-md-center {
            align-self: center !important;
        }

        .align-self-md-baseline {
            align-self: baseline !important;
        }

        .align-self-md-stretch {
            align-self: stretch !important;
        }
    }

    @media (min-width: 992px) {
        .flex-lg-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            flex-direction: row !important;
        }

        .flex-lg-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            flex-direction: column !important;
        }

        .flex-lg-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-lg-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-lg-wrap {
            flex-wrap: wrap !important;
        }

        .flex-lg-nowrap {
            flex-wrap: nowrap !important;
        }

        .flex-lg-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .flex-lg-fill {
            -webkit-box-flex: 1 !important;
            flex: 1 1 auto !important;
        }

        .flex-lg-grow-0 {
            -webkit-box-flex: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-lg-grow-1 {
            -webkit-box-flex: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-lg-shrink-0 {
            flex-shrink: 0 !important;
        }

        .flex-lg-shrink-1 {
            flex-shrink: 1 !important;
        }

        .justify-content-lg-start {
            -webkit-box-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-lg-end {
            -webkit-box-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-lg-center {
            -webkit-box-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-lg-between {
            -webkit-box-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-lg-around {
            justify-content: space-around !important;
        }

        .align-items-lg-start {
            -webkit-box-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-lg-end {
            -webkit-box-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-lg-center {
            -webkit-box-align: center !important;
            align-items: center !important;
        }

        .align-items-lg-baseline {
            -webkit-box-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-lg-stretch {
            -webkit-box-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-lg-start {
            align-content: flex-start !important;
        }

        .align-content-lg-end {
            align-content: flex-end !important;
        }

        .align-content-lg-center {
            align-content: center !important;
        }

        .align-content-lg-between {
            align-content: space-between !important;
        }

        .align-content-lg-around {
            align-content: space-around !important;
        }

        .align-content-lg-stretch {
            align-content: stretch !important;
        }

        .align-self-lg-auto {
            align-self: auto !important;
        }

        .align-self-lg-start {
            align-self: flex-start !important;
        }

        .align-self-lg-end {
            align-self: flex-end !important;
        }

        .align-self-lg-center {
            align-self: center !important;
        }

        .align-self-lg-baseline {
            align-self: baseline !important;
        }

        .align-self-lg-stretch {
            align-self: stretch !important;
        }
    }

    @media (min-width: 1200px) {
        .flex-xl-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            flex-direction: row !important;
        }

        .flex-xl-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            flex-direction: column !important;
        }

        .flex-xl-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-xl-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-xl-wrap {
            flex-wrap: wrap !important;
        }

        .flex-xl-nowrap {
            flex-wrap: nowrap !important;
        }

        .flex-xl-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .flex-xl-fill {
            -webkit-box-flex: 1 !important;
            flex: 1 1 auto !important;
        }

        .flex-xl-grow-0 {
            -webkit-box-flex: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-xl-grow-1 {
            -webkit-box-flex: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-xl-shrink-0 {
            flex-shrink: 0 !important;
        }

        .flex-xl-shrink-1 {
            flex-shrink: 1 !important;
        }

        .justify-content-xl-start {
            -webkit-box-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-xl-end {
            -webkit-box-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-xl-center {
            -webkit-box-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-xl-between {
            -webkit-box-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-xl-around {
            justify-content: space-around !important;
        }

        .align-items-xl-start {
            -webkit-box-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-xl-end {
            -webkit-box-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-xl-center {
            -webkit-box-align: center !important;
            align-items: center !important;
        }

        .align-items-xl-baseline {
            -webkit-box-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-xl-stretch {
            -webkit-box-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-xl-start {
            align-content: flex-start !important;
        }

        .align-content-xl-end {
            align-content: flex-end !important;
        }

        .align-content-xl-center {
            align-content: center !important;
        }

        .align-content-xl-between {
            align-content: space-between !important;
        }

        .align-content-xl-around {
            align-content: space-around !important;
        }

        .align-content-xl-stretch {
            align-content: stretch !important;
        }

        .align-self-xl-auto {
            align-self: auto !important;
        }

        .align-self-xl-start {
            align-self: flex-start !important;
        }

        .align-self-xl-end {
            align-self: flex-end !important;
        }

        .align-self-xl-center {
            align-self: center !important;
        }

        .align-self-xl-baseline {
            align-self: baseline !important;
        }

        .align-self-xl-stretch {
            align-self: stretch !important;
        }
    }

    .float-left {
        float: left !important;
    }

    .float-right {
        float: right !important;
    }

    .float-none {
        float: none !important;
    }

    @media (min-width: 576px) {
        .float-sm-left {
            float: left !important;
        }

        .float-sm-right {
            float: right !important;
        }

        .float-sm-none {
            float: none !important;
        }
    }

    @media (min-width: 768px) {
        .float-md-left {
            float: left !important;
        }

        .float-md-right {
            float: right !important;
        }

        .float-md-none {
            float: none !important;
        }
    }

    @media (min-width: 992px) {
        .float-lg-left {
            float: left !important;
        }

        .float-lg-right {
            float: right !important;
        }

        .float-lg-none {
            float: none !important;
        }
    }

    @media (min-width: 1200px) {
        .float-xl-left {
            float: left !important;
        }

        .float-xl-right {
            float: right !important;
        }

        .float-xl-none {
            float: none !important;
        }
    }

    .overflow-auto {
        overflow: auto !important;
    }

    .overflow-hidden {
        overflow: hidden !important;
    }

    .position-static {
        position: static !important;
    }

    .position-relative {
        position: relative !important;
    }

    .position-absolute {
        position: absolute !important;
    }

    .position-fixed {
        position: fixed !important;
    }

    .position-sticky {
        position: -webkit-sticky !important;
        position: sticky !important;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
    }

    .fixed-bottom {
        position: fixed;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1030;
    }

    @supports ((position: -webkit-sticky) or (position: sticky)) {
        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020;
        }
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        overflow: visible;
        clip: auto;
        white-space: normal;
    }

    .shadow-sm {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
    }

    .shadow {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }

    .shadow-lg {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
    }

    .shadow-none {
        box-shadow: none !important;
    }

    .w-25 {
        width: 25% !important;
    }

    .w-50 {
        width: 50% !important;
    }

    .w-75 {
        width: 75% !important;
    }

    .w-100 {
        width: 100% !important;
    }

    .w-auto {
        width: auto !important;
    }

    .h-25 {
        height: 25% !important;
    }

    .h-50 {
        height: 50% !important;
    }

    .h-75 {
        height: 75% !important;
    }

    .h-100 {
        height: 100% !important;
    }

    .h-auto {
        height: auto !important;
    }

    .mw-100 {
        max-width: 100% !important;
    }

    .mh-100 {
        max-height: 100% !important;
    }

    .min-vw-100 {
        min-width: 100vw !important;
    }

    .min-vh-100 {
        min-height: 100vh !important;
    }

    .vw-100 {
        width: 100vw !important;
    }

    .vh-100 {
        height: 100vh !important;
    }

    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        pointer-events: auto;
        content: "";
        background-color: rgba(0, 0, 0, 0);
    }

    .m-0 {
        margin: 0 !important;
    }

    .mt-0,
    .my-0 {
        margin-top: 0 !important;
    }

    .mr-0,
    .mx-0 {
        margin-right: 0 !important;
    }

    .mb-0,
    .my-0 {
        margin-bottom: 0 !important;
    }

    .ml-0,
    .mx-0 {
        margin-left: 0 !important;
    }

    .m-1 {
        margin: 0.25rem !important;
    }

    .mt-1,
    .my-1 {
        margin-top: 0.25rem !important;
    }

    .mr-1,
    .mx-1 {
        margin-right: 0.25rem !important;
    }

    .mb-1,
    .my-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-1,
    .mx-1 {
        margin-left: 0.25rem !important;
    }

    .m-2 {
        margin: 0.5rem !important;
    }

    .mt-2,
    .my-2 {
        margin-top: 0.5rem !important;
    }

    .mr-2,
    .mx-2 {
        margin-right: 0.5rem !important;
    }

    .mb-2,
    .my-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-2,
    .mx-2 {
        margin-left: 0.5rem !important;
    }

    .m-3 {
        margin: 1rem !important;
    }

    .mt-3,
    .my-3 {
        margin-top: 1rem !important;
    }

    .mr-3,
    .mx-3 {
        margin-right: 1rem !important;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .ml-3,
    .mx-3 {
        margin-left: 1rem !important;
    }

    .m-4 {
        margin: 1.5rem !important;
    }

    .mt-4,
    .my-4 {
        margin-top: 1.5rem !important;
    }

    .mr-4,
    .mx-4 {
        margin-right: 1.5rem !important;
    }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem !important;
    }

    .ml-4,
    .mx-4 {
        margin-left: 1.5rem !important;
    }

    .m-5 {
        margin: 3rem !important;
    }

    .mt-5,
    .my-5 {
        margin-top: 3rem !important;
    }

    .mr-5,
    .mx-5 {
        margin-right: 3rem !important;
    }

    .mb-5,
    .my-5 {
        margin-bottom: 3rem !important;
    }

    .ml-5,
    .mx-5 {
        margin-left: 3rem !important;
    }

    .p-0 {
        padding: 0 !important;
    }

    .pt-0,
    .py-0 {
        padding-top: 0 !important;
    }

    .pr-0,
    .px-0 {
        padding-right: 0 !important;
    }

    .pb-0,
    .py-0 {
        padding-bottom: 0 !important;
    }

    .pl-0,
    .px-0 {
        padding-left: 0 !important;
    }

    .p-1 {
        padding: 0.25rem !important;
    }

    .pt-1,
    .py-1 {
        padding-top: 0.25rem !important;
    }

    .pr-1,
    .px-1 {
        padding-right: 0.25rem !important;
    }

    .pb-1,
    .py-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-1,
    .px-1 {
        padding-left: 0.25rem !important;
    }

    .p-2 {
        padding: 0.5rem !important;
    }

    .pt-2,
    .py-2 {
        padding-top: 0.5rem !important;
    }

    .pr-2,
    .px-2 {
        padding-right: 0.5rem !important;
    }

    .pb-2,
    .py-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-2,
    .px-2 {
        padding-left: 0.5rem !important;
    }

    .p-3 {
        padding: 1rem !important;
    }

    .pt-3,
    .py-3 {
        padding-top: 1rem !important;
    }

    .pr-3,
    .px-3 {
        padding-right: 1rem !important;
    }

    .pb-3,
    .py-3 {
        padding-bottom: 1rem !important;
    }

    .pl-3,
    .px-3 {
        padding-left: 1rem !important;
    }

    .p-4 {
        padding: 1.5rem !important;
    }

    .pt-4,
    .py-4 {
        padding-top: 1.5rem !important;
    }

    .pr-4,
    .px-4 {
        padding-right: 1.5rem !important;
    }

    .pb-4,
    .py-4 {
        padding-bottom: 1.5rem !important;
    }

    .pl-4,
    .px-4 {
        padding-left: 1.5rem !important;
    }

    .p-5 {
        padding: 3rem !important;
    }

    .pt-5,
    .py-5 {
        padding-top: 3rem !important;
    }

    .pr-5,
    .px-5 {
        padding-right: 3rem !important;
    }

    .pb-5,
    .py-5 {
        padding-bottom: 3rem !important;
    }

    .pl-5,
    .px-5 {
        padding-left: 3rem !important;
    }

    .m-n1 {
        margin: -0.25rem !important;
    }

    .mt-n1,
    .my-n1 {
        margin-top: -0.25rem !important;
    }

    .mr-n1,
    .mx-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-n1,
    .my-n1 {
        margin-bottom: -0.25rem !important;
    }

    .ml-n1,
    .mx-n1 {
        margin-left: -0.25rem !important;
    }

    .m-n2 {
        margin: -0.5rem !important;
    }

    .mt-n2,
    .my-n2 {
        margin-top: -0.5rem !important;
    }

    .mr-n2,
    .mx-n2 {
        margin-right: -0.5rem !important;
    }

    .mb-n2,
    .my-n2 {
        margin-bottom: -0.5rem !important;
    }

    .ml-n2,
    .mx-n2 {
        margin-left: -0.5rem !important;
    }

    .m-n3 {
        margin: -1rem !important;
    }

    .mt-n3,
    .my-n3 {
        margin-top: -1rem !important;
    }

    .mr-n3,
    .mx-n3 {
        margin-right: -1rem !important;
    }

    .mb-n3,
    .my-n3 {
        margin-bottom: -1rem !important;
    }

    .ml-n3,
    .mx-n3 {
        margin-left: -1rem !important;
    }

    .m-n4 {
        margin: -1.5rem !important;
    }

    .mt-n4,
    .my-n4 {
        margin-top: -1.5rem !important;
    }

    .mr-n4,
    .mx-n4 {
        margin-right: -1.5rem !important;
    }

    .mb-n4,
    .my-n4 {
        margin-bottom: -1.5rem !important;
    }

    .ml-n4,
    .mx-n4 {
        margin-left: -1.5rem !important;
    }

    .m-n5 {
        margin: -3rem !important;
    }

    .mt-n5,
    .my-n5 {
        margin-top: -3rem !important;
    }

    .mr-n5,
    .mx-n5 {
        margin-right: -3rem !important;
    }

    .mb-n5,
    .my-n5 {
        margin-bottom: -3rem !important;
    }

    .ml-n5,
    .mx-n5 {
        margin-left: -3rem !important;
    }

    .m-auto {
        margin: auto !important;
    }

    .mt-auto,
    .my-auto {
        margin-top: auto !important;
    }

    .mr-auto,
    .mx-auto {
        margin-right: auto !important;
    }

    .mb-auto,
    .my-auto {
        margin-bottom: auto !important;
    }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important;
    }

    @media (min-width: 576px) {
        .m-sm-0 {
            margin: 0 !important;
        }

        .mt-sm-0,
        .my-sm-0 {
            margin-top: 0 !important;
        }

        .mr-sm-0,
        .mx-sm-0 {
            margin-right: 0 !important;
        }

        .mb-sm-0,
        .my-sm-0 {
            margin-bottom: 0 !important;
        }

        .ml-sm-0,
        .mx-sm-0 {
            margin-left: 0 !important;
        }

        .m-sm-1 {
            margin: 0.25rem !important;
        }

        .mt-sm-1,
        .my-sm-1 {
            margin-top: 0.25rem !important;
        }

        .mr-sm-1,
        .mx-sm-1 {
            margin-right: 0.25rem !important;
        }

        .mb-sm-1,
        .my-sm-1 {
            margin-bottom: 0.25rem !important;
        }

        .ml-sm-1,
        .mx-sm-1 {
            margin-left: 0.25rem !important;
        }

        .m-sm-2 {
            margin: 0.5rem !important;
        }

        .mt-sm-2,
        .my-sm-2 {
            margin-top: 0.5rem !important;
        }

        .mr-sm-2,
        .mx-sm-2 {
            margin-right: 0.5rem !important;
        }

        .mb-sm-2,
        .my-sm-2 {
            margin-bottom: 0.5rem !important;
        }

        .ml-sm-2,
        .mx-sm-2 {
            margin-left: 0.5rem !important;
        }

        .m-sm-3 {
            margin: 1rem !important;
        }

        .mt-sm-3,
        .my-sm-3 {
            margin-top: 1rem !important;
        }

        .mr-sm-3,
        .mx-sm-3 {
            margin-right: 1rem !important;
        }

        .mb-sm-3,
        .my-sm-3 {
            margin-bottom: 1rem !important;
        }

        .ml-sm-3,
        .mx-sm-3 {
            margin-left: 1rem !important;
        }

        .m-sm-4 {
            margin: 1.5rem !important;
        }

        .mt-sm-4,
        .my-sm-4 {
            margin-top: 1.5rem !important;
        }

        .mr-sm-4,
        .mx-sm-4 {
            margin-right: 1.5rem !important;
        }

        .mb-sm-4,
        .my-sm-4 {
            margin-bottom: 1.5rem !important;
        }

        .ml-sm-4,
        .mx-sm-4 {
            margin-left: 1.5rem !important;
        }

        .m-sm-5 {
            margin: 3rem !important;
        }

        .mt-sm-5,
        .my-sm-5 {
            margin-top: 3rem !important;
        }

        .mr-sm-5,
        .mx-sm-5 {
            margin-right: 3rem !important;
        }

        .mb-sm-5,
        .my-sm-5 {
            margin-bottom: 3rem !important;
        }

        .ml-sm-5,
        .mx-sm-5 {
            margin-left: 3rem !important;
        }

        .p-sm-0 {
            padding: 0 !important;
        }

        .pt-sm-0,
        .py-sm-0 {
            padding-top: 0 !important;
        }

        .pr-sm-0,
        .px-sm-0 {
            padding-right: 0 !important;
        }

        .pb-sm-0,
        .py-sm-0 {
            padding-bottom: 0 !important;
        }

        .pl-sm-0,
        .px-sm-0 {
            padding-left: 0 !important;
        }

        .p-sm-1 {
            padding: 0.25rem !important;
        }

        .pt-sm-1,
        .py-sm-1 {
            padding-top: 0.25rem !important;
        }

        .pr-sm-1,
        .px-sm-1 {
            padding-right: 0.25rem !important;
        }

        .pb-sm-1,
        .py-sm-1 {
            padding-bottom: 0.25rem !important;
        }

        .pl-sm-1,
        .px-sm-1 {
            padding-left: 0.25rem !important;
        }

        .p-sm-2 {
            padding: 0.5rem !important;
        }

        .pt-sm-2,
        .py-sm-2 {
            padding-top: 0.5rem !important;
        }

        .pr-sm-2,
        .px-sm-2 {
            padding-right: 0.5rem !important;
        }

        .pb-sm-2,
        .py-sm-2 {
            padding-bottom: 0.5rem !important;
        }

        .pl-sm-2,
        .px-sm-2 {
            padding-left: 0.5rem !important;
        }

        .p-sm-3 {
            padding: 1rem !important;
        }

        .pt-sm-3,
        .py-sm-3 {
            padding-top: 1rem !important;
        }

        .pr-sm-3,
        .px-sm-3 {
            padding-right: 1rem !important;
        }

        .pb-sm-3,
        .py-sm-3 {
            padding-bottom: 1rem !important;
        }

        .pl-sm-3,
        .px-sm-3 {
            padding-left: 1rem !important;
        }

        .p-sm-4 {
            padding: 1.5rem !important;
        }

        .pt-sm-4,
        .py-sm-4 {
            padding-top: 1.5rem !important;
        }

        .pr-sm-4,
        .px-sm-4 {
            padding-right: 1.5rem !important;
        }

        .pb-sm-4,
        .py-sm-4 {
            padding-bottom: 1.5rem !important;
        }

        .pl-sm-4,
        .px-sm-4 {
            padding-left: 1.5rem !important;
        }

        .p-sm-5 {
            padding: 3rem !important;
        }

        .pt-sm-5,
        .py-sm-5 {
            padding-top: 3rem !important;
        }

        .pr-sm-5,
        .px-sm-5 {
            padding-right: 3rem !important;
        }

        .pb-sm-5,
        .py-sm-5 {
            padding-bottom: 3rem !important;
        }

        .pl-sm-5,
        .px-sm-5 {
            padding-left: 3rem !important;
        }

        .m-sm-n1 {
            margin: -0.25rem !important;
        }

        .mt-sm-n1,
        .my-sm-n1 {
            margin-top: -0.25rem !important;
        }

        .mr-sm-n1,
        .mx-sm-n1 {
            margin-right: -0.25rem !important;
        }

        .mb-sm-n1,
        .my-sm-n1 {
            margin-bottom: -0.25rem !important;
        }

        .ml-sm-n1,
        .mx-sm-n1 {
            margin-left: -0.25rem !important;
        }

        .m-sm-n2 {
            margin: -0.5rem !important;
        }

        .mt-sm-n2,
        .my-sm-n2 {
            margin-top: -0.5rem !important;
        }

        .mr-sm-n2,
        .mx-sm-n2 {
            margin-right: -0.5rem !important;
        }

        .mb-sm-n2,
        .my-sm-n2 {
            margin-bottom: -0.5rem !important;
        }

        .ml-sm-n2,
        .mx-sm-n2 {
            margin-left: -0.5rem !important;
        }

        .m-sm-n3 {
            margin: -1rem !important;
        }

        .mt-sm-n3,
        .my-sm-n3 {
            margin-top: -1rem !important;
        }

        .mr-sm-n3,
        .mx-sm-n3 {
            margin-right: -1rem !important;
        }

        .mb-sm-n3,
        .my-sm-n3 {
            margin-bottom: -1rem !important;
        }

        .ml-sm-n3,
        .mx-sm-n3 {
            margin-left: -1rem !important;
        }

        .m-sm-n4 {
            margin: -1.5rem !important;
        }

        .mt-sm-n4,
        .my-sm-n4 {
            margin-top: -1.5rem !important;
        }

        .mr-sm-n4,
        .mx-sm-n4 {
            margin-right: -1.5rem !important;
        }

        .mb-sm-n4,
        .my-sm-n4 {
            margin-bottom: -1.5rem !important;
        }

        .ml-sm-n4,
        .mx-sm-n4 {
            margin-left: -1.5rem !important;
        }

        .m-sm-n5 {
            margin: -3rem !important;
        }

        .mt-sm-n5,
        .my-sm-n5 {
            margin-top: -3rem !important;
        }

        .mr-sm-n5,
        .mx-sm-n5 {
            margin-right: -3rem !important;
        }

        .mb-sm-n5,
        .my-sm-n5 {
            margin-bottom: -3rem !important;
        }

        .ml-sm-n5,
        .mx-sm-n5 {
            margin-left: -3rem !important;
        }

        .m-sm-auto {
            margin: auto !important;
        }

        .mt-sm-auto,
        .my-sm-auto {
            margin-top: auto !important;
        }

        .mr-sm-auto,
        .mx-sm-auto {
            margin-right: auto !important;
        }

        .mb-sm-auto,
        .my-sm-auto {
            margin-bottom: auto !important;
        }

        .ml-sm-auto,
        .mx-sm-auto {
            margin-left: auto !important;
        }
    }

    @media (min-width: 768px) {
        .m-md-0 {
            margin: 0 !important;
        }

        .mt-md-0,
        .my-md-0 {
            margin-top: 0 !important;
        }

        .mr-md-0,
        .mx-md-0 {
            margin-right: 0 !important;
        }

        .mb-md-0,
        .my-md-0 {
            margin-bottom: 0 !important;
        }

        .ml-md-0,
        .mx-md-0 {
            margin-left: 0 !important;
        }

        .m-md-1 {
            margin: 0.25rem !important;
        }

        .mt-md-1,
        .my-md-1 {
            margin-top: 0.25rem !important;
        }

        .mr-md-1,
        .mx-md-1 {
            margin-right: 0.25rem !important;
        }

        .mb-md-1,
        .my-md-1 {
            margin-bottom: 0.25rem !important;
        }

        .ml-md-1,
        .mx-md-1 {
            margin-left: 0.25rem !important;
        }

        .m-md-2 {
            margin: 0.5rem !important;
        }

        .mt-md-2,
        .my-md-2 {
            margin-top: 0.5rem !important;
        }

        .mr-md-2,
        .mx-md-2 {
            margin-right: 0.5rem !important;
        }

        .mb-md-2,
        .my-md-2 {
            margin-bottom: 0.5rem !important;
        }

        .ml-md-2,
        .mx-md-2 {
            margin-left: 0.5rem !important;
        }

        .m-md-3 {
            margin: 1rem !important;
        }

        .mt-md-3,
        .my-md-3 {
            margin-top: 1rem !important;
        }

        .mr-md-3,
        .mx-md-3 {
            margin-right: 1rem !important;
        }

        .mb-md-3,
        .my-md-3 {
            margin-bottom: 1rem !important;
        }

        .ml-md-3,
        .mx-md-3 {
            margin-left: 1rem !important;
        }

        .m-md-4 {
            margin: 1.5rem !important;
        }

        .mt-md-4,
        .my-md-4 {
            margin-top: 1.5rem !important;
        }

        .mr-md-4,
        .mx-md-4 {
            margin-right: 1.5rem !important;
        }

        .mb-md-4,
        .my-md-4 {
            margin-bottom: 1.5rem !important;
        }

        .ml-md-4,
        .mx-md-4 {
            margin-left: 1.5rem !important;
        }

        .m-md-5 {
            margin: 3rem !important;
        }

        .mt-md-5,
        .my-md-5 {
            margin-top: 3rem !important;
        }

        .mr-md-5,
        .mx-md-5 {
            margin-right: 3rem !important;
        }

        .mb-md-5,
        .my-md-5 {
            margin-bottom: 3rem !important;
        }

        .ml-md-5,
        .mx-md-5 {
            margin-left: 3rem !important;
        }

        .p-md-0 {
            padding: 0 !important;
        }

        .pt-md-0,
        .py-md-0 {
            padding-top: 0 !important;
        }

        .pr-md-0,
        .px-md-0 {
            padding-right: 0 !important;
        }

        .pb-md-0,
        .py-md-0 {
            padding-bottom: 0 !important;
        }

        .pl-md-0,
        .px-md-0 {
            padding-left: 0 !important;
        }

        .p-md-1 {
            padding: 0.25rem !important;
        }

        .pt-md-1,
        .py-md-1 {
            padding-top: 0.25rem !important;
        }

        .pr-md-1,
        .px-md-1 {
            padding-right: 0.25rem !important;
        }

        .pb-md-1,
        .py-md-1 {
            padding-bottom: 0.25rem !important;
        }

        .pl-md-1,
        .px-md-1 {
            padding-left: 0.25rem !important;
        }

        .p-md-2 {
            padding: 0.5rem !important;
        }

        .pt-md-2,
        .py-md-2 {
            padding-top: 0.5rem !important;
        }

        .pr-md-2,
        .px-md-2 {
            padding-right: 0.5rem !important;
        }

        .pb-md-2,
        .py-md-2 {
            padding-bottom: 0.5rem !important;
        }

        .pl-md-2,
        .px-md-2 {
            padding-left: 0.5rem !important;
        }

        .p-md-3 {
            padding: 1rem !important;
        }

        .pt-md-3,
        .py-md-3 {
            padding-top: 1rem !important;
        }

        .pr-md-3,
        .px-md-3 {
            padding-right: 1rem !important;
        }

        .pb-md-3,
        .py-md-3 {
            padding-bottom: 1rem !important;
        }

        .pl-md-3,
        .px-md-3 {
            padding-left: 1rem !important;
        }

        .p-md-4 {
            padding: 1.5rem !important;
        }

        .pt-md-4,
        .py-md-4 {
            padding-top: 1.5rem !important;
        }

        .pr-md-4,
        .px-md-4 {
            padding-right: 1.5rem !important;
        }

        .pb-md-4,
        .py-md-4 {
            padding-bottom: 1.5rem !important;
        }

        .pl-md-4,
        .px-md-4 {
            padding-left: 1.5rem !important;
        }

        .p-md-5 {
            padding: 3rem !important;
        }

        .pt-md-5,
        .py-md-5 {
            padding-top: 3rem !important;
        }

        .pr-md-5,
        .px-md-5 {
            padding-right: 3rem !important;
        }

        .pb-md-5,
        .py-md-5 {
            padding-bottom: 3rem !important;
        }

        .pl-md-5,
        .px-md-5 {
            padding-left: 3rem !important;
        }

        .m-md-n1 {
            margin: -0.25rem !important;
        }

        .mt-md-n1,
        .my-md-n1 {
            margin-top: -0.25rem !important;
        }

        .mr-md-n1,
        .mx-md-n1 {
            margin-right: -0.25rem !important;
        }

        .mb-md-n1,
        .my-md-n1 {
            margin-bottom: -0.25rem !important;
        }

        .ml-md-n1,
        .mx-md-n1 {
            margin-left: -0.25rem !important;
        }

        .m-md-n2 {
            margin: -0.5rem !important;
        }

        .mt-md-n2,
        .my-md-n2 {
            margin-top: -0.5rem !important;
        }

        .mr-md-n2,
        .mx-md-n2 {
            margin-right: -0.5rem !important;
        }

        .mb-md-n2,
        .my-md-n2 {
            margin-bottom: -0.5rem !important;
        }

        .ml-md-n2,
        .mx-md-n2 {
            margin-left: -0.5rem !important;
        }

        .m-md-n3 {
            margin: -1rem !important;
        }

        .mt-md-n3,
        .my-md-n3 {
            margin-top: -1rem !important;
        }

        .mr-md-n3,
        .mx-md-n3 {
            margin-right: -1rem !important;
        }

        .mb-md-n3,
        .my-md-n3 {
            margin-bottom: -1rem !important;
        }

        .ml-md-n3,
        .mx-md-n3 {
            margin-left: -1rem !important;
        }

        .m-md-n4 {
            margin: -1.5rem !important;
        }

        .mt-md-n4,
        .my-md-n4 {
            margin-top: -1.5rem !important;
        }

        .mr-md-n4,
        .mx-md-n4 {
            margin-right: -1.5rem !important;
        }

        .mb-md-n4,
        .my-md-n4 {
            margin-bottom: -1.5rem !important;
        }

        .ml-md-n4,
        .mx-md-n4 {
            margin-left: -1.5rem !important;
        }

        .m-md-n5 {
            margin: -3rem !important;
        }

        .mt-md-n5,
        .my-md-n5 {
            margin-top: -3rem !important;
        }

        .mr-md-n5,
        .mx-md-n5 {
            margin-right: -3rem !important;
        }

        .mb-md-n5,
        .my-md-n5 {
            margin-bottom: -3rem !important;
        }

        .ml-md-n5,
        .mx-md-n5 {
            margin-left: -3rem !important;
        }

        .m-md-auto {
            margin: auto !important;
        }

        .mt-md-auto,
        .my-md-auto {
            margin-top: auto !important;
        }

        .mr-md-auto,
        .mx-md-auto {
            margin-right: auto !important;
        }

        .mb-md-auto,
        .my-md-auto {
            margin-bottom: auto !important;
        }

        .ml-md-auto,
        .mx-md-auto {
            margin-left: auto !important;
        }
    }

    @media (min-width: 992px) {
        .m-lg-0 {
            margin: 0 !important;
        }

        .mt-lg-0,
        .my-lg-0 {
            margin-top: 0 !important;
        }

        .mr-lg-0,
        .mx-lg-0 {
            margin-right: 0 !important;
        }

        .mb-lg-0,
        .my-lg-0 {
            margin-bottom: 0 !important;
        }

        .ml-lg-0,
        .mx-lg-0 {
            margin-left: 0 !important;
        }

        .m-lg-1 {
            margin: 0.25rem !important;
        }

        .mt-lg-1,
        .my-lg-1 {
            margin-top: 0.25rem !important;
        }

        .mr-lg-1,
        .mx-lg-1 {
            margin-right: 0.25rem !important;
        }

        .mb-lg-1,
        .my-lg-1 {
            margin-bottom: 0.25rem !important;
        }

        .ml-lg-1,
        .mx-lg-1 {
            margin-left: 0.25rem !important;
        }

        .m-lg-2 {
            margin: 0.5rem !important;
        }

        .mt-lg-2,
        .my-lg-2 {
            margin-top: 0.5rem !important;
        }

        .mr-lg-2,
        .mx-lg-2 {
            margin-right: 0.5rem !important;
        }

        .mb-lg-2,
        .my-lg-2 {
            margin-bottom: 0.5rem !important;
        }

        .ml-lg-2,
        .mx-lg-2 {
            margin-left: 0.5rem !important;
        }

        .m-lg-3 {
            margin: 1rem !important;
        }

        .mt-lg-3,
        .my-lg-3 {
            margin-top: 1rem !important;
        }

        .mr-lg-3,
        .mx-lg-3 {
            margin-right: 1rem !important;
        }

        .mb-lg-3,
        .my-lg-3 {
            margin-bottom: 1rem !important;
        }

        .ml-lg-3,
        .mx-lg-3 {
            margin-left: 1rem !important;
        }

        .m-lg-4 {
            margin: 1.5rem !important;
        }

        .mt-lg-4,
        .my-lg-4 {
            margin-top: 1.5rem !important;
        }

        .mr-lg-4,
        .mx-lg-4 {
            margin-right: 1.5rem !important;
        }

        .mb-lg-4,
        .my-lg-4 {
            margin-bottom: 1.5rem !important;
        }

        .ml-lg-4,
        .mx-lg-4 {
            margin-left: 1.5rem !important;
        }

        .m-lg-5 {
            margin: 3rem !important;
        }

        .mt-lg-5,
        .my-lg-5 {
            margin-top: 3rem !important;
        }

        .mr-lg-5,
        .mx-lg-5 {
            margin-right: 3rem !important;
        }

        .mb-lg-5,
        .my-lg-5 {
            margin-bottom: 3rem !important;
        }

        .ml-lg-5,
        .mx-lg-5 {
            margin-left: 3rem !important;
        }

        .p-lg-0 {
            padding: 0 !important;
        }

        .pt-lg-0,
        .py-lg-0 {
            padding-top: 0 !important;
        }

        .pr-lg-0,
        .px-lg-0 {
            padding-right: 0 !important;
        }

        .pb-lg-0,
        .py-lg-0 {
            padding-bottom: 0 !important;
        }

        .pl-lg-0,
        .px-lg-0 {
            padding-left: 0 !important;
        }

        .p-lg-1 {
            padding: 0.25rem !important;
        }

        .pt-lg-1,
        .py-lg-1 {
            padding-top: 0.25rem !important;
        }

        .pr-lg-1,
        .px-lg-1 {
            padding-right: 0.25rem !important;
        }

        .pb-lg-1,
        .py-lg-1 {
            padding-bottom: 0.25rem !important;
        }

        .pl-lg-1,
        .px-lg-1 {
            padding-left: 0.25rem !important;
        }

        .p-lg-2 {
            padding: 0.5rem !important;
        }

        .pt-lg-2,
        .py-lg-2 {
            padding-top: 0.5rem !important;
        }

        .pr-lg-2,
        .px-lg-2 {
            padding-right: 0.5rem !important;
        }

        .pb-lg-2,
        .py-lg-2 {
            padding-bottom: 0.5rem !important;
        }

        .pl-lg-2,
        .px-lg-2 {
            padding-left: 0.5rem !important;
        }

        .p-lg-3 {
            padding: 1rem !important;
        }

        .pt-lg-3,
        .py-lg-3 {
            padding-top: 1rem !important;
        }

        .pr-lg-3,
        .px-lg-3 {
            padding-right: 1rem !important;
        }

        .pb-lg-3,
        .py-lg-3 {
            padding-bottom: 1rem !important;
        }

        .pl-lg-3,
        .px-lg-3 {
            padding-left: 1rem !important;
        }

        .p-lg-4 {
            padding: 1.5rem !important;
        }

        .pt-lg-4,
        .py-lg-4 {
            padding-top: 1.5rem !important;
        }

        .pr-lg-4,
        .px-lg-4 {
            padding-right: 1.5rem !important;
        }

        .pb-lg-4,
        .py-lg-4 {
            padding-bottom: 1.5rem !important;
        }

        .pl-lg-4,
        .px-lg-4 {
            padding-left: 1.5rem !important;
        }

        .p-lg-5 {
            padding: 3rem !important;
        }

        .pt-lg-5,
        .py-lg-5 {
            padding-top: 3rem !important;
        }

        .pr-lg-5,
        .px-lg-5 {
            padding-right: 3rem !important;
        }

        .pb-lg-5,
        .py-lg-5 {
            padding-bottom: 3rem !important;
        }

        .pl-lg-5,
        .px-lg-5 {
            padding-left: 3rem !important;
        }

        .m-lg-n1 {
            margin: -0.25rem !important;
        }

        .mt-lg-n1,
        .my-lg-n1 {
            margin-top: -0.25rem !important;
        }

        .mr-lg-n1,
        .mx-lg-n1 {
            margin-right: -0.25rem !important;
        }

        .mb-lg-n1,
        .my-lg-n1 {
            margin-bottom: -0.25rem !important;
        }

        .ml-lg-n1,
        .mx-lg-n1 {
            margin-left: -0.25rem !important;
        }

        .m-lg-n2 {
            margin: -0.5rem !important;
        }

        .mt-lg-n2,
        .my-lg-n2 {
            margin-top: -0.5rem !important;
        }

        .mr-lg-n2,
        .mx-lg-n2 {
            margin-right: -0.5rem !important;
        }

        .mb-lg-n2,
        .my-lg-n2 {
            margin-bottom: -0.5rem !important;
        }

        .ml-lg-n2,
        .mx-lg-n2 {
            margin-left: -0.5rem !important;
        }

        .m-lg-n3 {
            margin: -1rem !important;
        }

        .mt-lg-n3,
        .my-lg-n3 {
            margin-top: -1rem !important;
        }

        .mr-lg-n3,
        .mx-lg-n3 {
            margin-right: -1rem !important;
        }

        .mb-lg-n3,
        .my-lg-n3 {
            margin-bottom: -1rem !important;
        }

        .ml-lg-n3,
        .mx-lg-n3 {
            margin-left: -1rem !important;
        }

        .m-lg-n4 {
            margin: -1.5rem !important;
        }

        .mt-lg-n4,
        .my-lg-n4 {
            margin-top: -1.5rem !important;
        }

        .mr-lg-n4,
        .mx-lg-n4 {
            margin-right: -1.5rem !important;
        }

        .mb-lg-n4,
        .my-lg-n4 {
            margin-bottom: -1.5rem !important;
        }

        .ml-lg-n4,
        .mx-lg-n4 {
            margin-left: -1.5rem !important;
        }

        .m-lg-n5 {
            margin: -3rem !important;
        }

        .mt-lg-n5,
        .my-lg-n5 {
            margin-top: -3rem !important;
        }

        .mr-lg-n5,
        .mx-lg-n5 {
            margin-right: -3rem !important;
        }

        .mb-lg-n5,
        .my-lg-n5 {
            margin-bottom: -3rem !important;
        }

        .ml-lg-n5,
        .mx-lg-n5 {
            margin-left: -3rem !important;
        }

        .m-lg-auto {
            margin: auto !important;
        }

        .mt-lg-auto,
        .my-lg-auto {
            margin-top: auto !important;
        }

        .mr-lg-auto,
        .mx-lg-auto {
            margin-right: auto !important;
        }

        .mb-lg-auto,
        .my-lg-auto {
            margin-bottom: auto !important;
        }

        .ml-lg-auto,
        .mx-lg-auto {
            margin-left: auto !important;
        }
    }

    @media (min-width: 1200px) {
        .m-xl-0 {
            margin: 0 !important;
        }

        .mt-xl-0,
        .my-xl-0 {
            margin-top: 0 !important;
        }

        .mr-xl-0,
        .mx-xl-0 {
            margin-right: 0 !important;
        }

        .mb-xl-0,
        .my-xl-0 {
            margin-bottom: 0 !important;
        }

        .ml-xl-0,
        .mx-xl-0 {
            margin-left: 0 !important;
        }

        .m-xl-1 {
            margin: 0.25rem !important;
        }

        .mt-xl-1,
        .my-xl-1 {
            margin-top: 0.25rem !important;
        }

        .mr-xl-1,
        .mx-xl-1 {
            margin-right: 0.25rem !important;
        }

        .mb-xl-1,
        .my-xl-1 {
            margin-bottom: 0.25rem !important;
        }

        .ml-xl-1,
        .mx-xl-1 {
            margin-left: 0.25rem !important;
        }

        .m-xl-2 {
            margin: 0.5rem !important;
        }

        .mt-xl-2,
        .my-xl-2 {
            margin-top: 0.5rem !important;
        }

        .mr-xl-2,
        .mx-xl-2 {
            margin-right: 0.5rem !important;
        }

        .mb-xl-2,
        .my-xl-2 {
            margin-bottom: 0.5rem !important;
        }

        .ml-xl-2,
        .mx-xl-2 {
            margin-left: 0.5rem !important;
        }

        .m-xl-3 {
            margin: 1rem !important;
        }

        .mt-xl-3,
        .my-xl-3 {
            margin-top: 1rem !important;
        }

        .mr-xl-3,
        .mx-xl-3 {
            margin-right: 1rem !important;
        }

        .mb-xl-3,
        .my-xl-3 {
            margin-bottom: 1rem !important;
        }

        .ml-xl-3,
        .mx-xl-3 {
            margin-left: 1rem !important;
        }

        .m-xl-4 {
            margin: 1.5rem !important;
        }

        .mt-xl-4,
        .my-xl-4 {
            margin-top: 1.5rem !important;
        }

        .mr-xl-4,
        .mx-xl-4 {
            margin-right: 1.5rem !important;
        }

        .mb-xl-4,
        .my-xl-4 {
            margin-bottom: 1.5rem !important;
        }

        .ml-xl-4,
        .mx-xl-4 {
            margin-left: 1.5rem !important;
        }

        .m-xl-5 {
            margin: 3rem !important;
        }

        .mt-xl-5,
        .my-xl-5 {
            margin-top: 3rem !important;
        }

        .mr-xl-5,
        .mx-xl-5 {
            margin-right: 3rem !important;
        }

        .mb-xl-5,
        .my-xl-5 {
            margin-bottom: 3rem !important;
        }

        .ml-xl-5,
        .mx-xl-5 {
            margin-left: 3rem !important;
        }

        .p-xl-0 {
            padding: 0 !important;
        }

        .pt-xl-0,
        .py-xl-0 {
            padding-top: 0 !important;
        }

        .pr-xl-0,
        .px-xl-0 {
            padding-right: 0 !important;
        }

        .pb-xl-0,
        .py-xl-0 {
            padding-bottom: 0 !important;
        }

        .pl-xl-0,
        .px-xl-0 {
            padding-left: 0 !important;
        }

        .p-xl-1 {
            padding: 0.25rem !important;
        }

        .pt-xl-1,
        .py-xl-1 {
            padding-top: 0.25rem !important;
        }

        .pr-xl-1,
        .px-xl-1 {
            padding-right: 0.25rem !important;
        }

        .pb-xl-1,
        .py-xl-1 {
            padding-bottom: 0.25rem !important;
        }

        .pl-xl-1,
        .px-xl-1 {
            padding-left: 0.25rem !important;
        }

        .p-xl-2 {
            padding: 0.5rem !important;
        }

        .pt-xl-2,
        .py-xl-2 {
            padding-top: 0.5rem !important;
        }

        .pr-xl-2,
        .px-xl-2 {
            padding-right: 0.5rem !important;
        }

        .pb-xl-2,
        .py-xl-2 {
            padding-bottom: 0.5rem !important;
        }

        .pl-xl-2,
        .px-xl-2 {
            padding-left: 0.5rem !important;
        }

        .p-xl-3 {
            padding: 1rem !important;
        }

        .pt-xl-3,
        .py-xl-3 {
            padding-top: 1rem !important;
        }

        .pr-xl-3,
        .px-xl-3 {
            padding-right: 1rem !important;
        }

        .pb-xl-3,
        .py-xl-3 {
            padding-bottom: 1rem !important;
        }

        .pl-xl-3,
        .px-xl-3 {
            padding-left: 1rem !important;
        }

        .p-xl-4 {
            padding: 1.5rem !important;
        }

        .pt-xl-4,
        .py-xl-4 {
            padding-top: 1.5rem !important;
        }

        .pr-xl-4,
        .px-xl-4 {
            padding-right: 1.5rem !important;
        }

        .pb-xl-4,
        .py-xl-4 {
            padding-bottom: 1.5rem !important;
        }

        .pl-xl-4,
        .px-xl-4 {
            padding-left: 1.5rem !important;
        }

        .p-xl-5 {
            padding: 3rem !important;
        }

        .pt-xl-5,
        .py-xl-5 {
            padding-top: 3rem !important;
        }

        .pr-xl-5,
        .px-xl-5 {
            padding-right: 3rem !important;
        }

        .pb-xl-5,
        .py-xl-5 {
            padding-bottom: 3rem !important;
        }

        .pl-xl-5,
        .px-xl-5 {
            padding-left: 3rem !important;
        }

        .m-xl-n1 {
            margin: -0.25rem !important;
        }

        .mt-xl-n1,
        .my-xl-n1 {
            margin-top: -0.25rem !important;
        }

        .mr-xl-n1,
        .mx-xl-n1 {
            margin-right: -0.25rem !important;
        }

        .mb-xl-n1,
        .my-xl-n1 {
            margin-bottom: -0.25rem !important;
        }

        .ml-xl-n1,
        .mx-xl-n1 {
            margin-left: -0.25rem !important;
        }

        .m-xl-n2 {
            margin: -0.5rem !important;
        }

        .mt-xl-n2,
        .my-xl-n2 {
            margin-top: -0.5rem !important;
        }

        .mr-xl-n2,
        .mx-xl-n2 {
            margin-right: -0.5rem !important;
        }

        .mb-xl-n2,
        .my-xl-n2 {
            margin-bottom: -0.5rem !important;
        }

        .ml-xl-n2,
        .mx-xl-n2 {
            margin-left: -0.5rem !important;
        }

        .m-xl-n3 {
            margin: -1rem !important;
        }

        .mt-xl-n3,
        .my-xl-n3 {
            margin-top: -1rem !important;
        }

        .mr-xl-n3,
        .mx-xl-n3 {
            margin-right: -1rem !important;
        }

        .mb-xl-n3,
        .my-xl-n3 {
            margin-bottom: -1rem !important;
        }

        .ml-xl-n3,
        .mx-xl-n3 {
            margin-left: -1rem !important;
        }

        .m-xl-n4 {
            margin: -1.5rem !important;
        }

        .mt-xl-n4,
        .my-xl-n4 {
            margin-top: -1.5rem !important;
        }

        .mr-xl-n4,
        .mx-xl-n4 {
            margin-right: -1.5rem !important;
        }

        .mb-xl-n4,
        .my-xl-n4 {
            margin-bottom: -1.5rem !important;
        }

        .ml-xl-n4,
        .mx-xl-n4 {
            margin-left: -1.5rem !important;
        }

        .m-xl-n5 {
            margin: -3rem !important;
        }

        .mt-xl-n5,
        .my-xl-n5 {
            margin-top: -3rem !important;
        }

        .mr-xl-n5,
        .mx-xl-n5 {
            margin-right: -3rem !important;
        }

        .mb-xl-n5,
        .my-xl-n5 {
            margin-bottom: -3rem !important;
        }

        .ml-xl-n5,
        .mx-xl-n5 {
            margin-left: -3rem !important;
        }

        .m-xl-auto {
            margin: auto !important;
        }

        .mt-xl-auto,
        .my-xl-auto {
            margin-top: auto !important;
        }

        .mr-xl-auto,
        .mx-xl-auto {
            margin-right: auto !important;
        }

        .mb-xl-auto,
        .my-xl-auto {
            margin-bottom: auto !important;
        }

        .ml-xl-auto,
        .mx-xl-auto {
            margin-left: auto !important;
        }
    }

    .text-monospace {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
    }

    .text-justify {
        text-align: justify !important;
    }

    .text-wrap {
        white-space: normal !important;
    }

    .text-nowrap {
        white-space: nowrap !important;
    }

    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .text-left {
        text-align: left !important;
    }

    .text-right {
        text-align: right !important;
    }

    .text-center {
        text-align: center !important;
    }

    @media (min-width: 576px) {
        .text-sm-left {
            text-align: left !important;
        }

        .text-sm-right {
            text-align: right !important;
        }

        .text-sm-center {
            text-align: center !important;
        }
    }

    @media (min-width: 768px) {
        .text-md-left {
            text-align: left !important;
        }

        .text-md-right {
            text-align: right !important;
        }

        .text-md-center {
            text-align: center !important;
        }
    }

    @media (min-width: 992px) {
        .text-lg-left {
            text-align: left !important;
        }

        .text-lg-right {
            text-align: right !important;
        }

        .text-lg-center {
            text-align: center !important;
        }
    }

    @media (min-width: 1200px) {
        .text-xl-left {
            text-align: left !important;
        }

        .text-xl-right {
            text-align: right !important;
        }

        .text-xl-center {
            text-align: center !important;
        }
    }

    .text-lowercase {
        text-transform: lowercase !important;
    }

    .text-uppercase {
        text-transform: uppercase !important;
    }

    .text-capitalize {
        text-transform: capitalize !important;
    }

    .font-weight-light {
        font-weight: 300 !important;
    }

    .font-weight-lighter {
        font-weight: lighter !important;
    }

    .font-weight-normal {
        font-weight: 400 !important;
    }

    .font-weight-bold {
        font-weight: 700 !important;
    }

    .font-weight-bolder {
        font-weight: bolder !important;
    }

    .font-italic {
        font-style: italic !important;
    }

    .text-white {
        color: #fff !important;
    }

    .text-primary {
        color: #007bff !important;
    }

    a.text-primary:hover,
    a.text-primary:focus {
        color: #0056b3 !important;
    }

    .text-secondary {
        color: #6c757d !important;
    }

    a.text-secondary:hover,
    a.text-secondary:focus {
        color: #494f54 !important;
    }

    .text-success {
        color: #28a745 !important;
    }

    a.text-success:hover,
    a.text-success:focus {
        color: #19692c !important;
    }

    .text-info {
        color: #17a2b8 !important;
    }

    a.text-info:hover,
    a.text-info:focus {
        color: #0f6674 !important;
    }

    .text-warning {
        color: #ffc107 !important;
    }

    a.text-warning:hover,
    a.text-warning:focus {
        color: #ba8b00 !important;
    }

    .text-danger {
        color: #dc3545 !important;
    }

    a.text-danger:hover,
    a.text-danger:focus {
        color: #a71d2a !important;
    }

    .text-light {
        color: #f8f9fa !important;
    }

    a.text-light:hover,
    a.text-light:focus {
        color: #cbd3da !important;
    }

    .text-dark {
        color: #343a40 !important;
    }

    a.text-dark:hover,
    a.text-dark:focus {
        color: #121416 !important;
    }

    .text-body {
        color: #212529 !important;
    }

    .text-muted {
        color: #6c757d !important;
    }

    .text-black-50 {
        color: rgba(0, 0, 0, 0.5) !important;
    }

    .text-white-50 {
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0;
    }

    .text-decoration-none {
        text-decoration: none !important;
    }

    .text-break {
        word-break: break-word !important;
        overflow-wrap: break-word !important;
    }

    .text-reset {
        color: inherit !important;
    }

    .visible {
        visibility: visible !important;
    }

    .invisible {
        visibility: hidden !important;
    }

    @media print {

        *,
        *::before,
        *::after {
            text-shadow: none !important;
            box-shadow: none !important;
        }

        a:not(.btn) {
            text-decoration: underline;
        }

        abbr[title]::after {
            content: " ("attr(title) ")";
        }

        pre {
            white-space: pre-wrap !important;
        }

        pre,
        blockquote {
            border: 1px solid #adb5bd;
            page-break-inside: avoid;
        }

        thead {
            display: table-header-group;
        }

        tr,
        img {
            page-break-inside: avoid;
        }

        p,
        h2,
        h3 {
            orphans: 3;
            widows: 3;
        }

        h2,
        h3 {
            page-break-after: avoid;
        }

        @page {
            size: a3;
        }

        body {
            min-width: 992px !important;
        }

        .container {
            min-width: 992px !important;
        }

        .navbar {
            display: none;
        }

        .badge {
            border: 1px solid #000;
        }

        .table {
            border-collapse: collapse !important;
        }

        .table td,
        .table th {
            background-color: #fff !important;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6 !important;
        }

        .table-dark {
            color: inherit;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody+tbody {
            border-color: #dee2e6;
        }

        .table .thead-dark th {
            color: inherit;
            border-color: #dee2e6;
        }
    }
    </style>
    <style>
    @charset "UTF-8";

    /*!
 * Material Design for Bootstrap 4
 * Version: MDB FREE 4.8.5
 *
 *
 * Copyright: Material Design for Bootstrap
 * https://mdbootstrap.com/
 *
 * Read the license: https://mdbootstrap.com/general/license/
 *
 *
 * Documentation: https://mdbootstrap.com/
 *
 * Getting started: https://mdbootstrap.com/docs/jquery/getting-started/download/
 *
 * Tutorials: https://mdbootstrap.com/education/bootstrap/
 *
 * Templates: https://mdbootstrap.com/templates/
 *
 * Support: https://mdbootstrap.com/support/
 *
 * Contact: office@mdbootstrap.com
 *
 * Attribution: Animate CSS, Twitter Bootstrap, Materialize CSS, Normalize CSS, Waves JS, WOW JS, Toastr, Chart.js
 *
 */
    /*** Global ***/
    .mdb-color.lighten-5 {
        background-color: #d0d6e2 !important;
    }

    .mdb-color.lighten-4 {
        background-color: #b1bace !important;
    }

    .mdb-color.lighten-3 {
        background-color: #929fba !important;
    }

    .mdb-color.lighten-2 {
        background-color: #7283a7 !important;
    }

    .mdb-color.lighten-1 {
        background-color: #59698d !important;
    }

    .mdb-color {
        background-color: #45526e !important;
    }

    .mdb-color-text {
        color: #45526e !important;
    }

    .rgba-mdb-color-slight,
    .rgba-mdb-color-slight:after {
        background-color: rgba(69, 82, 110, 0.1);
    }

    .rgba-mdb-color-light,
    .rgba-mdb-color-light:after {
        background-color: rgba(69, 82, 110, 0.3);
    }

    .rgba-mdb-color-strong,
    .rgba-mdb-color-strong:after {
        background-color: rgba(69, 82, 110, 0.7);
    }

    .mdb-color.darken-1 {
        background-color: #3b465e !important;
    }

    .mdb-color.darken-2 {
        background-color: #2e3951 !important;
    }

    .mdb-color.darken-3 {
        background-color: #1c2a48 !important;
    }

    .mdb-color.darken-4 {
        background-color: #1c2331 !important;
    }

    .red.lighten-5 {
        background-color: #ffebee !important;
    }

    .red.lighten-4 {
        background-color: #ffcdd2 !important;
    }

    .red.lighten-3 {
        background-color: #ef9a9a !important;
    }

    .red.lighten-2 {
        background-color: #e57373 !important;
    }

    .red.lighten-1 {
        background-color: #ef5350 !important;
    }

    .red {
        background-color: #f44336 !important;
    }

    .red-text {
        color: #f44336 !important;
    }

    .rgba-red-slight,
    .rgba-red-slight:after {
        background-color: rgba(244, 67, 54, 0.1);
    }

    .rgba-red-light,
    .rgba-red-light:after {
        background-color: rgba(244, 67, 54, 0.3);
    }

    .rgba-red-strong,
    .rgba-red-strong:after {
        background-color: rgba(244, 67, 54, 0.7);
    }

    .red.darken-1 {
        background-color: #e53935 !important;
    }

    .red.darken-2 {
        background-color: #d32f2f !important;
    }

    .red.darken-3 {
        background-color: #c62828 !important;
    }

    .red.darken-4 {
        background-color: #b71c1c !important;
    }

    .red.accent-1 {
        background-color: #ff8a80 !important;
    }

    .red.accent-2 {
        background-color: #ff5252 !important;
    }

    .red.accent-3 {
        background-color: #ff1744 !important;
    }

    .red.accent-4 {
        background-color: #d50000 !important;
    }

    .pink.lighten-5 {
        background-color: #fce4ec !important;
    }

    .pink.lighten-4 {
        background-color: #f8bbd0 !important;
    }

    .pink.lighten-3 {
        background-color: #f48fb1 !important;
    }

    .pink.lighten-2 {
        background-color: #f06292 !important;
    }

    .pink.lighten-1 {
        background-color: #ec407a !important;
    }

    .pink {
        background-color: #e91e63 !important;
    }

    .pink-text {
        color: #e91e63 !important;
    }

    .rgba-pink-slight,
    .rgba-pink-slight:after {
        background-color: rgba(233, 30, 99, 0.1);
    }

    .rgba-pink-light,
    .rgba-pink-light:after {
        background-color: rgba(233, 30, 99, 0.3);
    }

    .rgba-pink-strong,
    .rgba-pink-strong:after {
        background-color: rgba(233, 30, 99, 0.7);
    }

    .pink.darken-1 {
        background-color: #d81b60 !important;
    }

    .pink.darken-2 {
        background-color: #c2185b !important;
    }

    .pink.darken-3 {
        background-color: #ad1457 !important;
    }

    .pink.darken-4 {
        background-color: #880e4f !important;
    }

    .pink.accent-1 {
        background-color: #ff80ab !important;
    }

    .pink.accent-2 {
        background-color: #ff4081 !important;
    }

    .pink.accent-3 {
        background-color: #f50057 !important;
    }

    .pink.accent-4 {
        background-color: #c51162 !important;
    }

    .purple.lighten-5 {
        background-color: #f3e5f5 !important;
    }

    .purple.lighten-4 {
        background-color: #e1bee7 !important;
    }

    .purple.lighten-3 {
        background-color: #ce93d8 !important;
    }

    .purple.lighten-2 {
        background-color: #ba68c8 !important;
    }

    .purple.lighten-1 {
        background-color: #ab47bc !important;
    }

    .purple {
        background-color: #9c27b0 !important;
    }

    .purple-text {
        color: #9c27b0 !important;
    }

    .rgba-purple-slight,
    .rgba-purple-slight:after {
        background-color: rgba(156, 39, 176, 0.1);
    }

    .rgba-purple-light,
    .rgba-purple-light:after {
        background-color: rgba(156, 39, 176, 0.3);
    }

    .rgba-purple-strong,
    .rgba-purple-strong:after {
        background-color: rgba(156, 39, 176, 0.7);
    }

    .purple.darken-1 {
        background-color: #8e24aa !important;
    }

    .purple.darken-2 {
        background-color: #7b1fa2 !important;
    }

    .purple.darken-3 {
        background-color: #6a1b9a !important;
    }

    .purple.darken-4 {
        background-color: #4a148c !important;
    }

    .purple.accent-1 {
        background-color: #ea80fc !important;
    }

    .purple.accent-2 {
        background-color: #e040fb !important;
    }

    .purple.accent-3 {
        background-color: #d500f9 !important;
    }

    .purple.accent-4 {
        background-color: #aa00ff !important;
    }

    .deep-purple.lighten-5 {
        background-color: #ede7f6 !important;
    }

    .deep-purple.lighten-4 {
        background-color: #d1c4e9 !important;
    }

    .deep-purple.lighten-3 {
        background-color: #b39ddb !important;
    }

    .deep-purple.lighten-2 {
        background-color: #9575cd !important;
    }

    .deep-purple.lighten-1 {
        background-color: #7e57c2 !important;
    }

    .deep-purple {
        background-color: #673ab7 !important;
    }

    .deep-purple-text {
        color: #673ab7 !important;
    }

    .rgba-deep-purple-slight,
    .rgba-deep-purple-slight:after {
        background-color: rgba(103, 58, 183, 0.1);
    }

    .rgba-deep-purple-light,
    .rgba-deep-purple-light:after {
        background-color: rgba(103, 58, 183, 0.3);
    }

    .rgba-deep-purple-strong,
    .rgba-deep-purple-strong:after {
        background-color: rgba(103, 58, 183, 0.7);
    }

    .deep-purple.darken-1 {
        background-color: #5e35b1 !important;
    }

    .deep-purple.darken-2 {
        background-color: #512da8 !important;
    }

    .deep-purple.darken-3 {
        background-color: #4527a0 !important;
    }

    .deep-purple.darken-4 {
        background-color: #311b92 !important;
    }

    .deep-purple.accent-1 {
        background-color: #b388ff !important;
    }

    .deep-purple.accent-2 {
        background-color: #7c4dff !important;
    }

    .deep-purple.accent-3 {
        background-color: #651fff !important;
    }

    .deep-purple.accent-4 {
        background-color: #6200ea !important;
    }

    .indigo.lighten-5 {
        background-color: #e8eaf6 !important;
    }

    .indigo.lighten-4 {
        background-color: #c5cae9 !important;
    }

    .indigo.lighten-3 {
        background-color: #9fa8da !important;
    }

    .indigo.lighten-2 {
        background-color: #7986cb !important;
    }

    .indigo.lighten-1 {
        background-color: #5c6bc0 !important;
    }

    .indigo {
        background-color: #3f51b5 !important;
    }

    .indigo-text {
        color: #3f51b5 !important;
    }

    .rgba-indigo-slight,
    .rgba-indigo-slight:after {
        background-color: rgba(63, 81, 181, 0.1);
    }

    .rgba-indigo-light,
    .rgba-indigo-light:after {
        background-color: rgba(63, 81, 181, 0.3);
    }

    .rgba-indigo-strong,
    .rgba-indigo-strong:after {
        background-color: rgba(63, 81, 181, 0.7);
    }

    .indigo.darken-1 {
        background-color: #3949ab !important;
    }

    .indigo.darken-2 {
        background-color: #303f9f !important;
    }

    .indigo.darken-3 {
        background-color: #283593 !important;
    }

    .indigo.darken-4 {
        background-color: #1a237e !important;
    }

    .indigo.accent-1 {
        background-color: #8c9eff !important;
    }

    .indigo.accent-2 {
        background-color: #536dfe !important;
    }

    .indigo.accent-3 {
        background-color: #3d5afe !important;
    }

    .indigo.accent-4 {
        background-color: #304ffe !important;
    }

    .blue.lighten-5 {
        background-color: #e3f2fd !important;
    }

    .blue.lighten-4 {
        background-color: #bbdefb !important;
    }

    .blue.lighten-3 {
        background-color: #90caf9 !important;
    }

    .blue.lighten-2 {
        background-color: #64b5f6 !important;
    }

    .blue.lighten-1 {
        background-color: #42a5f5 !important;
    }

    .blue {
        background-color: #2196f3 !important;
    }

    .blue-text {
        color: #2196f3 !important;
    }

    .rgba-blue-slight,
    .rgba-blue-slight:after {
        background-color: rgba(33, 150, 243, 0.1);
    }

    .rgba-blue-light,
    .rgba-blue-light:after {
        background-color: rgba(33, 150, 243, 0.3);
    }

    .rgba-blue-strong,
    .rgba-blue-strong:after {
        background-color: rgba(33, 150, 243, 0.7);
    }

    .blue.darken-1 {
        background-color: #1e88e5 !important;
    }

    .blue.darken-2 {
        background-color: #1976d2 !important;
    }

    .blue.darken-3 {
        background-color: #1565c0 !important;
    }

    .blue.darken-4 {
        background-color: #0d47a1 !important;
    }

    .blue.accent-1 {
        background-color: #82b1ff !important;
    }

    .blue.accent-2 {
        background-color: #448aff !important;
    }

    .blue.accent-3 {
        background-color: #2979ff !important;
    }

    .blue.accent-4 {
        background-color: #2962ff !important;
    }

    .light-blue.lighten-5 {
        background-color: #e1f5fe !important;
    }

    .light-blue.lighten-4 {
        background-color: #b3e5fc !important;
    }

    .light-blue.lighten-3 {
        background-color: #81d4fa !important;
    }

    .light-blue.lighten-2 {
        background-color: #4fc3f7 !important;
    }

    .light-blue.lighten-1 {
        background-color: #29b6f6 !important;
    }

    .light-blue {
        background-color: #03a9f4 !important;
    }

    .light-blue-text {
        color: #03a9f4 !important;
    }

    .rgba-light-blue-slight,
    .rgba-light-blue-slight:after {
        background-color: rgba(3, 169, 244, 0.1);
    }

    .rgba-light-blue-light,
    .rgba-light-blue-light:after {
        background-color: rgba(3, 169, 244, 0.3);
    }

    .rgba-light-blue-strong,
    .rgba-light-blue-strong:after {
        background-color: rgba(3, 169, 244, 0.7);
    }

    .light-blue.darken-1 {
        background-color: #039be5 !important;
    }

    .light-blue.darken-2 {
        background-color: #0288d1 !important;
    }

    .light-blue.darken-3 {
        background-color: #0277bd !important;
    }

    .light-blue.darken-4 {
        background-color: #01579b !important;
    }

    .light-blue.accent-1 {
        background-color: #80d8ff !important;
    }

    .light-blue.accent-2 {
        background-color: #40c4ff !important;
    }

    .light-blue.accent-3 {
        background-color: #00b0ff !important;
    }

    .light-blue.accent-4 {
        background-color: #0091ea !important;
    }

    .cyan.lighten-5 {
        background-color: #e0f7fa !important;
    }

    .cyan.lighten-4 {
        background-color: #b2ebf2 !important;
    }

    .cyan.lighten-3 {
        background-color: #80deea !important;
    }

    .cyan.lighten-2 {
        background-color: #4dd0e1 !important;
    }

    .cyan.lighten-1 {
        background-color: #26c6da !important;
    }

    .cyan {
        background-color: #00bcd4 !important;
    }

    .cyan-text {
        color: #00bcd4 !important;
    }

    .rgba-cyan-slight,
    .rgba-cyan-slight:after {
        background-color: rgba(0, 188, 212, 0.1);
    }

    .rgba-cyan-light,
    .rgba-cyan-light:after {
        background-color: rgba(0, 188, 212, 0.3);
    }

    .rgba-cyan-strong,
    .rgba-cyan-strong:after {
        background-color: rgba(0, 188, 212, 0.7);
    }

    .cyan.darken-1 {
        background-color: #00acc1 !important;
    }

    .cyan.darken-2 {
        background-color: #0097a7 !important;
    }

    .cyan.darken-3 {
        background-color: #00838f !important;
    }

    .cyan.darken-4 {
        background-color: #006064 !important;
    }

    .cyan.accent-1 {
        background-color: #84ffff !important;
    }

    .cyan.accent-2 {
        background-color: #18ffff !important;
    }

    .cyan.accent-3 {
        background-color: #00e5ff !important;
    }

    .cyan.accent-4 {
        background-color: #00b8d4 !important;
    }

    .teal.lighten-5 {
        background-color: #e0f2f1 !important;
    }

    .teal.lighten-4 {
        background-color: #b2dfdb !important;
    }

    .teal.lighten-3 {
        background-color: #80cbc4 !important;
    }

    .teal.lighten-2 {
        background-color: #4db6ac !important;
    }

    .teal.lighten-1 {
        background-color: #26a69a !important;
    }

    .teal {
        background-color: #009688 !important;
    }

    .teal-text {
        color: #009688 !important;
    }

    .rgba-teal-slight,
    .rgba-teal-slight:after {
        background-color: rgba(0, 150, 136, 0.1);
    }

    .rgba-teal-light,
    .rgba-teal-light:after {
        background-color: rgba(0, 150, 136, 0.3);
    }

    .rgba-teal-strong,
    .rgba-teal-strong:after {
        background-color: rgba(0, 150, 136, 0.7);
    }

    .teal.darken-1 {
        background-color: #00897b !important;
    }

    .teal.darken-2 {
        background-color: #00796b !important;
    }

    .teal.darken-3 {
        background-color: #00695c !important;
    }

    .teal.darken-4 {
        background-color: #004d40 !important;
    }

    .teal.accent-1 {
        background-color: #a7ffeb !important;
    }

    .teal.accent-2 {
        background-color: #64ffda !important;
    }

    .teal.accent-3 {
        background-color: #1de9b6 !important;
    }

    .teal.accent-4 {
        background-color: #00bfa5 !important;
    }

    .green.lighten-5 {
        background-color: #e8f5e9 !important;
    }

    .green.lighten-4 {
        background-color: #c8e6c9 !important;
    }

    .green.lighten-3 {
        background-color: #a5d6a7 !important;
    }

    .green.lighten-2 {
        background-color: #81c784 !important;
    }

    .green.lighten-1 {
        background-color: #66bb6a !important;
    }

    .green {
        background-color: #4caf50 !important;
    }

    .green-text {
        color: #4caf50 !important;
    }

    .rgba-green-slight,
    .rgba-green-slight:after {
        background-color: rgba(76, 175, 80, 0.1);
    }

    .rgba-green-light,
    .rgba-green-light:after {
        background-color: rgba(76, 175, 80, 0.3);
    }

    .rgba-green-strong,
    .rgba-green-strong:after {
        background-color: rgba(76, 175, 80, 0.7);
    }

    .green.darken-1 {
        background-color: #43a047 !important;
    }

    .green.darken-2 {
        background-color: #388e3c !important;
    }

    .green.darken-3 {
        background-color: #2e7d32 !important;
    }

    .green.darken-4 {
        background-color: #1b5e20 !important;
    }

    .green.accent-1 {
        background-color: #b9f6ca !important;
    }

    .green.accent-2 {
        background-color: #69f0ae !important;
    }

    .green.accent-3 {
        background-color: #00e676 !important;
    }

    .green.accent-4 {
        background-color: #00c853 !important;
    }

    .light-green.lighten-5 {
        background-color: #f1f8e9 !important;
    }

    .light-green.lighten-4 {
        background-color: #dcedc8 !important;
    }

    .light-green.lighten-3 {
        background-color: #c5e1a5 !important;
    }

    .light-green.lighten-2 {
        background-color: #aed581 !important;
    }

    .light-green.lighten-1 {
        background-color: #9ccc65 !important;
    }

    .light-green {
        background-color: #8bc34a !important;
    }

    .light-green-text {
        color: #8bc34a !important;
    }

    .rgba-light-green-slight,
    .rgba-light-green-slight:after {
        background-color: rgba(139, 195, 74, 0.1);
    }

    .rgba-light-green-light,
    .rgba-light-green-light:after {
        background-color: rgba(139, 195, 74, 0.3);
    }

    .rgba-light-green-strong,
    .rgba-light-green-strong:after {
        background-color: rgba(139, 195, 74, 0.7);
    }

    .light-green.darken-1 {
        background-color: #7cb342 !important;
    }

    .light-green.darken-2 {
        background-color: #689f38 !important;
    }

    .light-green.darken-3 {
        background-color: #558b2f !important;
    }

    .light-green.darken-4 {
        background-color: #33691e !important;
    }

    .light-green.accent-1 {
        background-color: #ccff90 !important;
    }

    .light-green.accent-2 {
        background-color: #b2ff59 !important;
    }

    .light-green.accent-3 {
        background-color: #76ff03 !important;
    }

    .light-green.accent-4 {
        background-color: #64dd17 !important;
    }

    .lime.lighten-5 {
        background-color: #f9fbe7 !important;
    }

    .lime.lighten-4 {
        background-color: #f0f4c3 !important;
    }

    .lime.lighten-3 {
        background-color: #e6ee9c !important;
    }

    .lime.lighten-2 {
        background-color: #dce775 !important;
    }

    .lime.lighten-1 {
        background-color: #d4e157 !important;
    }

    .lime {
        background-color: #cddc39 !important;
    }

    .lime-text {
        color: #cddc39 !important;
    }

    .rgba-lime-slight,
    .rgba-lime-slight:after {
        background-color: rgba(205, 220, 57, 0.1);
    }

    .rgba-lime-light,
    .rgba-lime-light:after {
        background-color: rgba(205, 220, 57, 0.3);
    }

    .rgba-lime-strong,
    .rgba-lime-strong:after {
        background-color: rgba(205, 220, 57, 0.7);
    }

    .lime.darken-1 {
        background-color: #c0ca33 !important;
    }

    .lime.darken-2 {
        background-color: #afb42b !important;
    }

    .lime.darken-3 {
        background-color: #9e9d24 !important;
    }

    .lime.darken-4 {
        background-color: #827717 !important;
    }

    .lime.accent-1 {
        background-color: #f4ff81 !important;
    }

    .lime.accent-2 {
        background-color: #eeff41 !important;
    }

    .lime.accent-3 {
        background-color: #c6ff00 !important;
    }

    .lime.accent-4 {
        background-color: #aeea00 !important;
    }

    .yellow.lighten-5 {
        background-color: #fffde7 !important;
    }

    .yellow.lighten-4 {
        background-color: #fff9c4 !important;
    }

    .yellow.lighten-3 {
        background-color: #fff59d !important;
    }

    .yellow.lighten-2 {
        background-color: #fff176 !important;
    }

    .yellow.lighten-1 {
        background-color: #ffee58 !important;
    }

    .yellow {
        background-color: #ffeb3b !important;
    }

    .yellow-text {
        color: #ffeb3b !important;
    }

    .rgba-yellow-slight,
    .rgba-yellow-slight:after {
        background-color: rgba(255, 235, 59, 0.1);
    }

    .rgba-yellow-light,
    .rgba-yellow-light:after {
        background-color: rgba(255, 235, 59, 0.3);
    }

    .rgba-yellow-strong,
    .rgba-yellow-strong:after {
        background-color: rgba(255, 235, 59, 0.7);
    }

    .yellow.darken-1 {
        background-color: #fdd835 !important;
    }

    .yellow.darken-2 {
        background-color: #fbc02d !important;
    }

    .yellow.darken-3 {
        background-color: #f9a825 !important;
    }

    .yellow.darken-4 {
        background-color: #f57f17 !important;
    }

    .yellow.accent-1 {
        background-color: #ffff8d !important;
    }

    .yellow.accent-2 {
        background-color: #ffff00 !important;
    }

    .yellow.accent-3 {
        background-color: #ffea00 !important;
    }

    .yellow.accent-4 {
        background-color: #ffd600 !important;
    }

    .amber.lighten-5 {
        background-color: #fff8e1 !important;
    }

    .amber.lighten-4 {
        background-color: #ffecb3 !important;
    }

    .amber.lighten-3 {
        background-color: #ffe082 !important;
    }

    .amber.lighten-2 {
        background-color: #ffd54f !important;
    }

    .amber.lighten-1 {
        background-color: #ffca28 !important;
    }

    .amber {
        background-color: #ffc107 !important;
    }

    .amber-text {
        color: #ffc107 !important;
    }

    .rgba-amber-slight,
    .rgba-amber-slight:after {
        background-color: rgba(255, 193, 7, 0.1);
    }

    .rgba-amber-light,
    .rgba-amber-light:after {
        background-color: rgba(255, 193, 7, 0.3);
    }

    .rgba-amber-strong,
    .rgba-amber-strong:after {
        background-color: rgba(255, 193, 7, 0.7);
    }

    .amber.darken-1 {
        background-color: #ffb300 !important;
    }

    .amber.darken-2 {
        background-color: #ffa000 !important;
    }

    .amber.darken-3 {
        background-color: #ff8f00 !important;
    }

    .amber.darken-4 {
        background-color: #ff6f00 !important;
    }

    .amber.accent-1 {
        background-color: #ffe57f !important;
    }

    .amber.accent-2 {
        background-color: #ffd740 !important;
    }

    .amber.accent-3 {
        background-color: #ffc400 !important;
    }

    .amber.accent-4 {
        background-color: #ffab00 !important;
    }

    .orange.lighten-5 {
        background-color: #fff3e0 !important;
    }

    .orange.lighten-4 {
        background-color: #ffe0b2 !important;
    }

    .orange.lighten-3 {
        background-color: #ffcc80 !important;
    }

    .orange.lighten-2 {
        background-color: #ffb74d !important;
    }

    .orange.lighten-1 {
        background-color: #ffa726 !important;
    }

    .orange {
        background-color: #ff9800 !important;
    }

    .orange-text {
        color: #ff9800 !important;
    }

    .rgba-orange-slight,
    .rgba-orange-slight:after {
        background-color: rgba(255, 152, 0, 0.1);
    }

    .rgba-orange-light,
    .rgba-orange-light:after {
        background-color: rgba(255, 152, 0, 0.3);
    }

    .rgba-orange-strong,
    .rgba-orange-strong:after {
        background-color: rgba(255, 152, 0, 0.7);
    }

    .orange.darken-1 {
        background-color: #fb8c00 !important;
    }

    .orange.darken-2 {
        background-color: #f57c00 !important;
    }

    .orange.darken-3 {
        background-color: #ef6c00 !important;
    }

    .orange.darken-4 {
        background-color: #e65100 !important;
    }

    .orange.accent-1 {
        background-color: #ffd180 !important;
    }

    .orange.accent-2 {
        background-color: #ffab40 !important;
    }

    .orange.accent-3 {
        background-color: #ff9100 !important;
    }

    .orange.accent-4 {
        background-color: #ff6d00 !important;
    }

    .deep-orange.lighten-5 {
        background-color: #fbe9e7 !important;
    }

    .deep-orange.lighten-4 {
        background-color: #ffccbc !important;
    }

    .deep-orange.lighten-3 {
        background-color: #ffab91 !important;
    }

    .deep-orange.lighten-2 {
        background-color: #ff8a65 !important;
    }

    .deep-orange.lighten-1 {
        background-color: #ff7043 !important;
    }

    .deep-orange {
        background-color: #ff5722 !important;
    }

    .deep-orange-text {
        color: #ff5722 !important;
    }

    .rgba-deep-orange-slight,
    .rgba-deep-orange-slight:after {
        background-color: rgba(255, 87, 34, 0.1);
    }

    .rgba-deep-orange-light,
    .rgba-deep-orange-light:after {
        background-color: rgba(255, 87, 34, 0.3);
    }

    .rgba-deep-orange-strong,
    .rgba-deep-orange-strong:after {
        background-color: rgba(255, 87, 34, 0.7);
    }

    .deep-orange.darken-1 {
        background-color: #f4511e !important;
    }

    .deep-orange.darken-2 {
        background-color: #e64a19 !important;
    }

    .deep-orange.darken-3 {
        background-color: #d84315 !important;
    }

    .deep-orange.darken-4 {
        background-color: #bf360c !important;
    }

    .deep-orange.accent-1 {
        background-color: #ff9e80 !important;
    }

    .deep-orange.accent-2 {
        background-color: #ff6e40 !important;
    }

    .deep-orange.accent-3 {
        background-color: #ff3d00 !important;
    }

    .deep-orange.accent-4 {
        background-color: #dd2c00 !important;
    }

    .brown.lighten-5 {
        background-color: #efebe9 !important;
    }

    .brown.lighten-4 {
        background-color: #d7ccc8 !important;
    }

    .brown.lighten-3 {
        background-color: #bcaaa4 !important;
    }

    .brown.lighten-2 {
        background-color: #a1887f !important;
    }

    .brown.lighten-1 {
        background-color: #8d6e63 !important;
    }

    .brown {
        background-color: #795548 !important;
    }

    .brown-text {
        color: #795548 !important;
    }

    .rgba-brown-slight,
    .rgba-brown-slight:after {
        background-color: rgba(121, 85, 72, 0.1);
    }

    .rgba-brown-light,
    .rgba-brown-light:after {
        background-color: rgba(121, 85, 72, 0.3);
    }

    .rgba-brown-strong,
    .rgba-brown-strong:after {
        background-color: rgba(121, 85, 72, 0.7);
    }

    .brown.darken-1 {
        background-color: #6d4c41 !important;
    }

    .brown.darken-2 {
        background-color: #5d4037 !important;
    }

    .brown.darken-3 {
        background-color: #4e342e !important;
    }

    .brown.darken-4 {
        background-color: #3e2723 !important;
    }

    .blue-grey.lighten-5 {
        background-color: #eceff1 !important;
    }

    .blue-grey.lighten-4 {
        background-color: #cfd8dc !important;
    }

    .blue-grey.lighten-3 {
        background-color: #b0bec5 !important;
    }

    .blue-grey.lighten-2 {
        background-color: #90a4ae !important;
    }

    .blue-grey.lighten-1 {
        background-color: #78909c !important;
    }

    .blue-grey {
        background-color: #607d8b !important;
    }

    .blue-grey-text {
        color: #607d8b !important;
    }

    .rgba-blue-grey-slight,
    .rgba-blue-grey-slight:after {
        background-color: rgba(96, 125, 139, 0.1);
    }

    .rgba-blue-grey-light,
    .rgba-blue-grey-light:after {
        background-color: rgba(96, 125, 139, 0.3);
    }

    .rgba-blue-grey-strong,
    .rgba-blue-grey-strong:after {
        background-color: rgba(96, 125, 139, 0.7);
    }

    .blue-grey.darken-1 {
        background-color: #546e7a !important;
    }

    .blue-grey.darken-2 {
        background-color: #455a64 !important;
    }

    .blue-grey.darken-3 {
        background-color: #37474f !important;
    }

    .blue-grey.darken-4 {
        background-color: #263238 !important;
    }

    .grey.lighten-5 {
        background-color: #fafafa !important;
    }

    .grey.lighten-4 {
        background-color: #f5f5f5 !important;
    }

    .grey.lighten-3 {
        background-color: #eeeeee !important;
    }

    .grey.lighten-2 {
        background-color: #e0e0e0 !important;
    }

    .grey.lighten-1 {
        background-color: #bdbdbd !important;
    }

    .grey {
        background-color: #9e9e9e !important;
    }

    .grey-text {
        color: #9e9e9e !important;
    }

    .rgba-grey-slight,
    .rgba-grey-slight:after {
        background-color: rgba(158, 158, 158, 0.1);
    }

    .rgba-grey-light,
    .rgba-grey-light:after {
        background-color: rgba(158, 158, 158, 0.3);
    }

    .rgba-grey-strong,
    .rgba-grey-strong:after {
        background-color: rgba(158, 158, 158, 0.7);
    }

    .grey.darken-1 {
        background-color: #757575 !important;
    }

    .grey.darken-2 {
        background-color: #616161 !important;
    }

    .grey.darken-3 {
        background-color: #424242 !important;
    }

    .grey.darken-4 {
        background-color: #212121 !important;
    }

    .black {
        background-color: #000 !important;
    }

    .black-text {
        color: #000 !important;
    }

    .rgba-black-slight,
    .rgba-black-slight:after {
        background-color: rgba(0, 0, 0, 0.1);
    }

    .rgba-black-light,
    .rgba-black-light:after {
        background-color: rgba(0, 0, 0, 0.3);
    }

    .rgba-black-strong,
    .rgba-black-strong:after {
        background-color: rgba(0, 0, 0, 0.7);
    }

    .white {
        background-color: #fff !important;
    }

    .white-text {
        color: #fff !important;
    }

    .rgba-white-slight,
    .rgba-white-slight:after {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .rgba-white-light,
    .rgba-white-light:after {
        background-color: rgba(255, 255, 255, 0.3);
    }

    .rgba-white-strong,
    .rgba-white-strong:after {
        background-color: rgba(255, 255, 255, 0.7);
    }

    .rgba-stylish-slight {
        background-color: rgba(62, 69, 81, 0.1);
    }

    .rgba-stylish-light {
        background-color: rgba(62, 69, 81, 0.3);
    }

    .rgba-stylish-strong {
        background-color: rgba(62, 69, 81, 0.7);
    }

    .primary-color,
    ul.stepper li.active a .circle,
    ul.stepper li.completed a .circle {
        background-color: #4285f4 !important;
    }

    .primary-color-dark {
        background-color: #0d47a1 !important;
    }

    .secondary-color {
        background-color: #aa66cc !important;
    }

    .secondary-color-dark {
        background-color: #9933cc !important;
    }

    .default-color {
        background-color: #2bbbad !important;
    }

    .default-color-dark {
        background-color: #00695c !important;
    }

    .info-color {
        background-color: #33b5e5 !important;
    }

    .info-color-dark {
        background-color: #0099cc !important;
    }

    .success-color {
        background-color: #00c851 !important;
    }

    .success-color-dark {
        background-color: #007e33 !important;
    }

    .warning-color {
        background-color: #ffbb33 !important;
    }

    .warning-color-dark {
        background-color: #ff8800 !important;
    }

    .danger-color,
    ul.stepper li.warning a .circle {
        background-color: #ff3547 !important;
    }

    .danger-color-dark {
        background-color: #cc0000 !important;
    }

    .elegant-color {
        background-color: #2e2e2e !important;
    }

    .elegant-color-dark {
        background-color: #212121 !important;
    }

    .stylish-color {
        background-color: #4b515d !important;
    }

    .stylish-color-dark {
        background-color: #3e4551 !important;
    }

    .unique-color {
        background-color: #3f729b !important;
    }

    .unique-color-dark {
        background-color: #1c2331 !important;
    }

    .special-color {
        background-color: #37474f !important;
    }

    .special-color-dark {
        background-color: #263238 !important;
    }

    .purple-gradient {
        background: linear-gradient(40deg, #ff6ec4, #7873f5) !important;
    }

    .peach-gradient {
        background: linear-gradient(40deg, #FFD86F, #FC6262) !important;
    }

    .aqua-gradient {
        background: linear-gradient(40deg, #2096ff, #05ffa3) !important;
    }

    .blue-gradient {
        background: linear-gradient(40deg, #45cafc, #303f9f) !important;
    }

    .purple-gradient-rgba {
        background: linear-gradient(40deg, rgba(255, 110, 196, 0.9), rgba(120, 115, 245, 0.9)) !important;
    }

    .peach-gradient-rgba {
        background: linear-gradient(40deg, rgba(255, 216, 111, 0.9), rgba(252, 98, 98, 0.9)) !important;
    }

    .aqua-gradient-rgba {
        background: linear-gradient(40deg, rgba(32, 150, 255, 0.9), rgba(5, 255, 163, 0.9)) !important;
    }

    .blue-gradient-rgba {
        background: linear-gradient(40deg, rgba(69, 202, 252, 0.9), rgba(48, 63, 159, 0.9)) !important;
    }

    .dark-grey-text {
        color: #4f4f4f !important;
    }

    .dark-grey-text:hover,
    .dark-grey-text:focus {
        color: #4f4f4f !important;
    }

    .hoverable {
        box-shadow: none;
        -webkit-transition: all 0.55s ease-in-out;
        transition: all 0.55s ease-in-out;
    }

    .hoverable:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-transition: all 0.55s ease-in-out;
        transition: all 0.55s ease-in-out;
    }

    .z-depth-0 {
        box-shadow: none !important;
    }

    .z-depth-1 {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important;
    }

    .z-depth-1-half {
        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15) !important;
    }

    .z-depth-2 {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
    }

    .z-depth-3 {
        box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19) !important;
    }

    .z-depth-4 {
        box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.22), 0 25px 55px 0 rgba(0, 0, 0, 0.21) !important;
    }

    .z-depth-5 {
        box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22) !important;
    }

    .disabled,
    :disabled {
        pointer-events: none !important;
    }

    a {
        cursor: pointer;
        text-decoration: none;
        color: #007bff;
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    a:hover {
        text-decoration: none;
        color: #0056b3;
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    a.disabled:hover,
    a:disabled:hover {
        color: #007bff;
    }

    a:not([href]):not([tabindex]),
    a:not([href]):not([tabindex]):focus,
    a:not([href]):not([tabindex]):hover {
        color: inherit;
        text-decoration: none;
    }

    .img-fluid,
    .video-fluid {
        max-width: 100%;
        height: auto;
    }

    .flex-center {
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        height: 100%;
    }

    .flex-center p {
        margin: 0;
    }

    .flex-center ul {
        text-align: center;
    }

    .flex-center ul li {
        margin-bottom: 1rem;
    }

    .flex-center ul li:last-of-type {
        margin-bottom: 0;
    }

    .hr-light {
        border-top: 1px solid #fff;
    }

    .hr-dark {
        border-top: 1px solid #666;
    }

    .w-responsive {
        width: 75%;
    }

    @media (max-width: 740px) {
        .w-responsive {
            width: 100%;
        }
    }

    .collapsible-body {
        display: none;
    }

    .jumbotron {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        border-radius: 0.125rem;
        background-color: #fff;
    }

    .bg-primary {
        background-color: #4285f4 !important;
    }

    a.bg-primary:hover,
    a.bg-primary:focus,
    button.bg-primary:hover,
    button.bg-primary:focus {
        background-color: #1266f1 !important;
    }

    .border-primary {
        border-color: #4285f4 !important;
    }

    .bg-danger {
        background-color: #ff3547 !important;
    }

    a.bg-danger:hover,
    a.bg-danger:focus,
    button.bg-danger:hover,
    button.bg-danger:focus {
        background-color: #ff0219 !important;
    }

    .border-danger {
        border-color: #ff3547 !important;
    }

    .bg-warning {
        background-color: #ffbb33 !important;
    }

    a.bg-warning:hover,
    a.bg-warning:focus,
    button.bg-warning:hover,
    button.bg-warning:focus {
        background-color: #ffaa00 !important;
    }

    .border-warning {
        border-color: #ffbb33 !important;
    }

    .bg-success {
        background-color: #00c851 !important;
    }

    a.bg-success:hover,
    a.bg-success:focus,
    button.bg-success:hover,
    button.bg-success:focus {
        background-color: #00953c !important;
    }

    .border-success {
        border-color: #00c851 !important;
    }

    .bg-info {
        background-color: #33b5e5 !important;
    }

    a.bg-info:hover,
    a.bg-info:focus,
    button.bg-info:hover,
    button.bg-info:focus {
        background-color: #1a9bcb !important;
    }

    .border-info {
        border-color: #33b5e5 !important;
    }

    .bg-default {
        background-color: #2bbbad !important;
    }

    a.bg-default:hover,
    a.bg-default:focus,
    button.bg-default:hover,
    button.bg-default:focus {
        background-color: #219287 !important;
    }

    .border-default {
        border-color: #2bbbad !important;
    }

    .bg-secondary {
        background-color: #aa66cc !important;
    }

    a.bg-secondary:hover,
    a.bg-secondary:focus,
    button.bg-secondary:hover,
    button.bg-secondary:focus {
        background-color: #9540bf !important;
    }

    .border-secondary {
        border-color: #aa66cc !important;
    }

    .bg-dark {
        background-color: #212121 !important;
    }

    a.bg-dark:hover,
    a.bg-dark:focus,
    button.bg-dark:hover,
    button.bg-dark:focus {
        background-color: #080808 !important;
    }

    .border-dark {
        border-color: #212121 !important;
    }

    .bg-light {
        background-color: #e0e0e0 !important;
    }

    a.bg-light:hover,
    a.bg-light:focus,
    button.bg-light:hover,
    button.bg-light:focus {
        background-color: #c7c7c7 !important;
    }

    .border-light {
        border-color: #e0e0e0 !important;
    }

    .card-img-100 {
        width: 100px;
        height: 100px;
    }

    .card-img-64 {
        width: 64px;
        height: 64px;
    }

    .mml-1 {
        margin-left: -0.25rem !important;
    }

    .flex-1 {
        -webkit-box-flex: 1;
        flex: 1;
    }

    @font-face {
        font-family: "Roboto";
        src: local(Roboto Thin), url('Roboto-Thin.eot');
        src: url('Roboto-Thin.eot?#iefix') format("embedded-opentype"), url('Roboto-Thin.woff2') format("woff2"), url('Roboto-Thin.woff') format("woff"), url('Roboto-Thin.ttf') format("truetype");
        font-weight: 200;
    }

    @font-face {
        font-family: "Roboto";
        src: local(Roboto Light), url('Roboto-Light.eot');
        src: url('Roboto-Light.eot?#iefix') format("embedded-opentype"), url('Roboto-Light.woff2') format("woff2"), url('Roboto-Light.woff') format("woff"), url('Roboto-Light.ttf') format("truetype");
        font-weight: 300;
    }

    @font-face {
        font-family: "Roboto";
        src: local(Roboto Regular), url('Roboto-Regular.eot');
        src: url('Roboto-Regular.eot?#iefix') format("embedded-opentype"), url('Roboto-Regular.woff2') format("woff2"), url('Roboto-Regular.woff') format("woff"), url('Roboto-Regular.ttf') format("truetype");
        font-weight: 400;
    }

    @font-face {
        font-family: "Roboto";
        src: url('Roboto-Medium.eot');
        src: url('Roboto-Medium.eot?#iefix') format("embedded-opentype"), url('Roboto-Medium.woff2') format("woff2"), url('Roboto-Medium.woff') format("woff"), url('Roboto-Medium.ttf') format("truetype");
        font-weight: 500;
    }

    @font-face {
        font-family: "Roboto";
        src: url('Roboto-Bold.eot');
        src: url('Roboto-Bold.eot?#iefix') format("embedded-opentype"), url('Roboto-Bold.woff2') format("woff2"), url('Roboto-Bold.woff') format("woff"), url('Roboto-Bold.ttf') format("truetype");
        font-weight: 700;
    }

    body {
        font-family: "Roboto", sans-serif;
        font-weight: 300;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 300;
    }

    .h1-responsive {
        font-size: 150%;
    }

    .h2-responsive {
        font-size: 145%;
    }

    .h3-responsive {
        font-size: 135%;
    }

    .h4-responsive {
        font-size: 135%;
    }

    .h5-responsive {
        font-size: 135%;
    }

    @media (min-width: 576px) {
        .h1-responsive {
            font-size: 170%;
        }

        .h2-responsive {
            font-size: 140%;
        }

        .h3-responsive {
            font-size: 125%;
        }

        .h4-responsive {
            font-size: 125%;
        }

        .h5-responsive {
            font-size: 125%;
        }
    }

    @media (min-width: 768px) {
        .h1-responsive {
            font-size: 200%;
        }

        .h2-responsive {
            font-size: 170%;
        }

        .h3-responsive {
            font-size: 140%;
        }

        .h4-responsive {
            font-size: 125%;
        }

        .h5-responsive {
            font-size: 125%;
        }
    }

    @media (min-width: 992px) {
        .h1-responsive {
            font-size: 200%;
        }

        .h2-responsive {
            font-size: 170%;
        }

        .h3-responsive {
            font-size: 140%;
        }

        .h4-responsive {
            font-size: 125%;
        }

        .h5-responsive {
            font-size: 125%;
        }
    }

    @media (min-width: 1200px) {
        .h1-responsive {
            font-size: 250%;
        }

        .h2-responsive {
            font-size: 200%;
        }

        .h3-responsive {
            font-size: 170%;
        }

        .h4-responsive {
            font-size: 140%;
        }

        .h5-responsive {
            font-size: 125%;
        }
    }

    .divider-new {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-direction: row;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        display: -webkit-box;
        display: flex;
        margin-top: 2.8rem;
        margin-bottom: 2.8rem;
    }

    .divider-new>h1,
    .divider-new h2,
    .divider-new h3,
    .divider-new h4,
    .divider-new h5,
    .divider-new h6 {
        margin-bottom: 0;
    }

    .divider-new:before,
    .divider-new:after {
        content: "";
        height: 1.5px;
        -webkit-box-flex: 1;
        flex: 1;
        height: 2px;
        background: #c6c6c6;
    }

    .divider-new:before {
        margin: 0 0.5rem 0 0;
    }

    .divider-new:after {
        margin: 0 0 0 0.5rem;
    }

    .blockquote {
        padding: 0.5rem 1rem;
        border-left: 0.25rem solid #eceeef;
    }

    .blockquote.text-right {
        border-left: none;
        border-right: 0.25rem solid #eceeef;
    }

    .blockquote .bq-title {
        margin-bottom: 0;
        font-size: 1.5rem;
        font-weight: 400;
    }

    .blockquote p {
        padding: 1rem 0;
        font-size: 1.1rem;
    }

    .bq-primary {
        border-left: 3px solid #4285f4 !important;
    }

    .bq-primary .bq-title {
        color: #4285f4 !important;
    }

    .bq-danger {
        border-left: 3px solid #ff3547 !important;
    }

    .bq-danger .bq-title {
        color: #ff3547 !important;
    }

    .bq-warning {
        border-left: 3px solid #ffbb33 !important;
    }

    .bq-warning .bq-title {
        color: #ffbb33 !important;
    }

    .bq-success {
        border-left: 3px solid #00c851 !important;
    }

    .bq-success .bq-title {
        color: #00c851 !important;
    }

    .bq-info {
        border-left: 3px solid #33b5e5 !important;
    }

    .bq-info .bq-title {
        color: #33b5e5 !important;
    }

    .text-primary {
        color: #4285f4 !important;
    }

    a.text-primary:hover,
    a.text-primary:focus {
        color: #1266f1 !important;
    }

    .text-danger {
        color: #ff3547 !important;
    }

    a.text-danger:hover,
    a.text-danger:focus {
        color: #ff0219 !important;
    }

    .text-warning {
        color: #ffbb33 !important;
    }

    a.text-warning:hover,
    a.text-warning:focus {
        color: #ffaa00 !important;
    }

    .text-success {
        color: #00c851 !important;
    }

    a.text-success:hover,
    a.text-success:focus {
        color: #00953c !important;
    }

    .text-info {
        color: #33b5e5 !important;
    }

    a.text-info:hover,
    a.text-info:focus {
        color: #1a9bcb !important;
    }

    .text-default {
        color: #2bbbad !important;
    }

    a.text-default:hover,
    a.text-default:focus {
        color: #219287 !important;
    }

    .text-secondary {
        color: #aa66cc !important;
    }

    a.text-secondary:hover,
    a.text-secondary:focus {
        color: #9540bf !important;
    }

    .text-dark {
        color: #212121 !important;
    }

    a.text-dark:hover,
    a.text-dark:focus {
        color: #080808 !important;
    }

    .text-light {
        color: #e0e0e0 !important;
    }

    a.text-light:hover,
    a.text-light:focus {
        color: #c7c7c7 !important;
    }

    .font-small {
        font-size: 0.9rem;
    }

    .view {
        position: relative;
        overflow: hidden;
        cursor: default;
    }

    .view .mask {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        width: 100%;
        height: 100%;
        background-attachment: fixed;
    }

    .view img,
    .view video {
        position: relative;
        display: block;
    }

    .view video.video-intro {
        z-index: -100;
        top: 50%;
        left: 50%;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        -webkit-transition: 1s opacity;
        transition: 1s opacity;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
    }

    .overlay .mask {
        opacity: 0;
        -webkit-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
    }

    .overlay .mask:hover {
        opacity: 1;
    }

    .zoom img,
    .zoom video {
        -webkit-transition: all 0.2s linear;
        transition: all 0.2s linear;
    }

    .zoom:hover img,
    .zoom:hover video {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }

    .pattern-1 {
        background: url('01.png');
        background-attachment: fixed;
    }

    .pattern-2 {
        background: url('02.png');
        background-attachment: fixed;
    }

    .pattern-3 {
        background: url('03.png');
        background-attachment: fixed;
    }

    .pattern-4 {
        background: url('04.png');
        background-attachment: fixed;
    }

    .pattern-5 {
        background: url('05.png');
        background-attachment: fixed;
    }

    .pattern-6 {
        background: url('06.png');
        background-attachment: fixed;
    }

    .pattern-7 {
        background: url('07.png');
        background-attachment: fixed;
    }

    .pattern-8 {
        background: url('08.png');
        background-attachment: fixed;
    }

    .pattern-9 {
        background: url('09.png');
        background-attachment: fixed;
    }

    /*!
 * Waves v0.7.6
 * http://fian.my.id/Waves
 *
 * Copyright 2014-2018 Alfiana E. Sibuea and other contributors
 * Released under the MIT license
 * https://github.com/fians/Waves/blob/master/LICENSE */
    .waves-effect {
        position: relative;
        cursor: pointer;
        overflow: hidden;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
    }

    .waves-effect .waves-ripple {
        position: absolute;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        margin-top: -50px;
        margin-left: -50px;
        opacity: 0;
        background: rgba(0, 0, 0, 0.2);
        background: radial-gradient(rgba(0, 0, 0, 0.2) 0, rgba(0, 0, 0, 0.3) 40%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
        -webkit-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
        -webkit-transition-property: -webkit-transform, opacity;
        -webkit-transition-property: opacity, -webkit-transform;
        transition-property: opacity, -webkit-transform;
        transition-property: transform, opacity;
        transition-property: transform, opacity, -webkit-transform;
        -webkit-transform: scale(0) translate(0, 0);
        transform: scale(0) translate(0, 0);
        pointer-events: none;
    }

    .waves-effect.waves-light .waves-ripple {
        background: rgba(255, 255, 255, 0.4);
        background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
    }

    .waves-effect.waves-classic .waves-ripple {
        background: rgba(0, 0, 0, 0.2);
    }

    .waves-effect.waves-classic.waves-light .waves-ripple {
        background: rgba(255, 255, 255, 0.4);
    }

    .waves-notransition {
        -webkit-transition: none !important;
        transition: none !important;
    }

    .waves-button,
    .waves-circle {
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%);
    }

    .waves-button,
    .waves-button:hover,
    .waves-button:visited,
    .waves-button-input {
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        border: none;
        outline: none;
        color: inherit;
        background-color: rgba(0, 0, 0, 0);
        font-size: 1em;
        line-height: 1em;
        text-align: center;
        text-decoration: none;
        z-index: 1;
    }

    .waves-button {
        padding: 0.85em 1.1em;
        border-radius: 0.2em;
    }

    .waves-button-input {
        margin: 0;
        padding: 0.85em 1.1em;
    }

    .waves-input-wrapper {
        display: inline-block;
        position: relative;
        vertical-align: middle;
        border-radius: 0.2em;
    }

    .waves-input-wrapper.waves-button {
        padding: 0;
    }

    .waves-input-wrapper .waves-button-input {
        position: relative;
        top: 0;
        left: 0;
        z-index: 1;
    }

    .waves-circle {
        text-align: center;
        width: 2.5em;
        height: 2.5em;
        line-height: 2.5em;
        border-radius: 50%;
    }

    .waves-float {
        -webkit-mask-image: none;
        box-shadow: 0px 1px 1.5px 1px rgba(0, 0, 0, 0.12);
        -webkit-transition: all 300ms;
        transition: all 300ms;
    }

    .waves-float:active {
        box-shadow: 0px 8px 20px 1px rgba(0, 0, 0, 0.3);
    }

    .waves-block {
        display: block;
    }

    a.waves-effect,
    a.waves-light {
        display: inline-block;
    }

    .md-form {
        position: relative;
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .md-form input[type=text],
    .md-form input[type=password],
    .md-form input[type=email],
    .md-form input[type=url],
    .md-form input[type=time],
    .md-form input[type=date],
    .md-form input[type=datetime-local],
    .md-form input[type=tel],
    .md-form input[type=number],
    .md-form input[type=search-md],
    .md-form input[type=search],
    .md-form textarea.md-textarea {
        -webkit-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        outline: none;
        box-shadow: none;
        border: none;
        border-bottom: 1px solid #ced4da;
        border-radius: 0;
        box-sizing: content-box;
        background-color: transparent;
    }

    .md-form input[type=text]:focus:not([readonly]),
    .md-form input[type=password]:focus:not([readonly]),
    .md-form input[type=email]:focus:not([readonly]),
    .md-form input[type=url]:focus:not([readonly]),
    .md-form input[type=time]:focus:not([readonly]),
    .md-form input[type=date]:focus:not([readonly]),
    .md-form input[type=datetime-local]:focus:not([readonly]),
    .md-form input[type=tel]:focus:not([readonly]),
    .md-form input[type=number]:focus:not([readonly]),
    .md-form input[type=search-md]:focus:not([readonly]),
    .md-form input[type=search]:focus:not([readonly]),
    .md-form textarea.md-textarea:focus:not([readonly]) {
        box-shadow: 0 1px 0 0 #4285f4;
        border-bottom: 1px solid #4285f4;
    }

    .md-form input[type=text]:focus:not([readonly])+label,
    .md-form input[type=password]:focus:not([readonly])+label,
    .md-form input[type=email]:focus:not([readonly])+label,
    .md-form input[type=url]:focus:not([readonly])+label,
    .md-form input[type=time]:focus:not([readonly])+label,
    .md-form input[type=date]:focus:not([readonly])+label,
    .md-form input[type=datetime-local]:focus:not([readonly])+label,
    .md-form input[type=tel]:focus:not([readonly])+label,
    .md-form input[type=number]:focus:not([readonly])+label,
    .md-form input[type=search-md]:focus:not([readonly])+label,
    .md-form input[type=search]:focus:not([readonly])+label,
    .md-form textarea.md-textarea:focus:not([readonly])+label {
        color: #4285f4;
    }

    .md-form input[type=text]+label:after,
    .md-form input[type=password]+label:after,
    .md-form input[type=email]+label:after,
    .md-form input[type=url]+label:after,
    .md-form input[type=time]+label:after,
    .md-form input[type=date]+label:after,
    .md-form input[type=datetime-local]+label:after,
    .md-form input[type=tel]+label:after,
    .md-form input[type=number]+label:after,
    .md-form input[type=search-md]+label:after,
    .md-form input[type=search]+label:after,
    .md-form textarea.md-textarea+label:after {
        content: "";
        position: absolute;
        top: 65px;
        display: block;
        opacity: 0;
        -webkit-transition: 0.2s opacity ease-out, 0.2s color ease-out;
        transition: 0.2s opacity ease-out, 0.2s color ease-out;
    }

    .md-form input[type=text].valid,
    .md-form input[type=text]:focus.valid,
    .md-form input[type=password].valid,
    .md-form input[type=password]:focus.valid,
    .md-form input[type=email].valid,
    .md-form input[type=email]:focus.valid,
    .md-form input[type=url].valid,
    .md-form input[type=url]:focus.valid,
    .md-form input[type=time].valid,
    .md-form input[type=time]:focus.valid,
    .md-form input[type=date].valid,
    .md-form input[type=date]:focus.valid,
    .md-form input[type=datetime-local].valid,
    .md-form input[type=datetime-local]:focus.valid,
    .md-form input[type=tel].valid,
    .md-form input[type=tel]:focus.valid,
    .md-form input[type=number].valid,
    .md-form input[type=number]:focus.valid,
    .md-form input[type=search-md].valid,
    .md-form input[type=search-md]:focus.valid,
    .md-form input[type=search].valid,
    .md-form input[type=search]:focus.valid,
    .md-form textarea.md-textarea.valid,
    .md-form textarea.md-textarea:focus.valid {
        border-bottom: 1px solid #00c851;
        box-shadow: 0 1px 0 0 #00c851;
    }

    .md-form input[type=text].valid+label:after,
    .md-form input[type=text]:focus.valid+label:after,
    .md-form input[type=password].valid+label:after,
    .md-form input[type=password]:focus.valid+label:after,
    .md-form input[type=email].valid+label:after,
    .md-form input[type=email]:focus.valid+label:after,
    .md-form input[type=url].valid+label:after,
    .md-form input[type=url]:focus.valid+label:after,
    .md-form input[type=time].valid+label:after,
    .md-form input[type=time]:focus.valid+label:after,
    .md-form input[type=date].valid+label:after,
    .md-form input[type=date]:focus.valid+label:after,
    .md-form input[type=datetime-local].valid+label:after,
    .md-form input[type=datetime-local]:focus.valid+label:after,
    .md-form input[type=tel].valid+label:after,
    .md-form input[type=tel]:focus.valid+label:after,
    .md-form input[type=number].valid+label:after,
    .md-form input[type=number]:focus.valid+label:after,
    .md-form input[type=search-md].valid+label:after,
    .md-form input[type=search-md]:focus.valid+label:after,
    .md-form input[type=search].valid+label:after,
    .md-form input[type=search]:focus.valid+label:after,
    .md-form textarea.md-textarea.valid+label:after,
    .md-form textarea.md-textarea:focus.valid+label:after {
        content: attr(data-success);
        color: #00c851;
        opacity: 1;
    }

    .md-form input[type=text].invalid,
    .md-form input[type=text]:focus.invalid,
    .md-form input[type=password].invalid,
    .md-form input[type=password]:focus.invalid,
    .md-form input[type=email].invalid,
    .md-form input[type=email]:focus.invalid,
    .md-form input[type=url].invalid,
    .md-form input[type=url]:focus.invalid,
    .md-form input[type=time].invalid,
    .md-form input[type=time]:focus.invalid,
    .md-form input[type=date].invalid,
    .md-form input[type=date]:focus.invalid,
    .md-form input[type=datetime-local].invalid,
    .md-form input[type=datetime-local]:focus.invalid,
    .md-form input[type=tel].invalid,
    .md-form input[type=tel]:focus.invalid,
    .md-form input[type=number].invalid,
    .md-form input[type=number]:focus.invalid,
    .md-form input[type=search-md].invalid,
    .md-form input[type=search-md]:focus.invalid,
    .md-form input[type=search].invalid,
    .md-form input[type=search]:focus.invalid,
    .md-form textarea.md-textarea.invalid,
    .md-form textarea.md-textarea:focus.invalid {
        border-bottom: 1px solid #f44336;
        box-shadow: 0 1px 0 0 #f44336;
    }

    .md-form input[type=text].invalid+label:after,
    .md-form input[type=text]:focus.invalid+label:after,
    .md-form input[type=password].invalid+label:after,
    .md-form input[type=password]:focus.invalid+label:after,
    .md-form input[type=email].invalid+label:after,
    .md-form input[type=email]:focus.invalid+label:after,
    .md-form input[type=url].invalid+label:after,
    .md-form input[type=url]:focus.invalid+label:after,
    .md-form input[type=time].invalid+label:after,
    .md-form input[type=time]:focus.invalid+label:after,
    .md-form input[type=date].invalid+label:after,
    .md-form input[type=date]:focus.invalid+label:after,
    .md-form input[type=datetime-local].invalid+label:after,
    .md-form input[type=datetime-local]:focus.invalid+label:after,
    .md-form input[type=tel].invalid+label:after,
    .md-form input[type=tel]:focus.invalid+label:after,
    .md-form input[type=number].invalid+label:after,
    .md-form input[type=number]:focus.invalid+label:after,
    .md-form input[type=search-md].invalid+label:after,
    .md-form input[type=search-md]:focus.invalid+label:after,
    .md-form input[type=search].invalid+label:after,
    .md-form input[type=search]:focus.invalid+label:after,
    .md-form textarea.md-textarea.invalid+label:after,
    .md-form textarea.md-textarea:focus.invalid+label:after {
        content: attr(data-error);
        color: #f44336;
        opacity: 1;
    }

    .md-form input[type=text].form-control.valid+label:after,
    .md-form input[type=text].form-control:focus.valid+label:after,
    .md-form input[type=password].form-control.valid+label:after,
    .md-form input[type=password].form-control:focus.valid+label:after,
    .md-form input[type=email].form-control.valid+label:after,
    .md-form input[type=email].form-control:focus.valid+label:after,
    .md-form input[type=url].form-control.valid+label:after,
    .md-form input[type=url].form-control:focus.valid+label:after,
    .md-form input[type=time].form-control.valid+label:after,
    .md-form input[type=time].form-control:focus.valid+label:after,
    .md-form input[type=date].form-control.valid+label:after,
    .md-form input[type=date].form-control:focus.valid+label:after,
    .md-form input[type=datetime-local].form-control.valid+label:after,
    .md-form input[type=datetime-local].form-control:focus.valid+label:after,
    .md-form input[type=tel].form-control.valid+label:after,
    .md-form input[type=tel].form-control:focus.valid+label:after,
    .md-form input[type=number].form-control.valid+label:after,
    .md-form input[type=number].form-control:focus.valid+label:after,
    .md-form input[type=search-md].form-control.valid+label:after,
    .md-form input[type=search-md].form-control:focus.valid+label:after,
    .md-form input[type=search].form-control.valid+label:after,
    .md-form input[type=search].form-control:focus.valid+label:after,
    .md-form textarea.md-textarea.form-control.valid+label:after,
    .md-form textarea.md-textarea.form-control:focus.valid+label:after {
        top: 4.1rem;
    }

    .md-form input[type=text].form-control.invalid+label:after,
    .md-form input[type=text].form-control:focus.invalid+label:after,
    .md-form input[type=password].form-control.invalid+label:after,
    .md-form input[type=password].form-control:focus.invalid+label:after,
    .md-form input[type=email].form-control.invalid+label:after,
    .md-form input[type=email].form-control:focus.invalid+label:after,
    .md-form input[type=url].form-control.invalid+label:after,
    .md-form input[type=url].form-control:focus.invalid+label:after,
    .md-form input[type=time].form-control.invalid+label:after,
    .md-form input[type=time].form-control:focus.invalid+label:after,
    .md-form input[type=date].form-control.invalid+label:after,
    .md-form input[type=date].form-control:focus.invalid+label:after,
    .md-form input[type=datetime-local].form-control.invalid+label:after,
    .md-form input[type=datetime-local].form-control:focus.invalid+label:after,
    .md-form input[type=tel].form-control.invalid+label:after,
    .md-form input[type=tel].form-control:focus.invalid+label:after,
    .md-form input[type=number].form-control.invalid+label:after,
    .md-form input[type=number].form-control:focus.invalid+label:after,
    .md-form input[type=search-md].form-control.invalid+label:after,
    .md-form input[type=search-md].form-control:focus.invalid+label:after,
    .md-form input[type=search].form-control.invalid+label:after,
    .md-form input[type=search].form-control:focus.invalid+label:after,
    .md-form textarea.md-textarea.form-control.invalid+label:after,
    .md-form textarea.md-textarea.form-control:focus.invalid+label:after {
        top: 4rem;
    }

    .md-form input[type=text].form-control-lg.valid+label:after,
    .md-form input[type=text].form-control-lg:focus.valid+label:after,
    .md-form input[type=password].form-control-lg.valid+label:after,
    .md-form input[type=password].form-control-lg:focus.valid+label:after,
    .md-form input[type=email].form-control-lg.valid+label:after,
    .md-form input[type=email].form-control-lg:focus.valid+label:after,
    .md-form input[type=url].form-control-lg.valid+label:after,
    .md-form input[type=url].form-control-lg:focus.valid+label:after,
    .md-form input[type=time].form-control-lg.valid+label:after,
    .md-form input[type=time].form-control-lg:focus.valid+label:after,
    .md-form input[type=date].form-control-lg.valid+label:after,
    .md-form input[type=date].form-control-lg:focus.valid+label:after,
    .md-form input[type=datetime-local].form-control-lg.valid+label:after,
    .md-form input[type=datetime-local].form-control-lg:focus.valid+label:after,
    .md-form input[type=tel].form-control-lg.valid+label:after,
    .md-form input[type=tel].form-control-lg:focus.valid+label:after,
    .md-form input[type=number].form-control-lg.valid+label:after,
    .md-form input[type=number].form-control-lg:focus.valid+label:after,
    .md-form input[type=search-md].form-control-lg.valid+label:after,
    .md-form input[type=search-md].form-control-lg:focus.valid+label:after,
    .md-form input[type=search].form-control-lg.valid+label:after,
    .md-form input[type=search].form-control-lg:focus.valid+label:after,
    .md-form textarea.md-textarea.form-control-lg.valid+label:after,
    .md-form textarea.md-textarea.form-control-lg:focus.valid+label:after {
        top: 4.6rem;
    }

    .md-form input[type=text].form-control-lg.invalid+label:after,
    .md-form input[type=text].form-control-lg:focus.invalid+label:after,
    .md-form input[type=password].form-control-lg.invalid+label:after,
    .md-form input[type=password].form-control-lg:focus.invalid+label:after,
    .md-form input[type=email].form-control-lg.invalid+label:after,
    .md-form input[type=email].form-control-lg:focus.invalid+label:after,
    .md-form input[type=url].form-control-lg.invalid+label:after,
    .md-form input[type=url].form-control-lg:focus.invalid+label:after,
    .md-form input[type=time].form-control-lg.invalid+label:after,
    .md-form input[type=time].form-control-lg:focus.invalid+label:after,
    .md-form input[type=date].form-control-lg.invalid+label:after,
    .md-form input[type=date].form-control-lg:focus.invalid+label:after,
    .md-form input[type=datetime-local].form-control-lg.invalid+label:after,
    .md-form input[type=datetime-local].form-control-lg:focus.invalid+label:after,
    .md-form input[type=tel].form-control-lg.invalid+label:after,
    .md-form input[type=tel].form-control-lg:focus.invalid+label:after,
    .md-form input[type=number].form-control-lg.invalid+label:after,
    .md-form input[type=number].form-control-lg:focus.invalid+label:after,
    .md-form input[type=search-md].form-control-lg.invalid+label:after,
    .md-form input[type=search-md].form-control-lg:focus.invalid+label:after,
    .md-form input[type=search].form-control-lg.invalid+label:after,
    .md-form input[type=search].form-control-lg:focus.invalid+label:after,
    .md-form textarea.md-textarea.form-control-lg.invalid+label:after,
    .md-form textarea.md-textarea.form-control-lg:focus.invalid+label:after {
        top: 4.6rem;
    }

    .md-form input[type=text].form-control-sm.valid+label:after,
    .md-form input[type=text].form-control-sm:focus.valid+label:after,
    .md-form input[type=password].form-control-sm.valid+label:after,
    .md-form input[type=password].form-control-sm:focus.valid+label:after,
    .md-form input[type=email].form-control-sm.valid+label:after,
    .md-form input[type=email].form-control-sm:focus.valid+label:after,
    .md-form input[type=url].form-control-sm.valid+label:after,
    .md-form input[type=url].form-control-sm:focus.valid+label:after,
    .md-form input[type=time].form-control-sm.valid+label:after,
    .md-form input[type=time].form-control-sm:focus.valid+label:after,
    .md-form input[type=date].form-control-sm.valid+label:after,
    .md-form input[type=date].form-control-sm:focus.valid+label:after,
    .md-form input[type=datetime-local].form-control-sm.valid+label:after,
    .md-form input[type=datetime-local].form-control-sm:focus.valid+label:after,
    .md-form input[type=tel].form-control-sm.valid+label:after,
    .md-form input[type=tel].form-control-sm:focus.valid+label:after,
    .md-form input[type=number].form-control-sm.valid+label:after,
    .md-form input[type=number].form-control-sm:focus.valid+label:after,
    .md-form input[type=search-md].form-control-sm.valid+label:after,
    .md-form input[type=search-md].form-control-sm:focus.valid+label:after,
    .md-form input[type=search].form-control-sm.valid+label:after,
    .md-form input[type=search].form-control-sm:focus.valid+label:after,
    .md-form textarea.md-textarea.form-control-sm.valid+label:after,
    .md-form textarea.md-textarea.form-control-sm:focus.valid+label:after {
        top: 3.7rem;
    }

    .md-form input[type=text].form-control-sm.invalid+label:after,
    .md-form input[type=text].form-control-sm:focus.invalid+label:after,
    .md-form input[type=password].form-control-sm.invalid+label:after,
    .md-form input[type=password].form-control-sm:focus.invalid+label:after,
    .md-form input[type=email].form-control-sm.invalid+label:after,
    .md-form input[type=email].form-control-sm:focus.invalid+label:after,
    .md-form input[type=url].form-control-sm.invalid+label:after,
    .md-form input[type=url].form-control-sm:focus.invalid+label:after,
    .md-form input[type=time].form-control-sm.invalid+label:after,
    .md-form input[type=time].form-control-sm:focus.invalid+label:after,
    .md-form input[type=date].form-control-sm.invalid+label:after,
    .md-form input[type=date].form-control-sm:focus.invalid+label:after,
    .md-form input[type=datetime-local].form-control-sm.invalid+label:after,
    .md-form input[type=datetime-local].form-control-sm:focus.invalid+label:after,
    .md-form input[type=tel].form-control-sm.invalid+label:after,
    .md-form input[type=tel].form-control-sm:focus.invalid+label:after,
    .md-form input[type=number].form-control-sm.invalid+label:after,
    .md-form input[type=number].form-control-sm:focus.invalid+label:after,
    .md-form input[type=search-md].form-control-sm.invalid+label:after,
    .md-form input[type=search-md].form-control-sm:focus.invalid+label:after,
    .md-form input[type=search].form-control-sm.invalid+label:after,
    .md-form input[type=search].form-control-sm:focus.invalid+label:after,
    .md-form textarea.md-textarea.form-control-sm.invalid+label:after,
    .md-form textarea.md-textarea.form-control-sm:focus.invalid+label:after {
        top: 3.6rem;
    }

    .md-form>input[type=date]:not(.browser-default)+label {
        -webkit-transform: translateY(-27px) scale(0.8);
        transform: translateY(-27px) scale(0.8);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
    }

    .md-form>input[type]:-webkit-autofill:not(.browser-default):not([type=search])+label,
    .md-form>input[type=time]:not(.browser-default)+label {
        -webkit-transform: translateY(-25px);
        transform: translateY(-25px);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        font-size: 0.8rem;
    }

    .md-form .was-validated input[type=text]:valid+label {
        color: #00c851 !important;
    }

    .md-form .was-validated input[type=text]:invalid+label {
        color: #f44336 !important;
    }

    .md-form .was-validated .form-control:valid:focus {
        box-shadow: 0 1px 0 0 #00c851 !important;
    }

    .md-form .was-validated .form-control:valid {
        border-color: #00c851 !important;
    }

    .md-form .was-validated .form-control:invalid:focus {
        box-shadow: 0 1px 0 0 #f44336 !important;
    }

    .md-form .was-validated .form-control:invalid {
        border-color: #f44336 !important;
    }

    .md-form .form-control {
        margin: 0 0 0.5rem 0;
        border-radius: 0;
        padding: 0.6rem 0 0.4rem 0;
        background-color: transparent;
        height: auto;
    }

    .md-form .form-control:focus {
        box-shadow: none;
    }

    .md-form .form-control:disabled,
    .md-form .form-control[readonly] {
        border-bottom: 1px solid #bdbdbd;
        background-color: transparent;
    }

    .md-form .form-control.is-valid {
        border-color: #00c851;
    }

    .md-form .form-control.is-valid:focus {
        border-color: #00c851 !important;
        box-shadow: 0 1px 0 0 #00c851 !important;
    }

    .md-form .form-control.is-invalid {
        border-color: #f44336;
    }

    .md-form .form-control.is-invalid:focus {
        box-shadow: 0 1px 0 0 #f44336 !important;
        border-color: #f44336 !important;
    }

    .md-form .form-control.is-valid,
    .md-form .form-control.is-invalid {
        background-position: center right !important;
    }

    .md-form .validate {
        margin-bottom: 2.5rem;
    }

    .md-form label {
        font-size: 1rem;
    }

    .md-form label.active {
        font-size: 1rem;
    }

    .md-form .prefix {
        top: 0.25rem;
        font-size: 1.75rem;
    }

    .md-form .prefix~input,
    .md-form .prefix~textarea {
        margin-left: 2.5rem;
        width: calc(100% - 2.5rem);
    }

    .md-form .prefix~label {
        margin-left: 2.5rem;
    }

    .md-form .prefix~.form-text {
        margin-left: 2.6rem;
    }

    .md-form label {
        position: absolute;
        top: 0;
        left: 0;
        font-size: 1rem;
        -webkit-transition: color 0.2s ease-out, -webkit-transform 0.2s ease-out;
        transition: color 0.2s ease-out, -webkit-transform 0.2s ease-out;
        transition: transform 0.2s ease-out, color 0.2s ease-out;
        transition: transform 0.2s ease-out, color 0.2s ease-out, -webkit-transform 0.2s ease-out;
        -webkit-transform-origin: 0% 100%;
        transform-origin: 0% 100%;
        -webkit-transform: translateY(12px);
        transform: translateY(12px);
        cursor: text;
        color: #757575;
    }

    .md-form label.active {
        -webkit-transform: translateY(-14px) scale(0.8);
        transform: translateY(-14px) scale(0.8);
    }

    .md-form .prefix {
        position: absolute;
        -webkit-transition: color 0.2s;
        transition: color 0.2s;
    }

    .md-form .prefix.active {
        color: #4285f4;
    }

    .md-form.form-lg .validate {
        margin-bottom: 2.8rem;
    }

    .md-form.form-lg label {
        font-size: 1.25rem;
    }

    .md-form.form-lg label.active {
        font-size: 1.15rem;
    }

    .md-form.form-lg .prefix {
        top: 0.4rem;
        font-size: 2rem;
    }

    .md-form.form-lg .prefix~input,
    .md-form.form-lg .prefix~textarea {
        margin-left: 3rem;
        width: calc(100% - 3rem);
    }

    .md-form.form-lg .prefix~label {
        margin-left: 3rem;
    }

    .md-form.form-lg .prefix~.form-text {
        margin-left: 3.1rem;
    }

    .md-form.form-lg mdb-error,
    .md-form.form-lg mdb-success {
        left: 3rem !important;
    }

    .md-form.form-sm .validate {
        margin-bottom: 2.3rem;
    }

    .md-form.form-sm label {
        font-size: 0.875rem;
    }

    .md-form.form-sm label.active {
        font-size: 0.95rem;
    }

    .md-form.form-sm .prefix {
        top: 0.35rem;
        font-size: 1.5rem;
    }

    .md-form.form-sm .prefix~input,
    .md-form.form-sm .prefix~textarea {
        margin-left: 2rem;
        width: calc(100% - 2rem);
    }

    .md-form.form-sm .prefix~label {
        margin-left: 2rem;
    }

    .md-form.form-sm .prefix~.form-text {
        margin-left: 2rem;
    }

    .md-form.form-sm mdb-error,
    .md-form.form-sm mdb-success {
        left: 2rem !important;
    }

    .md-form textarea {
        /*     ~ label {
    &.active {
      color: $input-md-focus-color;
    }
  } */
    }

    .md-form textarea.md-textarea {
        overflow-y: hidden;
        padding: 1.5rem 0;
        resize: none;
    }

    .md-form textarea.md-textarea-auto {
        padding: 0;
        padding-top: 1.5rem;
    }

    .md-form.md-outline {
        position: relative;
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .md-form.md-outline input[type=text],
    .md-form.md-outline input[type=password],
    .md-form.md-outline input[type=email],
    .md-form.md-outline input[type=url],
    .md-form.md-outline input[type=time],
    .md-form.md-outline input[type=date],
    .md-form.md-outline input[type=datetime-local],
    .md-form.md-outline input[type=tel],
    .md-form.md-outline input[type=number],
    .md-form.md-outline input[type=search-md],
    .md-form.md-outline input[type=search],
    .md-form.md-outline textarea.md-textarea {
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        outline: none;
        box-shadow: none;
        border: 1px solid #dadce0;
        border-radius: 4px;
        background-color: transparent;
        box-sizing: border-box;
    }

    .md-form.md-outline input[type=text]:focus:not([readonly]),
    .md-form.md-outline input[type=password]:focus:not([readonly]),
    .md-form.md-outline input[type=email]:focus:not([readonly]),
    .md-form.md-outline input[type=url]:focus:not([readonly]),
    .md-form.md-outline input[type=time]:focus:not([readonly]),
    .md-form.md-outline input[type=date]:focus:not([readonly]),
    .md-form.md-outline input[type=datetime-local]:focus:not([readonly]),
    .md-form.md-outline input[type=tel]:focus:not([readonly]),
    .md-form.md-outline input[type=number]:focus:not([readonly]),
    .md-form.md-outline input[type=search-md]:focus:not([readonly]),
    .md-form.md-outline input[type=search]:focus:not([readonly]),
    .md-form.md-outline textarea.md-textarea:focus:not([readonly]) {
        border-color: #4285f4;
        box-shadow: inset 0px 0px 0px 1px #4285f4;
    }

    .md-form.md-outline input[type=text]:focus:not([readonly])+label,
    .md-form.md-outline input[type=password]:focus:not([readonly])+label,
    .md-form.md-outline input[type=email]:focus:not([readonly])+label,
    .md-form.md-outline input[type=url]:focus:not([readonly])+label,
    .md-form.md-outline input[type=time]:focus:not([readonly])+label,
    .md-form.md-outline input[type=date]:focus:not([readonly])+label,
    .md-form.md-outline input[type=datetime-local]:focus:not([readonly])+label,
    .md-form.md-outline input[type=tel]:focus:not([readonly])+label,
    .md-form.md-outline input[type=number]:focus:not([readonly])+label,
    .md-form.md-outline input[type=search-md]:focus:not([readonly])+label,
    .md-form.md-outline input[type=search]:focus:not([readonly])+label,
    .md-form.md-outline textarea.md-textarea:focus:not([readonly])+label {
        color: #4285f4;
    }

    .md-form.md-outline input[type=text].valid,
    .md-form.md-outline input[type=text]:focus.valid,
    .md-form.md-outline input[type=password].valid,
    .md-form.md-outline input[type=password]:focus.valid,
    .md-form.md-outline input[type=email].valid,
    .md-form.md-outline input[type=email]:focus.valid,
    .md-form.md-outline input[type=url].valid,
    .md-form.md-outline input[type=url]:focus.valid,
    .md-form.md-outline input[type=time].valid,
    .md-form.md-outline input[type=time]:focus.valid,
    .md-form.md-outline input[type=date].valid,
    .md-form.md-outline input[type=date]:focus.valid,
    .md-form.md-outline input[type=datetime-local].valid,
    .md-form.md-outline input[type=datetime-local]:focus.valid,
    .md-form.md-outline input[type=tel].valid,
    .md-form.md-outline input[type=tel]:focus.valid,
    .md-form.md-outline input[type=number].valid,
    .md-form.md-outline input[type=number]:focus.valid,
    .md-form.md-outline input[type=search-md].valid,
    .md-form.md-outline input[type=search-md]:focus.valid,
    .md-form.md-outline input[type=search].valid,
    .md-form.md-outline input[type=search]:focus.valid,
    .md-form.md-outline textarea.md-textarea.valid,
    .md-form.md-outline textarea.md-textarea:focus.valid {
        border-color: #00c851;
        box-shadow: inset 0px 0px 0px 1px #00c851;
    }

    .md-form.md-outline input[type=text]:focus:not([readonly]).valid+label,
    .md-form.md-outline input[type=text].valid+label:after,
    .md-form.md-outline input[type=text]:focus.valid+label:after,
    .md-form.md-outline input[type=password]:focus:not([readonly]).valid+label,
    .md-form.md-outline input[type=password].valid+label:after,
    .md-form.md-outline input[type=password]:focus.valid+label:after,
    .md-form.md-outline input[type=email]:focus:not([readonly]).valid+label,
    .md-form.md-outline input[type=email].valid+label:after,
    .md-form.md-outline input[type=email]:focus.valid+label:after,
    .md-form.md-outline input[type=url]:focus:not([readonly]).valid+label,
    .md-form.md-outline input[type=url].valid+label:after,
    .md-form.md-outline input[type=url]:focus.valid+label:after,
    .md-form.md-outline input[type=time]:focus:not([readonly]).valid+label,
    .md-form.md-outline input[type=time].valid+label:after,
    .md-form.md-outline input[type=time]:focus.valid+label:after,
    .md-form.md-outline input[type=date]:focus:not([readonly]).valid+label,
    .md-form.md-outline input[type=date].valid+label:after,
    .md-form.md-outline input[type=date]:focus.valid+label:after,
    .md-form.md-outline input[type=datetime-local]:focus:not([readonly]).valid+label,
    .md-form.md-outline input[type=datetime-local].valid+label:after,
    .md-form.md-outline input[type=datetime-local]:focus.valid+label:after,
    .md-form.md-outline input[type=tel]:focus:not([readonly]).valid+label,
    .md-form.md-outline input[type=tel].valid+label:after,
    .md-form.md-outline input[type=tel]:focus.valid+label:after,
    .md-form.md-outline input[type=number]:focus:not([readonly]).valid+label,
    .md-form.md-outline input[type=number].valid+label:after,
    .md-form.md-outline input[type=number]:focus.valid+label:after,
    .md-form.md-outline input[type=search-md]:focus:not([readonly]).valid+label,
    .md-form.md-outline input[type=search-md].valid+label:after,
    .md-form.md-outline input[type=search-md]:focus.valid+label:after,
    .md-form.md-outline input[type=search]:focus:not([readonly]).valid+label,
    .md-form.md-outline input[type=search].valid+label:after,
    .md-form.md-outline input[type=search]:focus.valid+label:after,
    .md-form.md-outline textarea.md-textarea:focus:not([readonly]).valid+label,
    .md-form.md-outline textarea.md-textarea.valid+label:after,
    .md-form.md-outline textarea.md-textarea:focus.valid+label:after {
        content: attr(data-success);
        color: #00c851;
        opacity: 1;
    }

    .md-form.md-outline input[type=text].invalid,
    .md-form.md-outline input[type=text]:focus.invalid,
    .md-form.md-outline input[type=password].invalid,
    .md-form.md-outline input[type=password]:focus.invalid,
    .md-form.md-outline input[type=email].invalid,
    .md-form.md-outline input[type=email]:focus.invalid,
    .md-form.md-outline input[type=url].invalid,
    .md-form.md-outline input[type=url]:focus.invalid,
    .md-form.md-outline input[type=time].invalid,
    .md-form.md-outline input[type=time]:focus.invalid,
    .md-form.md-outline input[type=date].invalid,
    .md-form.md-outline input[type=date]:focus.invalid,
    .md-form.md-outline input[type=datetime-local].invalid,
    .md-form.md-outline input[type=datetime-local]:focus.invalid,
    .md-form.md-outline input[type=tel].invalid,
    .md-form.md-outline input[type=tel]:focus.invalid,
    .md-form.md-outline input[type=number].invalid,
    .md-form.md-outline input[type=number]:focus.invalid,
    .md-form.md-outline input[type=search-md].invalid,
    .md-form.md-outline input[type=search-md]:focus.invalid,
    .md-form.md-outline input[type=search].invalid,
    .md-form.md-outline input[type=search]:focus.invalid,
    .md-form.md-outline textarea.md-textarea.invalid,
    .md-form.md-outline textarea.md-textarea:focus.invalid {
        border-color: #f44336;
        box-shadow: inset 0px 0px 0px 1px #f44336;
    }

    .md-form.md-outline input[type=text]:focus:not([readonly]).invalid+label,
    .md-form.md-outline input[type=text].invalid+label:after,
    .md-form.md-outline input[type=text]:focus.invalid+label:after,
    .md-form.md-outline input[type=password]:focus:not([readonly]).invalid+label,
    .md-form.md-outline input[type=password].invalid+label:after,
    .md-form.md-outline input[type=password]:focus.invalid+label:after,
    .md-form.md-outline input[type=email]:focus:not([readonly]).invalid+label,
    .md-form.md-outline input[type=email].invalid+label:after,
    .md-form.md-outline input[type=email]:focus.invalid+label:after,
    .md-form.md-outline input[type=url]:focus:not([readonly]).invalid+label,
    .md-form.md-outline input[type=url].invalid+label:after,
    .md-form.md-outline input[type=url]:focus.invalid+label:after,
    .md-form.md-outline input[type=time]:focus:not([readonly]).invalid+label,
    .md-form.md-outline input[type=time].invalid+label:after,
    .md-form.md-outline input[type=time]:focus.invalid+label:after,
    .md-form.md-outline input[type=date]:focus:not([readonly]).invalid+label,
    .md-form.md-outline input[type=date].invalid+label:after,
    .md-form.md-outline input[type=date]:focus.invalid+label:after,
    .md-form.md-outline input[type=datetime-local]:focus:not([readonly]).invalid+label,
    .md-form.md-outline input[type=datetime-local].invalid+label:after,
    .md-form.md-outline input[type=datetime-local]:focus.invalid+label:after,
    .md-form.md-outline input[type=tel]:focus:not([readonly]).invalid+label,
    .md-form.md-outline input[type=tel].invalid+label:after,
    .md-form.md-outline input[type=tel]:focus.invalid+label:after,
    .md-form.md-outline input[type=number]:focus:not([readonly]).invalid+label,
    .md-form.md-outline input[type=number].invalid+label:after,
    .md-form.md-outline input[type=number]:focus.invalid+label:after,
    .md-form.md-outline input[type=search-md]:focus:not([readonly]).invalid+label,
    .md-form.md-outline input[type=search-md].invalid+label:after,
    .md-form.md-outline input[type=search-md]:focus.invalid+label:after,
    .md-form.md-outline input[type=search]:focus:not([readonly]).invalid+label,
    .md-form.md-outline input[type=search].invalid+label:after,
    .md-form.md-outline input[type=search]:focus.invalid+label:after,
    .md-form.md-outline textarea.md-textarea:focus:not([readonly]).invalid+label,
    .md-form.md-outline textarea.md-textarea.invalid+label:after,
    .md-form.md-outline textarea.md-textarea:focus.invalid+label:after {
        content: attr(data-error);
        color: #f44336;
        opacity: 1;
    }

    .md-form.md-outline input[type=text].form-control.valid+label:after,
    .md-form.md-outline input[type=text].form-control:focus.valid+label:after,
    .md-form.md-outline input[type=password].form-control.valid+label:after,
    .md-form.md-outline input[type=password].form-control:focus.valid+label:after,
    .md-form.md-outline input[type=email].form-control.valid+label:after,
    .md-form.md-outline input[type=email].form-control:focus.valid+label:after,
    .md-form.md-outline input[type=url].form-control.valid+label:after,
    .md-form.md-outline input[type=url].form-control:focus.valid+label:after,
    .md-form.md-outline input[type=time].form-control.valid+label:after,
    .md-form.md-outline input[type=time].form-control:focus.valid+label:after,
    .md-form.md-outline input[type=date].form-control.valid+label:after,
    .md-form.md-outline input[type=date].form-control:focus.valid+label:after,
    .md-form.md-outline input[type=datetime-local].form-control.valid+label:after,
    .md-form.md-outline input[type=datetime-local].form-control:focus.valid+label:after,
    .md-form.md-outline input[type=tel].form-control.valid+label:after,
    .md-form.md-outline input[type=tel].form-control:focus.valid+label:after,
    .md-form.md-outline input[type=number].form-control.valid+label:after,
    .md-form.md-outline input[type=number].form-control:focus.valid+label:after,
    .md-form.md-outline input[type=search-md].form-control.valid+label:after,
    .md-form.md-outline input[type=search-md].form-control:focus.valid+label:after,
    .md-form.md-outline input[type=search].form-control.valid+label:after,
    .md-form.md-outline input[type=search].form-control:focus.valid+label:after,
    .md-form.md-outline textarea.md-textarea.form-control.valid+label:after,
    .md-form.md-outline textarea.md-textarea.form-control:focus.valid+label:after {
        top: 2.75rem;
        left: 0;
        position: absolute;
    }

    .md-form.md-outline input[type=text].form-control.invalid+label:after,
    .md-form.md-outline input[type=text].form-control:focus.invalid+label:after,
    .md-form.md-outline input[type=password].form-control.invalid+label:after,
    .md-form.md-outline input[type=password].form-control:focus.invalid+label:after,
    .md-form.md-outline input[type=email].form-control.invalid+label:after,
    .md-form.md-outline input[type=email].form-control:focus.invalid+label:after,
    .md-form.md-outline input[type=url].form-control.invalid+label:after,
    .md-form.md-outline input[type=url].form-control:focus.invalid+label:after,
    .md-form.md-outline input[type=time].form-control.invalid+label:after,
    .md-form.md-outline input[type=time].form-control:focus.invalid+label:after,
    .md-form.md-outline input[type=date].form-control.invalid+label:after,
    .md-form.md-outline input[type=date].form-control:focus.invalid+label:after,
    .md-form.md-outline input[type=datetime-local].form-control.invalid+label:after,
    .md-form.md-outline input[type=datetime-local].form-control:focus.invalid+label:after,
    .md-form.md-outline input[type=tel].form-control.invalid+label:after,
    .md-form.md-outline input[type=tel].form-control:focus.invalid+label:after,
    .md-form.md-outline input[type=number].form-control.invalid+label:after,
    .md-form.md-outline input[type=number].form-control:focus.invalid+label:after,
    .md-form.md-outline input[type=search-md].form-control.invalid+label:after,
    .md-form.md-outline input[type=search-md].form-control:focus.invalid+label:after,
    .md-form.md-outline input[type=search].form-control.invalid+label:after,
    .md-form.md-outline input[type=search].form-control:focus.invalid+label:after,
    .md-form.md-outline textarea.md-textarea.form-control.invalid+label:after,
    .md-form.md-outline textarea.md-textarea.form-control:focus.invalid+label:after {
        top: 2.75rem;
        left: 0;
        position: absolute;
    }

    .md-form.md-outline>input[type]:-webkit-autofill:not(.browser-default):not([type=search])+label,
    .md-form.md-outline>input[type=time]:not(.browser-default)+label {
        -webkit-transform: translateY(-9px) scale(0.8);
        transform: translateY(-9px) scale(0.8);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        background: #fff;
        font-weight: 500;
        padding-right: 5px;
        padding-left: 5px;
        font-size: 11px;
        left: 8px;
    }

    .md-form.md-outline>input[type]:-webkit-autofill:not(.browser-default):not([type=search])+label.active,
    .md-form.md-outline>input[type=time]:not(.browser-default)+label.active {
        -webkit-transform: translateY(-9px) scale(0.8);
        transform: translateY(-9px) scale(0.8);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
    }

    @-webkit-keyframes autofill {
        to {
            color: #495057;
            background: transparent;
        }
    }

    @keyframes autofill {
        to {
            color: #495057;
            background: transparent;
        }
    }

    .md-form.md-outline input:-webkit-autofill {
        -webkit-animation-name: autofill;
        animation-name: autofill;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .md-form.md-outline .form-control {
        padding: 0.375rem 0.75rem;
    }

    .md-form.md-outline label {
        font-size: 1rem;
        position: absolute;
        top: 0;
        left: 0;
        padding-left: 10px;
        -webkit-transition: color 0.2s ease-out, -webkit-transform 0.2s ease-out;
        transition: color 0.2s ease-out, -webkit-transform 0.2s ease-out;
        transition: transform 0.2s ease-out, color 0.2s ease-out;
        transition: transform 0.2s ease-out, color 0.2s ease-out, -webkit-transform 0.2s ease-out;
        -webkit-transform-origin: 0% 100%;
        transform-origin: 0% 100%;
        -webkit-transform: translateY(9px);
        transform: translateY(9px);
        cursor: text;
        color: #757575;
    }

    .md-form.md-outline label.active {
        -webkit-transform: translateY(-13px) scale(0.8);
        transform: translateY(-13px) scale(0.8);
        background: #fff;
        font-weight: 500;
        padding-right: 5px;
        padding-left: 5px;
        left: 8px;
    }

    .md-form.md-outline.form-lg .form-control.form-control-lg {
        padding: 0.5rem 0.725rem;
    }

    .md-form.md-outline.form-lg label {
        font-size: 1.25rem;
        -webkit-transform: translateY(10px);
        transform: translateY(10px);
    }

    .md-form.md-outline.form-lg label.active {
        font-size: 1.1rem;
        -webkit-transform: translateY(-14px) scale(0.8);
        transform: translateY(-14px) scale(0.8);
    }

    .md-form.md-outline.form-lg .prefix {
        top: 0.65rem;
        font-size: 25px;
    }

    .md-form.md-outline.form-lg .prefix~input,
    .md-form.md-outline.form-lg .prefix~textarea {
        margin-left: 2.2rem;
        width: calc(100% - 2.2rem);
    }

    .md-form.md-outline.form-lg .prefix~label {
        margin-left: 2.2rem;
    }

    .md-form.md-outline.form-lg .prefix~.form-text {
        margin-left: 2.3rem;
    }

    .md-form.md-outline.form-sm .form-control.form-control-sm {
        padding: 0.25rem 0.625rem;
    }

    .md-form.md-outline.form-sm label {
        font-size: 0.8rem;
        -webkit-transform: translateY(8px);
        transform: translateY(8px);
    }

    .md-form.md-outline.form-sm label.active {
        font-size: 0.85rem;
        -webkit-transform: translateY(-12px) scale(0.8);
        transform: translateY(-12px) scale(0.8);
    }

    .md-form.md-outline.form-sm .prefix {
        top: 0.5rem;
        font-size: 15px;
    }

    .md-form.md-outline.form-sm .prefix~input,
    .md-form.md-outline.form-sm .prefix~textarea {
        margin-left: 1.6rem;
        width: calc(100% - 1.6rem);
    }

    .md-form.md-outline.form-sm .prefix~label {
        margin-left: 1.6rem;
    }

    .md-form.md-outline.form-sm .prefix~.form-text {
        margin-left: 1.7rem;
    }

    .md-form.md-outline .prefix {
        position: absolute;
        -webkit-transition: color 0.2s;
        transition: color 0.2s;
    }

    .md-form.md-outline .prefix:focus {
        color: #4285f4;
    }

    .md-form.md-outline .prefix {
        top: 0.6rem;
        font-size: 20px;
    }

    .md-form.md-outline .prefix~input,
    .md-form.md-outline .prefix~textarea {
        margin-left: 2rem;
        width: calc(100% - 2rem);
    }

    .md-form.md-outline .prefix~label {
        margin-left: 2rem;
    }

    .md-form.md-outline .prefix~.form-text {
        margin-left: 2.1rem;
    }

    .md-form.md-outline .character-counter {
        margin-top: -0.5rem;
    }

    .md-form.md-bg input[type=text],
    .md-form.md-bg input[type=password],
    .md-form.md-bg input[type=email],
    .md-form.md-bg input[type=url],
    .md-form.md-bg input[type=time],
    .md-form.md-bg input[type=date],
    .md-form.md-bg input[type=datetime-local],
    .md-form.md-bg input[type=tel],
    .md-form.md-bg input[type=number],
    .md-form.md-bg input[type=search-md],
    .md-form.md-bg input[type=search],
    .md-form.md-bg textarea.md-textarea {
        box-sizing: border-box;
        padding: 10px 5px;
        border: 0;
        border-top-left-radius: 0.3rem;
        border-top-right-radius: 0.3rem;
        background: #f5f5f5 no-repeat;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#4285f4), to(#4285f4)), -webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));
        background-image: linear-gradient(to bottom, #4285f4, #4285f4), linear-gradient(to bottom, #ced4da, #ced4da);
        background-size: 0 2px, 100% 1px;
        background-position: 50% 100%, 50% 100%;
        -webkit-transition: background-size 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
        transition: background-size 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
    }

    .md-form.md-bg input[type=text]:focus:not([readonly]),
    .md-form.md-bg input[type=password]:focus:not([readonly]),
    .md-form.md-bg input[type=email]:focus:not([readonly]),
    .md-form.md-bg input[type=url]:focus:not([readonly]),
    .md-form.md-bg input[type=time]:focus:not([readonly]),
    .md-form.md-bg input[type=date]:focus:not([readonly]),
    .md-form.md-bg input[type=datetime-local]:focus:not([readonly]),
    .md-form.md-bg input[type=tel]:focus:not([readonly]),
    .md-form.md-bg input[type=number]:focus:not([readonly]),
    .md-form.md-bg input[type=search-md]:focus:not([readonly]),
    .md-form.md-bg input[type=search]:focus:not([readonly]),
    .md-form.md-bg textarea.md-textarea:focus:not([readonly]) {
        box-shadow: none;
        border-bottom: none;
    }

    .md-form.md-bg input[type=text]:focus,
    .md-form.md-bg input[type=password]:focus,
    .md-form.md-bg input[type=email]:focus,
    .md-form.md-bg input[type=url]:focus,
    .md-form.md-bg input[type=time]:focus,
    .md-form.md-bg input[type=date]:focus,
    .md-form.md-bg input[type=datetime-local]:focus,
    .md-form.md-bg input[type=tel]:focus,
    .md-form.md-bg input[type=number]:focus,
    .md-form.md-bg input[type=search-md]:focus,
    .md-form.md-bg input[type=search]:focus,
    .md-form.md-bg textarea.md-textarea:focus {
        background-color: #dcdcdc;
        background-size: 100% 2px, 100% 1px;
        outline: none;
    }

    .md-form.md-bg>input[type=date]:not(.browser-default)+label {
        -webkit-transform: translateY(-12px) scale(0.8);
        transform: translateY(-12px) scale(0.8);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
    }

    .md-form.md-bg>input[type]:-webkit-autofill:not(.browser-default):not([type=search])+label,
    .md-form.md-bg>input[type=time]:not(.browser-default)+label {
        -webkit-transform: translateY(-12px);
        transform: translateY(-12px);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        font-size: 0.8rem;
    }

    .md-form.md-bg .form-control {
        padding: 1.1rem 0.7rem 0.4rem !important;
    }

    .md-form.md-bg label {
        top: 0;
        padding-left: 0.7rem;
        font-size: 1rem;
        -webkit-transition: color 0.2s ease-out, -webkit-transform 0.2s ease-out;
        transition: color 0.2s ease-out, -webkit-transform 0.2s ease-out;
        transition: transform 0.2s ease-out, color 0.2s ease-out;
        transition: transform 0.2s ease-out, color 0.2s ease-out, -webkit-transform 0.2s ease-out;
        -webkit-transform-origin: 0% 100%;
        transform-origin: 0% 100%;
        -webkit-transform: translateY(13px);
        transform: translateY(13px);
    }

    .md-form.md-bg label.active {
        -webkit-transform: translateY(-3px) scale(0.8);
        transform: translateY(-3px) scale(0.8);
        font-weight: 500;
        padding-left: 0.75rem;
    }

    .md-form.md-bg.form-lg label {
        -webkit-transform: translateY(16px);
        transform: translateY(16px);
    }

    .md-form.md-bg.form-lg label.active {
        -webkit-transform: translateY(-4px) scale(0.8);
        transform: translateY(-4px) scale(0.8);
    }

    .md-form.md-bg.form-sm label {
        -webkit-transform: translateY(11px);
        transform: translateY(11px);
    }

    .md-form.md-bg.form-sm label.active {
        -webkit-transform: translateY(-2px) scale(0.8);
        transform: translateY(-2px) scale(0.8);
    }

    .md-form .form-control.is-invalid,
    .was-validated .md-form .form-control:invalid {
        padding-right: 0;
    }

    .md-form .form-control.is-valid,
    .was-validated .md-form .form-control:valid {
        padding-right: 0;
    }

    .needs-validation .md-form label {
        left: 0.3rem;
    }

    .custom-file-input:lang(es)~.custom-file-label::after {
        content: "Elegir";
    }

    .custom-file-input:lang(pl-PL)~.custom-file-label::after {
        content: "Wybierz";
    }

    .custom-file-input:lang(fr)~.custom-file-label::after {
        content: "Choisir";
    }

    .custom-file-input:lang(in)~.custom-file-label::after {
        content: "Pilih";
    }

    .custom-file-input:lang(zh)~.custom-file-label::after {
        content: "選擇";
    }

    .custom-file-input:lang(de)~.custom-file-label::after {
        content: "Wählen";
    }

    .custom-file-input:lang(ru)~.custom-file-label::after {
        content: "выбирать";
    }

    .disabled {
        cursor: not-allowed !important;
    }

    .counter-danger {
        border-bottom: 1px solid #f44336 !important;
        box-shadow: 0 1px 0 0 #f44336 !important;
    }

    input:focus~.chars {
        float: right;
        clear: both;
        display: block;
    }

    textarea:focus~.chars {
        float: right;
        clear: both;
        display: block;
    }

    .md-form label {
        left: 0;
    }

    .md-form label.active {
        color: #757575;
    }

    .counter-success {
        border-bottom: 1px solid #00c851 !important;
        box-shadow: 0 1px 0 0 #00c851 !important;
    }

    .inputVal {
        font-size: 0.8rem;
        position: absolute;
    }

    .modal-body .md-form .prefix~.text-success,
    .modal-body .md-form .prefix~.text-danger {
        left: 2.5rem;
    }

    .md-form .prefix~.text-success,
    .md-form .prefix~.text-danger {
        left: 2.5rem;
    }

    .md-form .prefix~.error-message,
    .md-form .prefix~.success-message {
        left: 2.5rem;
    }

    mdb-tab .md-form .prefix~.inputVal {
        left: 2rem;
    }

    input.counter-danger~span.text-danger {
        visibility: visible;
    }

    input.counter-success~span.text-success {
        visibility: visible;
    }

    .md-form textarea.md-textarea {
        overflow-y: auto !important;
    }

    .md-outline input.form-control.validate-success.ng-valid.ng-dirty,
    .md-outline input.form-control.validate-success.ng-valid.ng-touched,
    .md-outline.form-submitted input.form-control.validate-success.ng-valid {
        border-color: #00c851 !important;
        box-shadow: inset 0 0 0 1px #00c851 !important;
    }

    .md-outline input.form-control.validate-success.ng-valid.ng-dirty+label,
    .md-outline input.form-control.validate-success.ng-valid.ng-touched+label,
    .md-outline.form-submitted input.form-control.validate-success.ng-valid+label {
        color: inherit !important;
        font-weight: normal !important;
    }

    .md-outline input.form-control.validate-error.ng-invalid.ng-touched,
    .md-outline input.form-control.validate-error.ng-invalid.ng-dirty,
    .md-outline.form-submitted input.form-control.validate-error.ng-invalid {
        border-color: #f44336 !important;
        box-shadow: inset 0 0 0 1px #f44336 !important;
    }

    .md-outline input.form-control.validate-error.ng-invalid.ng-touched+label,
    .md-outline input.form-control.validate-error.ng-invalid.ng-dirty+label,
    .md-outline.form-submitted input.form-control.validate-error.ng-invalid+label {
        color: inherit !important;
        font-weight: normal !important;
    }

    .md-outline .md-textarea.validate-success.ng-valid {
        border-color: #00c851 !important;
        box-shadow: inset 0 0 0 1px #00c851 !important;
    }

    .md-outline .md-textarea.validate-success.ng-valid+label {
        color: inherit !important;
        font-weight: normal !important;
    }

    .md-outline .md-textarea.validate-error.ng-invalid.ng-touched,
    .md-outline .md-textarea.validate-error.ng-invalid.ng-dirty,
    .md-outline .form-submitted .md-textarea.validate-error.ng-invalid {
        border-color: #f44336 !important;
        box-shadow: inset 0 0 0 1px #f44336 !important;
    }

    .md-outline .md-textarea.validate-error.ng-invalid.ng-touched+label,
    .md-outline .md-textarea.validate-error.ng-invalid.ng-dirty+label,
    .md-outline .form-submitted .md-textarea.validate-error.ng-invalid+label {
        color: inherit !important;
        font-weight: normal !important;
    }

    input.form-control.validate-success.ng-valid.ng-dirty,
    input.form-control.validate-success.ng-valid.ng-touched,
    .form-submitted input.form-control.validate-success.ng-valid {
        border-bottom: 1px solid #00c851 !important;
        box-shadow: 0 1px 0 0 #00c851 !important;
    }

    input.form-control.validate-success.ng-valid.ng-dirty+label,
    input.form-control.validate-success.ng-valid.ng-touched+label,
    .form-submitted input.form-control.validate-success.ng-valid+label {
        color: #00c851 !important;
    }

    input.form-control.validate-error.ng-invalid.ng-touched,
    input.form-control.validate-error.ng-invalid.ng-dirty,
    .form-submitted input.form-control.validate-error.ng-invalid {
        border-bottom: 1px solid #f44336 !important;
        box-shadow: 0 1px 0 0 #f44336 !important;
    }

    input.form-control.validate-error.ng-invalid.ng-touched+label,
    input.form-control.validate-error.ng-invalid.ng-dirty+label,
    .form-submitted input.form-control.validate-error.ng-invalid+label {
        color: #f44336 !important;
    }

    .md-textarea.validate-success.ng-valid {
        border-bottom: 1px solid #00c851 !important;
        box-shadow: 0 1px 0 0 #00c851 !important;
    }

    .md-textarea.validate-success.ng-valid+label {
        color: #00c851 !important;
    }

    .md-textarea.validate-error.ng-invalid.ng-touched,
    .md-textarea.validate-error.ng-invalid.ng-dirty,
    .form-submitted .md-textarea.validate-error.ng-invalid {
        border-bottom: 1px solid #f44336 !important;
        box-shadow: 0 1px 0 0 #f44336 !important;
    }

    .md-textarea.validate-error.ng-invalid.ng-touched+label,
    .md-textarea.validate-error.ng-invalid.ng-dirty+label,
    .form-submitted .md-textarea.validate-error.ng-invalid+label {
        color: #f44336 !important;
    }

    .md-form {
        margin-bottom: 2rem;
    }

    .error-message {
        position: absolute;
        top: 40px;
        left: 0;
        font-size: 0.8rem;
        color: #f44336;
    }

    .success-message {
        position: absolute;
        top: 40px;
        left: 0;
        font-size: 0.8rem;
        color: #00c851;
    }

    .md-form.input-group label {
        top: 0;
        margin-bottom: 0;
    }

    .md-form.input-group .input-group-text {
        background-color: #e0e0e0;
    }

    .md-form.input-group .input-group-text.md-addon {
        border: none;
        background-color: transparent;
        font-weight: 500;
    }

    .md-form.input-group .form-control {
        margin: 0;
        padding: 0.375rem 0.75rem;
    }

    .opacity-0 {
        opacity: 0;
    }

    .opacity-10 {
        opacity: 0.1;
    }

    .opacity-20 {
        opacity: 0.2;
    }

    .opacity-30 {
        opacity: 0.3;
    }

    .opacity-40 {
        opacity: 0.4;
    }

    .opacity-50 {
        opacity: 0.5;
    }

    .opacity-60 {
        opacity: 0.6;
    }

    .opacity-70 {
        opacity: 0.7;
    }

    .opacity-80 {
        opacity: 0.8;
    }

    .opacity-90 {
        opacity: 0.9;
    }

    .opacity-100 {
        opacity: 1;
    }

    footer.page-footer {
        bottom: 0;
        color: #fff;
    }

    footer.page-footer .container-fluid {
        width: auto;
    }

    footer.page-footer .footer-copyright {
        overflow: hidden;
        background-color: rgba(0, 0, 0, 0.2);
        color: rgba(255, 255, 255, 0.6);
    }

    footer.page-footer a {
        color: #fff;
    }

    .flex-column .nav-item a {
        width: 100%;
        margin: 0;
        color: #495057;
        margin-bottom: -1px;
    }

    .flex-column .active a {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff !important;
    }

    .flex-column .list-group-item {
        border-radius: 0;
    }

    .flex-column.list-group .nav-link {
        padding: 0 !important;
    }

    .list-group-item-action:hover,
    .list-group-item-action:focus {
        z-index: unset;
    }

    .fast.spinner-border {
        -webkit-animation: spinner-border 0.4s linear infinite;
        animation: spinner-border 0.4s linear infinite;
    }

    .fast.spinner-grow {
        -webkit-animation: spinner-grow 0.4s linear infinite;
        animation: spinner-grow 0.4s linear infinite;
    }

    .edge-header {
        display: block;
        height: 278px;
        background-color: #ccc;
    }

    .free-bird {
        margin-top: -100px;
    }

    .juicy-peach-gradient {
        background-image: -webkit-gradient(linear, left top, right top, from(#ffecd2), to(#fcb69f));
        background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
    }

    .young-passion-gradient {
        background-image: -webkit-gradient(linear, left top, right top, from(#ff8177), color-stop(0%, #ff867a), color-stop(21%, #ff8c7f), color-stop(52%, #f99185), color-stop(78%, #cf556c), to(#b12a5b));
        background-image: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%);
    }

    .lady-lips-gradient {
        background-image: -webkit-gradient(linear, left bottom, left top, from(#ff9a9e), color-stop(99%, #fecfef), to(#fecfef));
        background-image: linear-gradient(to top, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);
    }

    .sunny-morning-gradient {
        background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
    }

    .rainy-ashville-gradient {
        background-image: -webkit-gradient(linear, left bottom, left top, from(#fbc2eb), to(#a6c1ee));
        background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);
    }

    .frozen-dreams-gradient {
        background-image: -webkit-gradient(linear, left bottom, left top, from(#fdcbf1), color-stop(1%, #fdcbf1), to(#e6dee9));
        background-image: linear-gradient(to top, #fdcbf1 0%, #fdcbf1 1%, #e6dee9 100%);
    }

    .warm-flame-gradient {
        background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);
    }

    .night-fade-gradient {
        background-image: -webkit-gradient(linear, left bottom, left top, from(#a18cd1), to(#fbc2eb));
        background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
    }

    .spring-warmth-gradient {
        background-image: -webkit-gradient(linear, left bottom, left top, from(#fad0c4), to(#ffd1ff));
        background-image: linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%);
    }

    .winter-neva-gradient {
        background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
    }

    .dusty-grass-gradient {
        background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
    }

    .tempting-azure-gradient {
        background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
    }

    .heavy-rain-gradient {
        background-image: -webkit-gradient(linear, left bottom, left top, from(#cfd9df), to(#e2ebf0));
        background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
    }

    .amy-crisp-gradient {
        background-image: linear-gradient(120deg, #a6c0fe 0%, #f68084 100%);
    }

    .mean-fruit-gradient {
        background-image: linear-gradient(120deg, #fccb90 0%, #d57eeb 100%);
    }

    .deep-blue-gradient {
        background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
    }

    .ripe-malinka-gradient {
        background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
    }

    .cloudy-knoxville-gradient {
        background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
    }

    .morpheus-den-gradient {
        background-image: -webkit-gradient(linear, left bottom, left top, from(#30cfd0), to(#330867));
        background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);
    }

    .rare-wind-gradient {
        background-image: -webkit-gradient(linear, left bottom, left top, from(#a8edea), to(#fed6e3));
        background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
    }

    .near-moon-gradient {
        background-image: -webkit-gradient(linear, left bottom, left top, from(#5ee7df), to(#b490ca));
        background-image: linear-gradient(to top, #5ee7df 0%, #b490ca 100%);
    }

    .schedule-list .hr-bold {
        border-top: 2px solid #212529;
    }

    .schedule-list .font-smaller {
        font-size: 0.8rem;
    }

    .note {
        padding: 10px;
        border-left: 6px solid;
        border-radius: 5px;
    }

    .note strong {
        font-weight: 600;
    }

    .note p {
        font-weight: 500;
    }

    .note.note-primary {
        background-color: #dfeefd;
        border-color: #176ac4;
    }

    .note.note-secondary {
        background-color: #e2e3e5;
        border-color: #58595a;
    }

    .note.note-success {
        background-color: #e2f0e5;
        border-color: #49a75f;
    }

    .note.note-danger {
        background-color: #fae7e8;
        border-color: #e45460;
    }

    .note.note-warning {
        background-color: #faf4e0;
        border-color: #c2a442;
    }

    .note.note-info {
        background-color: #e4f2f5;
        border-color: #2492a5;
    }

    .note.note-light {
        background-color: #fefefe;
        border-color: #0f0f0f;
    }

    .pagination .page-item.active .page-link {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        -webkit-transition: all 0.2s linear;
        transition: all 0.2s linear;
        border-radius: 0.125rem;
        background-color: #4285f4;
        color: #fff;
    }

    .pagination .page-item.active .page-link:hover {
        background-color: #4285f4;
    }

    .pagination .page-item.disabled .page-link {
        color: #868e96;
    }

    .pagination .page-item .page-link {
        -webkit-transition: all 0.3s linear;
        transition: all 0.3s linear;
        outline: 0;
        border: 0;
        background-color: transparent;
        font-size: 0.9rem;
        color: #212529;
    }

    .pagination .page-item .page-link:hover {
        -webkit-transition: all 0.3s linear;
        transition: all 0.3s linear;
        border-radius: 0.125rem;
        background-color: #eee;
    }

    .pagination .page-item .page-link:focus {
        background-color: transparent;
        box-shadow: none;
    }

    .pagination.pagination-lg .page-item .page-link {
        font-size: 1rem;
    }

    .pagination.pagination-sm .page-item .page-link {
        font-size: 0.8rem;
    }

    .pagination.pagination-circle .page-item .page-link {
        margin-left: 2px;
        margin-right: 2px;
        border-radius: 50%;
    }

    .pagination.pagination-circle .page-item .page-link:hover {
        border-radius: 50%;
    }

    .pagination.pagination-circle .page-item.active .page-link {
        border-radius: 50%;
    }

    .pagination.pg-blue .page-item.active .page-link {
        background-color: #4285f4;
    }

    .pagination.pg-blue .page-item.active .page-link:hover {
        background-color: #4285f4;
    }

    .pagination.pg-red .page-item.active .page-link {
        background-color: #ff3547;
    }

    .pagination.pg-red .page-item.active .page-link:hover {
        background-color: #ff3547;
    }

    .pagination.pg-teal .page-item.active .page-link {
        background-color: #2bbbad;
    }

    .pagination.pg-teal .page-item.active .page-link:hover {
        background-color: #2bbbad;
    }

    .pagination.pg-dark-grey .page-item.active .page-link {
        background-color: #37474f;
    }

    .pagination.pg-dark-grey .page-item.active .page-link:hover {
        background-color: #37474f;
    }

    .pagination.pg-dark .page-item.active .page-link {
        background-color: #2e2e2e;
    }

    .pagination.pg-dark .page-item.active .page-link:hover {
        background-color: #2e2e2e;
    }

    .pagination.pg-blue-grey .page-item.active .page-link {
        background-color: #3f729b;
    }

    .pagination.pg-blue-grey .page-item.active .page-link:hover {
        background-color: #3f729b;
    }

    .pagination.pg-amber .page-item.active .page-link {
        background-color: #ff6f00;
    }

    .pagination.pg-amber .page-item.active .page-link:hover {
        background-color: #ff6f00;
    }

    .pagination.pg-purple .page-item.active .page-link {
        background-color: #5e35b1;
    }

    .pagination.pg-purple .page-item.active .page-link:hover {
        background-color: #5e35b1;
    }

    ul.stepper {
        counter-reset: section;
        overflow-y: auto;
        overflow-x: hidden;
        margin: 1em -1.5rem;
        padding: 0 1.5rem;
        padding: 1.5rem;
    }

    ul.stepper li a {
        padding: 1.5rem;
        text-align: center;
    }

    ul.stepper li a .circle {
        display: inline-block;
        color: #fff;
        border-radius: 50%;
        background: rgba(0, 0, 0, 0.38);
        width: 1.75rem;
        height: 1.75rem;
        text-align: center;
        line-height: 1.7rem;
        margin-right: 0.5rem;
    }

    ul.stepper li a .label {
        display: inline-block;
        color: rgba(0, 0, 0, 0.38);
    }

    ul.stepper li.active a .label,
    ul.stepper li.completed a .label {
        font-weight: 600;
        color: rgba(0, 0, 0, 0.87);
    }

    .stepper-horizontal {
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: justify;
        justify-content: space-between;
    }

    .stepper-horizontal li {
        -webkit-transition: 0.5s;
        transition: 0.5s;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-flex: 1;
        flex: 1;
        position: relative;
    }

    .stepper-horizontal li a .label {
        margin-top: 0.63rem;
    }

    .stepper-horizontal li:not(:last-child):after {
        content: "";
        position: relative;
        -webkit-box-flex: 1;
        flex: 1;
        margin: 0.5rem 0 0 0;
        height: 1px;
        background-color: rgba(0, 0, 0, 0.1);
    }

    .stepper-horizontal li:not(:first-child):before {
        content: "";
        position: relative;
        -webkit-box-flex: 1;
        flex: 1;
        margin: 0.5rem 0 0 0;
        height: 1px;
        background-color: rgba(0, 0, 0, 0.1);
    }

    .stepper-horizontal li:hover {
        background-color: rgba(0, 0, 0, 0.06);
    }

    @media (max-width: 47.9375rem) {
        .stepper-horizontal {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
        }

        .stepper-horizontal li {
            -webkit-box-align: start;
            align-items: flex-start;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
        }

        .stepper-horizontal li a .label {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-flow: column nowrap;
            -webkit-box-ordinal-group: 3;
            order: 2;
            margin-top: 0.2rem;
        }

        .stepper-horizontal li:not(:last-child):after {
            content: "";
            position: absolute;
            width: 1px;
            height: calc(100% - 40px);
            left: 2.19rem;
            top: 3.75rem;
        }
    }

    .stepper-horizontal>li:not(:last-of-type) {
        margin-bottom: 0 !important;
    }

    .stepper-vertical {
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-pack: justify;
        justify-content: space-between;
    }

    .stepper-vertical li {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: start;
        align-items: flex-start;
        -webkit-box-flex: 1;
        flex: 1;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        position: relative;
    }

    .stepper-vertical li a {
        align-self: flex-start;
        display: -webkit-box;
        display: flex;
        position: relative;
    }

    .stepper-vertical li a .circle {
        -webkit-box-ordinal-group: 2;
        order: 1;
    }

    .stepper-vertical li a .label {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-flow: column nowrap;
        -webkit-box-ordinal-group: 3;
        order: 2;
        margin-top: 0.2rem;
    }

    .stepper-vertical li.completed a .label {
        font-weight: 500;
    }

    .stepper-vertical li .step-content {
        display: block;
        margin-top: 0;
        margin-left: 3.13rem;
        padding: 0.94rem;
    }

    .stepper-vertical li .step-content p {
        font-size: 0.88rem;
    }

    .stepper-vertical li:not(:last-child):after {
        content: "";
        position: absolute;
        width: 1px;
        height: calc(100% - 40px);
        left: 2.19rem;
        top: 3.44rem;
        background-color: rgba(0, 0, 0, 0.1);
    }

    .bs-switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .bs-switch input {
        display: none;
    }

    .bs-switch input:checked+.slider {
        background-color: #2196f3;
    }

    .bs-switch input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        transform: translateX(26px);
    }

    .bs-switch input:focus+.slider {
        box-shadow: 0 0 1px #2196f3;
    }

    .bs-switch .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: 0.4s;
        transition: 0.4s;
    }

    .bs-switch .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: 0.4s;
        transition: 0.4s;
    }

    .bs-switch .slider.round {
        border-radius: 34px;
    }

    .bs-switch .slider.round:before {
        border-radius: 50%;
    }

    .carousel .carousel-control-prev-icon {
        background-image: url('arrow_left.svg') !important;
    }

    .carousel .carousel-control-next-icon {
        background-image: url('arrow_right.svg') !important;
    }
    </style>
    <style>
    @charset "UTF-8";

    /*!
 * animate.css -https://daneden.github.io/animate.css/
 * Version - 3.7.2
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2019 Daniel Eden
 */

    @-webkit-keyframes bounce {

        from,
        20%,
        53%,
        80%,
        to {
            -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        40%,
        43% {
            -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0);
        }

        70% {
            -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0);
        }

        90% {
            -webkit-transform: translate3d(0, -4px, 0);
            transform: translate3d(0, -4px, 0);
        }
    }

    @keyframes bounce {

        from,
        20%,
        53%,
        80%,
        to {
            -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        40%,
        43% {
            -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0);
        }

        70% {
            -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0);
        }

        90% {
            -webkit-transform: translate3d(0, -4px, 0);
            transform: translate3d(0, -4px, 0);
        }
    }

    .bounce {
        -webkit-animation-name: bounce;
        animation-name: bounce;
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
    }

    @-webkit-keyframes flash {

        from,
        50%,
        to {
            opacity: 1;
        }

        25%,
        75% {
            opacity: 0;
        }
    }

    @keyframes flash {

        from,
        50%,
        to {
            opacity: 1;
        }

        25%,
        75% {
            opacity: 0;
        }
    }

    .flash {
        -webkit-animation-name: flash;
        animation-name: flash;
    }

    /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

    @-webkit-keyframes pulse {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        50% {
            -webkit-transform: scale3d(1.05, 1.05, 1.05);
            transform: scale3d(1.05, 1.05, 1.05);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    @keyframes pulse {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        50% {
            -webkit-transform: scale3d(1.05, 1.05, 1.05);
            transform: scale3d(1.05, 1.05, 1.05);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    .pulse {
        -webkit-animation-name: pulse;
        animation-name: pulse;
    }

    @-webkit-keyframes rubberBand {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        30% {
            -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
        }

        40% {
            -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
        }

        50% {
            -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
        }

        65% {
            -webkit-transform: scale3d(0.95, 1.05, 1);
            transform: scale3d(0.95, 1.05, 1);
        }

        75% {
            -webkit-transform: scale3d(1.05, 0.95, 1);
            transform: scale3d(1.05, 0.95, 1);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    @keyframes rubberBand {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        30% {
            -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
        }

        40% {
            -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
        }

        50% {
            -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
        }

        65% {
            -webkit-transform: scale3d(0.95, 1.05, 1);
            transform: scale3d(0.95, 1.05, 1);
        }

        75% {
            -webkit-transform: scale3d(1.05, 0.95, 1);
            transform: scale3d(1.05, 0.95, 1);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    .rubberBand {
        -webkit-animation-name: rubberBand;
        animation-name: rubberBand;
    }

    @-webkit-keyframes shake {

        from,
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        10%,
        30%,
        50%,
        70%,
        90% {
            -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0);
        }

        20%,
        40%,
        60%,
        80% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0);
        }
    }

    @keyframes shake {

        from,
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        10%,
        30%,
        50%,
        70%,
        90% {
            -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0);
        }

        20%,
        40%,
        60%,
        80% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0);
        }
    }

    .shake {
        -webkit-animation-name: shake;
        animation-name: shake;
    }

    @-webkit-keyframes headShake {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }

        6.5% {
            -webkit-transform: translateX(-6px) rotateY(-9deg);
            transform: translateX(-6px) rotateY(-9deg);
        }

        18.5% {
            -webkit-transform: translateX(5px) rotateY(7deg);
            transform: translateX(5px) rotateY(7deg);
        }

        31.5% {
            -webkit-transform: translateX(-3px) rotateY(-5deg);
            transform: translateX(-3px) rotateY(-5deg);
        }

        43.5% {
            -webkit-transform: translateX(2px) rotateY(3deg);
            transform: translateX(2px) rotateY(3deg);
        }

        50% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
    }

    @keyframes headShake {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }

        6.5% {
            -webkit-transform: translateX(-6px) rotateY(-9deg);
            transform: translateX(-6px) rotateY(-9deg);
        }

        18.5% {
            -webkit-transform: translateX(5px) rotateY(7deg);
            transform: translateX(5px) rotateY(7deg);
        }

        31.5% {
            -webkit-transform: translateX(-3px) rotateY(-5deg);
            transform: translateX(-3px) rotateY(-5deg);
        }

        43.5% {
            -webkit-transform: translateX(2px) rotateY(3deg);
            transform: translateX(2px) rotateY(3deg);
        }

        50% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
    }

    .headShake {
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        -webkit-animation-name: headShake;
        animation-name: headShake;
    }

    @-webkit-keyframes swing {
        20% {
            -webkit-transform: rotate3d(0, 0, 1, 15deg);
            transform: rotate3d(0, 0, 1, 15deg);
        }

        40% {
            -webkit-transform: rotate3d(0, 0, 1, -10deg);
            transform: rotate3d(0, 0, 1, -10deg);
        }

        60% {
            -webkit-transform: rotate3d(0, 0, 1, 5deg);
            transform: rotate3d(0, 0, 1, 5deg);
        }

        80% {
            -webkit-transform: rotate3d(0, 0, 1, -5deg);
            transform: rotate3d(0, 0, 1, -5deg);
        }

        to {
            -webkit-transform: rotate3d(0, 0, 1, 0deg);
            transform: rotate3d(0, 0, 1, 0deg);
        }
    }

    @keyframes swing {
        20% {
            -webkit-transform: rotate3d(0, 0, 1, 15deg);
            transform: rotate3d(0, 0, 1, 15deg);
        }

        40% {
            -webkit-transform: rotate3d(0, 0, 1, -10deg);
            transform: rotate3d(0, 0, 1, -10deg);
        }

        60% {
            -webkit-transform: rotate3d(0, 0, 1, 5deg);
            transform: rotate3d(0, 0, 1, 5deg);
        }

        80% {
            -webkit-transform: rotate3d(0, 0, 1, -5deg);
            transform: rotate3d(0, 0, 1, -5deg);
        }

        to {
            -webkit-transform: rotate3d(0, 0, 1, 0deg);
            transform: rotate3d(0, 0, 1, 0deg);
        }
    }

    .swing {
        -webkit-transform-origin: top center;
        transform-origin: top center;
        -webkit-animation-name: swing;
        animation-name: swing;
    }

    @-webkit-keyframes tada {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        10%,
        20% {
            -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
        }

        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
        }

        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    @keyframes tada {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        10%,
        20% {
            -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
        }

        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
        }

        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    .tada {
        -webkit-animation-name: tada;
        animation-name: tada;
    }

    /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

    @-webkit-keyframes wobble {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        15% {
            -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
        }

        30% {
            -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
        }

        45% {
            -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
        }

        60% {
            -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
        }

        75% {
            -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes wobble {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        15% {
            -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
        }

        30% {
            -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
        }

        45% {
            -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
        }

        60% {
            -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
        }

        75% {
            -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .wobble {
        -webkit-animation-name: wobble;
        animation-name: wobble;
    }

    @-webkit-keyframes jello {

        from,
        11.1%,
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        22.2% {
            -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
            transform: skewX(-12.5deg) skewY(-12.5deg);
        }

        33.3% {
            -webkit-transform: skewX(6.25deg) skewY(6.25deg);
            transform: skewX(6.25deg) skewY(6.25deg);
        }

        44.4% {
            -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
            transform: skewX(-3.125deg) skewY(-3.125deg);
        }

        55.5% {
            -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
            transform: skewX(1.5625deg) skewY(1.5625deg);
        }

        66.6% {
            -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
            transform: skewX(-0.78125deg) skewY(-0.78125deg);
        }

        77.7% {
            -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
            transform: skewX(0.390625deg) skewY(0.390625deg);
        }

        88.8% {
            -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
            transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
        }
    }

    @keyframes jello {

        from,
        11.1%,
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        22.2% {
            -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
            transform: skewX(-12.5deg) skewY(-12.5deg);
        }

        33.3% {
            -webkit-transform: skewX(6.25deg) skewY(6.25deg);
            transform: skewX(6.25deg) skewY(6.25deg);
        }

        44.4% {
            -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
            transform: skewX(-3.125deg) skewY(-3.125deg);
        }

        55.5% {
            -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
            transform: skewX(1.5625deg) skewY(1.5625deg);
        }

        66.6% {
            -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
            transform: skewX(-0.78125deg) skewY(-0.78125deg);
        }

        77.7% {
            -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
            transform: skewX(0.390625deg) skewY(0.390625deg);
        }

        88.8% {
            -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
            transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
        }
    }

    .jello {
        -webkit-animation-name: jello;
        animation-name: jello;
        -webkit-transform-origin: center;
        transform-origin: center;
    }

    @-webkit-keyframes heartBeat {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        14% {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        28% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        42% {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        70% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes heartBeat {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        14% {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        28% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        42% {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        70% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    .heartBeat {
        -webkit-animation-name: heartBeat;
        animation-name: heartBeat;
        -webkit-animation-duration: 1.3s;
        animation-duration: 1.3s;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }

    @-webkit-keyframes bounceIn {

        from,
        20%,
        40%,
        60%,
        80%,
        to {
            -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        0% {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 0.3);
            transform: scale3d(0.3, 0.3, 0.3);
        }

        20% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
        }

        40% {
            -webkit-transform: scale3d(0.9, 0.9, 0.9);
            transform: scale3d(0.9, 0.9, 0.9);
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(1.03, 1.03, 1.03);
            transform: scale3d(1.03, 1.03, 1.03);
        }

        80% {
            -webkit-transform: scale3d(0.97, 0.97, 0.97);
            transform: scale3d(0.97, 0.97, 0.97);
        }

        to {
            opacity: 1;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    @keyframes bounceIn {

        from,
        20%,
        40%,
        60%,
        80%,
        to {
            -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        0% {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 0.3);
            transform: scale3d(0.3, 0.3, 0.3);
        }

        20% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
        }

        40% {
            -webkit-transform: scale3d(0.9, 0.9, 0.9);
            transform: scale3d(0.9, 0.9, 0.9);
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(1.03, 1.03, 1.03);
            transform: scale3d(1.03, 1.03, 1.03);
        }

        80% {
            -webkit-transform: scale3d(0.97, 0.97, 0.97);
            transform: scale3d(0.97, 0.97, 0.97);
        }

        to {
            opacity: 1;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    .bounceIn {
        -webkit-animation-duration: 0.75s;
        animation-duration: 0.75s;
        -webkit-animation-name: bounceIn;
        animation-name: bounceIn;
    }

    @-webkit-keyframes bounceInDown {

        from,
        60%,
        75%,
        90%,
        to {
            -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -3000px, 0);
            transform: translate3d(0, -3000px, 0);
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, 25px, 0);
            transform: translate3d(0, 25px, 0);
        }

        75% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
        }

        90% {
            -webkit-transform: translate3d(0, 5px, 0);
            transform: translate3d(0, 5px, 0);
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes bounceInDown {

        from,
        60%,
        75%,
        90%,
        to {
            -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -3000px, 0);
            transform: translate3d(0, -3000px, 0);
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, 25px, 0);
            transform: translate3d(0, 25px, 0);
        }

        75% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
        }

        90% {
            -webkit-transform: translate3d(0, 5px, 0);
            transform: translate3d(0, 5px, 0);
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .bounceInDown {
        -webkit-animation-name: bounceInDown;
        animation-name: bounceInDown;
    }

    @-webkit-keyframes bounceInLeft {

        from,
        60%,
        75%,
        90%,
        to {
            -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        0% {
            opacity: 0;
            -webkit-transform: translate3d(-3000px, 0, 0);
            transform: translate3d(-3000px, 0, 0);
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(25px, 0, 0);
            transform: translate3d(25px, 0, 0);
        }

        75% {
            -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0);
        }

        90% {
            -webkit-transform: translate3d(5px, 0, 0);
            transform: translate3d(5px, 0, 0);
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes bounceInLeft {

        from,
        60%,
        75%,
        90%,
        to {
            -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        0% {
            opacity: 0;
            -webkit-transform: translate3d(-3000px, 0, 0);
            transform: translate3d(-3000px, 0, 0);
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(25px, 0, 0);
            transform: translate3d(25px, 0, 0);
        }

        75% {
            -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0);
        }

        90% {
            -webkit-transform: translate3d(5px, 0, 0);
            transform: translate3d(5px, 0, 0);
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .bounceInLeft {
        -webkit-animation-name: bounceInLeft;
        animation-name: bounceInLeft;
    }

    @-webkit-keyframes bounceInRight {

        from,
        60%,
        75%,
        90%,
        to {
            -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        from {
            opacity: 0;
            -webkit-transform: translate3d(3000px, 0, 0);
            transform: translate3d(3000px, 0, 0);
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(-25px, 0, 0);
            transform: translate3d(-25px, 0, 0);
        }

        75% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0);
        }

        90% {
            -webkit-transform: translate3d(-5px, 0, 0);
            transform: translate3d(-5px, 0, 0);
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes bounceInRight {

        from,
        60%,
        75%,
        90%,
        to {
            -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        from {
            opacity: 0;
            -webkit-transform: translate3d(3000px, 0, 0);
            transform: translate3d(3000px, 0, 0);
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(-25px, 0, 0);
            transform: translate3d(-25px, 0, 0);
        }

        75% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0);
        }

        90% {
            -webkit-transform: translate3d(-5px, 0, 0);
            transform: translate3d(-5px, 0, 0);
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .bounceInRight {
        -webkit-animation-name: bounceInRight;
        animation-name: bounceInRight;
    }

    @-webkit-keyframes bounceInUp {

        from,
        60%,
        75%,
        90%,
        to {
            -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 3000px, 0);
            transform: translate3d(0, 3000px, 0);
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0);
        }

        75% {
            -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0);
        }

        90% {
            -webkit-transform: translate3d(0, -5px, 0);
            transform: translate3d(0, -5px, 0);
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes bounceInUp {

        from,
        60%,
        75%,
        90%,
        to {
            -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 3000px, 0);
            transform: translate3d(0, 3000px, 0);
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0);
        }

        75% {
            -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0);
        }

        90% {
            -webkit-transform: translate3d(0, -5px, 0);
            transform: translate3d(0, -5px, 0);
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .bounceInUp {
        -webkit-animation-name: bounceInUp;
        animation-name: bounceInUp;
    }

    @-webkit-keyframes bounceOut {
        20% {
            -webkit-transform: scale3d(0.9, 0.9, 0.9);
            transform: scale3d(0.9, 0.9, 0.9);
        }

        50%,
        55% {
            opacity: 1;
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
        }

        to {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 0.3);
            transform: scale3d(0.3, 0.3, 0.3);
        }
    }

    @keyframes bounceOut {
        20% {
            -webkit-transform: scale3d(0.9, 0.9, 0.9);
            transform: scale3d(0.9, 0.9, 0.9);
        }

        50%,
        55% {
            opacity: 1;
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
        }

        to {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 0.3);
            transform: scale3d(0.3, 0.3, 0.3);
        }
    }

    .bounceOut {
        -webkit-animation-duration: 0.75s;
        animation-duration: 0.75s;
        -webkit-animation-name: bounceOut;
        animation-name: bounceOut;
    }

    @-webkit-keyframes bounceOutDown {
        20% {
            -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0);
        }

        40%,
        45% {
            opacity: 1;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0);
        }
    }

    @keyframes bounceOutDown {
        20% {
            -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0);
        }

        40%,
        45% {
            opacity: 1;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0);
        }
    }

    .bounceOutDown {
        -webkit-animation-name: bounceOutDown;
        animation-name: bounceOutDown;
    }

    @-webkit-keyframes bounceOutLeft {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(20px, 0, 0);
            transform: translate3d(20px, 0, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
        }
    }

    @keyframes bounceOutLeft {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(20px, 0, 0);
            transform: translate3d(20px, 0, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
        }
    }

    .bounceOutLeft {
        -webkit-animation-name: bounceOutLeft;
        animation-name: bounceOutLeft;
    }

    @-webkit-keyframes bounceOutRight {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(-20px, 0, 0);
            transform: translate3d(-20px, 0, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0);
        }
    }

    @keyframes bounceOutRight {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(-20px, 0, 0);
            transform: translate3d(-20px, 0, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0);
        }
    }

    .bounceOutRight {
        -webkit-animation-name: bounceOutRight;
        animation-name: bounceOutRight;
    }

    @-webkit-keyframes bounceOutUp {
        20% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
        }

        40%,
        45% {
            opacity: 1;
            -webkit-transform: translate3d(0, 20px, 0);
            transform: translate3d(0, 20px, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0);
        }
    }

    @keyframes bounceOutUp {
        20% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
        }

        40%,
        45% {
            opacity: 1;
            -webkit-transform: translate3d(0, 20px, 0);
            transform: translate3d(0, 20px, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0);
        }
    }

    .bounceOutUp {
        -webkit-animation-name: bounceOutUp;
        animation-name: bounceOutUp;
    }

    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    @-webkit-keyframes fadeInDown {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
    }

    @-webkit-keyframes fadeInDownBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeInDownBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .fadeInDownBig {
        -webkit-animation-name: fadeInDownBig;
        animation-name: fadeInDownBig;
    }

    @-webkit-keyframes fadeInLeft {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .fadeInLeft {
        -webkit-animation-name: fadeInLeft;
        animation-name: fadeInLeft;
    }

    @-webkit-keyframes fadeInLeftBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeInLeftBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .fadeInLeftBig {
        -webkit-animation-name: fadeInLeftBig;
        animation-name: fadeInLeftBig;
    }

    @-webkit-keyframes fadeInRight {
        from {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .fadeInRight {
        -webkit-animation-name: fadeInRight;
        animation-name: fadeInRight;
    }

    @-webkit-keyframes fadeInRightBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeInRightBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .fadeInRightBig {
        -webkit-animation-name: fadeInRightBig;
        animation-name: fadeInRightBig;
    }

    @-webkit-keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .fadeInUp {
        -webkit-animation-name: fadeInUp;
        animation-name: fadeInUp;
    }

    @-webkit-keyframes fadeInUpBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeInUpBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .fadeInUpBig {
        -webkit-animation-name: fadeInUpBig;
        animation-name: fadeInUpBig;
    }

    @-webkit-keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }

    @-webkit-keyframes fadeOutDown {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }
    }

    @keyframes fadeOutDown {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }
    }

    .fadeOutDown {
        -webkit-animation-name: fadeOutDown;
        animation-name: fadeOutDown;
    }

    @-webkit-keyframes fadeOutDownBig {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0);
        }
    }

    @keyframes fadeOutDownBig {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0);
        }
    }

    .fadeOutDownBig {
        -webkit-animation-name: fadeOutDownBig;
        animation-name: fadeOutDownBig;
    }

    @-webkit-keyframes fadeOutLeft {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
        }
    }

    @keyframes fadeOutLeft {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
        }
    }

    .fadeOutLeft {
        -webkit-animation-name: fadeOutLeft;
        animation-name: fadeOutLeft;
    }

    @-webkit-keyframes fadeOutLeftBig {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
        }
    }

    @keyframes fadeOutLeftBig {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
        }
    }

    .fadeOutLeftBig {
        -webkit-animation-name: fadeOutLeftBig;
        animation-name: fadeOutLeftBig;
    }

    @-webkit-keyframes fadeOutRight {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
        }
    }

    @keyframes fadeOutRight {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
        }
    }

    .fadeOutRight {
        -webkit-animation-name: fadeOutRight;
        animation-name: fadeOutRight;
    }

    @-webkit-keyframes fadeOutRightBig {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0);
        }
    }

    @keyframes fadeOutRightBig {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0);
        }
    }

    .fadeOutRightBig {
        -webkit-animation-name: fadeOutRightBig;
        animation-name: fadeOutRightBig;
    }

    @-webkit-keyframes fadeOutUp {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
    }

    @keyframes fadeOutUp {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
    }

    .fadeOutUp {
        -webkit-animation-name: fadeOutUp;
        animation-name: fadeOutUp;
    }

    @-webkit-keyframes fadeOutUpBig {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0);
        }
    }

    @keyframes fadeOutUpBig {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0);
        }
    }

    .fadeOutUpBig {
        -webkit-animation-name: fadeOutUpBig;
        animation-name: fadeOutUpBig;
    }

    @-webkit-keyframes flip {
        from {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
        }

        40% {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
        }

        50% {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
        }

        80% {
            -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
            transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
        }

        to {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
        }
    }

    @keyframes flip {
        from {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
        }

        40% {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
        }

        50% {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
        }

        80% {
            -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
            transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
        }

        to {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
        }
    }

    .animated.flip {
        -webkit-backface-visibility: visible;
        backface-visibility: visible;
        -webkit-animation-name: flip;
        animation-name: flip;
    }

    @-webkit-keyframes flipInX {
        from {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            opacity: 0;
        }

        40% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
        }

        60% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            opacity: 1;
        }

        80% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
        }

        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px);
        }
    }

    @keyframes flipInX {
        from {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            opacity: 0;
        }

        40% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
        }

        60% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            opacity: 1;
        }

        80% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
        }

        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px);
        }
    }

    .flipInX {
        -webkit-backface-visibility: visible !important;
        backface-visibility: visible !important;
        -webkit-animation-name: flipInX;
        animation-name: flipInX;
    }

    @-webkit-keyframes flipInY {
        from {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            opacity: 0;
        }

        40% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
        }

        60% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            opacity: 1;
        }

        80% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
        }

        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px);
        }
    }

    @keyframes flipInY {
        from {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            opacity: 0;
        }

        40% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
        }

        60% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            opacity: 1;
        }

        80% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
        }

        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px);
        }
    }

    .flipInY {
        -webkit-backface-visibility: visible !important;
        backface-visibility: visible !important;
        -webkit-animation-name: flipInY;
        animation-name: flipInY;
    }

    @-webkit-keyframes flipOutX {
        from {
            -webkit-transform: perspective(400px);
            transform: perspective(400px);
        }

        30% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            opacity: 1;
        }

        to {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            opacity: 0;
        }
    }

    @keyframes flipOutX {
        from {
            -webkit-transform: perspective(400px);
            transform: perspective(400px);
        }

        30% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            opacity: 1;
        }

        to {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            opacity: 0;
        }
    }

    .flipOutX {
        -webkit-animation-duration: 0.75s;
        animation-duration: 0.75s;
        -webkit-animation-name: flipOutX;
        animation-name: flipOutX;
        -webkit-backface-visibility: visible !important;
        backface-visibility: visible !important;
    }

    @-webkit-keyframes flipOutY {
        from {
            -webkit-transform: perspective(400px);
            transform: perspective(400px);
        }

        30% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            opacity: 1;
        }

        to {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            opacity: 0;
        }
    }

    @keyframes flipOutY {
        from {
            -webkit-transform: perspective(400px);
            transform: perspective(400px);
        }

        30% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            opacity: 1;
        }

        to {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            opacity: 0;
        }
    }

    .flipOutY {
        -webkit-animation-duration: 0.75s;
        animation-duration: 0.75s;
        -webkit-backface-visibility: visible !important;
        backface-visibility: visible !important;
        -webkit-animation-name: flipOutY;
        animation-name: flipOutY;
    }

    @-webkit-keyframes lightSpeedIn {
        from {
            -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
            transform: translate3d(100%, 0, 0) skewX(-30deg);
            opacity: 0;
        }

        60% {
            -webkit-transform: skewX(20deg);
            transform: skewX(20deg);
            opacity: 1;
        }

        80% {
            -webkit-transform: skewX(-5deg);
            transform: skewX(-5deg);
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes lightSpeedIn {
        from {
            -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
            transform: translate3d(100%, 0, 0) skewX(-30deg);
            opacity: 0;
        }

        60% {
            -webkit-transform: skewX(20deg);
            transform: skewX(20deg);
            opacity: 1;
        }

        80% {
            -webkit-transform: skewX(-5deg);
            transform: skewX(-5deg);
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .lightSpeedIn {
        -webkit-animation-name: lightSpeedIn;
        animation-name: lightSpeedIn;
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }

    @-webkit-keyframes lightSpeedOut {
        from {
            opacity: 1;
        }

        to {
            -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
            transform: translate3d(100%, 0, 0) skewX(30deg);
            opacity: 0;
        }
    }

    @keyframes lightSpeedOut {
        from {
            opacity: 1;
        }

        to {
            -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
            transform: translate3d(100%, 0, 0) skewX(30deg);
            opacity: 0;
        }
    }

    .lightSpeedOut {
        -webkit-animation-name: lightSpeedOut;
        animation-name: lightSpeedOut;
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }

    @-webkit-keyframes rotateIn {
        from {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: rotate3d(0, 0, 1, -200deg);
            transform: rotate3d(0, 0, 1, -200deg);
            opacity: 0;
        }

        to {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }
    }

    @keyframes rotateIn {
        from {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: rotate3d(0, 0, 1, -200deg);
            transform: rotate3d(0, 0, 1, -200deg);
            opacity: 0;
        }

        to {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }
    }

    .rotateIn {
        -webkit-animation-name: rotateIn;
        animation-name: rotateIn;
    }

    @-webkit-keyframes rotateInDownLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0;
        }

        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }
    }

    @keyframes rotateInDownLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0;
        }

        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }
    }

    .rotateInDownLeft {
        -webkit-animation-name: rotateInDownLeft;
        animation-name: rotateInDownLeft;
    }

    @-webkit-keyframes rotateInDownRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0;
        }

        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }
    }

    @keyframes rotateInDownRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0;
        }

        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }
    }

    .rotateInDownRight {
        -webkit-animation-name: rotateInDownRight;
        animation-name: rotateInDownRight;
    }

    @-webkit-keyframes rotateInUpLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0;
        }

        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }
    }

    @keyframes rotateInUpLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0;
        }

        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }
    }

    .rotateInUpLeft {
        -webkit-animation-name: rotateInUpLeft;
        animation-name: rotateInUpLeft;
    }

    @-webkit-keyframes rotateInUpRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, -90deg);
            transform: rotate3d(0, 0, 1, -90deg);
            opacity: 0;
        }

        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }
    }

    @keyframes rotateInUpRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, -90deg);
            transform: rotate3d(0, 0, 1, -90deg);
            opacity: 0;
        }

        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }
    }

    .rotateInUpRight {
        -webkit-animation-name: rotateInUpRight;
        animation-name: rotateInUpRight;
    }

    @-webkit-keyframes rotateOut {
        from {
            -webkit-transform-origin: center;
            transform-origin: center;
            opacity: 1;
        }

        to {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: rotate3d(0, 0, 1, 200deg);
            transform: rotate3d(0, 0, 1, 200deg);
            opacity: 0;
        }
    }

    @keyframes rotateOut {
        from {
            -webkit-transform-origin: center;
            transform-origin: center;
            opacity: 1;
        }

        to {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: rotate3d(0, 0, 1, 200deg);
            transform: rotate3d(0, 0, 1, 200deg);
            opacity: 0;
        }
    }

    .rotateOut {
        -webkit-animation-name: rotateOut;
        animation-name: rotateOut;
    }

    @-webkit-keyframes rotateOutDownLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            opacity: 1;
        }

        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0;
        }
    }

    @keyframes rotateOutDownLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            opacity: 1;
        }

        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0;
        }
    }

    .rotateOutDownLeft {
        -webkit-animation-name: rotateOutDownLeft;
        animation-name: rotateOutDownLeft;
    }

    @-webkit-keyframes rotateOutDownRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            opacity: 1;
        }

        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0;
        }
    }

    @keyframes rotateOutDownRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            opacity: 1;
        }

        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0;
        }
    }

    .rotateOutDownRight {
        -webkit-animation-name: rotateOutDownRight;
        animation-name: rotateOutDownRight;
    }

    @-webkit-keyframes rotateOutUpLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            opacity: 1;
        }

        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0;
        }
    }

    @keyframes rotateOutUpLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            opacity: 1;
        }

        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0;
        }
    }

    .rotateOutUpLeft {
        -webkit-animation-name: rotateOutUpLeft;
        animation-name: rotateOutUpLeft;
    }

    @-webkit-keyframes rotateOutUpRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            opacity: 1;
        }

        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, 90deg);
            transform: rotate3d(0, 0, 1, 90deg);
            opacity: 0;
        }
    }

    @keyframes rotateOutUpRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            opacity: 1;
        }

        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, 90deg);
            transform: rotate3d(0, 0, 1, 90deg);
            opacity: 0;
        }
    }

    .rotateOutUpRight {
        -webkit-animation-name: rotateOutUpRight;
        animation-name: rotateOutUpRight;
    }

    @-webkit-keyframes hinge {
        0% {
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
        }

        20%,
        60% {
            -webkit-transform: rotate3d(0, 0, 1, 80deg);
            transform: rotate3d(0, 0, 1, 80deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
        }

        40%,
        80% {
            -webkit-transform: rotate3d(0, 0, 1, 60deg);
            transform: rotate3d(0, 0, 1, 60deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            opacity: 1;
        }

        to {
            -webkit-transform: translate3d(0, 700px, 0);
            transform: translate3d(0, 700px, 0);
            opacity: 0;
        }
    }

    @keyframes hinge {
        0% {
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
        }

        20%,
        60% {
            -webkit-transform: rotate3d(0, 0, 1, 80deg);
            transform: rotate3d(0, 0, 1, 80deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
        }

        40%,
        80% {
            -webkit-transform: rotate3d(0, 0, 1, 60deg);
            transform: rotate3d(0, 0, 1, 60deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            opacity: 1;
        }

        to {
            -webkit-transform: translate3d(0, 700px, 0);
            transform: translate3d(0, 700px, 0);
            opacity: 0;
        }
    }

    .hinge {
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-name: hinge;
        animation-name: hinge;
    }

    @-webkit-keyframes jackInTheBox {
        from {
            opacity: 0;
            -webkit-transform: scale(0.1) rotate(30deg);
            transform: scale(0.1) rotate(30deg);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
        }

        50% {
            -webkit-transform: rotate(-10deg);
            transform: rotate(-10deg);
        }

        70% {
            -webkit-transform: rotate(3deg);
            transform: rotate(3deg);
        }

        to {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes jackInTheBox {
        from {
            opacity: 0;
            -webkit-transform: scale(0.1) rotate(30deg);
            transform: scale(0.1) rotate(30deg);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
        }

        50% {
            -webkit-transform: rotate(-10deg);
            transform: rotate(-10deg);
        }

        70% {
            -webkit-transform: rotate(3deg);
            transform: rotate(3deg);
        }

        to {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    .jackInTheBox {
        -webkit-animation-name: jackInTheBox;
        animation-name: jackInTheBox;
    }

    /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

    @-webkit-keyframes rollIn {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes rollIn {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .rollIn {
        -webkit-animation-name: rollIn;
        animation-name: rollIn;
    }

    /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

    @-webkit-keyframes rollOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
            transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
        }
    }

    @keyframes rollOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
            transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
        }
    }

    .rollOut {
        -webkit-animation-name: rollOut;
        animation-name: rollOut;
    }

    @-webkit-keyframes zoomIn {
        from {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 0.3);
            transform: scale3d(0.3, 0.3, 0.3);
        }

        50% {
            opacity: 1;
        }
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 0.3);
            transform: scale3d(0.3, 0.3, 0.3);
        }

        50% {
            opacity: 1;
        }
    }

    .zoomIn {
        -webkit-animation-name: zoomIn;
        animation-name: zoomIn;
    }

    @-webkit-keyframes zoomInDown {
        from {
            opacity: 0;
            -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
            transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
            -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        }
    }

    @keyframes zoomInDown {
        from {
            opacity: 0;
            -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
            transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
            -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        }
    }

    .zoomInDown {
        -webkit-animation-name: zoomInDown;
        animation-name: zoomInDown;
    }

    @-webkit-keyframes zoomInLeft {
        from {
            opacity: 0;
            -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
            transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        }
    }

    @keyframes zoomInLeft {
        from {
            opacity: 0;
            -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
            transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        }
    }

    .zoomInLeft {
        -webkit-animation-name: zoomInLeft;
        animation-name: zoomInLeft;
    }

    @-webkit-keyframes zoomInRight {
        from {
            opacity: 0;
            -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
            transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        }
    }

    @keyframes zoomInRight {
        from {
            opacity: 0;
            -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
            transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        }
    }

    .zoomInRight {
        -webkit-animation-name: zoomInRight;
        animation-name: zoomInRight;
    }

    @-webkit-keyframes zoomInUp {
        from {
            opacity: 0;
            -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
            transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
            -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        }
    }

    @keyframes zoomInUp {
        from {
            opacity: 0;
            -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
            transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
            -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        }
    }

    .zoomInUp {
        -webkit-animation-name: zoomInUp;
        animation-name: zoomInUp;
    }

    @-webkit-keyframes zoomOut {
        from {
            opacity: 1;
        }

        50% {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 0.3);
            transform: scale3d(0.3, 0.3, 0.3);
        }

        to {
            opacity: 0;
        }
    }

    @keyframes zoomOut {
        from {
            opacity: 1;
        }

        50% {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 0.3);
            transform: scale3d(0.3, 0.3, 0.3);
        }

        to {
            opacity: 0;
        }
    }

    .zoomOut {
        -webkit-animation-name: zoomOut;
        animation-name: zoomOut;
    }

    @-webkit-keyframes zoomOutDown {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
            -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        to {
            opacity: 0;
            -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
            transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        }
    }

    @keyframes zoomOutDown {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
            -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        to {
            opacity: 0;
            -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
            transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        }
    }

    .zoomOutDown {
        -webkit-animation-name: zoomOutDown;
        animation-name: zoomOutDown;
    }

    @-webkit-keyframes zoomOutLeft {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
            transform: scale(0.1) translate3d(-2000px, 0, 0);
            -webkit-transform-origin: left center;
            transform-origin: left center;
        }
    }

    @keyframes zoomOutLeft {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
            transform: scale(0.1) translate3d(-2000px, 0, 0);
            -webkit-transform-origin: left center;
            transform-origin: left center;
        }
    }

    .zoomOutLeft {
        -webkit-animation-name: zoomOutLeft;
        animation-name: zoomOutLeft;
    }

    @-webkit-keyframes zoomOutRight {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
            transform: scale(0.1) translate3d(2000px, 0, 0);
            -webkit-transform-origin: right center;
            transform-origin: right center;
        }
    }

    @keyframes zoomOutRight {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
            transform: scale(0.1) translate3d(2000px, 0, 0);
            -webkit-transform-origin: right center;
            transform-origin: right center;
        }
    }

    .zoomOutRight {
        -webkit-animation-name: zoomOutRight;
        animation-name: zoomOutRight;
    }

    @-webkit-keyframes zoomOutUp {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
            -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        to {
            opacity: 0;
            -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
            transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        }
    }

    @keyframes zoomOutUp {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
            transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
            -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        to {
            opacity: 0;
            -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
            transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
        }
    }

    .zoomOutUp {
        -webkit-animation-name: zoomOutUp;
        animation-name: zoomOutUp;
    }

    @-webkit-keyframes slideInDown {
        from {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes slideInDown {
        from {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .slideInDown {
        -webkit-animation-name: slideInDown;
        animation-name: slideInDown;
    }

    @-webkit-keyframes slideInLeft {
        from {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes slideInLeft {
        from {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .slideInLeft {
        -webkit-animation-name: slideInLeft;
        animation-name: slideInLeft;
    }

    @-webkit-keyframes slideInRight {
        from {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes slideInRight {
        from {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .slideInRight {
        -webkit-animation-name: slideInRight;
        animation-name: slideInRight;
    }

    @-webkit-keyframes slideInUp {
        from {
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes slideInUp {
        from {
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .slideInUp {
        -webkit-animation-name: slideInUp;
        animation-name: slideInUp;
    }

    @-webkit-keyframes slideOutDown {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }
    }

    @keyframes slideOutDown {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }
    }

    .slideOutDown {
        -webkit-animation-name: slideOutDown;
        animation-name: slideOutDown;
    }

    @-webkit-keyframes slideOutLeft {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
        }
    }

    @keyframes slideOutLeft {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
        }
    }

    .slideOutLeft {
        -webkit-animation-name: slideOutLeft;
        animation-name: slideOutLeft;
    }

    @-webkit-keyframes slideOutRight {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
        }
    }

    @keyframes slideOutRight {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
        }
    }

    .slideOutRight {
        -webkit-animation-name: slideOutRight;
        animation-name: slideOutRight;
    }

    @-webkit-keyframes slideOutUp {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
    }

    @keyframes slideOutUp {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
    }

    .slideOutUp {
        -webkit-animation-name: slideOutUp;
        animation-name: slideOutUp;
    }

    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.infinite {
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
    }

    .animated.delay-1s {
        -webkit-animation-delay: 1s;
        animation-delay: 1s;
    }

    .animated.delay-2s {
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
    }

    .animated.delay-3s {
        -webkit-animation-delay: 3s;
        animation-delay: 3s;
    }

    .animated.delay-4s {
        -webkit-animation-delay: 4s;
        animation-delay: 4s;
    }

    .animated.delay-5s {
        -webkit-animation-delay: 5s;
        animation-delay: 5s;
    }

    .animated.fast {
        -webkit-animation-duration: 800ms;
        animation-duration: 800ms;
    }

    .animated.faster {
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
    }

    .animated.slow {
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
    }

    .animated.slower {
        -webkit-animation-duration: 3s;
        animation-duration: 3s;
    }

    @media (print),
    (prefers-reduced-motion: reduce) {
        .animated {
            -webkit-animation-duration: 1ms !important;
            animation-duration: 1ms !important;
            -webkit-transition-duration: 1ms !important;
            transition-duration: 1ms !important;
            -webkit-animation-iteration-count: 1 !important;
            animation-iteration-count: 1 !important;
        }
    }
    </style>
    <style>
    /*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
    /* FONT PATH
 * -------------------------- */
    @font-face {
        font-family: 'FontAwesome';
        src: url('fontawesome-webfont.eot?v=4.7.0');
        src: url('fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('fontawesome-webfont.woff?v=4.7.0') format('woff'), url('fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
        font-weight: normal;
        font-style: normal;
    }

    .fa {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    /* makes the font 33% larger relative to the icon container */
    .fa-lg {
        font-size: 1.33333333em;
        line-height: 0.75em;
        vertical-align: -15%;
    }

    .fa-2x {
        font-size: 2em;
    }

    .fa-3x {
        font-size: 3em;
    }

    .fa-4x {
        font-size: 4em;
    }

    .fa-5x {
        font-size: 5em;
    }

    .fa-fw {
        width: 1.28571429em;
        text-align: center;
    }

    .fa-ul {
        padding-left: 0;
        margin-left: 2.14285714em;
        list-style-type: none;
    }

    .fa-ul>li {
        position: relative;
    }

    .fa-li {
        position: absolute;
        left: -2.14285714em;
        width: 2.14285714em;
        top: 0.14285714em;
        text-align: center;
    }

    .fa-li.fa-lg {
        left: -1.85714286em;
    }

    .fa-border {
        padding: .2em .25em .15em;
        border: solid 0.08em #eeeeee;
        border-radius: .1em;
    }

    .fa-pull-left {
        float: left;
    }

    .fa-pull-right {
        float: right;
    }

    .fa.fa-pull-left {
        margin-right: .3em;
    }

    .fa.fa-pull-right {
        margin-left: .3em;
    }

    /* Deprecated as of 4.4.0 */
    .pull-right {
        float: right;
    }

    .pull-left {
        float: left;
    }

    .fa.pull-left {
        margin-right: .3em;
    }

    .fa.pull-right {
        margin-left: .3em;
    }

    .fa-spin {
        -webkit-animation: fa-spin 2s infinite linear;
        animation: fa-spin 2s infinite linear;
    }

    .fa-pulse {
        -webkit-animation: fa-spin 1s infinite steps(8);
        animation: fa-spin 1s infinite steps(8);
    }

    @-webkit-keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
        }
    }

    @keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
        }
    }

    .fa-rotate-90 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .fa-rotate-180 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .fa-rotate-270 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg);
    }

    .fa-flip-horizontal {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
        -webkit-transform: scale(-1, 1);
        transform: scale(-1, 1);
    }

    .fa-flip-vertical {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
        -webkit-transform: scale(1, -1);
        transform: scale(1, -1);
    }

    :root .fa-rotate-90,
    :root .fa-rotate-180,
    :root .fa-rotate-270,
    :root .fa-flip-horizontal,
    :root .fa-flip-vertical {
        -webkit-filter: none;
        filter: none;
    }

    .fa-stack {
        position: relative;
        display: inline-block;
        width: 2em;
        height: 2em;
        line-height: 2em;
        vertical-align: middle;
    }

    .fa-stack-1x,
    .fa-stack-2x {
        position: absolute;
        left: 0;
        width: 100%;
        text-align: center;
    }

    .fa-stack-1x {
        line-height: inherit;
    }

    .fa-stack-2x {
        font-size: 2em;
    }

    .fa-inverse {
        color: #ffffff;
    }

    /* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
    .fa-glass:before {
        content: "\f000";
    }

    .fa-music:before {
        content: "\f001";
    }

    .fa-search:before {
        content: "\f002";
    }

    .fa-envelope-o:before {
        content: "\f003";
    }

    .fa-heart:before {
        content: "\f004";
    }

    .fa-star:before {
        content: "\f005";
    }

    .fa-star-o:before {
        content: "\f006";
    }

    .fa-user:before {
        content: "\f007";
    }

    .fa-film:before {
        content: "\f008";
    }

    .fa-th-large:before {
        content: "\f009";
    }

    .fa-th:before {
        content: "\f00a";
    }

    .fa-th-list:before {
        content: "\f00b";
    }

    .fa-check:before {
        content: "\f00c";
    }

    .fa-remove:before,
    .fa-close:before,
    .fa-times:before {
        content: "\f00d";
    }

    .fa-search-plus:before {
        content: "\f00e";
    }

    .fa-search-minus:before {
        content: "\f010";
    }

    .fa-power-off:before {
        content: "\f011";
    }

    .fa-signal:before {
        content: "\f012";
    }

    .fa-gear:before,
    .fa-cog:before {
        content: "\f013";
    }

    .fa-trash-o:before {
        content: "\f014";
    }

    .fa-home:before {
        content: "\f015";
    }

    .fa-file-o:before {
        content: "\f016";
    }

    .fa-clock-o:before {
        content: "\f017";
    }

    .fa-road:before {
        content: "\f018";
    }

    .fa-download:before {
        content: "\f019";
    }

    .fa-arrow-circle-o-down:before {
        content: "\f01a";
    }

    .fa-arrow-circle-o-up:before {
        content: "\f01b";
    }

    .fa-inbox:before {
        content: "\f01c";
    }

    .fa-play-circle-o:before {
        content: "\f01d";
    }

    .fa-rotate-right:before,
    .fa-repeat:before {
        content: "\f01e";
    }

    .fa-refresh:before {
        content: "\f021";
    }

    .fa-list-alt:before {
        content: "\f022";
    }

    .fa-lock:before {
        content: "\f023";
    }

    .fa-flag:before {
        content: "\f024";
    }

    .fa-headphones:before {
        content: "\f025";
    }

    .fa-volume-off:before {
        content: "\f026";
    }

    .fa-volume-down:before {
        content: "\f027";
    }

    .fa-volume-up:before {
        content: "\f028";
    }

    .fa-qrcode:before {
        content: "\f029";
    }

    .fa-barcode:before {
        content: "\f02a";
    }

    .fa-tag:before {
        content: "\f02b";
    }

    .fa-tags:before {
        content: "\f02c";
    }

    .fa-book:before {
        content: "\f02d";
    }

    .fa-bookmark:before {
        content: "\f02e";
    }

    .fa-print:before {
        content: "\f02f";
    }

    .fa-camera:before {
        content: "\f030";
    }

    .fa-font:before {
        content: "\f031";
    }

    .fa-bold:before {
        content: "\f032";
    }

    .fa-italic:before {
        content: "\f033";
    }

    .fa-text-height:before {
        content: "\f034";
    }

    .fa-text-width:before {
        content: "\f035";
    }

    .fa-align-left:before {
        content: "\f036";
    }

    .fa-align-center:before {
        content: "\f037";
    }

    .fa-align-right:before {
        content: "\f038";
    }

    .fa-align-justify:before {
        content: "\f039";
    }

    .fa-list:before {
        content: "\f03a";
    }

    .fa-dedent:before,
    .fa-outdent:before {
        content: "\f03b";
    }

    .fa-indent:before {
        content: "\f03c";
    }

    .fa-video-camera:before {
        content: "\f03d";
    }

    .fa-photo:before,
    .fa-image:before,
    .fa-picture-o:before {
        content: "\f03e";
    }

    .fa-pencil:before {
        content: "\f040";
    }

    .fa-map-marker:before {
        content: "\f041";
    }

    .fa-adjust:before {
        content: "\f042";
    }

    .fa-tint:before {
        content: "\f043";
    }

    .fa-edit:before,
    .fa-pencil-square-o:before {
        content: "\f044";
    }

    .fa-share-square-o:before {
        content: "\f045";
    }

    .fa-check-square-o:before {
        content: "\f046";
    }

    .fa-arrows:before {
        content: "\f047";
    }

    .fa-step-backward:before {
        content: "\f048";
    }

    .fa-fast-backward:before {
        content: "\f049";
    }

    .fa-backward:before {
        content: "\f04a";
    }

    .fa-play:before {
        content: "\f04b";
    }

    .fa-pause:before {
        content: "\f04c";
    }

    .fa-stop:before {
        content: "\f04d";
    }

    .fa-forward:before {
        content: "\f04e";
    }

    .fa-fast-forward:before {
        content: "\f050";
    }

    .fa-step-forward:before {
        content: "\f051";
    }

    .fa-eject:before {
        content: "\f052";
    }

    .fa-chevron-left:before {
        content: "\f053";
    }

    .fa-chevron-right:before {
        content: "\f054";
    }

    .fa-plus-circle:before {
        content: "\f055";
    }

    .fa-minus-circle:before {
        content: "\f056";
    }

    .fa-times-circle:before {
        content: "\f057";
    }

    .fa-check-circle:before {
        content: "\f058";
    }

    .fa-question-circle:before {
        content: "\f059";
    }

    .fa-info-circle:before {
        content: "\f05a";
    }

    .fa-crosshairs:before {
        content: "\f05b";
    }

    .fa-times-circle-o:before {
        content: "\f05c";
    }

    .fa-check-circle-o:before {
        content: "\f05d";
    }

    .fa-ban:before {
        content: "\f05e";
    }

    .fa-arrow-left:before {
        content: "\f060";
    }

    .fa-arrow-right:before {
        content: "\f061";
    }

    .fa-arrow-up:before {
        content: "\f062";
    }

    .fa-arrow-down:before {
        content: "\f063";
    }

    .fa-mail-forward:before,
    .fa-share:before {
        content: "\f064";
    }

    .fa-expand:before {
        content: "\f065";
    }

    .fa-compress:before {
        content: "\f066";
    }

    .fa-plus:before {
        content: "\f067";
    }

    .fa-minus:before {
        content: "\f068";
    }

    .fa-asterisk:before {
        content: "\f069";
    }

    .fa-exclamation-circle:before {
        content: "\f06a";
    }

    .fa-gift:before {
        content: "\f06b";
    }

    .fa-leaf:before {
        content: "\f06c";
    }

    .fa-fire:before {
        content: "\f06d";
    }

    .fa-eye:before {
        content: "\f06e";
    }

    .fa-eye-slash:before {
        content: "\f070";
    }

    .fa-warning:before,
    .fa-exclamation-triangle:before {
        content: "\f071";
    }

    .fa-plane:before {
        content: "\f072";
    }

    .fa-calendar:before {
        content: "\f073";
    }

    .fa-random:before {
        content: "\f074";
    }

    .fa-comment:before {
        content: "\f075";
    }

    .fa-magnet:before {
        content: "\f076";
    }

    .fa-chevron-up:before {
        content: "\f077";
    }

    .fa-chevron-down:before {
        content: "\f078";
    }

    .fa-retweet:before {
        content: "\f079";
    }

    .fa-shopping-cart:before {
        content: "\f07a";
    }

    .fa-folder:before {
        content: "\f07b";
    }

    .fa-folder-open:before {
        content: "\f07c";
    }

    .fa-arrows-v:before {
        content: "\f07d";
    }

    .fa-arrows-h:before {
        content: "\f07e";
    }

    .fa-bar-chart-o:before,
    .fa-bar-chart:before {
        content: "\f080";
    }

    .fa-twitter-square:before {
        content: "\f081";
    }

    .fa-facebook-square:before {
        content: "\f082";
    }

    .fa-camera-retro:before {
        content: "\f083";
    }

    .fa-key:before {
        content: "\f084";
    }

    .fa-gears:before,
    .fa-cogs:before {
        content: "\f085";
    }

    .fa-comments:before {
        content: "\f086";
    }

    .fa-thumbs-o-up:before {
        content: "\f087";
    }

    .fa-thumbs-o-down:before {
        content: "\f088";
    }

    .fa-star-half:before {
        content: "\f089";
    }

    .fa-heart-o:before {
        content: "\f08a";
    }

    .fa-sign-out:before {
        content: "\f08b";
    }

    .fa-linkedin-square:before {
        content: "\f08c";
    }

    .fa-thumb-tack:before {
        content: "\f08d";
    }

    .fa-external-link:before {
        content: "\f08e";
    }

    .fa-sign-in:before {
        content: "\f090";
    }

    .fa-trophy:before {
        content: "\f091";
    }

    .fa-github-square:before {
        content: "\f092";
    }

    .fa-upload:before {
        content: "\f093";
    }

    .fa-lemon-o:before {
        content: "\f094";
    }

    .fa-phone:before {
        content: "\f095";
    }

    .fa-square-o:before {
        content: "\f096";
    }

    .fa-bookmark-o:before {
        content: "\f097";
    }

    .fa-phone-square:before {
        content: "\f098";
    }

    .fa-twitter:before {
        content: "\f099";
    }

    .fa-facebook-f:before,
    .fa-facebook:before {
        content: "\f09a";
    }

    .fa-github:before {
        content: "\f09b";
    }

    .fa-unlock:before {
        content: "\f09c";
    }

    .fa-credit-card:before {
        content: "\f09d";
    }

    .fa-feed:before,
    .fa-rss:before {
        content: "\f09e";
    }

    .fa-hdd-o:before {
        content: "\f0a0";
    }

    .fa-bullhorn:before {
        content: "\f0a1";
    }

    .fa-bell:before {
        content: "\f0f3";
    }

    .fa-certificate:before {
        content: "\f0a3";
    }

    .fa-hand-o-right:before {
        content: "\f0a4";
    }

    .fa-hand-o-left:before {
        content: "\f0a5";
    }

    .fa-hand-o-up:before {
        content: "\f0a6";
    }

    .fa-hand-o-down:before {
        content: "\f0a7";
    }

    .fa-arrow-circle-left:before {
        content: "\f0a8";
    }

    .fa-arrow-circle-right:before {
        content: "\f0a9";
    }

    .fa-arrow-circle-up:before {
        content: "\f0aa";
    }

    .fa-arrow-circle-down:before {
        content: "\f0ab";
    }

    .fa-globe:before {
        content: "\f0ac";
    }

    .fa-wrench:before {
        content: "\f0ad";
    }

    .fa-tasks:before {
        content: "\f0ae";
    }

    .fa-filter:before {
        content: "\f0b0";
    }

    .fa-briefcase:before {
        content: "\f0b1";
    }

    .fa-arrows-alt:before {
        content: "\f0b2";
    }

    .fa-group:before,
    .fa-users:before {
        content: "\f0c0";
    }

    .fa-chain:before,
    .fa-link:before {
        content: "\f0c1";
    }

    .fa-cloud:before {
        content: "\f0c2";
    }

    .fa-flask:before {
        content: "\f0c3";
    }

    .fa-cut:before,
    .fa-scissors:before {
        content: "\f0c4";
    }

    .fa-copy:before,
    .fa-files-o:before {
        content: "\f0c5";
    }

    .fa-paperclip:before {
        content: "\f0c6";
    }

    .fa-save:before,
    .fa-floppy-o:before {
        content: "\f0c7";
    }

    .fa-square:before {
        content: "\f0c8";
    }

    .fa-navicon:before,
    .fa-reorder:before,
    .fa-bars:before {
        content: "\f0c9";
    }

    .fa-list-ul:before {
        content: "\f0ca";
    }

    .fa-list-ol:before {
        content: "\f0cb";
    }

    .fa-strikethrough:before {
        content: "\f0cc";
    }

    .fa-underline:before {
        content: "\f0cd";
    }

    .fa-table:before {
        content: "\f0ce";
    }

    .fa-magic:before {
        content: "\f0d0";
    }

    .fa-truck:before {
        content: "\f0d1";
    }

    .fa-pinterest:before {
        content: "\f0d2";
    }

    .fa-pinterest-square:before {
        content: "\f0d3";
    }

    .fa-google-plus-square:before {
        content: "\f0d4";
    }

    .fa-google-plus:before {
        content: "\f0d5";
    }

    .fa-money:before {
        content: "\f0d6";
    }

    .fa-caret-down:before {
        content: "\f0d7";
    }

    .fa-caret-up:before {
        content: "\f0d8";
    }

    .fa-caret-left:before {
        content: "\f0d9";
    }

    .fa-caret-right:before {
        content: "\f0da";
    }

    .fa-columns:before {
        content: "\f0db";
    }

    .fa-unsorted:before,
    .fa-sort:before {
        content: "\f0dc";
    }

    .fa-sort-down:before,
    .fa-sort-desc:before {
        content: "\f0dd";
    }

    .fa-sort-up:before,
    .fa-sort-asc:before {
        content: "\f0de";
    }

    .fa-envelope:before {
        content: "\f0e0";
    }

    .fa-linkedin:before {
        content: "\f0e1";
    }

    .fa-rotate-left:before,
    .fa-undo:before {
        content: "\f0e2";
    }

    .fa-legal:before,
    .fa-gavel:before {
        content: "\f0e3";
    }

    .fa-dashboard:before,
    .fa-tachometer:before {
        content: "\f0e4";
    }

    .fa-comment-o:before {
        content: "\f0e5";
    }

    .fa-comments-o:before {
        content: "\f0e6";
    }

    .fa-flash:before,
    .fa-bolt:before {
        content: "\f0e7";
    }

    .fa-sitemap:before {
        content: "\f0e8";
    }

    .fa-umbrella:before {
        content: "\f0e9";
    }

    .fa-paste:before,
    .fa-clipboard:before {
        content: "\f0ea";
    }

    .fa-lightbulb-o:before {
        content: "\f0eb";
    }

    .fa-exchange:before {
        content: "\f0ec";
    }

    .fa-cloud-download:before {
        content: "\f0ed";
    }

    .fa-cloud-upload:before {
        content: "\f0ee";
    }

    .fa-user-md:before {
        content: "\f0f0";
    }

    .fa-stethoscope:before {
        content: "\f0f1";
    }

    .fa-suitcase:before {
        content: "\f0f2";
    }

    .fa-bell-o:before {
        content: "\f0a2";
    }

    .fa-coffee:before {
        content: "\f0f4";
    }

    .fa-cutlery:before {
        content: "\f0f5";
    }

    .fa-file-text-o:before {
        content: "\f0f6";
    }

    .fa-building-o:before {
        content: "\f0f7";
    }

    .fa-hospital-o:before {
        content: "\f0f8";
    }

    .fa-ambulance:before {
        content: "\f0f9";
    }

    .fa-medkit:before {
        content: "\f0fa";
    }

    .fa-fighter-jet:before {
        content: "\f0fb";
    }

    .fa-beer:before {
        content: "\f0fc";
    }

    .fa-h-square:before {
        content: "\f0fd";
    }

    .fa-plus-square:before {
        content: "\f0fe";
    }

    .fa-angle-double-left:before {
        content: "\f100";
    }

    .fa-angle-double-right:before {
        content: "\f101";
    }

    .fa-angle-double-up:before {
        content: "\f102";
    }

    .fa-angle-double-down:before {
        content: "\f103";
    }

    .fa-angle-left:before {
        content: "\f104";
    }

    .fa-angle-right:before {
        content: "\f105";
    }

    .fa-angle-up:before {
        content: "\f106";
    }

    .fa-angle-down:before {
        content: "\f107";
    }

    .fa-desktop:before {
        content: "\f108";
    }

    .fa-laptop:before {
        content: "\f109";
    }

    .fa-tablet:before {
        content: "\f10a";
    }

    .fa-mobile-phone:before,
    .fa-mobile:before {
        content: "\f10b";
    }

    .fa-circle-o:before {
        content: "\f10c";
    }

    .fa-quote-left:before {
        content: "\f10d";
    }

    .fa-quote-right:before {
        content: "\f10e";
    }

    .fa-spinner:before {
        content: "\f110";
    }

    .fa-circle:before {
        content: "\f111";
    }

    .fa-mail-reply:before,
    .fa-reply:before {
        content: "\f112";
    }

    .fa-github-alt:before {
        content: "\f113";
    }

    .fa-folder-o:before {
        content: "\f114";
    }

    .fa-folder-open-o:before {
        content: "\f115";
    }

    .fa-smile-o:before {
        content: "\f118";
    }

    .fa-frown-o:before {
        content: "\f119";
    }

    .fa-meh-o:before {
        content: "\f11a";
    }

    .fa-gamepad:before {
        content: "\f11b";
    }

    .fa-keyboard-o:before {
        content: "\f11c";
    }

    .fa-flag-o:before {
        content: "\f11d";
    }

    .fa-flag-checkered:before {
        content: "\f11e";
    }

    .fa-terminal:before {
        content: "\f120";
    }

    .fa-code:before {
        content: "\f121";
    }

    .fa-mail-reply-all:before,
    .fa-reply-all:before {
        content: "\f122";
    }

    .fa-star-half-empty:before,
    .fa-star-half-full:before,
    .fa-star-half-o:before {
        content: "\f123";
    }

    .fa-location-arrow:before {
        content: "\f124";
    }

    .fa-crop:before {
        content: "\f125";
    }

    .fa-code-fork:before {
        content: "\f126";
    }

    .fa-unlink:before,
    .fa-chain-broken:before {
        content: "\f127";
    }

    .fa-question:before {
        content: "\f128";
    }

    .fa-info:before {
        content: "\f129";
    }

    .fa-exclamation:before {
        content: "\f12a";
    }

    .fa-superscript:before {
        content: "\f12b";
    }

    .fa-subscript:before {
        content: "\f12c";
    }

    .fa-eraser:before {
        content: "\f12d";
    }

    .fa-puzzle-piece:before {
        content: "\f12e";
    }

    .fa-microphone:before {
        content: "\f130";
    }

    .fa-microphone-slash:before {
        content: "\f131";
    }

    .fa-shield:before {
        content: "\f132";
    }

    .fa-calendar-o:before {
        content: "\f133";
    }

    .fa-fire-extinguisher:before {
        content: "\f134";
    }

    .fa-rocket:before {
        content: "\f135";
    }

    .fa-maxcdn:before {
        content: "\f136";
    }

    .fa-chevron-circle-left:before {
        content: "\f137";
    }

    .fa-chevron-circle-right:before {
        content: "\f138";
    }

    .fa-chevron-circle-up:before {
        content: "\f139";
    }

    .fa-chevron-circle-down:before {
        content: "\f13a";
    }

    .fa-html5:before {
        content: "\f13b";
    }

    .fa-css3:before {
        content: "\f13c";
    }

    .fa-anchor:before {
        content: "\f13d";
    }

    .fa-unlock-alt:before {
        content: "\f13e";
    }

    .fa-bullseye:before {
        content: "\f140";
    }

    .fa-ellipsis-h:before {
        content: "\f141";
    }

    .fa-ellipsis-v:before {
        content: "\f142";
    }

    .fa-rss-square:before {
        content: "\f143";
    }

    .fa-play-circle:before {
        content: "\f144";
    }

    .fa-ticket:before {
        content: "\f145";
    }

    .fa-minus-square:before {
        content: "\f146";
    }

    .fa-minus-square-o:before {
        content: "\f147";
    }

    .fa-level-up:before {
        content: "\f148";
    }

    .fa-level-down:before {
        content: "\f149";
    }

    .fa-check-square:before {
        content: "\f14a";
    }

    .fa-pencil-square:before {
        content: "\f14b";
    }

    .fa-external-link-square:before {
        content: "\f14c";
    }

    .fa-share-square:before {
        content: "\f14d";
    }

    .fa-compass:before {
        content: "\f14e";
    }

    .fa-toggle-down:before,
    .fa-caret-square-o-down:before {
        content: "\f150";
    }

    .fa-toggle-up:before,
    .fa-caret-square-o-up:before {
        content: "\f151";
    }

    .fa-toggle-right:before,
    .fa-caret-square-o-right:before {
        content: "\f152";
    }

    .fa-euro:before,
    .fa-eur:before {
        content: "\f153";
    }

    .fa-gbp:before {
        content: "\f154";
    }

    .fa-dollar:before,
    .fa-usd:before {
        content: "\f155";
    }

    .fa-rupee:before,
    .fa-inr:before {
        content: "\f156";
    }

    .fa-cny:before,
    .fa-rmb:before,
    .fa-yen:before,
    .fa-jpy:before {
        content: "\f157";
    }

    .fa-ruble:before,
    .fa-rouble:before,
    .fa-rub:before {
        content: "\f158";
    }

    .fa-won:before,
    .fa-krw:before {
        content: "\f159";
    }

    .fa-bitcoin:before,
    .fa-btc:before {
        content: "\f15a";
    }

    .fa-file:before {
        content: "\f15b";
    }

    .fa-file-text:before {
        content: "\f15c";
    }

    .fa-sort-alpha-asc:before {
        content: "\f15d";
    }

    .fa-sort-alpha-desc:before {
        content: "\f15e";
    }

    .fa-sort-amount-asc:before {
        content: "\f160";
    }

    .fa-sort-amount-desc:before {
        content: "\f161";
    }

    .fa-sort-numeric-asc:before {
        content: "\f162";
    }

    .fa-sort-numeric-desc:before {
        content: "\f163";
    }

    .fa-thumbs-up:before {
        content: "\f164";
    }

    .fa-thumbs-down:before {
        content: "\f165";
    }

    .fa-youtube-square:before {
        content: "\f166";
    }

    .fa-youtube:before {
        content: "\f167";
    }

    .fa-xing:before {
        content: "\f168";
    }

    .fa-xing-square:before {
        content: "\f169";
    }

    .fa-youtube-play:before {
        content: "\f16a";
    }

    .fa-dropbox:before {
        content: "\f16b";
    }

    .fa-stack-overflow:before {
        content: "\f16c";
    }

    .fa-instagram:before {
        content: "\f16d";
    }

    .fa-flickr:before {
        content: "\f16e";
    }

    .fa-adn:before {
        content: "\f170";
    }

    .fa-bitbucket:before {
        content: "\f171";
    }

    .fa-bitbucket-square:before {
        content: "\f172";
    }

    .fa-tumblr:before {
        content: "\f173";
    }

    .fa-tumblr-square:before {
        content: "\f174";
    }

    .fa-long-arrow-down:before {
        content: "\f175";
    }

    .fa-long-arrow-up:before {
        content: "\f176";
    }

    .fa-long-arrow-left:before {
        content: "\f177";
    }

    .fa-long-arrow-right:before {
        content: "\f178";
    }

    .fa-apple:before {
        content: "\f179";
    }

    .fa-windows:before {
        content: "\f17a";
    }

    .fa-android:before {
        content: "\f17b";
    }

    .fa-linux:before {
        content: "\f17c";
    }

    .fa-dribbble:before {
        content: "\f17d";
    }

    .fa-skype:before {
        content: "\f17e";
    }

    .fa-foursquare:before {
        content: "\f180";
    }

    .fa-trello:before {
        content: "\f181";
    }

    .fa-female:before {
        content: "\f182";
    }

    .fa-male:before {
        content: "\f183";
    }

    .fa-gittip:before,
    .fa-gratipay:before {
        content: "\f184";
    }

    .fa-sun-o:before {
        content: "\f185";
    }

    .fa-moon-o:before {
        content: "\f186";
    }

    .fa-archive:before {
        content: "\f187";
    }

    .fa-bug:before {
        content: "\f188";
    }

    .fa-vk:before {
        content: "\f189";
    }

    .fa-weibo:before {
        content: "\f18a";
    }

    .fa-renren:before {
        content: "\f18b";
    }

    .fa-pagelines:before {
        content: "\f18c";
    }

    .fa-stack-exchange:before {
        content: "\f18d";
    }

    .fa-arrow-circle-o-right:before {
        content: "\f18e";
    }

    .fa-arrow-circle-o-left:before {
        content: "\f190";
    }

    .fa-toggle-left:before,
    .fa-caret-square-o-left:before {
        content: "\f191";
    }

    .fa-dot-circle-o:before {
        content: "\f192";
    }

    .fa-wheelchair:before {
        content: "\f193";
    }

    .fa-vimeo-square:before {
        content: "\f194";
    }

    .fa-turkish-lira:before,
    .fa-try:before {
        content: "\f195";
    }

    .fa-plus-square-o:before {
        content: "\f196";
    }

    .fa-space-shuttle:before {
        content: "\f197";
    }

    .fa-slack:before {
        content: "\f198";
    }

    .fa-envelope-square:before {
        content: "\f199";
    }

    .fa-wordpress:before {
        content: "\f19a";
    }

    .fa-openid:before {
        content: "\f19b";
    }

    .fa-institution:before,
    .fa-bank:before,
    .fa-university:before {
        content: "\f19c";
    }

    .fa-mortar-board:before,
    .fa-graduation-cap:before {
        content: "\f19d";
    }

    .fa-yahoo:before {
        content: "\f19e";
    }

    .fa-google:before {
        content: "\f1a0";
    }

    .fa-reddit:before {
        content: "\f1a1";
    }

    .fa-reddit-square:before {
        content: "\f1a2";
    }

    .fa-stumbleupon-circle:before {
        content: "\f1a3";
    }

    .fa-stumbleupon:before {
        content: "\f1a4";
    }

    .fa-delicious:before {
        content: "\f1a5";
    }

    .fa-digg:before {
        content: "\f1a6";
    }

    .fa-pied-piper-pp:before {
        content: "\f1a7";
    }

    .fa-pied-piper-alt:before {
        content: "\f1a8";
    }

    .fa-drupal:before {
        content: "\f1a9";
    }

    .fa-joomla:before {
        content: "\f1aa";
    }

    .fa-language:before {
        content: "\f1ab";
    }

    .fa-fax:before {
        content: "\f1ac";
    }

    .fa-building:before {
        content: "\f1ad";
    }

    .fa-child:before {
        content: "\f1ae";
    }

    .fa-paw:before {
        content: "\f1b0";
    }

    .fa-spoon:before {
        content: "\f1b1";
    }

    .fa-cube:before {
        content: "\f1b2";
    }

    .fa-cubes:before {
        content: "\f1b3";
    }

    .fa-behance:before {
        content: "\f1b4";
    }

    .fa-behance-square:before {
        content: "\f1b5";
    }

    .fa-steam:before {
        content: "\f1b6";
    }

    .fa-steam-square:before {
        content: "\f1b7";
    }

    .fa-recycle:before {
        content: "\f1b8";
    }

    .fa-automobile:before,
    .fa-car:before {
        content: "\f1b9";
    }

    .fa-cab:before,
    .fa-taxi:before {
        content: "\f1ba";
    }

    .fa-tree:before {
        content: "\f1bb";
    }

    .fa-spotify:before {
        content: "\f1bc";
    }

    .fa-deviantart:before {
        content: "\f1bd";
    }

    .fa-soundcloud:before {
        content: "\f1be";
    }

    .fa-database:before {
        content: "\f1c0";
    }

    .fa-file-pdf-o:before {
        content: "\f1c1";
    }

    .fa-file-word-o:before {
        content: "\f1c2";
    }

    .fa-file-excel-o:before {
        content: "\f1c3";
    }

    .fa-file-powerpoint-o:before {
        content: "\f1c4";
    }

    .fa-file-photo-o:before,
    .fa-file-picture-o:before,
    .fa-file-image-o:before {
        content: "\f1c5";
    }

    .fa-file-zip-o:before,
    .fa-file-archive-o:before {
        content: "\f1c6";
    }

    .fa-file-sound-o:before,
    .fa-file-audio-o:before {
        content: "\f1c7";
    }

    .fa-file-movie-o:before,
    .fa-file-video-o:before {
        content: "\f1c8";
    }

    .fa-file-code-o:before {
        content: "\f1c9";
    }

    .fa-vine:before {
        content: "\f1ca";
    }

    .fa-codepen:before {
        content: "\f1cb";
    }

    .fa-jsfiddle:before {
        content: "\f1cc";
    }

    .fa-life-bouy:before,
    .fa-life-buoy:before,
    .fa-life-saver:before,
    .fa-support:before,
    .fa-life-ring:before {
        content: "\f1cd";
    }

    .fa-circle-o-notch:before {
        content: "\f1ce";
    }

    .fa-ra:before,
    .fa-resistance:before,
    .fa-rebel:before {
        content: "\f1d0";
    }

    .fa-ge:before,
    .fa-empire:before {
        content: "\f1d1";
    }

    .fa-git-square:before {
        content: "\f1d2";
    }

    .fa-git:before {
        content: "\f1d3";
    }

    .fa-y-combinator-square:before,
    .fa-yc-square:before,
    .fa-hacker-news:before {
        content: "\f1d4";
    }

    .fa-tencent-weibo:before {
        content: "\f1d5";
    }

    .fa-qq:before {
        content: "\f1d6";
    }

    .fa-wechat:before,
    .fa-weixin:before {
        content: "\f1d7";
    }

    .fa-send:before,
    .fa-paper-plane:before {
        content: "\f1d8";
    }

    .fa-send-o:before,
    .fa-paper-plane-o:before {
        content: "\f1d9";
    }

    .fa-history:before {
        content: "\f1da";
    }

    .fa-circle-thin:before {
        content: "\f1db";
    }

    .fa-header:before {
        content: "\f1dc";
    }

    .fa-paragraph:before {
        content: "\f1dd";
    }

    .fa-sliders:before {
        content: "\f1de";
    }

    .fa-share-alt:before {
        content: "\f1e0";
    }

    .fa-share-alt-square:before {
        content: "\f1e1";
    }

    .fa-bomb:before {
        content: "\f1e2";
    }

    .fa-soccer-ball-o:before,
    .fa-futbol-o:before {
        content: "\f1e3";
    }

    .fa-tty:before {
        content: "\f1e4";
    }

    .fa-binoculars:before {
        content: "\f1e5";
    }

    .fa-plug:before {
        content: "\f1e6";
    }

    .fa-slideshare:before {
        content: "\f1e7";
    }

    .fa-twitch:before {
        content: "\f1e8";
    }

    .fa-yelp:before {
        content: "\f1e9";
    }

    .fa-newspaper-o:before {
        content: "\f1ea";
    }

    .fa-wifi:before {
        content: "\f1eb";
    }

    .fa-calculator:before {
        content: "\f1ec";
    }

    .fa-paypal:before {
        content: "\f1ed";
    }

    .fa-google-wallet:before {
        content: "\f1ee";
    }

    .fa-cc-visa:before {
        content: "\f1f0";
    }

    .fa-cc-mastercard:before {
        content: "\f1f1";
    }

    .fa-cc-discover:before {
        content: "\f1f2";
    }

    .fa-cc-amex:before {
        content: "\f1f3";
    }

    .fa-cc-paypal:before {
        content: "\f1f4";
    }

    .fa-cc-stripe:before {
        content: "\f1f5";
    }

    .fa-bell-slash:before {
        content: "\f1f6";
    }

    .fa-bell-slash-o:before {
        content: "\f1f7";
    }

    .fa-trash:before {
        content: "\f1f8";
    }

    .fa-copyright:before {
        content: "\f1f9";
    }

    .fa-at:before {
        content: "\f1fa";
    }

    .fa-eyedropper:before {
        content: "\f1fb";
    }

    .fa-paint-brush:before {
        content: "\f1fc";
    }

    .fa-birthday-cake:before {
        content: "\f1fd";
    }

    .fa-area-chart:before {
        content: "\f1fe";
    }

    .fa-pie-chart:before {
        content: "\f200";
    }

    .fa-line-chart:before {
        content: "\f201";
    }

    .fa-lastfm:before {
        content: "\f202";
    }

    .fa-lastfm-square:before {
        content: "\f203";
    }

    .fa-toggle-off:before {
        content: "\f204";
    }

    .fa-toggle-on:before {
        content: "\f205";
    }

    .fa-bicycle:before {
        content: "\f206";
    }

    .fa-bus:before {
        content: "\f207";
    }

    .fa-ioxhost:before {
        content: "\f208";
    }

    .fa-angellist:before {
        content: "\f209";
    }

    .fa-cc:before {
        content: "\f20a";
    }

    .fa-shekel:before,
    .fa-sheqel:before,
    .fa-ils:before {
        content: "\f20b";
    }

    .fa-meanpath:before {
        content: "\f20c";
    }

    .fa-buysellads:before {
        content: "\f20d";
    }

    .fa-connectdevelop:before {
        content: "\f20e";
    }

    .fa-dashcube:before {
        content: "\f210";
    }

    .fa-forumbee:before {
        content: "\f211";
    }

    .fa-leanpub:before {
        content: "\f212";
    }

    .fa-sellsy:before {
        content: "\f213";
    }

    .fa-shirtsinbulk:before {
        content: "\f214";
    }

    .fa-simplybuilt:before {
        content: "\f215";
    }

    .fa-skyatlas:before {
        content: "\f216";
    }

    .fa-cart-plus:before {
        content: "\f217";
    }

    .fa-cart-arrow-down:before {
        content: "\f218";
    }

    .fa-diamond:before {
        content: "\f219";
    }

    .fa-ship:before {
        content: "\f21a";
    }

    .fa-user-secret:before {
        content: "\f21b";
    }

    .fa-motorcycle:before {
        content: "\f21c";
    }

    .fa-street-view:before {
        content: "\f21d";
    }

    .fa-heartbeat:before {
        content: "\f21e";
    }

    .fa-venus:before {
        content: "\f221";
    }

    .fa-mars:before {
        content: "\f222";
    }

    .fa-mercury:before {
        content: "\f223";
    }

    .fa-intersex:before,
    .fa-transgender:before {
        content: "\f224";
    }

    .fa-transgender-alt:before {
        content: "\f225";
    }

    .fa-venus-double:before {
        content: "\f226";
    }

    .fa-mars-double:before {
        content: "\f227";
    }

    .fa-venus-mars:before {
        content: "\f228";
    }

    .fa-mars-stroke:before {
        content: "\f229";
    }

    .fa-mars-stroke-v:before {
        content: "\f22a";
    }

    .fa-mars-stroke-h:before {
        content: "\f22b";
    }

    .fa-neuter:before {
        content: "\f22c";
    }

    .fa-genderless:before {
        content: "\f22d";
    }

    .fa-facebook-official:before {
        content: "\f230";
    }

    .fa-pinterest-p:before {
        content: "\f231";
    }

    .fa-whatsapp:before {
        content: "\f232";
    }

    .fa-server:before {
        content: "\f233";
    }

    .fa-user-plus:before {
        content: "\f234";
    }

    .fa-user-times:before {
        content: "\f235";
    }

    .fa-hotel:before,
    .fa-bed:before {
        content: "\f236";
    }

    .fa-viacoin:before {
        content: "\f237";
    }

    .fa-train:before {
        content: "\f238";
    }

    .fa-subway:before {
        content: "\f239";
    }

    .fa-medium:before {
        content: "\f23a";
    }

    .fa-yc:before,
    .fa-y-combinator:before {
        content: "\f23b";
    }

    .fa-optin-monster:before {
        content: "\f23c";
    }

    .fa-opencart:before {
        content: "\f23d";
    }

    .fa-expeditedssl:before {
        content: "\f23e";
    }

    .fa-battery-4:before,
    .fa-battery:before,
    .fa-battery-full:before {
        content: "\f240";
    }

    .fa-battery-3:before,
    .fa-battery-three-quarters:before {
        content: "\f241";
    }

    .fa-battery-2:before,
    .fa-battery-half:before {
        content: "\f242";
    }

    .fa-battery-1:before,
    .fa-battery-quarter:before {
        content: "\f243";
    }

    .fa-battery-0:before,
    .fa-battery-empty:before {
        content: "\f244";
    }

    .fa-mouse-pointer:before {
        content: "\f245";
    }

    .fa-i-cursor:before {
        content: "\f246";
    }

    .fa-object-group:before {
        content: "\f247";
    }

    .fa-object-ungroup:before {
        content: "\f248";
    }

    .fa-sticky-note:before {
        content: "\f249";
    }

    .fa-sticky-note-o:before {
        content: "\f24a";
    }

    .fa-cc-jcb:before {
        content: "\f24b";
    }

    .fa-cc-diners-club:before {
        content: "\f24c";
    }

    .fa-clone:before {
        content: "\f24d";
    }

    .fa-balance-scale:before {
        content: "\f24e";
    }

    .fa-hourglass-o:before {
        content: "\f250";
    }

    .fa-hourglass-1:before,
    .fa-hourglass-start:before {
        content: "\f251";
    }

    .fa-hourglass-2:before,
    .fa-hourglass-half:before {
        content: "\f252";
    }

    .fa-hourglass-3:before,
    .fa-hourglass-end:before {
        content: "\f253";
    }

    .fa-hourglass:before {
        content: "\f254";
    }

    .fa-hand-grab-o:before,
    .fa-hand-rock-o:before {
        content: "\f255";
    }

    .fa-hand-stop-o:before,
    .fa-hand-paper-o:before {
        content: "\f256";
    }

    .fa-hand-scissors-o:before {
        content: "\f257";
    }

    .fa-hand-lizard-o:before {
        content: "\f258";
    }

    .fa-hand-spock-o:before {
        content: "\f259";
    }

    .fa-hand-pointer-o:before {
        content: "\f25a";
    }

    .fa-hand-peace-o:before {
        content: "\f25b";
    }

    .fa-trademark:before {
        content: "\f25c";
    }

    .fa-registered:before {
        content: "\f25d";
    }

    .fa-creative-commons:before {
        content: "\f25e";
    }

    .fa-gg:before {
        content: "\f260";
    }

    .fa-gg-circle:before {
        content: "\f261";
    }

    .fa-tripadvisor:before {
        content: "\f262";
    }

    .fa-odnoklassniki:before {
        content: "\f263";
    }

    .fa-odnoklassniki-square:before {
        content: "\f264";
    }

    .fa-get-pocket:before {
        content: "\f265";
    }

    .fa-wikipedia-w:before {
        content: "\f266";
    }

    .fa-safari:before {
        content: "\f267";
    }

    .fa-chrome:before {
        content: "\f268";
    }

    .fa-firefox:before {
        content: "\f269";
    }

    .fa-opera:before {
        content: "\f26a";
    }

    .fa-internet-explorer:before {
        content: "\f26b";
    }

    .fa-tv:before,
    .fa-television:before {
        content: "\f26c";
    }

    .fa-contao:before {
        content: "\f26d";
    }

    .fa-500px:before {
        content: "\f26e";
    }

    .fa-amazon:before {
        content: "\f270";
    }

    .fa-calendar-plus-o:before {
        content: "\f271";
    }

    .fa-calendar-minus-o:before {
        content: "\f272";
    }

    .fa-calendar-times-o:before {
        content: "\f273";
    }

    .fa-calendar-check-o:before {
        content: "\f274";
    }

    .fa-industry:before {
        content: "\f275";
    }

    .fa-map-pin:before {
        content: "\f276";
    }

    .fa-map-signs:before {
        content: "\f277";
    }

    .fa-map-o:before {
        content: "\f278";
    }

    .fa-map:before {
        content: "\f279";
    }

    .fa-commenting:before {
        content: "\f27a";
    }

    .fa-commenting-o:before {
        content: "\f27b";
    }

    .fa-houzz:before {
        content: "\f27c";
    }

    .fa-vimeo:before {
        content: "\f27d";
    }

    .fa-black-tie:before {
        content: "\f27e";
    }

    .fa-fonticons:before {
        content: "\f280";
    }

    .fa-reddit-alien:before {
        content: "\f281";
    }

    .fa-edge:before {
        content: "\f282";
    }

    .fa-credit-card-alt:before {
        content: "\f283";
    }

    .fa-codiepie:before {
        content: "\f284";
    }

    .fa-modx:before {
        content: "\f285";
    }

    .fa-fort-awesome:before {
        content: "\f286";
    }

    .fa-usb:before {
        content: "\f287";
    }

    .fa-product-hunt:before {
        content: "\f288";
    }

    .fa-mixcloud:before {
        content: "\f289";
    }

    .fa-scribd:before {
        content: "\f28a";
    }

    .fa-pause-circle:before {
        content: "\f28b";
    }

    .fa-pause-circle-o:before {
        content: "\f28c";
    }

    .fa-stop-circle:before {
        content: "\f28d";
    }

    .fa-stop-circle-o:before {
        content: "\f28e";
    }

    .fa-shopping-bag:before {
        content: "\f290";
    }

    .fa-shopping-basket:before {
        content: "\f291";
    }

    .fa-hashtag:before {
        content: "\f292";
    }

    .fa-bluetooth:before {
        content: "\f293";
    }

    .fa-bluetooth-b:before {
        content: "\f294";
    }

    .fa-percent:before {
        content: "\f295";
    }

    .fa-gitlab:before {
        content: "\f296";
    }

    .fa-wpbeginner:before {
        content: "\f297";
    }

    .fa-wpforms:before {
        content: "\f298";
    }

    .fa-envira:before {
        content: "\f299";
    }

    .fa-universal-access:before {
        content: "\f29a";
    }

    .fa-wheelchair-alt:before {
        content: "\f29b";
    }

    .fa-question-circle-o:before {
        content: "\f29c";
    }

    .fa-blind:before {
        content: "\f29d";
    }

    .fa-audio-description:before {
        content: "\f29e";
    }

    .fa-volume-control-phone:before {
        content: "\f2a0";
    }

    .fa-braille:before {
        content: "\f2a1";
    }

    .fa-assistive-listening-systems:before {
        content: "\f2a2";
    }

    .fa-asl-interpreting:before,
    .fa-american-sign-language-interpreting:before {
        content: "\f2a3";
    }

    .fa-deafness:before,
    .fa-hard-of-hearing:before,
    .fa-deaf:before {
        content: "\f2a4";
    }

    .fa-glide:before {
        content: "\f2a5";
    }

    .fa-glide-g:before {
        content: "\f2a6";
    }

    .fa-signing:before,
    .fa-sign-language:before {
        content: "\f2a7";
    }

    .fa-low-vision:before {
        content: "\f2a8";
    }

    .fa-viadeo:before {
        content: "\f2a9";
    }

    .fa-viadeo-square:before {
        content: "\f2aa";
    }

    .fa-snapchat:before {
        content: "\f2ab";
    }

    .fa-snapchat-ghost:before {
        content: "\f2ac";
    }

    .fa-snapchat-square:before {
        content: "\f2ad";
    }

    .fa-pied-piper:before {
        content: "\f2ae";
    }

    .fa-first-order:before {
        content: "\f2b0";
    }

    .fa-yoast:before {
        content: "\f2b1";
    }

    .fa-themeisle:before {
        content: "\f2b2";
    }

    .fa-google-plus-circle:before,
    .fa-google-plus-official:before {
        content: "\f2b3";
    }

    .fa-fa:before,
    .fa-font-awesome:before {
        content: "\f2b4";
    }

    .fa-handshake-o:before {
        content: "\f2b5";
    }

    .fa-envelope-open:before {
        content: "\f2b6";
    }

    .fa-envelope-open-o:before {
        content: "\f2b7";
    }

    .fa-linode:before {
        content: "\f2b8";
    }

    .fa-address-book:before {
        content: "\f2b9";
    }

    .fa-address-book-o:before {
        content: "\f2ba";
    }

    .fa-vcard:before,
    .fa-address-card:before {
        content: "\f2bb";
    }

    .fa-vcard-o:before,
    .fa-address-card-o:before {
        content: "\f2bc";
    }

    .fa-user-circle:before {
        content: "\f2bd";
    }

    .fa-user-circle-o:before {
        content: "\f2be";
    }

    .fa-user-o:before {
        content: "\f2c0";
    }

    .fa-id-badge:before {
        content: "\f2c1";
    }

    .fa-drivers-license:before,
    .fa-id-card:before {
        content: "\f2c2";
    }

    .fa-drivers-license-o:before,
    .fa-id-card-o:before {
        content: "\f2c3";
    }

    .fa-quora:before {
        content: "\f2c4";
    }

    .fa-free-code-camp:before {
        content: "\f2c5";
    }

    .fa-telegram:before {
        content: "\f2c6";
    }

    .fa-thermometer-4:before,
    .fa-thermometer:before,
    .fa-thermometer-full:before {
        content: "\f2c7";
    }

    .fa-thermometer-3:before,
    .fa-thermometer-three-quarters:before {
        content: "\f2c8";
    }

    .fa-thermometer-2:before,
    .fa-thermometer-half:before {
        content: "\f2c9";
    }

    .fa-thermometer-1:before,
    .fa-thermometer-quarter:before {
        content: "\f2ca";
    }

    .fa-thermometer-0:before,
    .fa-thermometer-empty:before {
        content: "\f2cb";
    }

    .fa-shower:before {
        content: "\f2cc";
    }

    .fa-bathtub:before,
    .fa-s15:before,
    .fa-bath:before {
        content: "\f2cd";
    }

    .fa-podcast:before {
        content: "\f2ce";
    }

    .fa-window-maximize:before {
        content: "\f2d0";
    }

    .fa-window-minimize:before {
        content: "\f2d1";
    }

    .fa-window-restore:before {
        content: "\f2d2";
    }

    .fa-times-rectangle:before,
    .fa-window-close:before {
        content: "\f2d3";
    }

    .fa-times-rectangle-o:before,
    .fa-window-close-o:before {
        content: "\f2d4";
    }

    .fa-bandcamp:before {
        content: "\f2d5";
    }

    .fa-grav:before {
        content: "\f2d6";
    }

    .fa-etsy:before {
        content: "\f2d7";
    }

    .fa-imdb:before {
        content: "\f2d8";
    }

    .fa-ravelry:before {
        content: "\f2d9";
    }

    .fa-eercast:before {
        content: "\f2da";
    }

    .fa-microchip:before {
        content: "\f2db";
    }

    .fa-snowflake-o:before {
        content: "\f2dc";
    }

    .fa-superpowers:before {
        content: "\f2dd";
    }

    .fa-wpexplorer:before {
        content: "\f2de";
    }

    .fa-meetup:before {
        content: "\f2e0";
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0;
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        clip: auto;
    }
    </style>
    <style>
    [_nghost-wuu-c0] {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 14px;
        color: #333;
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    </style>
    <script charset="utf-8" src="<?php echo base_url(); ?>assets/systemfiles/components-core-core-module-es2015.js">
    </script>
    <style>
    .container-main[_ngcontent-wuu-c1] {
        position: relative;
        min-height: 100vh;
    }

    .container-main[_ngcontent-wuu-c1] .overlay[_ngcontent-wuu-c1] {
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        min-height: 100vh;
    }

    .full-width-80[_ngcontent-wuu-c1] {
        width: 70%;
    }

    .form-container[_ngcontent-wuu-c1] {
        background: white;
        padding: 20px 20px 80px;
        border-radius: 10px;
    }

    .welcome-msg[_ngcontent-wuu-c1] {
        font-size: 18px;
        text-align: center;
        font-weight: 300;
        margin: 30px auto 20px;
    }

    [class*=col-][_ngcontent-wuu-c1] {
        padding: 0;
    }

    [class*=row][_ngcontent-wuu-c1] {
        margin: 0;
    }

    .passport[_ngcontent-wuu-c1] {
        top: 50%;
    }

    .letter-container[_ngcontent-wuu-c1] {
        border: 1px solid #ccc;
        margin: 60px auto;
        width: 90%;
        padding: 20px 0;
    }

    .applicant[_ngcontent-wuu-c1] {
        box-shadow: 0 0 5px 1px #ccc;
        padding: 30px;
        margin: 30px 0;
    }

    .slip-loader[_ngcontent-wuu-c1] {
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
    }

    .left-form-el[_ngcontent-wuu-c1] {
        font-weight: 500;
    }

    .right-form-el[_ngcontent-wuu-c1] {
        font-weight: bold;
    }

    .confirm-container[_ngcontent-wuu-c1] {
        padding: 15px;
    }

    .form-container[_ngcontent-wuu-c1] {
        padding: 20px 0;
        width: 80%;
        margin: 20px auto;
    }

    @media screen and (max-width: 500px) {
        .form-container[_ngcontent-wuu-c1] {
            padding: 0;
            width: 100%;
            margin: 0;
        }
    }
    </style>
    <style>
    .mat-progress-spinner {
        display: block;
        position: relative
    }

    .mat-progress-spinner svg {
        position: absolute;
        transform: rotate(-90deg);
        top: 0;
        left: 0;
        transform-origin: center;
        overflow: visible
    }

    .mat-progress-spinner circle {
        fill: transparent;
        transform-origin: center;
        transition: stroke-dashoffset 225ms linear
    }

    ._mat-animation-noopable.mat-progress-spinner circle {
        transition: none;
        animation: none
    }

    .mat-progress-spinner.mat-progress-spinner-indeterminate-animation[mode=indeterminate] {
        animation: mat-progress-spinner-linear-rotate 2s linear infinite
    }

    ._mat-animation-noopable.mat-progress-spinner.mat-progress-spinner-indeterminate-animation[mode=indeterminate] {
        transition: none;
        animation: none
    }

    .mat-progress-spinner.mat-progress-spinner-indeterminate-animation[mode=indeterminate] circle {
        transition-property: stroke;
        animation-duration: 4s;
        animation-timing-function: cubic-bezier(.35, 0, .25, 1);
        animation-iteration-count: infinite
    }

    ._mat-animation-noopable.mat-progress-spinner.mat-progress-spinner-indeterminate-animation[mode=indeterminate] circle {
        transition: none;
        animation: none
    }

    .mat-progress-spinner.mat-progress-spinner-indeterminate-fallback-animation[mode=indeterminate] {
        animation: mat-progress-spinner-stroke-rotate-fallback 10s cubic-bezier(.87, .03, .33, 1) infinite
    }

    ._mat-animation-noopable.mat-progress-spinner.mat-progress-spinner-indeterminate-fallback-animation[mode=indeterminate] {
        transition: none;
        animation: none
    }

    .mat-progress-spinner.mat-progress-spinner-indeterminate-fallback-animation[mode=indeterminate] circle {
        transition-property: stroke
    }

    ._mat-animation-noopable.mat-progress-spinner.mat-progress-spinner-indeterminate-fallback-animation[mode=indeterminate] circle {
        transition: none;
        animation: none
    }

    @keyframes mat-progress-spinner-linear-rotate {
        0% {
            transform: rotate(0)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    @keyframes mat-progress-spinner-stroke-rotate-100 {
        0% {
            stroke-dashoffset: 268.60617px;
            transform: rotate(0)
        }

        12.5% {
            stroke-dashoffset: 56.54867px;
            transform: rotate(0)
        }

        12.5001% {
            stroke-dashoffset: 56.54867px;
            transform: rotateX(180deg) rotate(72.5deg)
        }

        25% {
            stroke-dashoffset: 268.60617px;
            transform: rotateX(180deg) rotate(72.5deg)
        }

        25.0001% {
            stroke-dashoffset: 268.60617px;
            transform: rotate(270deg)
        }

        37.5% {
            stroke-dashoffset: 56.54867px;
            transform: rotate(270deg)
        }

        37.5001% {
            stroke-dashoffset: 56.54867px;
            transform: rotateX(180deg) rotate(161.5deg)
        }

        50% {
            stroke-dashoffset: 268.60617px;
            transform: rotateX(180deg) rotate(161.5deg)
        }

        50.0001% {
            stroke-dashoffset: 268.60617px;
            transform: rotate(180deg)
        }

        62.5% {
            stroke-dashoffset: 56.54867px;
            transform: rotate(180deg)
        }

        62.5001% {
            stroke-dashoffset: 56.54867px;
            transform: rotateX(180deg) rotate(251.5deg)
        }

        75% {
            stroke-dashoffset: 268.60617px;
            transform: rotateX(180deg) rotate(251.5deg)
        }

        75.0001% {
            stroke-dashoffset: 268.60617px;
            transform: rotate(90deg)
        }

        87.5% {
            stroke-dashoffset: 56.54867px;
            transform: rotate(90deg)
        }

        87.5001% {
            stroke-dashoffset: 56.54867px;
            transform: rotateX(180deg) rotate(341.5deg)
        }

        100% {
            stroke-dashoffset: 268.60617px;
            transform: rotateX(180deg) rotate(341.5deg)
        }
    }

    @keyframes mat-progress-spinner-stroke-rotate-fallback {
        0% {
            transform: rotate(0)
        }

        25% {
            transform: rotate(1170deg)
        }

        50% {
            transform: rotate(2340deg)
        }

        75% {
            transform: rotate(3510deg)
        }

        100% {
            transform: rotate(4680deg)
        }
    }
    </style>
    <style mat-spinner-animation="40">
    @keyframes mat-progress-spinner-stroke-rotate-40 {
        0% {
            stroke-dashoffset: 89.5353906273091;
            transform: rotate(0);
        }

        12.5% {
            stroke-dashoffset: 18.84955592153876;
            transform: rotate(0);
        }

        12.5001% {
            stroke-dashoffset: 18.84955592153876;
            transform: rotateX(180deg) rotate(72.5deg);
        }

        25% {
            stroke-dashoffset: 89.5353906273091;
            transform: rotateX(180deg) rotate(72.5deg);
        }

        25.0001% {
            stroke-dashoffset: 89.5353906273091;
            transform: rotate(270deg);
        }

        37.5% {
            stroke-dashoffset: 18.84955592153876;
            transform: rotate(270deg);
        }

        37.5001% {
            stroke-dashoffset: 18.84955592153876;
            transform: rotateX(180deg) rotate(161.5deg);
        }

        50% {
            stroke-dashoffset: 89.5353906273091;
            transform: rotateX(180deg) rotate(161.5deg);
        }

        50.0001% {
            stroke-dashoffset: 89.5353906273091;
            transform: rotate(180deg);
        }

        62.5% {
            stroke-dashoffset: 18.84955592153876;
            transform: rotate(180deg);
        }

        62.5001% {
            stroke-dashoffset: 18.84955592153876;
            transform: rotateX(180deg) rotate(251.5deg);
        }

        75% {
            stroke-dashoffset: 89.5353906273091;
            transform: rotateX(180deg) rotate(251.5deg);
        }

        75.0001% {
            stroke-dashoffset: 89.5353906273091;
            transform: rotate(90deg);
        }

        87.5% {
            stroke-dashoffset: 18.84955592153876;
            transform: rotate(90deg);
        }

        87.5001% {
            stroke-dashoffset: 18.84955592153876;
            transform: rotateX(180deg) rotate(341.5deg);
        }

        100% {
            stroke-dashoffset: 89.5353906273091;
            transform: rotateX(180deg) rotate(341.5deg);
        }
    }
    </style>
    <style>
    .mat-icon {
        background-repeat: no-repeat;
        display: inline-block;
        fill: currentColor;
        height: 24px;
        width: 24px
    }

    .mat-icon.mat-icon-inline {
        font-size: inherit;
        height: inherit;
        line-height: inherit;
        width: inherit
    }

    [dir=rtl] .mat-icon-rtl-mirror {
        transform: scale(-1, 1)
    }

    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon,
    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon {
        display: block
    }

    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button .mat-icon,
    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button .mat-icon {
        margin: auto
    }
    </style>
    <style>
    .mat-button .mat-button-focus-overlay,
    .mat-icon-button .mat-button-focus-overlay {
        opacity: 0
    }

    .mat-button:hover .mat-button-focus-overlay,
    .mat-stroked-button:hover .mat-button-focus-overlay {
        opacity: .04
    }

    @media (hover:none) {

        .mat-button:hover .mat-button-focus-overlay,
        .mat-stroked-button:hover .mat-button-focus-overlay {
            opacity: 0
        }
    }

    .mat-button,
    .mat-flat-button,
    .mat-icon-button,
    .mat-stroked-button {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: 0;
        border: none;
        -webkit-tap-highlight-color: transparent;
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 64px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 4px;
        overflow: visible
    }

    .mat-button::-moz-focus-inner,
    .mat-flat-button::-moz-focus-inner,
    .mat-icon-button::-moz-focus-inner,
    .mat-stroked-button::-moz-focus-inner {
        border: 0
    }

    .mat-button[disabled],
    .mat-flat-button[disabled],
    .mat-icon-button[disabled],
    .mat-stroked-button[disabled] {
        cursor: default
    }

    .mat-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-button.cdk-program-focused .mat-button-focus-overlay,
    .mat-flat-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-flat-button.cdk-program-focused .mat-button-focus-overlay,
    .mat-icon-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-icon-button.cdk-program-focused .mat-button-focus-overlay,
    .mat-stroked-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-stroked-button.cdk-program-focused .mat-button-focus-overlay {
        opacity: .12
    }

    .mat-button::-moz-focus-inner,
    .mat-flat-button::-moz-focus-inner,
    .mat-icon-button::-moz-focus-inner,
    .mat-stroked-button::-moz-focus-inner {
        border: 0
    }

    .mat-raised-button {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: 0;
        border: none;
        -webkit-tap-highlight-color: transparent;
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 64px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 4px;
        overflow: visible;
        transform: translate3d(0, 0, 0);
        transition: background .4s cubic-bezier(.25, .8, .25, 1), box-shadow 280ms cubic-bezier(.4, 0, .2, 1)
    }

    .mat-raised-button::-moz-focus-inner {
        border: 0
    }

    .mat-raised-button[disabled] {
        cursor: default
    }

    .mat-raised-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-raised-button.cdk-program-focused .mat-button-focus-overlay {
        opacity: .12
    }

    .mat-raised-button::-moz-focus-inner {
        border: 0
    }

    ._mat-animation-noopable.mat-raised-button {
        transition: none;
        animation: none
    }

    .mat-stroked-button {
        border: 1px solid currentColor;
        padding: 0 15px;
        line-height: 34px
    }

    .mat-stroked-button .mat-button-focus-overlay,
    .mat-stroked-button .mat-button-ripple.mat-ripple {
        top: -1px;
        left: -1px;
        right: -1px;
        bottom: -1px
    }

    .mat-fab {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: 0;
        border: none;
        -webkit-tap-highlight-color: transparent;
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 64px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 4px;
        overflow: visible;
        transform: translate3d(0, 0, 0);
        transition: background .4s cubic-bezier(.25, .8, .25, 1), box-shadow 280ms cubic-bezier(.4, 0, .2, 1);
        min-width: 0;
        border-radius: 50%;
        width: 56px;
        height: 56px;
        padding: 0;
        flex-shrink: 0
    }

    .mat-fab::-moz-focus-inner {
        border: 0
    }

    .mat-fab[disabled] {
        cursor: default
    }

    .mat-fab.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-fab.cdk-program-focused .mat-button-focus-overlay {
        opacity: .12
    }

    .mat-fab::-moz-focus-inner {
        border: 0
    }

    ._mat-animation-noopable.mat-fab {
        transition: none;
        animation: none
    }

    .mat-fab .mat-button-wrapper {
        padding: 16px 0;
        display: inline-block;
        line-height: 24px
    }

    .mat-mini-fab {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: 0;
        border: none;
        -webkit-tap-highlight-color: transparent;
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 64px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 4px;
        overflow: visible;
        transform: translate3d(0, 0, 0);
        transition: background .4s cubic-bezier(.25, .8, .25, 1), box-shadow 280ms cubic-bezier(.4, 0, .2, 1);
        min-width: 0;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        padding: 0;
        flex-shrink: 0
    }

    .mat-mini-fab::-moz-focus-inner {
        border: 0
    }

    .mat-mini-fab[disabled] {
        cursor: default
    }

    .mat-mini-fab.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-mini-fab.cdk-program-focused .mat-button-focus-overlay {
        opacity: .12
    }

    .mat-mini-fab::-moz-focus-inner {
        border: 0
    }

    ._mat-animation-noopable.mat-mini-fab {
        transition: none;
        animation: none
    }

    .mat-mini-fab .mat-button-wrapper {
        padding: 8px 0;
        display: inline-block;
        line-height: 24px
    }

    .mat-icon-button {
        padding: 0;
        min-width: 0;
        width: 40px;
        height: 40px;
        flex-shrink: 0;
        line-height: 40px;
        border-radius: 50%
    }

    .mat-icon-button .mat-icon,
    .mat-icon-button i {
        line-height: 24px
    }

    .mat-button-focus-overlay,
    .mat-button-ripple.mat-ripple {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        pointer-events: none;
        border-radius: inherit
    }

    .mat-button-ripple.mat-ripple:not(:empty) {
        transform: translateZ(0)
    }

    .mat-button-focus-overlay {
        opacity: 0;
        transition: opacity .2s cubic-bezier(.35, 0, .25, 1), background-color .2s cubic-bezier(.35, 0, .25, 1)
    }

    ._mat-animation-noopable .mat-button-focus-overlay {
        transition: none
    }

    @media (-ms-high-contrast:active) {
        .mat-button-focus-overlay {
            background-color: #fff
        }
    }

    @media (-ms-high-contrast:black-on-white) {
        .mat-button-focus-overlay {
            background-color: #000
        }
    }

    .mat-button-ripple-round {
        border-radius: 50%;
        z-index: 1
    }

    .mat-button .mat-button-wrapper>*,
    .mat-fab .mat-button-wrapper>*,
    .mat-flat-button .mat-button-wrapper>*,
    .mat-icon-button .mat-button-wrapper>*,
    .mat-mini-fab .mat-button-wrapper>*,
    .mat-raised-button .mat-button-wrapper>*,
    .mat-stroked-button .mat-button-wrapper>* {
        vertical-align: middle
    }

    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button,
    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button {
        display: block;
        font-size: inherit;
        width: 2.5em;
        height: 2.5em
    }

    @media (-ms-high-contrast:active) {

        .mat-button,
        .mat-fab,
        .mat-flat-button,
        .mat-icon-button,
        .mat-mini-fab,
        .mat-raised-button {
            outline: solid 1px
        }
    }
    </style>
</head>

<body>
    <app-root _nghost-wuu-c0="" ng-version="8.2.7">
        <div _ngcontent-wuu-c0="" class="contner">
            <router-outlet _ngcontent-wuu-c0=""></router-outlet>
            <app-verify-page _nghost-wuu-c1="">
                <div _ngcontent-wuu-c1="" class="container-main">
                    <div _ngcontent-wuu-c1="" class="overlay">
                        <div _ngcontent-wuu-c1="" style="font-size: x-large;">
                            <!--bindings={
  "ng-reflect-ng-if": "false"
}-->
                        </div>
                        <!--bindings={}-->
                        <!--bindings={
  "ng-reflect-ng-if": "[object Object]"
}-->


                        <!-- Part to be editted -->
                        <div _ngcontent-wuu-c1="" class="form-container">
                            <!-- 1 -->
                            <div _ngcontent-wuu-c1="" class="confirm-container">
                                <div _ngcontent-wuu-c1="" class="flex-el has-text-primary" routerlink="/"
                                    style="margin: 10px auto;font-size:large; cursor: pointer;" tabindex="0"
                                    ng-reflect-router-link="/">
                                    <mat-icon _ngcontent-wuu-c1=""
                                        class="mat-icon notranslate material-icons mat-icon-no-color" role="img"
                                        aria-hidden="true">keyboard_arrow_left</mat-icon> &nbsp;
                                    <div _ngcontent-wuu-c1="">Return Home</div>
                                </div>
                                <!-- 2 -->
                                <div _ngcontent-wuu-c1="" class="text-center"
                                    style="display: flex; justify-content: center;">
                                    <img _ngcontent-wuu-c1="" alt=""
                                        src="<?php echo base_url(); ?>assets/systemfiles/attestation-logo.png"
                                        width="120">
                                </div>
                                <!-- 3 -->
                                <div _ngcontent-wuu-c1="" class="pt-4" style="font-weight: bold; text-align: center;">
                                    <div _ngcontent-wuu-c1="" style="font-weight: bold; font-size: 18px;">FEDERAL
                                        MINISTRY OF EDUCATION</div>
                                    <div _ngcontent-wuu-c1="" style="font-weight: bold;">EDUCATION SUPPORT SERVICES
                                        (ESS) DEPARTMENT</div>
                                    <div _ngcontent-wuu-c1="" style="font-weight: 300;">EVALUATION AND ACCREDITATION
                                        DIVISION</div>
                                </div>
                                <!-- 4 -->
                                <div _ngcontent-wuu-c1="" class="pt-4"
                                    style="text-align: center; flex:none ;display: flex; justify-content: center;">
                                    <div _ngcontent-wuu-c1="" class="flex-el">
                                        <mat-icon _ngcontent-wuu-c1=""
                                            class="mat-icon notranslate mat-primary material-icons" color="primary"
                                            role="img" aria-hidden="true" ng-reflect-color="primary">check_circle
                                        </mat-icon> &nbsp;
                                        <div _ngcontent-wuu-c1="" style="font-size: x-large;">Certified Document</div>
                                    </div>
                                </div> &nbsp; &nbsp;
                                <!-- 5 -->
                                <div _ngcontent-wuu-c1="" class="pt-4"></div>
                                <div _ngcontent-wuu-c1="" class="flex-center responsive">
                                    <!-- Can change -->
                                    <div _ngcontent-wuu-c1="" class="left-form-el"> Document Number:</div>
                                    <div _ngcontent-wuu-c1="" class="border-bottom right-form-el">
                                        <!-- Can change -->
                                        <div _ngcontent-wuu-c1=""><?php echo $documentinfo -> DocumentNumber;?></div>
                                    </div>
                                </div> &nbsp;
                                <!-- 6 -->
                                <div _ngcontent-wuu-c1="" class="flex-center responsive">
                                    <!-- Can change -->
                                    <div _ngcontent-wuu-c1="" class=" left-form-el"> Document owner name: </div>
                                    <!-- Can change -->
                                    <div _ngcontent-wuu-c1="" class="border-bottom right-form-el">
                                        <div _ngcontent-wuu-c1=""><?php echo $documentinfo -> DocumentOwner;?></div>
                                    </div>
                                    <!-- 7 -->
                                </div> &nbsp;

                                <!-- 02 -->
                                <div _ngcontent-wuu-c1="" class=" flex-center responsive">
                                    <div _ngcontent-wuu-c1="" class=" left-form-el"> Type of Application: </div>
                                    <div _ngcontent-wuu-c1="" class="border-bottom right-form-el">
                                        <!-- Can change (application type)-->
                                        <div _ngcontent-wuu-c1=""><?php echo $documentinfo -> ApplicationType;?> </div>
                                    </div>
                                </div> &nbsp;
                                <!-- 03 -->
                                <div _ngcontent-wuu-c1="">
                                    <!-- 03.1 -->
                                    <div _ngcontent-wuu-c1="" class="flex-center responsive">
                                        <div _ngcontent-wuu-c1="" class=" left-form-el"> Verification date: </div>
                                        <!-- Can change (date)-->
                                        <div _ngcontent-wuu-c1="" class="border-bottom right-form-el">
                                            <?php echo $documentinfo -> VerificationDate;?> </div>
                                    </div> &nbsp;
                                    <!-- 03.2 -->
                                    <div _ngcontent-wuu-c1="" class="flex-center responsive">
                                        <div _ngcontent-wuu-c1="" class="left-form-el"> Documents: </div>
                                        <div _ngcontent-wuu-c1="" class="border-bottom right-form-el">
                                            <!-- start section for a document -->
                                            <div _ngcontent-wuu-c1="" class="flex-el" style="margin-bottom: 10px;">
                                                <!-- Can change (document type)-->
                                                <div _ngcontent-wuu-c1="">
                                                    <?php echo $documentinfo -> DocumentName;?></div> &nbsp;
                                                <div _ngcontent-wuu-c1="">
                                                    <!--  To open document in new file when the button is clicked -->
                                                    <button _ngcontent-wuu-c1="" color="primary" mat-button=""
                                                        class="mat-button mat-button-base mat-primary"
                                                        ng-reflect-color="primary"
                                                        onclick="window.open('<?php echo base_url(); ?>assets/documents/<?php echo $documentinfo -> Document;?>','_blank')">
                                                        <span class="mat-button-wrapper"> View </span>
                                                        <div class="mat-button-ripple mat-ripple" matripple=""
                                                            ng-reflect-centered="false" ng-reflect-disabled="false"
                                                            ng-reflect-trigger="[object HTMLButtonElement]"></div>
                                                        <div class="mat-button-focus-overlay"></div>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- end section for a document -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </app-verify-page>
        </div>
    </app-root>

    <!-- End of section to be eddited-->
    <!-- Site Scripts -->

    <!--
<script src="<?php echo base_url(); ?>assets/systemfiles/runtime-es2015.js" type="module"></script>
<script src="<?php echo base_url(); ?>assets/systemfiles/runtime-es5.js" nomodule="" defer="defer"></script>
<script src="<?php echo base_url(); ?>assets/systemfiles/polyfills-es5.js" nomodule="" defer="defer"></script>
<script src="<?php echo base_url(); ?>assets/systemfiles/polyfills-es2015.js" type="module"></script>
<script src="<?php echo base_url(); ?>assets/systemfiles/styles-es2015.js" type="module"></script>
<script src="<?php echo base_url(); ?>assets/systemfiles/styles-es5.js" nomodule="" defer="defer"></script>
<script src="<?php echo base_url(); ?>assets/systemfiles/vendor-es2015.js" type="module"></script>
<script src="<?php echo base_url(); ?>assets/systemfiles/vendor-es5.js" nomodule="" defer="defer"></script>
<script src="<?php echo base_url(); ?>assets/systemfiles/main-es2015.js" type="module"></script>
<script src="<?php echo base_url(); ?>assets/systemfiles/main-es5.js" nomodule="" defer="defer"></script>
-->
    <!--
<script src="<?php echo base_url(); ?>assets/system_files/runtime-es2015.js" type="module"></script>
<script src="<?php echo base_url(); ?>assets/system_files/runtime-es5.js" nomodule="" defer="defer"></script>
<script src="<?php echo base_url(); ?>assets/system_files/polyfills-es5.js" nomodule="" defer="defer"></script>
<script src="<?php echo base_url(); ?>assets/system_files/polyfills-es2015.js" type="module"></script>
<script src="<?php echo base_url(); ?>assets/system_files/styles-es2015.js" type="module"></script>
<script src="<?php echo base_url(); ?>assets/system_files/styles-es5.js" nomodule="" defer="defer"></script>
<script src="<?php echo base_url(); ?>assets/system_files/vendor-es2015.js" type="module"></script>
<script src="<?php echo base_url(); ?>assets/system_files/vendor-es5.js" nomodule="" defer="defer"></script>
<script src="<?php echo base_url(); ?>assets/system_files/main-es2015.js" type="module"></script>
<script src="<?php echo base_url(); ?>assets/system_files/main-es5.js" nomodule="" defer="defer"></script>
-->

</body>

</html>