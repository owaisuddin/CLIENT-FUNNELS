@extends('layouts.app')
<style>
    @-webkit-keyframes swal2-show {
        0% {
            -webkit-transform: scale(0.7);
            transform: scale(0.7);
        }
        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
        }
        80% {
            -webkit-transform: scale(0.95);
            transform: scale(0.95);
        }
        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes swal2-show {
        0% {
            -webkit-transform: scale(0.7);
            transform: scale(0.7);
        }
        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
        }
        80% {
            -webkit-transform: scale(0.95);
            transform: scale(0.95);
        }
        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @-webkit-keyframes swal2-hide {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
        100% {
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
            opacity: 0;
        }
    }

    @keyframes swal2-hide {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
        100% {
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
            opacity: 0;
        }
    }

    @-webkit-keyframes swal2-animate-success-line-tip {
        0% {
            top: 1.1875em;
            left: .0625em;
            width: 0;
        }
        54% {
            top: 1.0625em;
            left: .125em;
            width: 0;
        }
        70% {
            top: 2.1875em;
            left: -.375em;
            width: 3.125em;
        }
        84% {
            top: 3em;
            left: 1.3125em;
            width: 1.0625em;
        }
        100% {
            top: 2.8125em;
            left: .875em;
            width: 1.5625em;
        }
    }

    @keyframes swal2-animate-success-line-tip {
        0% {
            top: 1.1875em;
            left: .0625em;
            width: 0;
        }
        54% {
            top: 1.0625em;
            left: .125em;
            width: 0;
        }
        70% {
            top: 2.1875em;
            left: -.375em;
            width: 3.125em;
        }
        84% {
            top: 3em;
            left: 1.3125em;
            width: 1.0625em;
        }
        100% {
            top: 2.8125em;
            left: .875em;
            width: 1.5625em;
        }
    }

    @-webkit-keyframes swal2-animate-success-line-long {
        0% {
            top: 3.375em;
            right: 2.875em;
            width: 0;
        }
        65% {
            top: 3.375em;
            right: 2.875em;
            width: 0;
        }
        84% {
            top: 2.1875em;
            right: 0;
            width: 3.4375em;
        }
        100% {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
        }
    }

    @keyframes swal2-animate-success-line-long {
        0% {
            top: 3.375em;
            right: 2.875em;
            width: 0;
        }
        65% {
            top: 3.375em;
            right: 2.875em;
            width: 0;
        }
        84% {
            top: 2.1875em;
            right: 0;
            width: 3.4375em;
        }
        100% {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
        }
    }

    @-webkit-keyframes swal2-rotate-success-circular-line {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
        }
        100% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
        }
    }

    @keyframes swal2-rotate-success-circular-line {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
        }
        100% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg);
        }
    }

    @-webkit-keyframes swal2-animate-error-x-mark {
        0% {
            margin-top: 1.625em;
            -webkit-transform: scale(0.4);
            transform: scale(0.4);
            opacity: 0;
        }
        50% {
            margin-top: 1.625em;
            -webkit-transform: scale(0.4);
            transform: scale(0.4);
            opacity: 0;
        }
        80% {
            margin-top: -.375em;
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
        }
        100% {
            margin-top: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes swal2-animate-error-x-mark {
        0% {
            margin-top: 1.625em;
            -webkit-transform: scale(0.4);
            transform: scale(0.4);
            opacity: 0;
        }
        50% {
            margin-top: 1.625em;
            -webkit-transform: scale(0.4);
            transform: scale(0.4);
            opacity: 0;
        }
        80% {
            margin-top: -.375em;
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
        }
        100% {
            margin-top: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }

    @-webkit-keyframes swal2-animate-error-icon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0;
        }
        100% {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1;
        }
    }

    @keyframes swal2-animate-error-icon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0;
        }
        100% {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1;
        }
    }

    body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast {
        flex-direction: column;
        align-items: stretch;
    }

    body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-actions {
        flex: 1;
        align-self: stretch;
        justify-content: flex-end;
        height: 2.2em;
    }

    body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-loading {
        justify-content: center;
    }

    body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-input {
        height: 2em;
        margin: .3125em auto;
        font-size: 1em;
    }

    body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-validationerror {
        font-size: 1em;
    }

    body.swal2-toast-shown > .swal2-container {
        position: fixed;
        background-color: transparent;
    }

    body.swal2-toast-shown > .swal2-container.swal2-shown {
        background-color: transparent;
    }

    body.swal2-toast-shown > .swal2-container.swal2-top {
        top: 0;
        right: auto;
        bottom: auto;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    body.swal2-toast-shown > .swal2-container.swal2-top-end, body.swal2-toast-shown > .swal2-container.swal2-top-right {
        top: 0;
        right: 0;
        bottom: auto;
        left: auto;
    }

    body.swal2-toast-shown > .swal2-container.swal2-top-start, body.swal2-toast-shown > .swal2-container.swal2-top-left {
        top: 0;
        right: auto;
        bottom: auto;
        left: 0;
    }

    body.swal2-toast-shown > .swal2-container.swal2-center-start, body.swal2-toast-shown > .swal2-container.swal2-center-left {
        top: 50%;
        right: auto;
        bottom: auto;
        left: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    body.swal2-toast-shown > .swal2-container.swal2-center {
        top: 50%;
        right: auto;
        bottom: auto;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    body.swal2-toast-shown > .swal2-container.swal2-center-end, body.swal2-toast-shown > .swal2-container.swal2-center-right {
        top: 50%;
        right: 0;
        bottom: auto;
        left: auto;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    body.swal2-toast-shown > .swal2-container.swal2-bottom-start, body.swal2-toast-shown > .swal2-container.swal2-bottom-left {
        top: auto;
        right: auto;
        bottom: 0;
        left: 0;
    }

    body.swal2-toast-shown > .swal2-container.swal2-bottom {
        top: auto;
        right: auto;
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    body.swal2-toast-shown > .swal2-container.swal2-bottom-end, body.swal2-toast-shown > .swal2-container.swal2-bottom-right {
        top: auto;
        right: 0;
        bottom: 0;
        left: auto;
    }

    .swal2-popup.swal2-toast {
        flex-direction: row;
        align-items: center;
        width: auto;
        padding: 0.625em;
        box-shadow: 0 0 0.625em #d9d9d9;
        overflow-y: hidden;
    }

    .swal2-popup.swal2-toast .swal2-header {
        flex-direction: row;
    }

    .swal2-popup.swal2-toast .swal2-title {
        justify-content: flex-start;
        margin: 0 .6em;
        font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-close {
        position: initial;
    }

    .swal2-popup.swal2-toast .swal2-content {
        justify-content: flex-start;
        font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-icon {
        width: 2em;
        min-width: 2em;
        height: 2em;
        margin: 0;
    }

    .swal2-popup.swal2-toast .swal2-icon-text {
        font-size: 2em;
        font-weight: bold;
        line-height: 1em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
        top: .875em;
        width: 1.375em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
        left: .3125em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
        right: .3125em;
    }

    .swal2-popup.swal2-toast .swal2-actions {
        height: auto;
        margin: 0 .3125em;
    }

    .swal2-popup.swal2-toast .swal2-styled {
        margin: 0 .3125em;
        padding: .3125em .625em;
        font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-styled:focus {
        box-shadow: 0 0 0 0.0625em #fff, 0 0 0 0.125em rgba(50, 100, 150, 0.4);
    }

    .swal2-popup.swal2-toast .swal2-success {
        border-color: #a5dc86;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
        position: absolute;
        width: 2em;
        height: 2.8125em;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        border-radius: 50%;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
        top: -.25em;
        left: -.9375em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 2em 2em;
        transform-origin: 2em 2em;
        border-radius: 4em 0 0 4em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
        top: -.25em;
        left: .9375em;
        -webkit-transform-origin: 0 2em;
        transform-origin: 0 2em;
        border-radius: 0 4em 4em 0;
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em;
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
        top: 0;
        left: .4375em;
        width: .4375em;
        height: 2.6875em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
        height: .3125em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
        top: 1.125em;
        left: .1875em;
        width: .75em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
        top: .9375em;
        right: .1875em;
        width: 1.375em;
    }

    .swal2-popup.swal2-toast.swal2-show {
        -webkit-animation: showSweetToast .5s;
        animation: showSweetToast .5s;
    }

    .swal2-popup.swal2-toast.swal2-hide {
        -webkit-animation: hideSweetToast .2s forwards;
        animation: hideSweetToast .2s forwards;
    }

    .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
        -webkit-animation: animate-toast-success-tip .75s;
        animation: animate-toast-success-tip .75s;
    }

    .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
        -webkit-animation: animate-toast-success-long .75s;
        animation: animate-toast-success-long .75s;
    }

    @-webkit-keyframes showSweetToast {
        0% {
            -webkit-transform: translateY(-0.625em) rotateZ(2deg);
            transform: translateY(-0.625em) rotateZ(2deg);
            opacity: 0;
        }
        33% {
            -webkit-transform: translateY(0) rotateZ(-2deg);
            transform: translateY(0) rotateZ(-2deg);
            opacity: .5;
        }
        66% {
            -webkit-transform: translateY(0.3125em) rotateZ(2deg);
            transform: translateY(0.3125em) rotateZ(2deg);
            opacity: .7;
        }
        100% {
            -webkit-transform: translateY(0) rotateZ(0);
            transform: translateY(0) rotateZ(0);
            opacity: 1;
        }
    }

    @keyframes showSweetToast {
        0% {
            -webkit-transform: translateY(-0.625em) rotateZ(2deg);
            transform: translateY(-0.625em) rotateZ(2deg);
            opacity: 0;
        }
        33% {
            -webkit-transform: translateY(0) rotateZ(-2deg);
            transform: translateY(0) rotateZ(-2deg);
            opacity: .5;
        }
        66% {
            -webkit-transform: translateY(0.3125em) rotateZ(2deg);
            transform: translateY(0.3125em) rotateZ(2deg);
            opacity: .7;
        }
        100% {
            -webkit-transform: translateY(0) rotateZ(0);
            transform: translateY(0) rotateZ(0);
            opacity: 1;
        }
    }

    @-webkit-keyframes hideSweetToast {
        0% {
            opacity: 1;
        }
        33% {
            opacity: .5;
        }
        100% {
            -webkit-transform: rotateZ(1deg);
            transform: rotateZ(1deg);
            opacity: 0;
        }
    }

    @keyframes hideSweetToast {
        0% {
            opacity: 1;
        }
        33% {
            opacity: .5;
        }
        100% {
            -webkit-transform: rotateZ(1deg);
            transform: rotateZ(1deg);
            opacity: 0;
        }
    }

    @-webkit-keyframes animate-toast-success-tip {
        0% {
            top: .5625em;
            left: .0625em;
            width: 0;
        }
        54% {
            top: .125em;
            left: .125em;
            width: 0;
        }
        70% {
            top: .625em;
            left: -.25em;
            width: 1.625em;
        }
        84% {
            top: 1.0625em;
            left: .75em;
            width: .5em;
        }
        100% {
            top: 1.125em;
            left: .1875em;
            width: .75em;
        }
    }

    @keyframes animate-toast-success-tip {
        0% {
            top: .5625em;
            left: .0625em;
            width: 0;
        }
        54% {
            top: .125em;
            left: .125em;
            width: 0;
        }
        70% {
            top: .625em;
            left: -.25em;
            width: 1.625em;
        }
        84% {
            top: 1.0625em;
            left: .75em;
            width: .5em;
        }
        100% {
            top: 1.125em;
            left: .1875em;
            width: .75em;
        }
    }

    @-webkit-keyframes animate-toast-success-long {
        0% {
            top: 1.625em;
            right: 1.375em;
            width: 0;
        }
        65% {
            top: 1.25em;
            right: .9375em;
            width: 0;
        }
        84% {
            top: .9375em;
            right: 0;
            width: 1.125em;
        }
        100% {
            top: .9375em;
            right: .1875em;
            width: 1.375em;
        }
    }

    @keyframes animate-toast-success-long {
        0% {
            top: 1.625em;
            right: 1.375em;
            width: 0;
        }
        65% {
            top: 1.25em;
            right: .9375em;
            width: 0;
        }
        84% {
            top: .9375em;
            right: 0;
            width: 1.125em;
        }
        100% {
            top: .9375em;
            right: .1875em;
            width: 1.375em;
        }
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        overflow-y: hidden;
    }

    body.swal2-height-auto {
        height: auto !important;
    }

    body.swal2-no-backdrop .swal2-shown {
        top: auto;
        right: auto;
        bottom: auto;
        left: auto;
        background-color: transparent;
    }

    body.swal2-no-backdrop .swal2-shown > .swal2-modal {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top {
        top: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top-start, body.swal2-no-backdrop .swal2-shown.swal2-top-left {
        top: 0;
        left: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top-end, body.swal2-no-backdrop .swal2-shown.swal2-top-right {
        top: 0;
        right: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center {
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center-start, body.swal2-no-backdrop .swal2-shown.swal2-center-left {
        top: 50%;
        left: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center-end, body.swal2-no-backdrop .swal2-shown.swal2-center-right {
        top: 50%;
        right: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom {
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom-start, body.swal2-no-backdrop .swal2-shown.swal2-bottom-left {
        bottom: 0;
        left: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom-end, body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
        right: 0;
        bottom: 0;
    }

    .swal2-container {
        display: flex;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        padding: 10px;
        background-color: transparent;
        z-index: 1060;
        overflow-x: hidden;
        -webkit-overflow-scrolling: touch;
    }

    .swal2-container.swal2-top {
        align-items: flex-start;
    }

    .swal2-container.swal2-top-start, .swal2-container.swal2-top-left {
        align-items: flex-start;
        justify-content: flex-start;
    }

    .swal2-container.swal2-top-end, .swal2-container.swal2-top-right {
        align-items: flex-start;
        justify-content: flex-end;
    }

    .swal2-container.swal2-center {
        align-items: center;
    }

    .swal2-container.swal2-center-start, .swal2-container.swal2-center-left {
        align-items: center;
        justify-content: flex-start;
    }

    .swal2-container.swal2-center-end, .swal2-container.swal2-center-right {
        align-items: center;
        justify-content: flex-end;
    }

    .swal2-container.swal2-bottom {
        align-items: flex-end;
    }

    .swal2-container.swal2-bottom-start, .swal2-container.swal2-bottom-left {
        align-items: flex-end;
        justify-content: flex-start;
    }

    .swal2-container.swal2-bottom-end, .swal2-container.swal2-bottom-right {
        align-items: flex-end;
        justify-content: flex-end;
    }

    .swal2-container.swal2-grow-fullscreen > .swal2-modal {
        display: flex !important;
        flex: 1;
        align-self: stretch;
        justify-content: center;
    }

    .swal2-container.swal2-grow-row > .swal2-modal {
        display: flex !important;
        flex: 1;
        align-content: center;
        justify-content: center;
    }

    .swal2-container.swal2-grow-column {
        flex: 1;
        flex-direction: column;
    }

    .swal2-container.swal2-grow-column.swal2-top, .swal2-container.swal2-grow-column.swal2-center, .swal2-container.swal2-grow-column.swal2-bottom {
        align-items: center;
    }

    .swal2-container.swal2-grow-column.swal2-top-start, .swal2-container.swal2-grow-column.swal2-center-start, .swal2-container.swal2-grow-column.swal2-bottom-start, .swal2-container.swal2-grow-column.swal2-top-left, .swal2-container.swal2-grow-column.swal2-center-left, .swal2-container.swal2-grow-column.swal2-bottom-left {
        align-items: flex-start;
    }

    .swal2-container.swal2-grow-column.swal2-top-end, .swal2-container.swal2-grow-column.swal2-center-end, .swal2-container.swal2-grow-column.swal2-bottom-end, .swal2-container.swal2-grow-column.swal2-top-right, .swal2-container.swal2-grow-column.swal2-center-right, .swal2-container.swal2-grow-column.swal2-bottom-right {
        align-items: flex-end;
    }

    .swal2-container.swal2-grow-column > .swal2-modal {
        display: flex !important;
        flex: 1;
        align-content: center;
        justify-content: center;
    }

    .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right) > .swal2-modal {
        margin: auto;
    }

    @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
        .swal2-container .swal2-modal {
            margin: 0 !important;
        }
    }

    .swal2-container.swal2-fade {
        transition: background-color .1s;
    }

    .swal2-container.swal2-shown {
        background-color: rgba(0, 0, 0, 0.4);
    }

    .swal2-popup {
        display: none;
        position: relative;
        flex-direction: column;
        justify-content: center;
        width: 32em;
        max-width: 100%;
        padding: 1.25em;
        border-radius: 0.3125em;
        background: #fff;
        font-family: inherit;
        font-size: 1rem;
        box-sizing: border-box;
    }

    .swal2-popup:focus {
        outline: none;
    }

    .swal2-popup.swal2-loading {
        overflow-y: hidden;
    }

    .swal2-popup .swal2-header {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .swal2-popup .swal2-title {
        display: block;
        position: relative;
        max-width: 100%;
        margin: 0 0 0.4em;
        padding: 0;
        color: #595959;
        font-size: 1.875em;
        font-weight: 600;
        text-align: center;
        text-transform: none;
        word-wrap: break-word;
    }

    .swal2-popup .swal2-actions {
        align-items: center;
        justify-content: center;
        margin: 1.25em auto 0;
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
        opacity: .4;
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
        background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));
    }

    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
        width: 2.5em;
        height: 2.5em;
        margin: .46875em;
        padding: 0;
        border: .25em solid transparent;
        border-radius: 100%;
        border-color: transparent;
        background-color: transparent !important;
        color: transparent;
        cursor: default;
        box-sizing: border-box;
        -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
        margin-right: 30px;
        margin-left: 30px;
    }

    .swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
        display: inline-block;
        width: 15px;
        height: 15px;
        margin-left: 5px;
        border: 3px solid #999999;
        border-radius: 50%;
        border-right-color: transparent;
        box-shadow: 1px 1px 1px #fff;
        content: '';
        -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
    }

    .swal2-popup .swal2-styled {
        margin: 0 .3125em;
        padding: .625em 2em;
        font-weight: 500;
        box-shadow: none;
    }

    .swal2-popup .swal2-styled:not([disabled]) {
        cursor: pointer;
    }

    .swal2-popup .swal2-styled.swal2-confirm {
        border: 0;
        border-radius: 0.25em;
        background: initial;
        background-color: #3085d6;
        color: #fff;
        font-size: 1.0625em;
    }

    .swal2-popup .swal2-styled.swal2-cancel {
        border: 0;
        border-radius: 0.25em;
        background: initial;
        background-color: #aaa;
        color: #fff;
        font-size: 1.0625em;
    }

    .swal2-popup .swal2-styled:focus {
        outline: none;
        box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
    }

    .swal2-popup .swal2-styled::-moz-focus-inner {
        border: 0;
    }

    .swal2-popup .swal2-footer {
        justify-content: center;
        margin: 1.25em 0 0;
        padding-top: 1em;
        border-top: 1px solid #eee;
        color: #545454;
        font-size: 1em;
    }

    .swal2-popup .swal2-image {
        max-width: 100%;
        margin: 1.25em auto;
    }

    .swal2-popup .swal2-close {
        position: absolute;
        top: 0;
        right: 0;
        justify-content: center;
        width: 1.2em;
        height: 1.2em;
        padding: 0;
        transition: color 0.1s ease-out;
        border: none;
        border-radius: 0;
        background: transparent;
        color: #cccccc;
        font-family: serif;
        font-size: 2.5em;
        line-height: 1.2;
        cursor: pointer;
        overflow: hidden;
    }

    .swal2-popup .swal2-close:hover {
        -webkit-transform: none;
        transform: none;
        color: #f27474;
    }

    .swal2-popup > .swal2-input,
    .swal2-popup > .swal2-file,
    .swal2-popup > .swal2-textarea,
    .swal2-popup > .swal2-select,
    .swal2-popup > .swal2-radio,
    .swal2-popup > .swal2-checkbox {
        display: none;
    }

    .swal2-popup .swal2-content {
        justify-content: center;
        margin: 0;
        padding: 0;
        color: #545454;
        font-size: 1.125em;
        font-weight: 300;
        line-height: normal;
        word-wrap: break-word;
    }

    .swal2-popup #swal2-content {
        text-align: center;
    }

    .swal2-popup .swal2-input,
    .swal2-popup .swal2-file,
    .swal2-popup .swal2-textarea,
    .swal2-popup .swal2-select,
    .swal2-popup .swal2-radio,
    .swal2-popup .swal2-checkbox {
        margin: 1em auto;
    }

    .swal2-popup .swal2-input,
    .swal2-popup .swal2-file,
    .swal2-popup .swal2-textarea {
        width: 100%;
        transition: border-color .3s, box-shadow .3s;
        border: 1px solid #d9d9d9;
        border-radius: 0.1875em;
        font-size: 1.125em;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
        box-sizing: border-box;
    }

    .swal2-popup .swal2-input.swal2-inputerror,
    .swal2-popup .swal2-file.swal2-inputerror,
    .swal2-popup .swal2-textarea.swal2-inputerror {
        border-color: #f27474 !important;
        box-shadow: 0 0 2px #f27474 !important;
    }

    .swal2-popup .swal2-input:focus,
    .swal2-popup .swal2-file:focus,
    .swal2-popup .swal2-textarea:focus {
        border: 1px solid #b4dbed;
        outline: none;
        box-shadow: 0 0 3px #c4e6f5;
    }

    .swal2-popup .swal2-input::-webkit-input-placeholder,
    .swal2-popup .swal2-file::-webkit-input-placeholder,
    .swal2-popup .swal2-textarea::-webkit-input-placeholder {
        color: #cccccc;
    }

    .swal2-popup .swal2-input:-ms-input-placeholder,
    .swal2-popup .swal2-file:-ms-input-placeholder,
    .swal2-popup .swal2-textarea:-ms-input-placeholder {
        color: #cccccc;
    }

    .swal2-popup .swal2-input::-ms-input-placeholder,
    .swal2-popup .swal2-file::-ms-input-placeholder,
    .swal2-popup .swal2-textarea::-ms-input-placeholder {
        color: #cccccc;
    }

    .swal2-popup .swal2-input::placeholder,
    .swal2-popup .swal2-file::placeholder,
    .swal2-popup .swal2-textarea::placeholder {
        color: #cccccc;
    }

    .swal2-popup .swal2-range input {
        width: 80%;
    }

    .swal2-popup .swal2-range output {
        width: 20%;
        font-weight: 600;
        text-align: center;
    }

    .swal2-popup .swal2-range input,
    .swal2-popup .swal2-range output {
        height: 2.625em;
        margin: 1em auto;
        padding: 0;
        font-size: 1.125em;
        line-height: 2.625em;
    }

    .swal2-popup .swal2-input {
        height: 2.625em;
        padding: 0.75em;
    }

    .swal2-popup .swal2-input[type='number'] {
        max-width: 10em;
    }

    .swal2-popup .swal2-file {
        font-size: 1.125em;
    }

    .swal2-popup .swal2-textarea {
        height: 6.75em;
        padding: 0.75em;
    }

    .swal2-popup .swal2-select {
        min-width: 50%;
        max-width: 100%;
        padding: .375em .625em;
        color: #545454;
        font-size: 1.125em;
    }

    .swal2-popup .swal2-radio,
    .swal2-popup .swal2-checkbox {
        align-items: center;
        justify-content: center;
    }

    .swal2-popup .swal2-radio label,
    .swal2-popup .swal2-checkbox label {
        margin: 0 .6em;
        font-size: 1.125em;
    }

    .swal2-popup .swal2-radio input,
    .swal2-popup .swal2-checkbox input {
        margin: 0 .4em;
    }

    .swal2-popup .swal2-validationerror {
        display: none;
        align-items: center;
        justify-content: center;
        padding: 0.625em;
        background: #f0f0f0;
        color: #666666;
        font-size: 1em;
        font-weight: 300;
        overflow: hidden;
    }

    .swal2-popup .swal2-validationerror::before {
        display: inline-block;
        width: 1.5em;
        min-width: 1.5em;
        height: 1.5em;
        margin: 0 .625em;
        border-radius: 50%;
        background-color: #f27474;
        color: #fff;
        font-weight: 600;
        line-height: 1.5em;
        text-align: center;
        content: '!';
        zoom: normal;
    }

    @supports (-ms-accelerator: true) {
        .swal2-range input {
            width: 100% !important;
        }

        .swal2-range output {
            display: none;
        }
    }

    @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
        .swal2-range input {
            width: 100% !important;
        }

        .swal2-range output {
            display: none;
        }
    }

    @-moz-document url-prefix() {
        .swal2-close:focus {
            outline: 2px solid rgba(50, 100, 150, 0.4);
        }
    }

    .swal2-icon {
        position: relative;
        justify-content: center;
        width: 5em;
        height: 5em;
        margin: 1.25em auto 1.875em;
        border: .25em solid transparent;
        border-radius: 50%;
        line-height: 5em;
        cursor: default;
        box-sizing: content-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        zoom: normal;
    }

    .swal2-icon-text {
        font-size: 3.75em;
    }

    .swal2-icon.swal2-error {
        border-color: #f27474;
    }

    .swal2-icon.swal2-error .swal2-x-mark {
        position: relative;
        flex-grow: 1;
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
        display: block;
        position: absolute;
        top: 2.3125em;
        width: 2.9375em;
        height: .3125em;
        border-radius: .125em;
        background-color: #f27474;
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
        left: 1.0625em;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
        right: 1em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .swal2-icon.swal2-warning {
        border-color: #facea8;
        color: #f8bb86;
    }

    .swal2-icon.swal2-info {
        border-color: #9de0f6;
        color: #3fc3ee;
    }

    .swal2-icon.swal2-question {
        border-color: #c9dae1;
        color: #87adbd;
    }

    .swal2-icon.swal2-success {
        border-color: #a5dc86;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
        position: absolute;
        width: 3.75em;
        height: 7.5em;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        border-radius: 50%;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
        top: -.4375em;
        left: -2.0635em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 3.75em 3.75em;
        transform-origin: 3.75em 3.75em;
        border-radius: 7.5em 0 0 7.5em;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
        top: -.6875em;
        left: 1.875em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 0 3.75em;
        transform-origin: 0 3.75em;
        border-radius: 0 7.5em 7.5em 0;
    }

    .swal2-icon.swal2-success .swal2-success-ring {
        position: absolute;
        top: -.25em;
        left: -.25em;
        width: 100%;
        height: 100%;
        border: 0.25em solid rgba(165, 220, 134, 0.3);
        border-radius: 50%;
        z-index: 2;
        box-sizing: content-box;
    }

    .swal2-icon.swal2-success .swal2-success-fix {
        position: absolute;
        top: .5em;
        left: 1.625em;
        width: .4375em;
        height: 5.625em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        z-index: 1;
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'] {
        display: block;
        position: absolute;
        height: .3125em;
        border-radius: .125em;
        background-color: #a5dc86;
        z-index: 2;
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
        top: 2.875em;
        left: .875em;
        width: 1.5625em;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
        top: 2.375em;
        right: .5em;
        width: 2.9375em;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .swal2-progresssteps {
        align-items: center;
        margin: 0 0 1.25em;
        padding: 0;
        font-weight: 600;
    }

    .swal2-progresssteps li {
        display: inline-block;
        position: relative;
    }

    .swal2-progresssteps .swal2-progresscircle {
        width: 2em;
        height: 2em;
        border-radius: 2em;
        background: #3085d6;
        color: #fff;
        line-height: 2em;
        text-align: center;
        z-index: 20;
    }

    .swal2-progresssteps .swal2-progresscircle:first-child {
        margin-left: 0;
    }

    .swal2-progresssteps .swal2-progresscircle:last-child {
        margin-right: 0;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
        background: #3085d6;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progresscircle {
        background: #add8e6;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progressline {
        background: #add8e6;
    }

    .swal2-progresssteps .swal2-progressline {
        width: 2.5em;
        height: .4em;
        margin: 0 -1px;
        background: #3085d6;
        z-index: 10;
    }

    [class^='swal2'] {
        -webkit-tap-highlight-color: transparent;
    }

    .swal2-show {
        -webkit-animation: swal2-show 0.3s;
        animation: swal2-show 0.3s;
    }

    .swal2-show.swal2-noanimation {
        -webkit-animation: none;
        animation: none;
    }

    .swal2-hide {
        -webkit-animation: swal2-hide 0.15s forwards;
        animation: swal2-hide 0.15s forwards;
    }

    .swal2-hide.swal2-noanimation {
        -webkit-animation: none;
        animation: none;
    }

    [dir='rtl'] .swal2-close {
        right: auto;
        left: 0;
    }

    .swal2-animate-success-icon .swal2-success-line-tip {
        -webkit-animation: swal2-animate-success-line-tip 0.75s;
        animation: swal2-animate-success-line-tip 0.75s;
    }

    .swal2-animate-success-icon .swal2-success-line-long {
        -webkit-animation: swal2-animate-success-line-long 0.75s;
        animation: swal2-animate-success-line-long 0.75s;
    }

    .swal2-animate-success-icon .swal2-success-circular-line-right {
        -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
        animation: swal2-rotate-success-circular-line 4.25s ease-in;
    }

    .swal2-animate-error-icon {
        -webkit-animation: swal2-animate-error-icon 0.5s;
        animation: swal2-animate-error-icon 0.5s;
    }

    .swal2-animate-error-icon .swal2-x-mark {
        -webkit-animation: swal2-animate-error-x-mark 0.5s;
        animation: swal2-animate-error-x-mark 0.5s;
    }

    @-webkit-keyframes swal2-rotate-loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes swal2-rotate-loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>
<link href="https://www.clientfunnels.io/css/material-dashboard.min.css?v=2.0.2" rel="stylesheet">
<link href="https://www.clientfunnels.io/vendor/select2/select2.css" rel="stylesheet">
<link href="https://www.clientfunnels.io/vendor/select2/select2-bootstrap.css" rel="stylesheet">

@section('content')
    <div class="wrapper ">
        <div class="main-panel">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                            </button>
                        </div>
                        <a class="navbar-brand" href="https://www.clientfunnels.io/">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end">

                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false" title="New Contact Messages">
                                    <i class="material-icons" style="font-size: 3em;">chat</i>
                                    <span class="notification header-total-new-messages" style="display: none"></span>
                                    <p class="d-lg-none d-md-block">
                                        New Contact Message
                                    </p>
                                    <div class="ripple-container"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="https://www.clientfunnels.io/contacts?new-messages">View
                                        Contacts With&nbsp;<span class="header-total-new-messages"
                                                                 style="display: none;"></span>&nbsp;New Messages</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">

                                <a class="nav-link" href="https://www.clientfunnels.io/admin/credits"
                                   title="SMS Credits">
                                    <i class="fas fa-2x fa-comments-dollar"></i>
                                    <span class=" header-total-credits">654</span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons" style="font-size: 3em;">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                    <div class="ripple-container"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="https://www.clientfunnels.io/my-account">My
                                        Account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="https://www.clientfunnels.io/logout">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </nav>
            <!-- End Navbar -->

            <div class="content">
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12" id="page_messages"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">build</i>
                                        </div>
                                        <h4 class="card-title">View Campaign '{{$campaign['name']}}'
                                            (ID: {{$campaign['id']}})</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="toolbar">
                                            <a href="/campaigns"
                                               title="Back to campaigns list" class="btn btn-success">
                                                <i class="fa fa-arrow-left"></i> Campaigns List
                                            </a>

                                            <a href="{{env('APP_URL').'/edit-campaign/'.$campaign->id}}"
                                               class="btn btn-warning">
                                                <i class="fa fa-wrench"></i> Edit
                                            </a>

                                            <a href="{{env('APP_URL').'/delete-campaign/'.$campaign->id}}">
                                            <button type="button"
                                                    class="btn btn-danger btn-sm pull-right delete-content"
                                                    data-type="campaign" data-id="735" data-message="Delete Campaign?">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                            </a>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ml-auto mr-auto">
                                                <div class="page-categories">
                                                    <div class="modal-content"></div>

                                                    <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active show" data-toggle="tab"
                                                               href="#view-campaign-details" role="tablist">
                                                                <i class="fa fa-info-circle"></i> Details
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab"
                                                               href="#view-campaign-registrations" role="tablist">
                                                                <i class="fa fa-check"></i> Registrations
                                                                ({{count($campaign['webinarRegistration'])}}) </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab"
                                                               href="#view-campaign-bookings" role="tablist">
                                                                <i class="fa fa-calendar"></i> Bookings
                                                                ({{count($campaign['webinarBooking'])}}) </a>

                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab"
                                                               href="#view-campaign-call-closed" role="tablist">
                                                                <i class="fas fa-trophy"></i> Calls Closed (0) </a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab"
                                                               href="#view-campaign-statistics" role="tablist">
                                                                <i class="fas fa-clipboard-list"></i> Statistics
                                                            </a>
                                                        </li>

                                                    </ul>

                                                    <hr>
                                                    <div class="tab-content tab-space tab-subcategories">

                                                        <div class="tab-pane  active show" id="view-campaign-details">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div class="row m-b word-break">
                                                                        <div class="col-sm-6">
                                                                            <strong>Campaign
                                                                                ID:</strong> {{$campaign['id']}}
                                                                        </div>


                                                                        <div class="col-sm-6">
                                                                            <strong>Status:</strong>

                                                                            @if($campaign['status'] == 'active')
                                                                                <span class="text-success">
                                                                                    <i class="fas fa-check"></i>
                                                                                    {{$campaign['status']}}
                                                                                </span>
                                                                            @else
                                                                                <span class="text-danger">
                                                                                    <i class="fas fa-times"></i>
                                                                                    {{$campaign['status']}}
                                                                                </span>
                                                                            @endif
                                                                        </div>

                                                                    </div>
                                                                    <hr>
                                                                    <div class="row m-b word-break">
                                                                        <div class="col-sm-6">
                                                                            <strong>Name:</strong> {{$campaign['name']}}
                                                                        </div>


                                                                        <div class="col-sm-6">
                                                                            <strong>Webinar:</strong> <span
                                                                                    class="text-danger">NONE! (Fix Required)</span>
                                                                        </div>

                                                                    </div>
                                                                    <hr>
                                                                    <div class="row m-b word-break">
                                                                        <div class="col-sm-6">
                                                                            <strong>Campaign URL:</strong> <a
                                                                                    href="{{$campaign['webinar_url']}}"
                                                                                    target="_blank">{{$campaign['webinar_url']}}</a>
                                                                        </div>


                                                                        <div class="col-sm-6">
                                                                            <strong>Notes:</strong> {{$campaign['note']}}
                                                                        </div>

                                                                    </div>
                                                                    <hr>
                                                                    <div class="row m-b word-break">
                                                                        <div class="col-sm-6">
                                                                            <strong>Created:</strong> {{date("F j, Y, g:i a", strtotime($campaign['created_at']))}}
                                                                        </div>


                                                                        <div class="col-sm-6">
                                                                            <strong>Created By:</strong> <span
                                                                                    class="label label-success">You</span>
                                                                        </div>

                                                                    </div>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane" id="view-campaign-registrations">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    @if(count($campaign['webinarRegistration']) <= 0)
                                                                        <div class="alert alert-info">
                                                                            No Registrations to show at this time.
                                                                        </div>
                                                                    @else
                                                                        <div class="material-datatables">
                                                                            <div id="DataTables_Table_0_wrapper"
                                                                                 class="dataTables_wrapper dt-bootstrap4">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 col-md-6">
                                                                                        <div class="dataTables_length"
                                                                                             id="DataTables_Table_0_length">
                                                                                            <label>Show <select
                                                                                                        name="DataTables_Table_0_length"
                                                                                                        aria-controls="DataTables_Table_0"
                                                                                                        class="custom-select custom-select-sm form-control form-control-sm">
                                                                                                    <option value="10">
                                                                                                        10
                                                                                                    </option>
                                                                                                    <option value="25">
                                                                                                        25
                                                                                                    </option>
                                                                                                    <option value="50">
                                                                                                        50
                                                                                                    </option>
                                                                                                    <option value="-1">
                                                                                                        All
                                                                                                    </option>
                                                                                                </select>
                                                                                                entries</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12 col-md-6">
                                                                                        <div id="DataTables_Table_0_filter"
                                                                                             class="dataTables_filter">
                                                                                            <label><input type="search"
                                                                                                          class="form-control form-control-sm"
                                                                                                          placeholder="Search records"
                                                                                                          aria-controls="DataTables_Table_0"></label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <table class="table table-striped table-no-bordered table-hover default-datatables dataTable dtr-inline"
                                                                                               cellspacing="0"
                                                                                               width="100%"
                                                                                               style="width: 100%;"
                                                                                               id="DataTables_Table_0"
                                                                                               role="grid"
                                                                                               aria-describedby="DataTables_Table_0_info">
                                                                                            <thead>
                                                                                            <tr role="row">
                                                                                                <th class="sorting"
                                                                                                    tabindex="0"
                                                                                                    aria-controls="DataTables_Table_0"
                                                                                                    rowspan="1"
                                                                                                    colspan="1"
                                                                                                    style="width: 114px;"
                                                                                                    aria-label="Registration ID: activate to sort column ascending">
                                                                                                    Registration ID
                                                                                                </th>
                                                                                                <th class="sorting"
                                                                                                    tabindex="0"
                                                                                                    aria-controls="DataTables_Table_0"
                                                                                                    rowspan="1"
                                                                                                    colspan="1"
                                                                                                    style="width: 114px;"
                                                                                                    aria-label="Name: activate to sort column ascending">
                                                                                                    Name
                                                                                                </th>
                                                                                                <th class="sorting"
                                                                                                    tabindex="0"
                                                                                                    aria-controls="DataTables_Table_0"
                                                                                                    rowspan="1"
                                                                                                    colspan="1"
                                                                                                    style="width: 88px;"
                                                                                                    aria-label="Stage: activate to sort column ascending">
                                                                                                    Stage
                                                                                                </th>
                                                                                                <th class="sorting"
                                                                                                    tabindex="0"
                                                                                                    aria-controls="DataTables_Table_0"
                                                                                                    rowspan="1"
                                                                                                    colspan="1"
                                                                                                    style="width: 138px;"
                                                                                                    aria-label="Webinar Watched: activate to sort column ascending">
                                                                                                    Webinar Watched
                                                                                                </th>
                                                                                                <th class="sorting"
                                                                                                    tabindex="0"
                                                                                                    aria-controls="DataTables_Table_0"
                                                                                                    rowspan="1"
                                                                                                    colspan="1"
                                                                                                    style="width: 165px;"
                                                                                                    aria-label="Date: activate to sort column ascending">
                                                                                                    Date
                                                                                                </th>
                                                                                                <th class="sorting"
                                                                                                    tabindex="0"
                                                                                                    aria-controls="DataTables_Table_0"
                                                                                                    rowspan="1"
                                                                                                    colspan="1"
                                                                                                    style="width: 92px;"
                                                                                                    aria-label="Booked Call: activate to sort column ascending">
                                                                                                    Booked Call
                                                                                                </th>
                                                                                                <th class="disabled-sorting text-right sorting"
                                                                                                    tabindex="0"
                                                                                                    aria-controls="DataTables_Table_0"
                                                                                                    rowspan="1"
                                                                                                    colspan="1"
                                                                                                    style="width: 170px;"
                                                                                                    aria-label="Actions: activate to sort column ascending">
                                                                                                    Actions
                                                                                                </th>
                                                                                            </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                            @foreach($campaign['webinarRegistration'] as $campaignWebinarRegistration)
                                                                                                <tr role="row"
                                                                                                    class="odd">
                                                                                                    <td tabindex="0">
                                                                                                        {{$campaignWebinarRegistration['id']}}
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        {{$campaignWebinarRegistration['first_name']}}
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        {{$campaignWebinarRegistration['stage']}}
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        @if($campaignWebinarRegistration['webinar_watched'] == 'Watched')
                                                                                                            <span class="text-success"><i
                                                                                                                        class="fa fa-check"></i>
                                                                                                            {{$campaignWebinarRegistration['webinar_watched']}}
                                                                                                            </span>
                                                                                                        @else
                                                                                                            <span class="text-danger"><i
                                                                                                                        class="fa fa-times"></i>
                                                                                                        {{$campaignWebinarRegistration['webinar_watched']}}
                                                                                                        </span>
                                                                                                        @endif
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        {{date("F j, Y, g:i a", strtotime($campaignWebinarRegistration['created_at']))}}
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        @if($campaignWebinarRegistration['booked_call'] == 'YES')
                                                                                                            <span class="text-success">
                                                                                                    <i class="fa fa-check"></i>
                                                                                            </span>
                                                                                                        @else
                                                                                                            <span class="text-danger">
                                                                                                <i class="fa fa-times"></i>
                                                                                            </span>
                                                                                                        @endif
                                                                                                        {{$campaignWebinarRegistration['booked_call']}}
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <button type="button"
                                                                                                                class="btn btn-success m-b view-campaign-reg"
                                                                                                                data-reg-id="{{$campaignWebinarRegistration['campaign_id']}}">
                                                                                                            <i class="fa fa-eye"></i>
                                                                                                            Full Details
                                                                                                        </button>

                                                                                                    </td>
                                                                                                </tr>
                                                                                            @endforeach
                                                                                            </tbody>
                                                                                            <tfoot>
                                                                                            <tr>
                                                                                                <th rowspan="1"
                                                                                                    colspan="1">
                                                                                                    Registration ID
                                                                                                </th>
                                                                                                <th rowspan="1"
                                                                                                    colspan="1">
                                                                                                    Name
                                                                                                </th>
                                                                                                <th rowspan="1"
                                                                                                    colspan="1">
                                                                                                    Stage
                                                                                                </th>
                                                                                                <th rowspan="1"
                                                                                                    colspan="1">
                                                                                                    Webinar Watched
                                                                                                </th>
                                                                                                <th rowspan="1"
                                                                                                    colspan="1">
                                                                                                    Date
                                                                                                </th>
                                                                                                <th rowspan="1"
                                                                                                    colspan="1">
                                                                                                    Booked Call
                                                                                                </th>
                                                                                                <th class="disabled-sorting text-right"
                                                                                                    rowspan="1"
                                                                                                    colspan="1">
                                                                                                    Actions
                                                                                                </th>
                                                                                            </tr>
                                                                                            </tfoot>
                                                                                            <tbody>

                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 col-md-5">
                                                                                        <div class="dataTables_info"
                                                                                             id="DataTables_Table_0_info"
                                                                                             role="status"
                                                                                             aria-live="polite">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12 col-md-7">
                                                                                        <div class="dataTables_paginate paging_full_numbers"
                                                                                             id="DataTables_Table_0_paginate">
                                                                                            <ul class="pagination">
                                                                                                <li class="paginate_button page-item first disabled"
                                                                                                    id="DataTables_Table_0_first">
                                                                                                    <a href="#"
                                                                                                       aria-controls="DataTables_Table_0"
                                                                                                       data-dt-idx="0"
                                                                                                       tabindex="0"
                                                                                                       class="page-link">First</a>
                                                                                                </li>
                                                                                                <li class="paginate_button page-item previous disabled"
                                                                                                    id="DataTables_Table_0_previous">
                                                                                                    <a href="#"
                                                                                                       aria-controls="DataTables_Table_0"
                                                                                                       data-dt-idx="1"
                                                                                                       tabindex="0"
                                                                                                       class="page-link">Prev</a>
                                                                                                </li>
                                                                                                <li class="paginate_button page-item active">
                                                                                                    <a href="#"
                                                                                                       aria-controls="DataTables_Table_0"
                                                                                                       data-dt-idx="2"
                                                                                                       tabindex="0"
                                                                                                       class="page-link">1</a>
                                                                                                </li>
                                                                                                <li class="paginate_button page-item next disabled"
                                                                                                    id="DataTables_Table_0_next">
                                                                                                    <a href="#"
                                                                                                       aria-controls="DataTables_Table_0"
                                                                                                       data-dt-idx="3"
                                                                                                       tabindex="0"
                                                                                                       class="page-link">Next</a>
                                                                                                </li>
                                                                                                <li class="paginate_button page-item last disabled"
                                                                                                    id="DataTables_Table_0_last">
                                                                                                    <a href="#"
                                                                                                       aria-controls="DataTables_Table_0"
                                                                                                       data-dt-idx="4"
                                                                                                       tabindex="0"
                                                                                                       class="page-link">Last</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane" id="view-campaign-bookings">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    @if(count($campaign['webinarBooking']) < 0)
                                                                    <div class="alert alert-info">
                                                                        No Bookings to show at this time.
                                                                    </div>
                                                                    @else
                                                                    <div class="material-datatables">
                                                                        <div id="DataTables_Table_1_wrapper"
                                                                             class="dataTables_wrapper dt-bootstrap4">
                                                                            <div class="row">
                                                                                <div class="col-sm-12 col-md-6">
                                                                                    <div class="dataTables_length"
                                                                                         id="DataTables_Table_1_length">
                                                                                        <label>Show <select
                                                                                                    name="DataTables_Table_1_length"
                                                                                                    aria-controls="DataTables_Table_1"
                                                                                                    class="custom-select custom-select-sm form-control form-control-sm">
                                                                                                <option value="10">10
                                                                                                </option>
                                                                                                <option value="25">25
                                                                                                </option>
                                                                                                <option value="50">50
                                                                                                </option>
                                                                                                <option value="-1">All
                                                                                                </option>
                                                                                            </select> entries</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12 col-md-6">
                                                                                    <div id="DataTables_Table_1_filter"
                                                                                         class="dataTables_filter">
                                                                                        <label><input type="search"
                                                                                                      class="form-control form-control-sm"
                                                                                                      placeholder="Search records"
                                                                                                      aria-controls="DataTables_Table_1"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <table class="table table-striped table-no-bordered table-hover default-datatables dataTable dtr-inline"
                                                                                           cellspacing="0" width="100%"
                                                                                           style="width: 100%;"
                                                                                           id="DataTables_Table_1"
                                                                                           role="grid"
                                                                                           aria-describedby="DataTables_Table_1_info">
                                                                                        <thead>
                                                                                        <tr role="row">
                                                                                            <th class="sorting"
                                                                                                tabindex="0"
                                                                                                aria-controls="DataTables_Table_1"
                                                                                                rowspan="1" colspan="1"
                                                                                                style="width: 76px;"
                                                                                                aria-label="Booking ID: activate to sort column ascending">
                                                                                                Booking ID
                                                                                            </th>
                                                                                            <th class="sorting"
                                                                                                tabindex="0"
                                                                                                aria-controls="DataTables_Table_1"
                                                                                                rowspan="1" colspan="1"
                                                                                                style="width: 104px;"
                                                                                                aria-label="Client Name: activate to sort column ascending">
                                                                                                Client Name
                                                                                            </th>
                                                                                            <th class="sorting"
                                                                                                tabindex="0"
                                                                                                aria-controls="DataTables_Table_1"
                                                                                                rowspan="1" colspan="1"
                                                                                                style="width: 90px;"
                                                                                                aria-label="Booked With: activate to sort column ascending">
                                                                                                Booked With
                                                                                            </th>
                                                                                            <th class="sorting"
                                                                                                tabindex="0"
                                                                                                aria-controls="DataTables_Table_1"
                                                                                                rowspan="1" colspan="1"
                                                                                                style="width: 195px;"
                                                                                                aria-label="Call Details: activate to sort column ascending">
                                                                                                Call Details
                                                                                            </th>
                                                                                            <th class="sorting"
                                                                                                tabindex="0"
                                                                                                aria-controls="DataTables_Table_1"
                                                                                                rowspan="1" colspan="1"
                                                                                                style="width: 150px;"
                                                                                                aria-label="Booked: activate to sort column ascending">
                                                                                                Booked
                                                                                            </th>
                                                                                            <th class="sorting"
                                                                                                tabindex="0"
                                                                                                aria-controls="DataTables_Table_1"
                                                                                                rowspan="1" colspan="1"
                                                                                                style="width: 104px;"
                                                                                                aria-label="Questionnaire: activate to sort column ascending">
                                                                                                Questionnaire
                                                                                            </th>
                                                                                            <th class="disabled-sorting text-right sorting"
                                                                                                tabindex="0"
                                                                                                aria-controls="DataTables_Table_1"
                                                                                                rowspan="1" colspan="1"
                                                                                                style="width: 162px;"
                                                                                                aria-label="Actions: activate to sort column ascending">
                                                                                                Actions
                                                                                            </th>
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                        @foreach($campaign['webinarBooking'] as $campaign)
                                                                                        <tr role="row" class="odd">
                                                                                            <td tabindex="0">
                                                                                                {{$campaign['id']}}
                                                                                            </td>
                                                                                            <td>
                                                                                                {{$campaign['name']}}
                                                                                            </td>
                                                                                            <td>

                                                                                            </td>
                                                                                            <td>
                                                                                                <strong>Call
                                                                                                    At: </strong>
                                                                                                {{$campaign['call_slot']}}
                                                                                                <br>
                                                                                                <strong>Call
                                                                                                    Length: </strong>
                                                                                                2 hours
                                                                                                <hr>
                                                                                                <span class="text-danger"><i
                                                                                                            class="fas fa-exclamation-triangle"></i> Waiting for call</span>
                                                                                            </td>
                                                                                            <td>
                                                                                                {{date("F j, Y, g:i a", strtotime($campaign['created_at']))}}
                                                                                            </td>
                                                                                            <td>
                                                                                                <span class="text-info">N/A</span>
                                                                                            </td>
                                                                                            <td>

                                                                                                <button type="button"
                                                                                                        class="btn btn-success m-b view-campaign-booking"
                                                                                                        data-reg-id="{{$campaign['campaign_id']}}">
                                                                                                    <i class="fa fa-eye"></i>
                                                                                                    Full Details
                                                                                                </button>

                                                                                            </td>
                                                                                        </tr>
                                                                                        @endforeach
{{--                                                                                        <div class="modal-content"></div>--}}
                                                                                        <script src="https://www.clientfunnels.io/js/core/jquery.min.js"></script>
                                                                                        <script>
                                                                                            $('.view-campaign-booking , .view-campaign-reg').on('click',function () {
                                                                                                $.ajax({
                                                                                                    type: 'POST',
                                                                                                    url: '/getCampaignDetail',
                                                                                                    data: {
                                                                                                        '_token': '<?php echo csrf_token() ?>',
                                                                                                        'id': $(this).data("reg-id")
                                                                                                    },
                                                                                                    success: function (result) {
                                                                                                        $('.modal-content').html(result);
                                                                                                        $('.modal-content').show();
                                                                                                    }
                                                                                                });
                                                                                            });

                                                                                            $('.modal-content').on('click','.modal-close',function () {
                                                                                                $('.modal-content').hide();
                                                                                            });
                                                                                        </script>
                                                                                        </tbody>
                                                                                        <tfoot>
                                                                                        <tr>
                                                                                            <th rowspan="1" colspan="1">
                                                                                                Booking ID
                                                                                            </th>
                                                                                            <th rowspan="1" colspan="1">
                                                                                                Client Name
                                                                                            </th>
                                                                                            <th rowspan="1" colspan="1">
                                                                                                Booked With
                                                                                            </th>
                                                                                            <th rowspan="1" colspan="1">
                                                                                                Call Details
                                                                                            </th>
                                                                                            <th rowspan="1" colspan="1">
                                                                                                Booked
                                                                                            </th>
                                                                                            <th rowspan="1" colspan="1">
                                                                                                Questionnaire
                                                                                            </th>
                                                                                            <th class="disabled-sorting text-right"
                                                                                                rowspan="1" colspan="1">
                                                                                                Actions
                                                                                            </th>
                                                                                        </tr>
                                                                                        </tfoot>
                                                                                        <tbody>

                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 col-md-5">
                                                                                    <div class="dataTables_info"
                                                                                         id="DataTables_Table_1_info"
                                                                                         role="status"
                                                                                         aria-live="polite">Showing 1 to
                                                                                        4 of 4 entries
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12 col-md-7">
                                                                                    <div class="dataTables_paginate paging_full_numbers"
                                                                                         id="DataTables_Table_1_paginate">
                                                                                        <ul class="pagination">
                                                                                            <li class="paginate_button page-item first disabled"
                                                                                                id="DataTables_Table_1_first">
                                                                                                <a href="#"
                                                                                                   aria-controls="DataTables_Table_1"
                                                                                                   data-dt-idx="0"
                                                                                                   tabindex="0"
                                                                                                   class="page-link">First</a>
                                                                                            </li>
                                                                                            <li class="paginate_button page-item previous disabled"
                                                                                                id="DataTables_Table_1_previous">
                                                                                                <a href="#"
                                                                                                   aria-controls="DataTables_Table_1"
                                                                                                   data-dt-idx="1"
                                                                                                   tabindex="0"
                                                                                                   class="page-link">Prev</a>
                                                                                            </li>
                                                                                            <li class="paginate_button page-item active">
                                                                                                <a href="#"
                                                                                                   aria-controls="DataTables_Table_1"
                                                                                                   data-dt-idx="2"
                                                                                                   tabindex="0"
                                                                                                   class="page-link">1</a>
                                                                                            </li>
                                                                                            <li class="paginate_button page-item next disabled"
                                                                                                id="DataTables_Table_1_next">
                                                                                                <a href="#"
                                                                                                   aria-controls="DataTables_Table_1"
                                                                                                   data-dt-idx="3"
                                                                                                   tabindex="0"
                                                                                                   class="page-link">Next</a>
                                                                                            </li>
                                                                                            <li class="paginate_button page-item last disabled"
                                                                                                id="DataTables_Table_1_last">
                                                                                                <a href="#"
                                                                                                   aria-controls="DataTables_Table_1"
                                                                                                   data-dt-idx="4"
                                                                                                   tabindex="0"
                                                                                                   class="page-link">Last</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane" id="view-campaign-statistics">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <h3 class="text-center">Campaign Statistics
                                                                        (legacy)</h3>

                                                                    <div class="row m-b">
                                                                        <div class="col-md-12">
                                                                            <strong>Filter Statistics - Showing date
                                                                                from {{date('y-m-d')}} till {{date('y-m-d')}} </strong>
                                                                            <hr>
                                                                            <form action="https://www.clientfunnels.io/campaigns/view/735?page=statistics" method="post">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="form-group">
                                                                                            <label for="vc-fs-scale" class="bmd-label-floating">Timeframe
                                                                                                <span class="required">*</span></label>
                                                                                            <select class="js-source-states-2 m-b" name="scale" id="vc-fs-scale" style="width: 100%;" tabindex="-1" title="Timeframe *">
                                                                                                <option value="day" selected="">Day
                                                                                                </option>
                                                                                                <option value="week">
                                                                                                    Week
                                                                                                </option>
                                                                                                <option value="month">
                                                                                                    Month
                                                                                                </option>
                                                                                                <option value="year">
                                                                                                    Year
                                                                                                </option>
                                                                                                <option value="custom">
                                                                                                    Custom Dates
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row vc-fs-date-row" data-type="day">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="form-group bmd-form-group is-filled">
                                                                                            <label for="vc-fs-date" class="bmd-label-floating">
                                                                                                Date <span class="required">*</span></label>
                                                                                            <input type="text" class="form-control st-datetimepicker" id="vc-fs-date" name="date" value="29/07/2020">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row vc-fs-date-row" data-type="month" style="display: none">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="form-group">
                                                                                            <label for="vc-fs-month" class="bmd-label-floating">
                                                                                                Month <span class="required">*</span></label>

                                                                                            <div class="select2-container js-source-states-2 m-b" id="s2id_vc-fs-month" style="width: 100%"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">
                                                                                                    <span class="select2-chosen" id="select2-chosen-2">July</span><abbr class="select2-search-choice-close"></abbr>
                                                                                                    <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen">
                                                                                                    Month
                                                                                                    *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2">
                                                                                                <div class="select2-drop select2-display-none select2-with-searchbox">
                                                                                                    <div class="select2-search">
                                                                                                        <label for="s2id_autogen2_search" class="select2-offscreen">
                                                                                                            Month
                                                                                                            *</label>
                                                                                                        <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">
                                                                                                    </div>
                                                                                                    <ul class="select2-results" role="listbox" id="select2-results-2"></ul>
                                                                                                </div>
                                                                                            </div>
                                                                                            <select class="js-source-states-2 m-b" name="month" id="vc-fs-month" style="width: 100%; display: none;" tabindex="-1" title=" Month *">
                                                                                                <option value="1">
                                                                                                    January
                                                                                                </option>
                                                                                                <option value="2">
                                                                                                    February
                                                                                                </option>
                                                                                                <option value="3">
                                                                                                    March
                                                                                                </option>
                                                                                                <option value="4">
                                                                                                    April
                                                                                                </option>
                                                                                                <option value="5">May
                                                                                                </option>
                                                                                                <option value="6">June
                                                                                                </option>
                                                                                                <option value="7" selected="">July
                                                                                                </option>
                                                                                                <option value="8">
                                                                                                    August
                                                                                                </option>
                                                                                                <option value="9">
                                                                                                    September
                                                                                                </option>
                                                                                                <option value="10">
                                                                                                    October
                                                                                                </option>
                                                                                                <option value="11">
                                                                                                    November
                                                                                                </option>
                                                                                                <option value="12">
                                                                                                    December
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row vc-fs-date-row" data-type="year" style="display: none">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="form-group">
                                                                                            <label for="vc-fs-year" class="bmd-label-floating">
                                                                                                Year <span class="required">*</span></label>

                                                                                            <div class="select2-container js-source-states-2 m-b" id="s2id_vc-fs-year" style="width: 100%"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">
                                                                                                    <span class="select2-chosen" id="select2-chosen-3">2020</span><abbr class="select2-search-choice-close"></abbr>
                                                                                                    <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen3" class="select2-offscreen">
                                                                                                    Year *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-3" id="s2id_autogen3">
                                                                                                <div class="select2-drop select2-display-none select2-with-searchbox">
                                                                                                    <div class="select2-search">
                                                                                                        <label for="s2id_autogen3_search" class="select2-offscreen">
                                                                                                            Year
                                                                                                            *</label>
                                                                                                        <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-3" id="s2id_autogen3_search" placeholder="">
                                                                                                    </div>
                                                                                                    <ul class="select2-results" role="listbox" id="select2-results-3"></ul>
                                                                                                </div>
                                                                                            </div>
                                                                                            <select class="js-source-states-2 m-b" name="year" id="vc-fs-year" style="width: 100%; display: none;" tabindex="-1" title=" Year *">
                                                                                                <option value="2019">
                                                                                                    2019
                                                                                                </option>
                                                                                                <option value="2020" selected="">2020
                                                                                                </option>
                                                                                                <option value="2021">
                                                                                                    2021
                                                                                                </option>
                                                                                                <option value="2022">
                                                                                                    2022
                                                                                                </option>
                                                                                                <option value="2023">
                                                                                                    2023
                                                                                                </option>
                                                                                                <option value="2024">
                                                                                                    2024
                                                                                                </option>
                                                                                                <option value="2025">
                                                                                                    2025
                                                                                                </option>
                                                                                                <option value="2026">
                                                                                                    2026
                                                                                                </option>
                                                                                                <option value="2027">
                                                                                                    2027
                                                                                                </option>
                                                                                                <option value="2028">
                                                                                                    2028
                                                                                                </option>
                                                                                                <option value="2029">
                                                                                                    2029
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row vc-fs-date-row" data-type="custom" style="display: none">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group bmd-form-group">
                                                                                            <label for="vc-fs-cdate-from" class="bmd-label-static">
                                                                                                From <span class="required">*</span></label>
                                                                                            <input type="text" class="form-control st-datetimepicker" id="vc-fs-cdate-from" name="date_from" value="">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group bmd-form-group">
                                                                                            <label for="vc-fs-cdate-to" class="bmd-label-static">
                                                                                                To <span class="required">*</span></label>
                                                                                            <input type="text" class="form-control st-datetimepicker" id="vc-fs-cdate-to" name="date_to" value="">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                                <hr>
{{--                                                                                <div class="row">--}}
{{--                                                                                    <div class="col-sm-12">--}}
{{--                                                                                        <button type="submit" class="btn btn-success max-width">--}}
{{--                                                                                            <i class="fa fa-refresh-alt" aria-hidden="true"></i>--}}
{{--                                                                                            Refresh--}}
{{--                                                                                        </button>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                    <div class="alert alert-warning">
                                                                        No Statistics to show from filters set above.
                                                                    </div>
                                                                    <h3>Webinar Watched 10 Minutes Blocks</h3>
                                                                    <small>Total Webinar Duration: </small>
                                                                    <div class="card-body">

                                                                        <div class="row">
                                                                            <div class="col-md-8"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                                                <canvas id="campaign-stats" width="651" height="366" style="display: block; width: 651px; height: 366px;" class="chartjs-render-monitor"></canvas>

                                                                                <script type="text/javascript">
                                                                                    var statsData = {
                                                                                        labels: ['Optin Rate', 'View Rate', 'Calls Booked', 'Calls Closed'],
                                                                                        datasets: [
                                                                                            {
                                                                                                label: 'Optin Rate (33%)',
                                                                                                backgroundColor: 'rgba(255,0,0,0.5)',
                                                                                                borderColor: 'rgba(255,0,0)',
                                                                                                borderWidth: 1,
                                                                                                data: [{{$campaign_count}},0,0,0]
                                                                                            }
                                                                                            ,
                                                                                            {
                                                                                                label: 'View Rate (31%)',
                                                                                                backgroundColor: 'rgba(255,0,0,0.5)',
                                                                                                borderColor: 'rgba(255,0,0)',
                                                                                                borderWidth: 1,
                                                                                                data: [0,{{$views}},0,0]
                                                                                            }
                                                                                            ,
                                                                                            {
                                                                                                label: 'Calls Booked (19%)',
                                                                                                backgroundColor: 'rgba(0,204,0,0.5)',
                                                                                                borderColor: 'rgba(0,204,0)',
                                                                                                borderWidth: 1,
                                                                                                data: [0,0,{{$booking_count}},0]
                                                                                            }
                                                                                            ,
                                                                                            {
                                                                                                label: 'Calls Closed (0%)',
                                                                                                backgroundColor: 'rgba(255,0,0,0.5)',
                                                                                                borderColor: 'rgba(255,0,0)',
                                                                                                borderWidth: 1,
                                                                                                data: [0,0,0,0]
                                                                                            }
                                                                                        ],
                                                                                    }
                                                                                </script>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <strong class="text-danger">Optin Rate</strong><br>
                                                                                        <small>
                                                                                            <div class="row">
                                                                                                <div class="col-sm-4 text-danger">Current: 19%</div>
                                                                                                <div class="col-sm-4 text-info">Target: 20%</div>
                                                                                                <div class="col-sm-4">Total: {{$campaign_count}}</div>
                                                                                            </div>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <strong class="text-danger">View Rate</strong><br>
                                                                                        <small>
                                                                                            <div class="row">
                                                                                                <div class="col-sm-4 text-danger">Current: 31%</div>
                                                                                                <div class="col-sm-4 text-info">Target: 65%</div>
                                                                                                <div class="col-sm-4">Total: {{$views}}</div>
                                                                                            </div>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <strong class="text-success">Calls Booked</strong><br>
                                                                                        <small>
                                                                                            <div class="row">
                                                                                                <div class="col-sm-4 text-success">Current: 19%</div>
                                                                                                <div class="col-sm-4 text-info">Target: 13%</div>
                                                                                                <div class="col-sm-4">Total: {{$booking_count}}</div>
                                                                                            </div>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <strong class="text-danger">Calls Closed</strong><br>
                                                                                        <small>
                                                                                            <div class="row">
                                                                                                <div class="col-sm-4 text-danger">Current: 0%</div>
                                                                                                <div class="col-sm-4 text-info">Target: 20%</div>
                                                                                                <div class="col-sm-4">Total: 0</div>
                                                                                            </div>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            $(document).ready(function() {

                                                                //Line Chart INIT
                                                                new Chart(document.getElementById('campaign-stats').getContext('2d'), {
                                                                    type: 'horizontalBar',
                                                                    data: statsData,
                                                                    options: {
                                                                        elements: {
                                                                            rectangle: {
                                                                                borderWidth: 2,
                                                                            }
                                                                        },
                                                                        responsive: true,
                                                                        legend: {
                                                                            display: false,
                                                                        },
                                                                        scales : {
                                                                            yAxes : [{
                                                                                ticks : {
                                                                                    beginAtZero : true
                                                                                }
                                                                            }]
                                                                        },
                                                                        scaleBeginAtZero: true,
                                                                        tooltips: {enabled: false},
                                                                        hover: {mode: null},
                                                                    }
                                                                });
                                                            });
                                                        </script>

                                                        <div class="tab-pane" id="view-campaign-call-closed"
                                                             id="view-campaign-call-closed">

                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="alert alert-info">
                                                                        No Call Closed to show at this time.
                                                                    </div>

                                                                </div>
                                                            </div>


                                                        </div>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- end content-->
                                </div>
                                <!--  end card  -->
                            </div>
                            <!-- end col-md-12 -->
                        </div>
                        <!-- end row -->            </div>
                </div>
            </div>
            <div id="view-campaign-reg-booking-modal" class="modal hmodal-success show" tabindex="-1" role="dialog"
                 data-backdrop="static" data-keyboard="false" style="padding-right: 14.9935px; display: none;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="color-line"></div>
                        <div class="modal-header">
                            <h5 class="modal-title">Contact Registration &amp; Booking</h5>
                        </div>

                        <div class="modal-messages" style="display: none;"></div>

                        <div class="modal-body">


                            <div class="row">
                                <div class="col-md-12 ml-auto mr-auto">
                                    <div class="page-categories">

                                        <ul class="nav nav-pills nav-pills-rose nav-pills-icons justify-content-center"
                                            role="tablist">

                                            <li class="nav-item">
                                                <a class="nav-link view-rb-modal-tab-reg active show" data-toggle="tab"
                                                   href="#view-crb-reg" role="tablist">
                                                    <i class="fa fa-check"></i> Registration
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link view-rb-modal-tab-booking" data-toggle="tab"
                                                   href="#view-crb-booking" role="tablist">
                                                    <i class="fa fa-calendar"></i> Booking
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link view-rb-modal-tab-questionnaire" data-toggle="tab"
                                                   href="#view-crb-questionnaire" role="tablist">
                                                    <i class="fas fa-question-circle"></i> Questionnaire
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link view-rb-modal-tab-contact" data-toggle="tab"
                                                   href="#view-crb-contact" role="tablist">
                                                    <i class="fas fa-user"></i> Contact
                                                </a>
                                            </li>

                                        </ul>

                                        <hr>

                                        <div class="tab-content tab-space tab-subcategories">

                                            <div class="tab-pane view-rb-modal-tab-reg active show" id="view-crb-reg">
                                                <h4 class="text-center"><strong>Registration Details</strong></h4>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <strong>Registration ID:</strong>
                                                    </div>
                                                    <div class="col-sm-8 vcr-data-reg_id">42745</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <strong>Name:</strong>
                                                    </div>
                                                    <div class="col-sm-8 vcr-data-name">owais uddin gilani</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <strong>Email:</strong>
                                                    </div>
                                                    <div class="col-sm-8 vcr-data-email">owaisuddingilani@gmail.com
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <strong>Mobile:</strong>
                                                    </div>
                                                    <div class="col-sm-8 vcr-data-mobile"><img
                                                                src="https://www.clientfunnels.io/img/flags/pk.png"
                                                                alt="Pakistan Flag"> +923102323700 (Pakistan)
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <strong>Campaign:</strong>
                                                    </div>
                                                    <div class="col-sm-8 vcr-data-campaign">asdaS (ID: 773)</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <strong>Campaign Stage:</strong>
                                                    </div>
                                                    <div class="col-sm-8 vcr-data-stage">Indoctrination</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <strong>Webinar Watched:</strong>
                                                    </div>
                                                    <div class="col-sm-8 vcr-data-webinar_watched"></div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <strong>Registered:</strong>
                                                    </div>
                                                    <div class="col-sm-8 vcr-data-registered">3rd August 2020 12:51:59
                                                    </div>
                                                </div>
                                                <hr>

                                            </div>

                                            <div class="tab-pane view-rb-modal-tab-booking" id="view-crb-booking">

                                                <h4 class="text-center"><strong>Booking Details</strong></h4>
                                                <div class="alert alert-warning">
                                                    <i class="fas fa-exclamation-triangle"></i> This is the booking made
                                                    during the webinar, checkout the contact for more bookings made!
                                                </div>
                                                <hr>

                                                <div class="vcb-datawrap">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Booked Call ID:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcb-data-booked_call_id">3483</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Booked With:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcb-data-booked_with">Helena Hill</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Call Start:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcb-data-call_start">4th August 2020
                                                            13:00:00
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Call End:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcb-data-call_end">4th August 2020
                                                            15:00:00
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Call Duration:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcb-data-call_duration">2 hours</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Booked:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcb-data-booked">3rd August 2020 12:52:00
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Call Status:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcb-data-status"><span class="text-danger"><i
                                                                        class="fas fa-exclamation-triangle"></i> Waiting for call</span>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>

                                                <div class="vcb-no-data" style="display: none;">
                                                    <div class="alert alert-danger">
                                                        Contact has not booked a call themselves yet.
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="tab-pane view-rb-modal-tab-questionnaire"
                                                 id="view-crb-questionnaire">
                                                <h4 class="text-center"><strong>Questionnaire</strong></h4>

                                                <div class="vcq-qa-template" style="display: none">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <strong></strong>
                                                        </div>
                                                        <div class="col-sm-6>"></div>
                                                    </div>
                                                    <hr>
                                                </div>

                                                <div class="vcq-datawrap" style="display: none;">

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Questionnaire ID:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcq-data-questionnaire_id"></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Saved:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcq-data-saved"></div>
                                                    </div>
                                                    <hr>
                                                    <div class="row text-success">
                                                        <div class="col-sm-6">
                                                            <strong>Question</strong>
                                                        </div>
                                                        <div class="col-sm-6>"><strong>User Answer</strong></div>
                                                    </div>
                                                    <hr>
                                                    <hr>
                                                    <div class="vcq-qa-op"></div>


                                                </div>

                                                <div class="vcq-no-data">
                                                    <div class="alert alert-warning">
                                                        User has not answered the questionnaire OR questionnaire not set
                                                        in campaign.
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="tab-pane view-rb-modal-tab-contact" id="view-crb-contact">
                                                <h4 class="text-center"><strong>Contact</strong></h4>

                                                <hr>

                                                <div class="vcc-datawrap">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Contact ID:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcc-data-contact_id">34836</div>
                                                        <hr>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Contact Name:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcc-data-name">owais</div>
                                                        <hr>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Notes:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcc-data-notes"></div>
                                                        <hr>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Created:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcc-data-created">20th July 2020 17:49:05
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <strong>Created By:</strong>
                                                        </div>
                                                        <div class="col-sm-8 vcc-data-created_by"><span
                                                                    class="label label-warning">System</span></div>
                                                        <hr>
                                                    </div>
                                                    <a href="https://www.clientfunnels.io/campaigns/contacts/view/34836"
                                                       class="btn btn-success vcc-view-url" id="contact_url">
                                                        <i class="fa fa-arrow-right"></i> View Contact
                                                    </a>
                                                </div>

                                                <div class="vcc-no-data" style="display: none;">
                                                    <div class="alert alert-danger">
                                                        Deleted Contact
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>

                        </div>

                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">

                    <div class="copyright float-left">
                        <a href="#" title="View Our Cookie Policy" class="view-cookie-policy">
                            Cookie Policy
                        </a>
                        |
                        <a href="#" title="View Our Privacy Policy" class="view-privacy-policy">
                            Privacy Policy
                        </a>
                    </div>
                    <div class="copyright float-right">
                        © 2020 Client Funnels
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://www.clientfunnels.io/js/core/jquery.min.js"></script>
    <script src="https://www.clientfunnels.io/js/core/popper.min.js"></script>
    <script src="https://www.clientfunnels.io/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/jquery.validate.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/jquery.bootstrap-wizard.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/moment.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/sweetalert2.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/jquery-jvectormap.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/chartist.min.js"></script>
    <script src="https://www.clientfunnels.io/js/material-dashboard.js?v=2.1.0"></script>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=e1xreqfrwjb1aiyv3ecn3rx8we7fqm7gc954pguudl1pb0jo"></script>
    <script src="https://www.clientfunnels.io/js/default.js?v=1.1.2"></script>
    <script src="https://www.clientfunnels.io/vendor/select2/select2.js"></script>
    <script src="https://www.clientfunnels.io/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/Chart.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/jquery.dataTables.min.js"></script>
    <script src="https://www.clientfunnels.io/vendor/slim-image-cropper/js/slim.jquery.min.js"></script>
    <script src="https://www.clientfunnels.io/js/core/jquery.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/Chart.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/Chart.min.js"></script>
    <script src="https://www.clientfunnels.io/js/custom.js?v=1.1.4"></script>
    <script src="https://www.clientfunnels.io/js/material-dashboard.js?v=2.1.0"></script>

@endsection