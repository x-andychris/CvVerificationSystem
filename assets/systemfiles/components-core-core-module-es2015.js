(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["components-core-core-module"],{

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/admin/admin-login/admin-login.component.html":
/*!***************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/components/admin/admin-login/admin-login.component.html ***!
  \***************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div class=\"container-main\">\r\n    <div class=\"overlay\">\r\n        <div class=\"form-container\">\r\n            <form [formGroup]=\"signInForm\" (ngSubmit)=\"authenticateLogin()\">\r\n                <div style=\"text-align: center;\">\r\n                    <img src=\"assets/images/attest-logo.png\" width=\"80\" alt=\"Logo\"\r\n                    style=\"margin-right:5px\">\r\n                </div>\r\n\r\n                <div class=\"welcome-msg\">Welcome, Sign in to continue </div>\r\n\r\n                <b>Email Address</b>\r\n                <input type=\"email\" formControlName=\"signInFormEmail\" id=\"defaultsignInFormEmail\" mat-lnput\r\n                class=\"form-control mb-2\" placeholder=\"e.g example@sample.com\">\r\n         \r\n                <b>Password</b>\r\n                <input type=\"password\" formControlName=\"signInFormPassword\" id=\"defaultContactFormName\" mat-input\r\n                class=\"form-control mb-2\" placeholder=\"Enter Password\">\r\n        \r\n                <button mat-raised-button class=\"has-text-primary w-100 my-3\">\r\n                  <span *ngIf=\"!isLoading\">Login </span>\r\n                  <div *ngIf=\"isLoading\" style=\"display: inline-block;\">\r\n                    <mat-progress-spinner\r\n                    diameter=\"18\"\r\n                    color=\"accent\"\r\n                    mode=\"indeterminate\">\r\n                    </mat-progress-spinner>\r\n                  </div>\r\n                </button>\r\n                <div style=\"color:#ffd740; font-size:13px; text-align: center; margin:0 auto 10px\">\r\n                    {{errMsg}}\r\n                </div>\r\n\r\n            </form>\r\n        </div>\r\n    </div>\r\n</div>");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/auth-components/app-login/app-login.component.html":
/*!*********************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/components/auth-components/app-login/app-login.component.html ***!
  \*********************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div class=\"main-container\">\r\n    <div class=\"flex-end\">\r\n        <button mat-icon-button (click)=\"closeModal()\">\r\n            <mat-icon>close</mat-icon>\r\n        </button>\r\n    </div>\r\n \r\n    <div class=\"flex-btw\">\r\n        <div class=\"flex-center login-logo\">\r\n            <div class=\"text-center\">\r\n                <div>\r\n                    <img src=\"assets/images/attestation-logo.png\" alt=\"ess logo\" width=\"150\">\r\n                </div>\r\n                <!-- &nbsp;\r\n                <div> Evaluation and Accreditation Board </div>\r\n                <div style=\"font-size: 14px;\"> Evaluation and Accreditation Division </div> -->\r\n            </div>\r\n        </div>\r\n\r\n        <div class=\"login-form\">\r\n            <div class=\"signform\" *ngIf=\"isLogin && !isReset && !isSignup\">    \r\n                <div class=\"header\">Welcome Back!</div>\r\n                <div class=\"header\">Sign in to continue</div>\r\n                <div class=\"error\">{{errMsg}}</div>\r\n        \r\n                <form class=\"border p-5\"\r\n                class=\"signup-form\" \r\n                [formGroup]=\"signInForm\" (ngSubmit)=\"onsignInSubmit()\">\r\n                    <b>Email Address</b>\r\n                    <input type=\"email\" formControlName=\"signInFormEmail\" id=\"defaultsignInFormEmail\" mat-lnput\r\n                    class=\"form-control mb-2\" placeholder=\"e.g example@sample.com\">\r\n            \r\n                    <b>Password</b>\r\n                    <input type=\"password\" formControlName=\"signInFormPassword\" id=\"defaultContactFormName\" mat-input\r\n                    class=\"form-control mb-2\" placeholder=\"Enter Password\">\r\n            \r\n                    <button mat-raised-button color=\"primary\" class=\"has-text-primary w-100 my-3\">\r\n                        <span *ngIf=\"!isLoading\">Login &nbsp; </span>\r\n                        <div *ngIf=\"isLoading\" style=\"display: inline-block;\">\r\n                            <mat-progress-spinner\r\n                                diameter=\"18\"\r\n                                color=\"accent\"\r\n                                mode=\"indeterminate\">\r\n                            </mat-progress-spinner>\r\n                        </div>\r\n                    </button>\r\n        \r\n                    <div class=\"flex-center\">\r\n                        <button mat-button color=\"primary\" style=\"border:none\" \r\n                        (click)=\"isLogin = false; isSignup = true; isReset = false\"> Create account </button>\r\n                            <div style=\"color: black;\"> | </div>\r\n                        <button mat-button color=\"primary\" style=\"border:none\" \r\n                        (click)=\"isLogin = false; isSignup = false; isReset = true\"> Forgot Password </button>\r\n                    </div>\r\n\r\n                <!-- <div class=\"text-center\" style=\"color: yellow;\">Powered by Comsoft Limited</div> -->\r\n                </form>\r\n            </div>\r\n            <!-- </div> -->\r\n\r\n            <div class=\"signform\" *ngIf=\"!isLogin && !isReset && isSignup\">    \r\n                <app-app-signup (login)=\"openSignin()\"></app-app-signup>\r\n            </div>\r\n\r\n            <!-- Reset Password -->\r\n            <div class=\"signform\" *ngIf=\"isReset && !isLogin && !isSignup\">    \r\n                <app-reset-password (relogin)=\"openSignin()\"></app-reset-password>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/auth-components/app-signup/app-signup.component.html":
/*!***********************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/components/auth-components/app-signup/app-signup.component.html ***!
  \***********************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div *ngIf=\"!signedUp\">    \r\n  <div class=\"header\">Sign up in seconds</div>\r\n  <div class=\"error\">{{signuperrMsg}}</div>\r\n  <!-- SignUp Form -->\r\n  <form class=\"border px-5\" class=\"signup-form\" [formGroup]=\"signUpForm\" (ngSubmit)=\"onsignUpSubmit()\">\r\n    <b>Applicant Name</b>\r\n    <input type=\"email\" formControlName=\"signUpFormName\" id=\"defaultsignUpFormName\" mat-lnput\r\n    class=\"form-control mb-2\" placeholder=\"e.g John Doe\">\r\n    \r\n    <b>Applicant Email\r\n        Address </b>\r\n    <input type=\"email\" formControlName=\"signUpFormEmail\" id=\"defaultsignUpFormEmail\" mat-lnput\r\n    class=\"form-control mb-2\" placeholder=\"e.g example@sample.com\">\r\n    \r\n    <b>Password </b>  \r\n    <input type=\"password\" formControlName=\"signUpFormPassword\" id=\"defaultsignUpFormPassword\" mat-input\r\n    class=\"form-control mb-2\" placeholder=\"Enter Password\">\r\n    \r\n    <button mat-raised-button color=\"primary\"  class=\"has-text-primary w-100 my-3\"\r\n    type=\"submit\">\r\n      <span *ngIf=\"!isSignUpLoading\"> Sign Up </span>\r\n      <div *ngIf=\"isSignUpLoading\" style=\"display: inline-block;\">\r\n        <mat-progress-spinner\r\n        diameter=\"18\"\r\n        color=\"accent\"\r\n        mode=\"indeterminate\">\r\n        </mat-progress-spinner>\r\n      </div>   \r\n    </button>\r\n\r\n    <div style=\"text-align: center;\">\r\n      <button mat-button color=\"primary\" style=\"border:none\"\r\n      (click)=\"switchToSignin()\"> Already have an account? </button>\r\n    </div>\r\n  </form>\r\n</div>\r\n\r\n\r\n<div class=\"email-container\" *ngIf=\"signedUp\">\r\n  <div> Thanks for registering! </div>\r\n  <div>\r\n      <h5 class=\"has-text-primary\"> Please confirm your email.</h5> \r\n      &nbsp;\r\n      &nbsp;\r\n      <div>\r\n        A confirmation email has been sent to you at\r\n        <b> <span class=\"has-text-primary\">{{signedUpUser}}</span> </b> \r\n      </div>\r\n  </div>\r\n  &nbsp;\r\n\r\n  <div> \r\n    <button mat-raised-button color=\"primary\"  \r\n    (click)=\"switchToSignin()\"\r\n    class=\"has-text-primary w-100 my-3\">\r\n      Login to continue  \r\n    </button>\r\n  </div>\r\n</div>");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/auth-components/reset-password/reset-password.component.html":
/*!*******************************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/components/auth-components/reset-password/reset-password.component.html ***!
  \*******************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div class=\"recover-password-container\"  *ngIf=\"!mailSent\">\n    <div class=\"header-text\">\n        Recover your password\n    </div> \n    \n    <div class=\"header-subtitle\">We will send a new password to the email address you\n        provide below only if it is connected to an account.\n    </div>\n\n    <form [formGroup]=\"forgotPasswordForm\" (ngSubmit)=\"resetPassword()\">\n        <p class=\"text-center errormsg\">{{forgotPasswordMessage}}</p>\n        <b>Email Address </b>  \n        <input formControlName=\"resetEmailAddress\" mat-input\n        class=\"form-control mb-2\" placeholder=\"example@sample.com\">\n\n        <div class=\"mb-3\">\n            <button mat-raised-button class=\"w-100 my-3\" \n            color=\"primary\">\n                <span *ngIf=\"!isLoading\"> Reset Password </span>\n                <div *ngIf=\"isLoading\" style=\"display: inline-block;\">\n                <mat-progress-spinner\n                diameter=\"18\"\n                color=\"accent\"\n                mode=\"indeterminate\">\n                </mat-progress-spinner>\n                </div>   \n            </button>\n        </div>\n    </form>\n\n    <div class=\"flex-center\">\n        <button mat-button color=\"primary\" style=\"border:none\" \n        (click)=\"goToLogin()\"> Return to sign in </button>\n    </div>\n\n\n</div>\n\n<div style=\"text-align: center;\" *ngIf=\"mailSent\">\n    <div class=\"header-text\">\n        We just sent you an email\n    </div>\n\n    <div class=\"header-subtitle\">\n        Kindly login with the details sent to your account\n    </div>\n\n    <div><button mat-raised-button color=\"primary\" class=\"w-100 my-3\" (click)=\"goToLogin()\">Login</button></div>\n</div>");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/core.component.html":
/*!*******************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/core.component.html ***!
  \*******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<router-outlet></router-outlet>");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/faq/faq.component.html":
/*!**********************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/faq/faq.component.html ***!
  \**********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<app-nav-bar></app-nav-bar>\r\n\r\n<div class=\"main-container\">\r\n    <div class=\"terms-header\">\r\n        Welcome to the <br>\r\n        <span class=\"has-text-primary\">Frequently Asked Questions Section</span>\r\n    </div>\r\n    <div class=\"content-container\">\r\n        <div class=\"content-wrapper\">\r\n\r\n            <div class=\"wrapper\">\r\n                <div class=\"header\">General</div>\r\n                <mat-accordion>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        1. &nbsp; How do I pay for utilities on the app?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> You can pay for utilities\r\n                                using your NG card or your NG wallet.\r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        2. &nbsp; Can I withdraw before the withdrawal date?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> Yes you can, however, this\r\n                                attracts charges. Hence, try to ensure you only lock down funds you\r\n                                are sure you can lock away for the duration set. That way, you will be\r\n                                able to get full benefits.\r\n                                \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        3. &nbsp; How safe are my funds if i save with you?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> \r\n                                All funds saved on our platform are\r\n                                NDIC insured through Purplemoney MFB, so be assured about the safety of your funds.\r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        4. &nbsp; How secure is the NG platform?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> We have put things in place to\r\n                                ensure the safety of your account and we advise that once you have set\r\n                                up your transaction pin, please keep the details safe to ensure nobody\r\n                                else can carry out an unauthorised transaction on your account.                                                           \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                </mat-accordion>\r\n            </div>\r\n\r\n\r\n            <div class=\"wrapper\">\r\n                <div class=\"header\">Card</div>\r\n                <mat-accordion>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        1. &nbsp; How can i get my NG interest free credit card?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> Simply sign up\r\n                                and provide the necessary details when you click on activate card\r\n                                button. Once that is done, your card will be activated and you can get\r\n                                started with meeting your needs.                                \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        2. &nbsp; Do i have to pay to activate my card?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> Activating your card is free,\r\n                                however, we charge N50 (fifty naira) for card validation for\r\n                                collection purposes.\r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        3. &nbsp; Do you charge interest on the credit?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> We do not charge any interest\r\n                                rate on the credit. As a result, you only pay back what you used on\r\n                                the card and nothing more.                                \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        4. &nbsp; What are transaction fees?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> Transaction fees are our charges anytime\r\n                                you use the card for a transaction and we process the payment for you\r\n                                How much do you charge as transaction fees?- We charge N175 (one\r\n                                hundred and seventy-five naira) on every N2000. For less than N2000,\r\n                                we charge N100 (one hundred naira).                                                             \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        5. &nbsp; How long is my grace period to pay back what I used on the card?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> The\r\n                                grace period is a period of 30 days, after which, we would have to\r\n                                collect what you used on the card.                                                       \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        6. &nbsp; What do you mean by pay what you use on the card?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> We mean, if you\r\n                                have N20,000 (twenty thousand naira) on your card and you only used\r\n                                N5,000 (five thousand naira) from the total sum, what you pay back at\r\n                                the end of the grace period is simply the N5,000 (five thousand\r\n                                naira).                                                                \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        7. &nbsp; On what platforms can i use my card?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> You can use your cards on\r\n                                NG approved platforms. We will keep updating you as we build our\r\n                                portfolio of partner merchants. You can follow us on our social media\r\n                                pages.                                                                            \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        8. &nbsp; What if I default in paying back the credit used?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> We wouldn’t want\r\n                                this, however, should that happen, from the 3rd day of default, the\r\n                                amount used would start attracting a 1% interest rate on each day of\r\n                                default.                                                                                                \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        9. &nbsp; Can i send credit to another NG user?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> Absolutely!. You can fund\r\n                                another user’s credit from your total credit balance on your card and\r\n                                at the same time, another user can also fund your card, isn’t that\r\n                                amazing?. The goal is really to never run out of funds.                                                                                                \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                </mat-accordion>\r\n            </div>\r\n\r\n            <div class=\"wrapper\">\r\n                <div class=\"header\">Wallet</div>\r\n                <mat-accordion>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        1. &nbsp; What can i do with my NG wallet?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> All withdrawals into bank\r\n                                accounts are done from your wallet. You can also pay for utilities on\r\n                                the app using funds you have in your wallet.\r\n                                \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        2. &nbsp; How do I fund my wallet?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> Fund your wallet by using your bank’s debit card \r\n                                and have money at the palm of your hands at all times.                                \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                </mat-accordion>\r\n            </div>\r\n\r\n            <div class=\"wrapper\">\r\n                <div class=\"header\"> Savings</div>\r\n                <mat-accordion>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        1. &nbsp; What are the saving plans available on NG?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> We have made\r\n                                available three saving options and they are; core, target\r\n                                and lock with each offering unique benefits                                \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        2. &nbsp; What are the interest rates available under each plan?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> For \r\n                                core, earn up to 13% interest rates on your savings, 15% on your \r\n                                target savings and up to 15% on your  lock savings.                                                                \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                    <mat-expansion-panel>\r\n                        <mat-expansion-panel-header>\r\n                        <mat-panel-title>\r\n                        3. &nbsp; How often can i top up my savings?\r\n                        </mat-panel-title>\r\n                        </mat-expansion-panel-header>\r\n                        <div class=\"content\"> You can top up your  core\r\n                                account anytime, you can top up an active  target account anytime\r\n                                too, however, you can only top up your  lock once for the\r\n                                duration set for it.                                                                                                \r\n                        </div>\r\n                    </mat-expansion-panel>\r\n                </mat-accordion>\r\n            </div>\r\n        </div>\r\n\r\n        <div class=\"right\">\r\n            <div class=\"canvas\">\r\n                <p class=\"header2\">Still can't find answers?</p>\r\n                <p class=\"text\">Reach us through any of these channels now.</p>\r\n                <li class=\"flex-el\"> \r\n                    <a href=\"mailto:info@.ng\">info@.ng</a> \r\n                </li>\r\n                \r\n                <!-- <li class=\"flex-el\"> \r\n                    <div>0905 3734 3422</div> \r\n                </li> -->\r\n        \r\n                <li class=\"social-wrapper\">\r\n                    <div class=\"parent\">\r\n                    <a href=\"https://www.facebook.com/\"  target=\"_blank\">\r\n                        <div class=\"social-circle\">\r\n                        <img src=\"assets/images/facebook-icon.svg\" alt=\"\" width=\"8\">\r\n                        </div>\r\n                    </a>\r\n                    </div>\r\n        \r\n                    <div class=\"parent\">\r\n                    <a href=\"https://twitter.com/\" target=\"_blank\">\r\n                        <div class=\"social-circle\">\r\n                        <img src=\"assets/images/twitter-icon.svg\" alt=\"\" width=\"15\">\r\n                        </div>\r\n                    </a>\r\n                    </div>\r\n        \r\n                    <div class=\"parent\">\r\n                    <a href=\"https://www.instagram.com/\" target=\"_blank\">\r\n                        <div class=\"social-circle\">\r\n                        <img src=\"assets/images/instagram-icon.svg\" alt=\"\" width=\"15\">\r\n                        </div>\r\n                    </a>\r\n                    </div>\r\n        \r\n                    <div class=\"parent\">\r\n                    <div class=\"social-circle\" >\r\n                        <img src=\"assets/images/whatsapp-icon.svg\" alt=\"\" width=\"15\">\r\n                    </div>\r\n                    </div>\r\n                </li>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/landing-page/landing-page.component.html":
/*!****************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/landing-page/landing-page.component.html ***!
  \****************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div style=\"background-color:white; padding: 0; margin:0; min-height: 100vh;\">\r\n    <app-nav-bar></app-nav-bar>\r\n\r\n    <div class=\"flex-btw\" style=\"align-items: stretch; padding-top: 80px;\">\r\n        <div class=\"left-hero\">\r\n            <div>\r\n              <h1> <b> Check the credibility of your <span class=\"has-text-primary\">credentials</span> </b> </h1>\r\n              &nbsp;  \r\n              &nbsp;\r\n\r\n              <div class=\"search-box\">\r\n                <mat-icon color=\"primary\" class=\"search-icon\">search</mat-icon>\r\n                <input type=\"text\" placeholder=\"Enter Document Number\" name=\"\" \r\n                class=\"input-style\" id=\"\" [(ngModel)]=\"app_key\">\r\n                <button mat-icon-button color=\"primary\" (click)=\"verifyNumber()\"\r\n                class=\"search-submit\">\r\n                  <mat-icon *ngIf=\"!isVerifying\">arrow_forward</mat-icon>\r\n                  <div *ngIf=\"isVerifying\" style=\"display: inline-block;\">\r\n                    <mat-progress-spinner\r\n                    diameter=\"18\"\r\n                    color=\"accent\"\r\n                    mode=\"indeterminate\">\r\n                    </mat-progress-spinner>\r\n                  </div>\r\n                </button>\r\n              </div>\r\n              <div class=\"errormsg\" style=\"font-weight:500; transition: all .5s;\">{{errmsg}}</div>\r\n            </div>\r\n        </div>\r\n\r\n        <div class=\"right-hero\">\r\n            <div class=\"shaped-image-holder\">\r\n                <div class=\"overlay\">\r\n                    \r\n                </div>\r\n            </div>\r\n\r\n        </div>\r\n    </div>\r\n\r\n    <div class=\"steps-section\">\r\n      <div class=\"header\">Procedures for <span class=\"has-text-primary\">Evaluation </span> & <span class=\"has-text-primary\">Accreditation </span></div>\r\n      <div class=\"border-style\"></div>\r\n      &nbsp;\r\n      &nbsp;\r\n      <div class=\"offer-wrapper\">\r\n        <div class=\"offer\">\r\n          <div style=\"width: 60px;\">\r\n              <div class=\"icon\">\r\n                <mat-icon>filter_1</mat-icon>\r\n              </div>\r\n          </div>\r\n          <div class=\"offer-content\">  \r\n            <div class=\"offer-header\">Access Application</div>\r\n            <div class=\"offer-text\">Sign up an account, complete email validation and proceed to login\r\n            </div>\r\n  \r\n            <!-- <div style=\"margin-top:5px\">\r\n              <button mat-button color=\"primary\" class=\"option-button\" (click)=\"authentication('signup')\">Sign Up \r\n              <mat-icon class=\"mat-18x\">arrow_forward</mat-icon></button>\r\n            </div> -->\r\n            \r\n          </div>\r\n        </div>\r\n  \r\n        <div class=\"offer\">\r\n          <div style=\"width: 60px;\">\r\n            <div class=\"icon\">\r\n              <mat-icon>filter_2</mat-icon>\r\n            </div>\r\n          </div>\r\n          <div class=\"offer-content\">\r\n            <div class=\"offer-header\">Get Started</div>\r\n            <div class=\"offer-text\">Select Application type and provide required details.\r\n              </div>\r\n            \r\n          </div>\r\n        </div>\r\n  \r\n        <div class=\"offer\">\r\n          <div style=\"width: 60px;\">\r\n            <div class=\"icon\">\r\n              <mat-icon>filter_3</mat-icon>\r\n            </div>\r\n          </div>\r\n          <div class=\"offer-content\">\r\n            <div class=\"offer-header\">Make Payment</div>\r\n            <div class=\"offer-text\">Select documents for authentication/evaluation, generate RRR Payment code and make payment of non-refundable fee</div>\r\n            \r\n          </div>\r\n        </div>\r\n  \r\n        <div class=\"offer\">\r\n          <div style=\"width: 60px;\">\r\n            <div class=\"icon\">\r\n              <mat-icon>filter_4</mat-icon>\r\n            </div>\r\n          </div>\r\n          <div class=\"offer-content\">\r\n            <div class=\"offer-header\">Upload Documents</div>\r\n            <div class=\"offer-text\">After payment upload related documents ( 1 original copy and 2 photocopies will be required on the appointment date) \r\n              </div>\r\n          </div>\r\n        </div>\r\n  \r\n        <div class=\"offer\">\r\n          <div style=\"width: 60px;\">\r\n            <div class=\"icon\">\r\n              <mat-icon>filter_5</mat-icon>\r\n            </div>\r\n          </div>\r\n          <div class=\"offer-content\">\r\n            <div class=\"offer-header\">Schedule Appointment</div>\r\n            <div class=\"offer-text\">Proceed to select available appointment date and time session.\r\n              </div>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"offer\">\r\n          <div style=\"width: 60px;\">\r\n            <div class=\"icon\">\r\n              <mat-icon>filter_6</mat-icon>\r\n            </div>\r\n          </div>\r\n          <div class=\"offer-content\">\r\n            <div class=\"offer-header\">Proceed to Accreditation Venue</div>\r\n            <div class=\"offer-text\">Go to venue with all credentials for verification\r\n              </div>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>  \r\n\r\n    <div class=\"features\">\r\n      <div class=\"header\"> <span class=\"has-text-primary\">Key</span> Features</div>\r\n\r\n      <div class=\"feature-container\">\r\n        <div class=\"feature\">\r\n          <div class=\"icon\">\r\n            <img src=\"assets/images/appointment.svg\" width=\"60px\" alt=\"image\">\r\n          </div>\r\n          <div class=\"title\">Book Appointment</div>\r\n          <div class=\"content\">\r\n            Book appointments for evaluation and authentication of your academic credentials via our new and user friendly portal.\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"feature\">\r\n          <div class=\"icon\">\r\n            <img src=\"assets/images/online-appointment.svg\" alt=\"image\" width=\"60px\">\r\n          </div>\r\n          <div class=\"title\">Verify Credential</div>\r\n          <div class=\"content\">\r\n            Log on to our portal today to verify the authenticity of your employee’s, interns and students’ academic credentials.\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"feature\">\r\n          <div class=\"icon\">\r\n            <img src=\"assets/images/shield.svg\" width=\"60px\" alt=\"image\">\r\n          </div>\r\n          <div class=\"title\">Security</div>\r\n          <div class=\"content\">\r\n            Our portal is the safest and most reliable means of verifying academic credentials in the country.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <!-- <app-home-footer></app-home-footer> -->\r\n\r\n    <!-- Footer Section -->\r\n    <div class=\"foot\">\r\n      <div class=\"widget\">\r\n        <!-- <div class=\"widget-1\">\r\n          <p class=\"header\">About ESS </p>\r\n          \r\n        </div> -->\r\n\r\n        <div class=\"widget-1\">\r\n          <p class=\"header\">About</p>\r\n          <div>\r\n            The Evaluation and Accreditation portal of the Federal Ministry of Education, is an online system designed for \r\n            for applicants to apply for accreditation and evaluation\r\n            of academic credentials by the Federal Ministry of Education. The portal also\r\n            allows third parties( public and private institutions) to\r\n            verify credentials that have already been accredited by the Ministry.\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"widget-2\">\r\n          <p class=\"header\">Need Help?</p>\r\n          <!-- <li>Talk to an agent.</li> -->\r\n          <li class=\"flex-el\"> \r\n              <a href=\"mailto\">info@education.gov.ng</a> \r\n          </li>\r\n\r\n          <li class=\"flex-el\"> \r\n              <div>+234 903 0009 912 <br> +234 903 0009 913</div> \r\n          </li>\r\n  \r\n          <li class=\"social-wrapper\">\r\n            <div class=\"parent\">\r\n            <a href=\"https://www.facebook.com/nigeducation\"  target=\"_blank\">\r\n              <div class=\"social-circle\">\r\n                <img src=\"assets/images/facebook-icon.svg\" alt=\"\" width=\"8\">\r\n              </div>\r\n            </a>\r\n            </div>\r\n\r\n            <div class=\"parent\">\r\n              <a href=\"https://twitter.com/FME123456\" target=\"_blank\">\r\n                <div class=\"social-circle\">\r\n                  <img src=\"assets/images/twitter-icon.svg\" alt=\"\" width=\"15\">\r\n                </div>\r\n              </a>\r\n            </div>\r\n  \r\n            <!-- <div class=\"parent\">\r\n            <a href=\"https://www.instagram.com/\" target=\"_blank\">\r\n                <div class=\"social-circle\">\r\n                <img src=\"assets/images/instagram-icon.svg\" alt=\"\" width=\"15\">\r\n                </div>\r\n            </a>\r\n            </div>\r\n\r\n            <div class=\"parent\">\r\n            <div class=\"social-circle\">\r\n                <img src=\"assets/images/whatsapp-icon.svg\" alt=\"\" width=\"15\">\r\n            </div>\r\n            </div> -->\r\n          </li>\r\n        </div>\r\n    \r\n        <!-- <div class=\"widget-4\">\r\n          <p class=\"header\">Legal</p>\r\n          <li class=\"flex-el\">\r\n              <a>FAQ</a> \r\n          </li>\r\n          <li class=\"flex-el\">\r\n              <a>Terms of use </a>\r\n          </li>\r\n          <li class=\"flex-el\">\r\n              <a>Privacy policy</a>\r\n          </li>\r\n        </div> -->\r\n\r\n        <div class=\"widget-3\">\r\n        <!-- <p class=\"header\">Partners</p> -->\r\n          <div class=\"social-media\">\r\n            <!-- <div class=\"\"> -->\r\n            <a target=\"_blank\" href=\"https://comsoftltd.com/\">\r\n              <div class=\"position-relative\" \r\n              style=\"font-weight: 600; font-size: large; bottom:-20px; right: -85px;\">Powered by</div>\r\n              <div>\r\n              <img  class=\"partner\" src=\"assets/images/comsoft_logo.png\" alt=\"Comsoft Limited\">\r\n              </div>\r\n            </a>\r\n\r\n          </div>\r\n        </div>\r\n      </div>\r\n\r\n      <div class=\"copyright\">\r\n        <div><b>&copy;</b> {{year}} \r\n          <a routerLink=\"/\">Federal Ministry of Education | Evaluation and Accreditation Division</a>. All rights reserved.\r\n        </div>\r\n      </div>\r\n    </div>\r\n  \r\n</div>\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/nav-bar/nav-bar.component.html":
/*!******************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/nav-bar/nav-bar.component.html ***!
  \******************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<mat-toolbar [ngClass]=\"{'style1': isScroll, 'style2':!isScroll}\">\r\n    <div style=\"margin-right: 60px;display: flex; align-items: center;\">\r\n        <a routerLink=\"/\">\r\n            <img src=\"assets/images/ess-logo.png\" alt=\"\"  class=\"logo\">\r\n        </a>\r\n        <!-- &nbsp;\r\n        &nbsp;\r\n        <div>\r\n            <div style=\"font-size:20px; font-weight:500; position: relative; bottom: -10px;\"> FEDERAL MINISTRY OF </div>\r\n            <div style=\"font-size:20px;font-weight:500;\"> EDUCATION </div>\r\n        </div> -->\r\n    </div>\r\n\r\n    <!-- <div class=\"web-menu\">\r\n        <button mat-button routerLink=\"/\" class=\"linktxt\" \r\n        routerLinkActive=\"active-link\" \r\n        [routerLinkActiveOptions] = {exact:true}>\r\n        Home\r\n        </button>&nbsp; &nbsp;\r\n          \r\n        <button mat-button routerLink=\"/faq\" \r\n        class=\"linktxt\" routerLinkActive=\"active-link\" \r\n        [routerLinkActiveOptions]={exact:true}>\r\n          FAQs\r\n        </button>&nbsp;&nbsp;\r\n    </div> -->\r\n\r\n    <!-- This fills the remaining space of the current row -->\r\n    <span class=\"fill-remaining-space\"></span>\r\n\r\n    <div class=\"web-menu\">\r\n        <button mat-button style=\"border:1px solid\" (click)=\"openLogin(true)\"> Sign In </button> &nbsp;\r\n        <button mat-raised-button color=\"primary\"  (click)=\"openLogin(false)\"> Register </button>\r\n    </div>\r\n\r\n    <div  class=\"mobile-menu\">\r\n      <div class=\"flex-el\">\r\n        <button mat-icon-button [matMenuTriggerFor]=\"profile\" \r\n        style=\"margin-right:10px;\">\r\n        <mat-icon>menu</mat-icon>\r\n        </button>\r\n      </div>\r\n      \r\n      <mat-menu #profile=\"matMenu\">\r\n          <div class=\"user-toolbar-container\">\r\n          <div class=\"user-toolbar-menu\">\r\n            <li class=\"list\" (click)=\"openLogin(true)\">Sign In</li>\r\n            <li class=\"list\" (click)=\"openLogin(false)\">Register</li>\r\n            <!-- <li class=\"list\" routerLink=\"/faq\">FAQs</li> -->\r\n          </div>\r\n          </div>\r\n      </mat-menu>\r\n    </div> \r\n</mat-toolbar>");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/verify-page/verify-page.component.html":
/*!**************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/verify-page/verify-page.component.html ***!
  \**************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div class=\"container-main\">\n    <div class=\"overlay\">\n        <div style=\"font-size: x-large;\">\n            <div class=\"slip-loader\" *ngIf=\"isVerifying\">\n                <div>\n                    <mat-progress-spinner\n                    diameter=\"40\"\n                    color=\"primary\"\n                    mode=\"indeterminate\">\n                    </mat-progress-spinner>\n                </div>\n                &nbsp;\n                &nbsp;\n                <div style=\"font-size: xx-large;\">Retrieving Data...</div>    \n            </div>\n        </div>\n\n        <div *ngIf=\"errmsg\">\n            <div class=\"errormsg\" style=\"font-weight: 500; font-size:x-large\">\n                {{errmsg}}\n            </div>\n            <div routerLink=\"/\" style=\"margin: 10px auto;font-size:x-large; cursor: pointer;\" class=\"flex-el has-text-primary\"> \n               <mat-icon>keyboard_arrow_left</mat-icon> &nbsp; \n               <div>Return Home</div>  \n            </div>\n        </div>\n\n        <div class=\"form-container\" *ngIf=\"appData\">\n            <div class=\"confirm-container\">\n                <div routerLink=\"/\" style=\"margin: 10px auto;font-size:large; cursor: pointer;\" class=\"flex-el has-text-primary\"> \n                    <mat-icon>keyboard_arrow_left</mat-icon> &nbsp; \n                    <div>Return Home</div>  \n                 </div>\n                <div class=\"text-center\" style=\"display: flex; justify-content: center;\" >\n                    <img src=\"assets/images/attestation-logo.png\" alt=\"\" width=\"120\">\n                </div>\n\n                <div class=\"pt-4\" style=\"font-weight: bold; text-align: center;\">\n                    <div style=\"font-weight: bold; font-size: 18px;\">FEDERAL MINISTRY OF EDUCATION</div>\n                    <div  style=\"font-weight: bold;\">EDUCATION SUPPORT SERVICES (ESS) DEPARTMENT</div>\n                    <div style=\"font-weight: 300;\">EVALUATION AND ACCREDITATION DIVISION</div>    \n                </div>\n\n                <div class=\"pt-4\" style=\"text-align: center; flex:none ;display: flex; justify-content: center;\">\n                    <div class=\"flex-el\">\n                        <mat-icon color=\"primary\">check_circle</mat-icon>\n                        &nbsp;\n                        <div style=\"font-size: x-large;\">Certified Document</div>\n                    </div>\n\n                    <!-- <div class=\"flex-el\" *ngIf=\"!appData.isauthorised\">\n                        <mat-icon color=\"warn\">block</mat-icon>\n                        &nbsp;\n                        <div style=\"font-size: x-large;\">Application not verified</div>\n                    </div> -->\n                </div>\n                &nbsp;\n                &nbsp;\n\n                <div class=\"pt-4\"></div>\n\n                <div class=\"flex-center responsive\">\n                    <div class=\"left-form-el\"> Document Number:</div>\n                    <div class=\"border-bottom right-form-el\">\n                        <div>{{appData?.doc_no}}</div>\n                    </div>\n                </div>\n\n                <!-- &nbsp;\n                <div  class=\"flex-center responsive\">\n                    <div class=\" left-form-el\">\n                        Applicant’s name: \n                    </div>\n                    <div class=\"border-bottom  right-form-el\">\n                        <div>{{appData?.nameofapplicant}}</div>\n                    </div>\n                </div> -->\n                &nbsp;\n                <div class=\"flex-center responsive\">\n                    <div class=\" left-form-el\">\n                        Document owner name: \n                    </div>\n                    <div class=\"border-bottom right-form-el\">\n                        <div>{{appData?.doc_ownername}}</div>\n                    </div>\n                </div>\n                &nbsp;\n                <div class=\" flex-center responsive\">\n                    <div class=\" left-form-el\">\n                        Type of Application: \n                    </div>\n                    <div class=\"border-bottom right-form-el\">\n                        <div>{{appData?.applicationtype}} </div>\n                    </div>\n                </div>\n                &nbsp;\n                <div>\n                    <div class=\"flex-center responsive\">\n                        <div class=\" left-form-el\">\n                            Verification date: \n                        </div>\n\n                        <div class=\"border-bottom right-form-el\">\n                            {{appData?.verificationDate | date}}\n                        </div>\n                    </div>\n                    &nbsp;\n                    <div class=\"flex-center responsive\">\n                        <div class=\"left-form-el\">\n                            Documents: \n                        </div>\n                        \n                        <div class=\"border-bottom right-form-el\">\n                            <div class=\"flex-el\"  style=\"margin-bottom: 10px;\">\n                                <div>{{appData?.displayname}}</div>\n                                &nbsp;\n                                <div>\n                                    <button mat-button \n                                    (click)=\"showDoc(appData.doclocation)\"\n                                    color=\"primary\">\n                                        View\n                                    </button>\n                                </div>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n    </div>\n</div>");

/***/ }),

/***/ "./src/app/components/admin/admin-login/admin-login.component.scss":
/*!*************************************************************************!*\
  !*** ./src/app/components/admin/admin-login/admin-login.component.scss ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".container-main {\n  position: relative;\n  min-height: 100vh;\n}\n.container-main .overlay {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-pack: center;\n          justify-content: center;\n  -webkit-box-align: center;\n          align-items: center;\n  background: #fff;\n  min-height: 100vh;\n}\n.full-width-80 {\n  width: 70%;\n}\n.form-container {\n  background-size: cover;\n  background: url('bookbg.jpg') no-repeat center;\n  box-shadow: inset 0 0 0 50vw rgba(0, 128, 128, 0.8);\n  padding: 20px 20px 80px;\n  width: 350px;\n  color: #fff;\n  border-radius: 10px;\n}\n.welcome-msg {\n  font-size: 18px;\n  text-align: center;\n  font-weight: 300;\n  margin: 15px auto 20px;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tcG9uZW50cy9hZG1pbi9hZG1pbi1sb2dpbi9DOlxcTXlzcGFjZVxcQ29tc29mdCBMaW1pdGVkXFxwcm9qZWN0c1xcY2Fic29sX2F0dGVzdGF0aW9uX3VpL3NyY1xcYXBwXFxjb21wb25lbnRzXFxhZG1pblxcYWRtaW4tbG9naW5cXGFkbWluLWxvZ2luLmNvbXBvbmVudC5zY3NzIiwic3JjL2FwcC9jb21wb25lbnRzL2FkbWluL2FkbWluLWxvZ2luL2FkbWluLWxvZ2luLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0ksa0JBQUE7RUFDQSxpQkFBQTtBQ0NKO0FERUk7RUFDSSxvQkFBQTtFQUFBLGFBQUE7RUFDQSx3QkFBQTtVQUFBLHVCQUFBO0VBQ0EseUJBQUE7VUFBQSxtQkFBQTtFQUNBLGdCQUFBO0VBQ0EsaUJBQUE7QUNBUjtBRElBO0VBQ0ksVUFBQTtBQ0RKO0FESUE7RUFDSSxzQkFBQTtFQUNBLDhDQUFBO0VBQ0EsbURBQUE7RUFDQSx1QkFBQTtFQUNBLFlBQUE7RUFDQSxXQUFBO0VBRUEsbUJBQUE7QUNGSjtBRE1BO0VBQ0ksZUFBQTtFQUNBLGtCQUFBO0VBQ0EsZ0JBQUE7RUFDQSxzQkFBQTtBQ0hKIiwiZmlsZSI6InNyYy9hcHAvY29tcG9uZW50cy9hZG1pbi9hZG1pbi1sb2dpbi9hZG1pbi1sb2dpbi5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi5jb250YWluZXItbWFpbntcclxuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcclxuICAgIG1pbi1oZWlnaHQ6IDEwMHZoO1xyXG4gICAgLy8gYmFja2dyb3VuZDogdXJsKFwiLi4vLi4vLi4vYXNzZXRzL2ltYWdlcy9hZ3JpYzEuanBnXCIpIGNlbnRlciBib3R0b20gbm8tcmVwZWF0O1xyXG4gICAgLy8gYmFja2dyb3VuZC1zaXplOiBjb3ZlcjtcclxuICAgIC5vdmVybGF5e1xyXG4gICAgICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICAgICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XHJcbiAgICAgICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcclxuICAgICAgICBiYWNrZ3JvdW5kOiAjZmZmO1xyXG4gICAgICAgIG1pbi1oZWlnaHQ6IDEwMHZoO1xyXG4gICAgfVxyXG59XHJcblxyXG4uZnVsbC13aWR0aC04MHtcclxuICAgIHdpZHRoOjcwJTtcclxufVxyXG5cclxuLmZvcm0tY29udGFpbmVye1xyXG4gICAgYmFja2dyb3VuZC1zaXplOiBjb3ZlcjtcclxuICAgIGJhY2tncm91bmQ6IHVybCgnLi4vLi4vLi4vLi4vYXNzZXRzL2ltYWdlcy9ib29rYmcuanBnJykgbm8tcmVwZWF0IGNlbnRlcjtcclxuICAgIGJveC1zaGFkb3c6IGluc2V0IDAgMCAwIDUwdncgcmdiYSgwLDEyOCwxMjgsMC44KTtcclxuICAgIHBhZGRpbmc6IDIwcHggMjBweCA4MHB4O1xyXG4gICAgd2lkdGg6MzUwcHg7XHJcbiAgICBjb2xvcjogI2ZmZjtcclxuICAgIC8vIG1pbi1oZWlnaHQ6IDcwdmg7XHJcbiAgICBib3JkZXItcmFkaXVzOiAxMHB4O1xyXG4gICAgLy8gYm94LXNoYWRvdzogMHB4IDBweCAxMHB4IC0ycHggI2NjYztcclxufVxyXG5cclxuLndlbGNvbWUtbXNne1xyXG4gICAgZm9udC1zaXplOiAxOHB4O1xyXG4gICAgdGV4dC1hbGlnbjogY2VudGVyO1xyXG4gICAgZm9udC13ZWlnaHQ6IDMwMDtcclxuICAgIG1hcmdpbjoxNXB4IGF1dG8gMjBweDtcclxufSIsIi5jb250YWluZXItbWFpbiB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgbWluLWhlaWdodDogMTAwdmg7XG59XG4uY29udGFpbmVyLW1haW4gLm92ZXJsYXkge1xuICBkaXNwbGF5OiBmbGV4O1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgYmFja2dyb3VuZDogI2ZmZjtcbiAgbWluLWhlaWdodDogMTAwdmg7XG59XG5cbi5mdWxsLXdpZHRoLTgwIHtcbiAgd2lkdGg6IDcwJTtcbn1cblxuLmZvcm0tY29udGFpbmVyIHtcbiAgYmFja2dyb3VuZC1zaXplOiBjb3ZlcjtcbiAgYmFja2dyb3VuZDogdXJsKFwiLi4vLi4vLi4vLi4vYXNzZXRzL2ltYWdlcy9ib29rYmcuanBnXCIpIG5vLXJlcGVhdCBjZW50ZXI7XG4gIGJveC1zaGFkb3c6IGluc2V0IDAgMCAwIDUwdncgcmdiYSgwLCAxMjgsIDEyOCwgMC44KTtcbiAgcGFkZGluZzogMjBweCAyMHB4IDgwcHg7XG4gIHdpZHRoOiAzNTBweDtcbiAgY29sb3I6ICNmZmY7XG4gIGJvcmRlci1yYWRpdXM6IDEwcHg7XG59XG5cbi53ZWxjb21lLW1zZyB7XG4gIGZvbnQtc2l6ZTogMThweDtcbiAgdGV4dC1hbGlnbjogY2VudGVyO1xuICBmb250LXdlaWdodDogMzAwO1xuICBtYXJnaW46IDE1cHggYXV0byAyMHB4O1xufSJdfQ== */");

/***/ }),

/***/ "./src/app/components/admin/admin-login/admin-login.component.ts":
/*!***********************************************************************!*\
  !*** ./src/app/components/admin/admin-login/admin-login.component.ts ***!
  \***********************************************************************/
/*! exports provided: AdminLoginComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AdminLoginComponent", function() { return AdminLoginComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var src_app_app_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! src/app/app.component */ "./src/app/app.component.ts");
/* harmony import */ var src_app_data_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! src/app/data.service */ "./src/app/data.service.ts");
/* harmony import */ var src_app_api_app_main_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! src/app/api/app_main_service */ "./src/app/api/app_main_service.ts");
/* harmony import */ var src_app_util_MessageUtil__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! src/app/util/MessageUtil */ "./src/app/util/MessageUtil.ts");
/* harmony import */ var src_app_model_user_model__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! src/app/model/user.model */ "./src/app/model/user.model.ts");









let AdminLoginComponent = class AdminLoginComponent {
    constructor(fb, data, router, appComponent, service) {
        this.fb = fb;
        this.data = data;
        this.router = router;
        this.appComponent = appComponent;
        this.service = service;
    }
    ngOnInit() {
        this.signInForm = this.fb.group({
            'signInFormEmail': ['', _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].compose([_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].email])],
            'signInFormPassword': ['', _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required],
        });
    }
    authenticateLogin() {
        let email = this.signInForm.get('signInFormEmail').value;
        let password = this.signInForm.get('signInFormPassword').value;
        if (this.signInForm.invalid) {
            this.errMsg = "Enter valid email address and password";
            return;
        }
        this.isLoading = true;
        this.errMsg = '';
        let loginData = new src_app_model_user_model__WEBPACK_IMPORTED_MODULE_8__["Login"]();
        loginData.password = password;
        loginData.username = email;
        this.service.getApplicantService().login(loginData)
            .subscribe(data => {
            if (data.message === 'Success') {
                this.service.saveToStore(src_app_util_MessageUtil__WEBPACK_IMPORTED_MODULE_7__["ParamUtil"].LOGIN_USER, data.data);
                if (data.data.roletype == 'Authorizer'
                    || data.data.roletypes == 'Authorizer'
                    || data.data.roletype == 'Authoriser'
                    || data.data.roletypes == 'Authoriser') {
                    this.router.navigateByUrl('evaluation-app/authorizer');
                    this.data.setAuthoriserLoginStatus();
                    this.isLoading = false;
                }
                if (data.data.roletype == 'Checker' || data.data.roletypes == 'Checker') {
                    this.data.setCheckerLoginStatus();
                    this.router.navigateByUrl('evaluation-app/checker');
                    this.isLoading = false;
                }
                if (data.data.roletype == 'Account' || data.data.roletypes == 'Accountant') {
                    this.data.setAccountLoginStatus();
                    this.router.navigateByUrl('evaluation-app/reports');
                    this.isLoading = false;
                }
                if (data.data.roletype == 'Administrator' || data.data.roletypes == 'Administrator') {
                    this.data.setAdminLoginStatus();
                    this.router.navigateByUrl('evaluation-app/dashboard');
                    this.isLoading = false;
                }
            }
            else if (typeof (data['data'] == Object)) {
                this.errMsg = 'Incorrect username or password';
            }
            else {
                this.errMsg = data['data'];
            }
            this.isLoading = false;
        }, error => {
            this.errMsg = "Error Connecting to server, please Contact Administrator";
            this.isLoading = false;
        });
    }
    onsignInSubmit() {
        if (this.signInForm.invalid) {
            this.errMsg = "Enter valid email address and password";
            return;
        }
        this.isLoading = true;
        setTimeout(() => {
            let email = this.signInForm.get('signInFormEmail').value;
            let password = this.signInForm.get('signInFormPassword').value;
            if (email == 'admin@comsoftltd.com' && password == 'admin') {
                this.appComponent.isLoggedIn = true;
                this.router.navigateByUrl('evaluation-app/dashboard');
                // this.data.getUserDetails(
                //   {
                //     fullname: "James Iniobong",
                //     role: "Administrator",
                //     contactEmail: "admin@comsoftltd.com"
                //   }
                // )
                this.isLoading = false;
            }
            else if (email == 'checker@comsoftltd.com' && password == 'admin') {
                this.appComponent.isLoggedIn = true;
                this.router.navigateByUrl('evaluation-app/checker');
                // this.data.getUserDetails(
                //   {
                //     fullname: "Hamza Dukubo",
                //     role: "Checker",
                //     contactEmail: "checker@comsoftltd.com"
                //   }
                // )
                this.isLoading = false;
            }
            else if (email == 'authorizer@comsoftltd.com' && password == 'admin') {
                this.appComponent.isLoggedIn = true;
                this.router.navigateByUrl('evaluation-app/authorizer');
                // this.data.getUserDetails(
                //   {
                //     fullname: "Abiola Igala",
                //     role: "Authorizer",
                //     contactEmail: "authorizer@comsoftltd.com"
                //   }
                // )
                this.isLoading = false;
            }
            else {
                this.errMsg = "Incorrect user email or password";
                this.isLoading = false;
            }
        }, 2000);
    }
};
AdminLoginComponent.ctorParameters = () => [
    { type: _angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"] },
    { type: src_app_data_service__WEBPACK_IMPORTED_MODULE_5__["DataService"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"] },
    { type: src_app_app_component__WEBPACK_IMPORTED_MODULE_4__["AppComponent"] },
    { type: src_app_api_app_main_service__WEBPACK_IMPORTED_MODULE_6__["MainService"] }
];
AdminLoginComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-admin-login',
        template: tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! raw-loader!./admin-login.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/admin/admin-login/admin-login.component.html")).default,
        styles: [tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ./admin-login.component.scss */ "./src/app/components/admin/admin-login/admin-login.component.scss")).default]
    })
], AdminLoginComponent);



/***/ }),

/***/ "./src/app/components/auth-components/app-login/app-login.component.scss":
/*!*******************************************************************************!*\
  !*** ./src/app/components/auth-components/app-login/app-login.component.scss ***!
  \*******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".signform {\n  border-radius: 8px;\n  padding: 20px 40px;\n  -webkit-box-flex: 1;\n          flex: 1;\n}\n\n.main-container {\n  width: 100%;\n  margin-top: 0px;\n}\n\n.error {\n  color: red;\n}\n\n.header {\n  color: teal;\n  font-size: 17px;\n  font-weight: 500;\n}\n\n.mat-raised-button {\n  color: white !important;\n}\n\n.signup-form {\n  padding: 30px 0 10px;\n}\n\n.signup-form b {\n  display: inline-block;\n  margin-bottom: 5px;\n  color: #434343 !important;\n  font-size: small;\n}\n\n.login-logo {\n  width: 50%;\n}\n\n.login-form {\n  width: 50%;\n  border-left: 1px solid #ccc;\n}\n\n.form {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-align: center;\n          align-items: center;\n  height: 100%;\n}\n\n.email-container {\n  padding: 20px 0 20px 40px;\n}\n\n@media screen and (max-width: 980px) {\n  .login-logo {\n    display: none;\n  }\n\n  .login-form {\n    padding: 0 10%;\n    width: 100%;\n    border: none;\n  }\n}\n\n@media screen and (max-width: 687px) {\n  .login-logo {\n    display: none;\n  }\n\n  .login-form {\n    padding: 0;\n    width: 100%;\n    border: none;\n  }\n}\n\n@media screen and (max-width: 450px) {\n  .signform {\n    padding: 20px 0;\n  }\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tcG9uZW50cy9hdXRoLWNvbXBvbmVudHMvYXBwLWxvZ2luL0M6XFxNeXNwYWNlXFxDb21zb2Z0IExpbWl0ZWRcXHByb2plY3RzXFxjYWJzb2xfYXR0ZXN0YXRpb25fdWkvc3JjXFxhcHBcXGNvbXBvbmVudHNcXGF1dGgtY29tcG9uZW50c1xcYXBwLWxvZ2luXFxhcHAtbG9naW4uY29tcG9uZW50LnNjc3MiLCJzcmMvYXBwL2NvbXBvbmVudHMvYXV0aC1jb21wb25lbnRzL2FwcC1sb2dpbi9hcHAtbG9naW4uY29tcG9uZW50LnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDSSxrQkFBQTtFQUNBLGtCQUFBO0VBQ0EsbUJBQUE7VUFBQSxPQUFBO0FDQ0o7O0FER0E7RUFDSSxXQUFBO0VBQ0EsZUFBQTtBQ0FKOztBREdBO0VBQ0ksVUFBQTtBQ0FKOztBRElBO0VBQ0ksV0FBQTtFQUNBLGVBQUE7RUFDQSxnQkFBQTtBQ0RKOztBREtBO0VBQ0ksdUJBQUE7QUNGSjs7QURLQTtFQUNJLG9CQUFBO0FDRko7O0FESUk7RUFDSSxxQkFBQTtFQUNBLGtCQUFBO0VBQ0EseUJBQUE7RUFDQSxnQkFBQTtBQ0ZSOztBRE1BO0VBQ0ksVUFBQTtBQ0hKOztBRE1BO0VBQ0ksVUFBQTtFQUFZLDJCQUFBO0FDRmhCOztBREtBO0VBQ0ksb0JBQUE7RUFBQSxhQUFBO0VBQWUseUJBQUE7VUFBQSxtQkFBQTtFQUFvQixZQUFBO0FDQXZDOztBREdBO0VBQ0kseUJBQUE7QUNBSjs7QURHQTtFQUNJO0lBQ0ksYUFBQTtFQ0FOOztFREdFO0lBQ0ksY0FBQTtJQUNBLFdBQUE7SUFDQSxZQUFBO0VDQU47QUFDRjs7QURHQTtFQUNJO0lBQ0ksYUFBQTtFQ0ROOztFRElFO0lBQ0ksVUFBQTtJQUNBLFdBQUE7SUFDQSxZQUFBO0VDRE47QUFDRjs7QURJQTtFQUNJO0lBQ0ksZUFBQTtFQ0ZOO0FBQ0YiLCJmaWxlIjoic3JjL2FwcC9jb21wb25lbnRzL2F1dGgtY29tcG9uZW50cy9hcHAtbG9naW4vYXBwLWxvZ2luLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLnNpZ25mb3Jte1xyXG4gICAgYm9yZGVyLXJhZGl1czogOHB4O1xyXG4gICAgcGFkZGluZzogMjBweCA0MHB4O1xyXG4gICAgZmxleDoxO1xyXG4gICAgLy8gY29sb3I6I2ZmZiFpbXBvcnRhbnQ7XHJcbn1cclxuXHJcbi5tYWluLWNvbnRhaW5lcntcclxuICAgIHdpZHRoOiAxMDAlO1xyXG4gICAgbWFyZ2luLXRvcDogMHB4O1xyXG59XHJcblxyXG4uZXJyb3J7XHJcbiAgICBjb2xvcjogcmVkO1xyXG4gICAgLy8gdGV4dC1hbGlnbjogY2VudGVyO1xyXG59XHJcblxyXG4uaGVhZGVye1xyXG4gICAgY29sb3I6IHRlYWw7XHJcbiAgICBmb250LXNpemU6IDE3cHg7XHJcbiAgICBmb250LXdlaWdodDogNTAwO1xyXG59XHJcblxyXG5cclxuLm1hdC1yYWlzZWQtYnV0dG9ue1xyXG4gICAgY29sb3I6IHdoaXRlIWltcG9ydGFudDtcclxufVxyXG5cclxuLnNpZ251cC1mb3Jte1xyXG4gICAgcGFkZGluZzozMHB4IDAgMTBweDtcclxuXHJcbiAgICBie1xyXG4gICAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcclxuICAgICAgICBtYXJnaW4tYm90dG9tOiA1cHg7XHJcbiAgICAgICAgY29sb3I6ICM0MzQzNDMhaW1wb3J0YW50O1xyXG4gICAgICAgIGZvbnQtc2l6ZTogc21hbGw7XHJcbiAgICB9XHJcbn1cclxuXHJcbi5sb2dpbi1sb2dve1xyXG4gICAgd2lkdGg6IDUwJTtcclxufVxyXG5cclxuLmxvZ2luLWZvcm17XHJcbiAgICB3aWR0aDogNTAlOyBib3JkZXItbGVmdDoxcHggc29saWQgI2NjY1xyXG59XHJcblxyXG4uZm9ybXtcclxuICAgIGRpc3BsYXk6IGZsZXg7IGFsaWduLWl0ZW1zOmNlbnRlcjsgaGVpZ2h0OiAxMDAlO1xyXG59XHJcblxyXG4uZW1haWwtY29udGFpbmVye1xyXG4gICAgcGFkZGluZzogMjBweCAwIDIwcHggNDBweCBcclxufVxyXG5cclxuQG1lZGlhIHNjcmVlbiBhbmQgKG1heC13aWR0aDo5ODBweCl7XHJcbiAgICAubG9naW4tbG9nb3tcclxuICAgICAgICBkaXNwbGF5Om5vbmU7XHJcbiAgICB9XHJcbiAgICBcclxuICAgIC5sb2dpbi1mb3Jte1xyXG4gICAgICAgIHBhZGRpbmc6IDAgMTAlO1xyXG4gICAgICAgIHdpZHRoOiAxMDAlO1xyXG4gICAgICAgIGJvcmRlcjpub25lO1xyXG4gICAgfVxyXG59XHJcblxyXG5AbWVkaWEgc2NyZWVuIGFuZCAobWF4LXdpZHRoOjY4N3B4KXtcclxuICAgIC5sb2dpbi1sb2dve1xyXG4gICAgICAgIGRpc3BsYXk6bm9uZTtcclxuICAgIH1cclxuICAgIFxyXG4gICAgLmxvZ2luLWZvcm17XHJcbiAgICAgICAgcGFkZGluZzogMDtcclxuICAgICAgICB3aWR0aDogMTAwJTtcclxuICAgICAgICBib3JkZXI6bm9uZTtcclxuICAgIH1cclxufVxyXG5cclxuQG1lZGlhIHNjcmVlbiBhbmQgKG1heC13aWR0aDo0NTBweCl7XHJcbiAgICAuc2lnbmZvcm17XHJcbiAgICAgICAgcGFkZGluZzogMjBweCAwO1xyXG4gICAgfVxyXG59IiwiLnNpZ25mb3JtIHtcbiAgYm9yZGVyLXJhZGl1czogOHB4O1xuICBwYWRkaW5nOiAyMHB4IDQwcHg7XG4gIGZsZXg6IDE7XG59XG5cbi5tYWluLWNvbnRhaW5lciB7XG4gIHdpZHRoOiAxMDAlO1xuICBtYXJnaW4tdG9wOiAwcHg7XG59XG5cbi5lcnJvciB7XG4gIGNvbG9yOiByZWQ7XG59XG5cbi5oZWFkZXIge1xuICBjb2xvcjogdGVhbDtcbiAgZm9udC1zaXplOiAxN3B4O1xuICBmb250LXdlaWdodDogNTAwO1xufVxuXG4ubWF0LXJhaXNlZC1idXR0b24ge1xuICBjb2xvcjogd2hpdGUgIWltcG9ydGFudDtcbn1cblxuLnNpZ251cC1mb3JtIHtcbiAgcGFkZGluZzogMzBweCAwIDEwcHg7XG59XG4uc2lnbnVwLWZvcm0gYiB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgbWFyZ2luLWJvdHRvbTogNXB4O1xuICBjb2xvcjogIzQzNDM0MyAhaW1wb3J0YW50O1xuICBmb250LXNpemU6IHNtYWxsO1xufVxuXG4ubG9naW4tbG9nbyB7XG4gIHdpZHRoOiA1MCU7XG59XG5cbi5sb2dpbi1mb3JtIHtcbiAgd2lkdGg6IDUwJTtcbiAgYm9yZGVyLWxlZnQ6IDFweCBzb2xpZCAjY2NjO1xufVxuXG4uZm9ybSB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIGhlaWdodDogMTAwJTtcbn1cblxuLmVtYWlsLWNvbnRhaW5lciB7XG4gIHBhZGRpbmc6IDIwcHggMCAyMHB4IDQwcHg7XG59XG5cbkBtZWRpYSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6IDk4MHB4KSB7XG4gIC5sb2dpbi1sb2dvIHtcbiAgICBkaXNwbGF5OiBub25lO1xuICB9XG5cbiAgLmxvZ2luLWZvcm0ge1xuICAgIHBhZGRpbmc6IDAgMTAlO1xuICAgIHdpZHRoOiAxMDAlO1xuICAgIGJvcmRlcjogbm9uZTtcbiAgfVxufVxuQG1lZGlhIHNjcmVlbiBhbmQgKG1heC13aWR0aDogNjg3cHgpIHtcbiAgLmxvZ2luLWxvZ28ge1xuICAgIGRpc3BsYXk6IG5vbmU7XG4gIH1cblxuICAubG9naW4tZm9ybSB7XG4gICAgcGFkZGluZzogMDtcbiAgICB3aWR0aDogMTAwJTtcbiAgICBib3JkZXI6IG5vbmU7XG4gIH1cbn1cbkBtZWRpYSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6IDQ1MHB4KSB7XG4gIC5zaWduZm9ybSB7XG4gICAgcGFkZGluZzogMjBweCAwO1xuICB9XG59Il19 */");

/***/ }),

/***/ "./src/app/components/auth-components/app-login/app-login.component.ts":
/*!*****************************************************************************!*\
  !*** ./src/app/components/auth-components/app-login/app-login.component.ts ***!
  \*****************************************************************************/
/*! exports provided: AppLoginComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppLoginComponent", function() { return AppLoginComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _angular_material__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/material */ "./node_modules/@angular/material/esm2015/material.js");
/* harmony import */ var src_app_api_applicant_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! src/app/api/applicant.service */ "./src/app/api/applicant.service.ts");
/* harmony import */ var src_app_api_app_main_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! src/app/api/app_main_service */ "./src/app/api/app_main_service.ts");
/* harmony import */ var src_app_model_user_model__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! src/app/model/user.model */ "./src/app/model/user.model.ts");
/* harmony import */ var src_app_util_MessageUtil__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! src/app/util/MessageUtil */ "./src/app/util/MessageUtil.ts");
/* harmony import */ var src_app_data_service__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! src/app/data.service */ "./src/app/data.service.ts");










let AppLoginComponent = class AppLoginComponent {
    constructor(dialogData, api, mainApiService, fb, router, dialog, dataService) {
        this.dialogData = dialogData;
        this.api = api;
        this.mainApiService = mainApiService;
        this.fb = fb;
        this.router = router;
        this.dialog = dialog;
        this.dataService = dataService;
        this.isLogin = true;
        this.signupSuccessful = false;
        this.objectLogin = new src_app_model_user_model__WEBPACK_IMPORTED_MODULE_7__["Login"]();
        this.verified = false;
        this.signedUp = false;
        this.isSignup = false;
        this.isReset = false;
        this.signedUpUser = '';
        if (this.dialogData) {
            this.isLogin = true;
            this.isReset = false;
            this.isSignup = false;
        }
        else {
            this.isLogin = false;
            this.isReset = false;
            this.isSignup = true;
        }
    }
    //, public appComponent: AppComponent
    ngOnInit() {
        this.signInForm = this.fb.group({
            'signInFormEmail': ['', _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].compose([_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].email])],
            'signInFormPassword': ['', _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required],
        });
    }
    closeModal() {
        this.dialog.closeAll();
        event.preventDefault();
    }
    onsignInSubmit() {
        if (this.signInForm.invalid) {
            this.errMsg = "Enter valid email address and password";
            return;
        }
        this.isLoading = true;
        let loginData = new src_app_model_user_model__WEBPACK_IMPORTED_MODULE_7__["Login"]();
        loginData.username = this.signInForm.get('signInFormEmail').value;
        loginData.password = this.signInForm.get('signInFormPassword').value;
        this.mainApiService.getApplicantService().login(loginData)
            .subscribe(data => {
            if (data.message === 'Success') {
                if (data.data.roletype == "Applicant") {
                    this.mainApiService.saveToStore(src_app_util_MessageUtil__WEBPACK_IMPORTED_MODULE_8__["ParamUtil"].LOGIN_USER, data.data);
                    this.dataService.setLoginStatus();
                    this.router.navigate(['/app/applications']);
                    this.isLoading = false;
                    this.closeModal();
                }
                else {
                    this.isLoading = false;
                    this.errMsg = "Error, you are trying to login as administrator";
                }
                // if (this.returnUrl === ''){
                // if(data.data){
                // }else this.router.navigate(['/app'])
                // } else this.router.navigate(['/app']);
            }
            else if (data.message == 'Failed') {
                if (data.data == 'Account disabled please contact administrator') {
                    this.isLoading = false;
                    this.errMsg = "Kindly check your email to activate your account";
                }
                else {
                    this.isLoading = false;
                    this.errMsg = "Incorrect username or password";
                }
            }
            // else if(data.message === 'Success' && data.data.roletype !== "Applicant"){
            //   this.isLoading = false;
            //   this.errMsg = "Error, you are trying to login as administrator"
            // }
            // else if (data.message == 'Failed'){
            // }
        }, error => {
            this.isLoading = false;
            this.errMsg = "Error, check your network settings";
        });
    }
    openSignin() {
        this.isLogin = true;
        this.isReset = false;
        this.isSignup = false;
    }
};
AppLoginComponent.ctorParameters = () => [
    { type: undefined, decorators: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Inject"], args: [_angular_material__WEBPACK_IMPORTED_MODULE_4__["MAT_DIALOG_DATA"],] }] },
    { type: src_app_api_applicant_service__WEBPACK_IMPORTED_MODULE_5__["Applicant"] },
    { type: src_app_api_app_main_service__WEBPACK_IMPORTED_MODULE_6__["MainService"] },
    { type: _angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"] },
    { type: _angular_material__WEBPACK_IMPORTED_MODULE_4__["MatDialog"] },
    { type: src_app_data_service__WEBPACK_IMPORTED_MODULE_9__["DataService"] }
];
AppLoginComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-app-login',
        template: tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! raw-loader!./app-login.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/auth-components/app-login/app-login.component.html")).default,
        styles: [tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ./app-login.component.scss */ "./src/app/components/auth-components/app-login/app-login.component.scss")).default]
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__param"](0, Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Inject"])(_angular_material__WEBPACK_IMPORTED_MODULE_4__["MAT_DIALOG_DATA"]))
], AppLoginComponent);



/***/ }),

/***/ "./src/app/components/auth-components/app-signup/app-signup.component.scss":
/*!*********************************************************************************!*\
  !*** ./src/app/components/auth-components/app-signup/app-signup.component.scss ***!
  \*********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".signform {\n  border-radius: 8px;\n  padding: 0px 40px;\n  -webkit-box-flex: 1;\n          flex: 1;\n  color: #333 !important;\n}\n\n.main-container {\n  width: 100%;\n  margin-top: 0px;\n}\n\n.error {\n  color: red;\n}\n\n.header {\n  color: teal;\n  font-size: 17px;\n  font-weight: 500;\n}\n\n.mat-raised-button {\n  color: white !important;\n}\n\n.signup-form {\n  padding: 30px 0 10px;\n}\n\n.signup-form b {\n  display: inline-block;\n  margin-bottom: 5px;\n  color: #434343 !important;\n  font-size: small;\n}\n\n.login-logo {\n  width: 50%;\n}\n\n.login-form {\n  width: 50%;\n  border-left: 1px solid #ccc;\n}\n\n.form {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-align: center;\n          align-items: center;\n  height: 100%;\n}\n\n.email-container {\n  padding: 20px 0 20px 40px;\n}\n\n@media screen and (max-width: 720px) {\n  .login-logo {\n    display: none;\n  }\n\n  .login-form {\n    width: 100%;\n    border: none;\n  }\n}\n\n@media screen and (max-width: 450px) {\n  .signform {\n    padding: 20px 0;\n  }\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tcG9uZW50cy9hdXRoLWNvbXBvbmVudHMvYXBwLXNpZ251cC9DOlxcTXlzcGFjZVxcQ29tc29mdCBMaW1pdGVkXFxwcm9qZWN0c1xcY2Fic29sX2F0dGVzdGF0aW9uX3VpL3NyY1xcYXBwXFxjb21wb25lbnRzXFxhdXRoLWNvbXBvbmVudHNcXGFwcC1zaWdudXBcXGFwcC1zaWdudXAuY29tcG9uZW50LnNjc3MiLCJzcmMvYXBwL2NvbXBvbmVudHMvYXV0aC1jb21wb25lbnRzL2FwcC1zaWdudXAvYXBwLXNpZ251cC5jb21wb25lbnQuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNJLGtCQUFBO0VBQ0EsaUJBQUE7RUFDQSxtQkFBQTtVQUFBLE9BQUE7RUFDQSxzQkFBQTtBQ0NKOztBREVBO0VBQ0ksV0FBQTtFQUNBLGVBQUE7QUNDSjs7QURFQTtFQUNJLFVBQUE7QUNDSjs7QURHQTtFQUNJLFdBQUE7RUFDQSxlQUFBO0VBQ0EsZ0JBQUE7QUNBSjs7QURJQTtFQUNJLHVCQUFBO0FDREo7O0FESUE7RUFDSSxvQkFBQTtBQ0RKOztBREdJO0VBQ0kscUJBQUE7RUFDQSxrQkFBQTtFQUNBLHlCQUFBO0VBQ0EsZ0JBQUE7QUNEUjs7QURLQTtFQUNJLFVBQUE7QUNGSjs7QURLQTtFQUNJLFVBQUE7RUFBWSwyQkFBQTtBQ0RoQjs7QURJQTtFQUNJLG9CQUFBO0VBQUEsYUFBQTtFQUFlLHlCQUFBO1VBQUEsbUJBQUE7RUFBb0IsWUFBQTtBQ0N2Qzs7QURFQTtFQUNJLHlCQUFBO0FDQ0o7O0FERUE7RUFDSTtJQUNJLGFBQUE7RUNDTjs7RURFRTtJQUNJLFdBQUE7SUFDQSxZQUFBO0VDQ047QUFDRjs7QURFQTtFQUNJO0lBQ0ksZUFBQTtFQ0FOO0FBQ0YiLCJmaWxlIjoic3JjL2FwcC9jb21wb25lbnRzL2F1dGgtY29tcG9uZW50cy9hcHAtc2lnbnVwL2FwcC1zaWdudXAuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyIuc2lnbmZvcm17XHJcbiAgICBib3JkZXItcmFkaXVzOiA4cHg7XHJcbiAgICBwYWRkaW5nOiAwcHggNDBweDtcclxuICAgIGZsZXg6MTtcclxuICAgIGNvbG9yOiMzMzMhaW1wb3J0YW50O1xyXG59XHJcblxyXG4ubWFpbi1jb250YWluZXJ7XHJcbiAgICB3aWR0aDogMTAwJTtcclxuICAgIG1hcmdpbi10b3A6IDBweDtcclxufVxyXG5cclxuLmVycm9ye1xyXG4gICAgY29sb3I6IHJlZDtcclxuICAgIC8vIHRleHQtYWxpZ246IGNlbnRlcjtcclxufVxyXG5cclxuLmhlYWRlcntcclxuICAgIGNvbG9yOiB0ZWFsO1xyXG4gICAgZm9udC1zaXplOiAxN3B4O1xyXG4gICAgZm9udC13ZWlnaHQ6IDUwMDtcclxufVxyXG5cclxuXHJcbi5tYXQtcmFpc2VkLWJ1dHRvbntcclxuICAgIGNvbG9yOiB3aGl0ZSFpbXBvcnRhbnQ7XHJcbn1cclxuXHJcbi5zaWdudXAtZm9ybXtcclxuICAgIHBhZGRpbmc6MzBweCAwIDEwcHg7XHJcbiAgICAvLyBtYXJnaW46MCAxMHB4O1xyXG4gICAgYntcclxuICAgICAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XHJcbiAgICAgICAgbWFyZ2luLWJvdHRvbTogNXB4O1xyXG4gICAgICAgIGNvbG9yOiAjNDM0MzQzIWltcG9ydGFudDtcclxuICAgICAgICBmb250LXNpemU6IHNtYWxsO1xyXG4gICAgfVxyXG59XHJcblxyXG4ubG9naW4tbG9nb3tcclxuICAgIHdpZHRoOiA1MCU7XHJcbn1cclxuXHJcbi5sb2dpbi1mb3Jte1xyXG4gICAgd2lkdGg6IDUwJTsgYm9yZGVyLWxlZnQ6MXB4IHNvbGlkICNjY2NcclxufVxyXG5cclxuLmZvcm17XHJcbiAgICBkaXNwbGF5OiBmbGV4OyBhbGlnbi1pdGVtczpjZW50ZXI7IGhlaWdodDogMTAwJTtcclxufVxyXG5cclxuLmVtYWlsLWNvbnRhaW5lcntcclxuICAgIHBhZGRpbmc6IDIwcHggMCAyMHB4IDQwcHggXHJcbn1cclxuXHJcbkBtZWRpYSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6NzIwcHgpe1xyXG4gICAgLmxvZ2luLWxvZ297XHJcbiAgICAgICAgZGlzcGxheTpub25lO1xyXG4gICAgfVxyXG4gICAgXHJcbiAgICAubG9naW4tZm9ybXtcclxuICAgICAgICB3aWR0aDogMTAwJTtcclxuICAgICAgICBib3JkZXI6bm9uZTtcclxuICAgIH0gICAgXHJcbn1cclxuXHJcbkBtZWRpYSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6NDUwcHgpe1xyXG4gICAgLnNpZ25mb3Jte1xyXG4gICAgICAgIHBhZGRpbmc6IDIwcHggMDtcclxuICAgIH1cclxufSIsIi5zaWduZm9ybSB7XG4gIGJvcmRlci1yYWRpdXM6IDhweDtcbiAgcGFkZGluZzogMHB4IDQwcHg7XG4gIGZsZXg6IDE7XG4gIGNvbG9yOiAjMzMzICFpbXBvcnRhbnQ7XG59XG5cbi5tYWluLWNvbnRhaW5lciB7XG4gIHdpZHRoOiAxMDAlO1xuICBtYXJnaW4tdG9wOiAwcHg7XG59XG5cbi5lcnJvciB7XG4gIGNvbG9yOiByZWQ7XG59XG5cbi5oZWFkZXIge1xuICBjb2xvcjogdGVhbDtcbiAgZm9udC1zaXplOiAxN3B4O1xuICBmb250LXdlaWdodDogNTAwO1xufVxuXG4ubWF0LXJhaXNlZC1idXR0b24ge1xuICBjb2xvcjogd2hpdGUgIWltcG9ydGFudDtcbn1cblxuLnNpZ251cC1mb3JtIHtcbiAgcGFkZGluZzogMzBweCAwIDEwcHg7XG59XG4uc2lnbnVwLWZvcm0gYiB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgbWFyZ2luLWJvdHRvbTogNXB4O1xuICBjb2xvcjogIzQzNDM0MyAhaW1wb3J0YW50O1xuICBmb250LXNpemU6IHNtYWxsO1xufVxuXG4ubG9naW4tbG9nbyB7XG4gIHdpZHRoOiA1MCU7XG59XG5cbi5sb2dpbi1mb3JtIHtcbiAgd2lkdGg6IDUwJTtcbiAgYm9yZGVyLWxlZnQ6IDFweCBzb2xpZCAjY2NjO1xufVxuXG4uZm9ybSB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIGhlaWdodDogMTAwJTtcbn1cblxuLmVtYWlsLWNvbnRhaW5lciB7XG4gIHBhZGRpbmc6IDIwcHggMCAyMHB4IDQwcHg7XG59XG5cbkBtZWRpYSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6IDcyMHB4KSB7XG4gIC5sb2dpbi1sb2dvIHtcbiAgICBkaXNwbGF5OiBub25lO1xuICB9XG5cbiAgLmxvZ2luLWZvcm0ge1xuICAgIHdpZHRoOiAxMDAlO1xuICAgIGJvcmRlcjogbm9uZTtcbiAgfVxufVxuQG1lZGlhIHNjcmVlbiBhbmQgKG1heC13aWR0aDogNDUwcHgpIHtcbiAgLnNpZ25mb3JtIHtcbiAgICBwYWRkaW5nOiAyMHB4IDA7XG4gIH1cbn0iXX0= */");

/***/ }),

/***/ "./src/app/components/auth-components/app-signup/app-signup.component.ts":
/*!*******************************************************************************!*\
  !*** ./src/app/components/auth-components/app-signup/app-signup.component.ts ***!
  \*******************************************************************************/
/*! exports provided: AppSignupComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppSignupComponent", function() { return AppSignupComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var src_app_api_app_main_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! src/app/api/app_main_service */ "./src/app/api/app_main_service.ts");
/* harmony import */ var src_app_model_user_model__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! src/app/model/user.model */ "./src/app/model/user.model.ts");






let AppSignupComponent = class AppSignupComponent {
    constructor(fb, router, mainApiService) {
        this.fb = fb;
        this.router = router;
        this.mainApiService = mainApiService;
        this.signedUp = false;
        this.login = new _angular_core__WEBPACK_IMPORTED_MODULE_1__["EventEmitter"]();
    }
    //, public appComponent: AppComponent
    ngOnInit() {
        this.signUpForm = this.fb.group({
            'signUpFormName': ['', _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required],
            'signUpFormEmail': ['', _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].compose([_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].email])],
            'signUpFormPassword': ['', _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required],
            'signUpFormPhone': ['', _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required],
            'signUpFormConfEmail': ['', _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].compose([_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].email])],
        });
    }
    onsignUpSubmit() {
        this.isSignUpLoading = true;
        let confEmail = this.signUpForm.get('signUpFormConfEmail').value;
        let Email = this.signUpForm.get('signUpFormEmail').value;
        let Pass = this.signUpForm.get('signUpFormPassword').value;
        //let confPass = this.signUpForm.get('signUpFormConfPassword').value
        //   if (this.signUpForm.invalid) {
        //     this.signuperrMsg = "Enter valid details"
        //     this.isLoading = false
        //     return;
        // }
        // if(Email !== confEmail ){
        //   this.signuperrMsg = "Email & Confirm Email do not match"
        //   this.isLoading = false
        //   return;
        // }
        // else if (Pass !== confPass){
        //   this.signuperrMsg = "Password & Confirm Passowrd do not match"
        //   this.isLoading = false
        //   return;
        // }
        let signUpData = new src_app_model_user_model__WEBPACK_IMPORTED_MODULE_5__["UserInfo"]();
        signUpData.contactemail = this.signUpForm.get('signUpFormEmail').value;
        signUpData.username = this.signUpForm.get('signUpFormEmail').value;
        signUpData.password = this.signUpForm.get('signUpFormPassword').value;
        signUpData.fullname = this.signUpForm.get('signUpFormName').value;
        signUpData.phone = this.signUpForm.get('signUpFormPhone').value;
        signUpData.status = true;
        signUpData.roletypes = 'Applicant';
        signUpData.datecreated = new Date();
        this.mainApiService.getApplicantService().applicantsignUpandAdduser(signUpData)
            .subscribe(data => {
            if (data.message === 'Success') {
                this.signedUp = true;
                this.isSignUpLoading = false;
                this.signedUpUser = data.data.contactemail;
            }
            else {
                this.isSignUpLoading = false;
                if (data.data === 'Duplicate entry! Record with specified parameter exists') {
                    this.signuperrMsg = "User already exist, try a different email";
                }
                else
                    this.signuperrMsg = data.data;
            }
        }, error => {
            this.isSignUpLoading = false;
            this.signuperrMsg = "Error! check your network settings";
        });
    }
    switchToSignin() {
        this.login.emit();
    }
};
AppSignupComponent.ctorParameters = () => [
    { type: _angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"] },
    { type: src_app_api_app_main_service__WEBPACK_IMPORTED_MODULE_4__["MainService"] }
];
tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Output"])()
], AppSignupComponent.prototype, "login", void 0);
AppSignupComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-app-signup',
        template: tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! raw-loader!./app-signup.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/auth-components/app-signup/app-signup.component.html")).default,
        styles: [tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ./app-signup.component.scss */ "./src/app/components/auth-components/app-signup/app-signup.component.scss")).default]
    })
], AppSignupComponent);



/***/ }),

/***/ "./src/app/components/auth-components/reset-password/reset-password.component.scss":
/*!*****************************************************************************************!*\
  !*** ./src/app/components/auth-components/reset-password/reset-password.component.scss ***!
  \*****************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".header-text {\n  font-size: 20px;\n  font-weight: 600;\n  text-align: center;\n  margin: 10px auto 40px;\n  color: teal;\n}\n\n.header-subtitle {\n  font-size: 15px;\n  margin: 20px auto 30px;\n  color: #7E7E7E;\n  text-align: center;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tcG9uZW50cy9hdXRoLWNvbXBvbmVudHMvcmVzZXQtcGFzc3dvcmQvQzpcXE15c3BhY2VcXENvbXNvZnQgTGltaXRlZFxccHJvamVjdHNcXGNhYnNvbF9hdHRlc3RhdGlvbl91aS9zcmNcXGFwcFxcY29tcG9uZW50c1xcYXV0aC1jb21wb25lbnRzXFxyZXNldC1wYXNzd29yZFxccmVzZXQtcGFzc3dvcmQuY29tcG9uZW50LnNjc3MiLCJzcmMvYXBwL2NvbXBvbmVudHMvYXV0aC1jb21wb25lbnRzL3Jlc2V0LXBhc3N3b3JkL3Jlc2V0LXBhc3N3b3JkLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0ksZUFBQTtFQUNBLGdCQUFBO0VBQ0Esa0JBQUE7RUFDQSxzQkFBQTtFQUNBLFdBQUE7QUNDSjs7QURFQTtFQUNJLGVBQUE7RUFDQSxzQkFBQTtFQUNBLGNBQUE7RUFDQSxrQkFBQTtBQ0NKIiwiZmlsZSI6InNyYy9hcHAvY29tcG9uZW50cy9hdXRoLWNvbXBvbmVudHMvcmVzZXQtcGFzc3dvcmQvcmVzZXQtcGFzc3dvcmQuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyIuaGVhZGVyLXRleHR7XHJcbiAgICBmb250LXNpemU6MjBweDsgXHJcbiAgICBmb250LXdlaWdodDo2MDA7IFxyXG4gICAgdGV4dC1hbGlnbjpjZW50ZXI7XHJcbiAgICBtYXJnaW46MTBweCBhdXRvIDQwcHg7XHJcbiAgICBjb2xvcjogdGVhbDtcclxufVxyXG5cclxuLmhlYWRlci1zdWJ0aXRsZXtcclxuICAgIGZvbnQtc2l6ZTogMTVweDtcclxuICAgIG1hcmdpbjoyMHB4IGF1dG8gMzBweDtcclxuICAgIGNvbG9yOiAjN0U3RTdFO1xyXG4gICAgdGV4dC1hbGlnbjogY2VudGVyO1xyXG4gXHJcbn0iLCIuaGVhZGVyLXRleHQge1xuICBmb250LXNpemU6IDIwcHg7XG4gIGZvbnQtd2VpZ2h0OiA2MDA7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgbWFyZ2luOiAxMHB4IGF1dG8gNDBweDtcbiAgY29sb3I6IHRlYWw7XG59XG5cbi5oZWFkZXItc3VidGl0bGUge1xuICBmb250LXNpemU6IDE1cHg7XG4gIG1hcmdpbjogMjBweCBhdXRvIDMwcHg7XG4gIGNvbG9yOiAjN0U3RTdFO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG59Il19 */");

/***/ }),

/***/ "./src/app/components/auth-components/reset-password/reset-password.component.ts":
/*!***************************************************************************************!*\
  !*** ./src/app/components/auth-components/reset-password/reset-password.component.ts ***!
  \***************************************************************************************/
/*! exports provided: ResetPasswordComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ResetPasswordComponent", function() { return ResetPasswordComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var src_app_api_app_main_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! src/app/api/app_main_service */ "./src/app/api/app_main_service.ts");




let ResetPasswordComponent = class ResetPasswordComponent {
    constructor(fb, service) {
        this.fb = fb;
        this.service = service;
        this.mailSent = false;
        this.relogin = new _angular_core__WEBPACK_IMPORTED_MODULE_1__["EventEmitter"]();
    }
    ngOnInit() {
        this.forgotPasswordForm = this.fb.group({
            'resetEmailAddress': ['', _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].compose([_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].email, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required])]
        });
    }
    resetPassword() {
        if (this.forgotPasswordForm.invalid) {
            this.forgotPasswordMessage = "Enter Valid email address";
            return;
        }
        this.isLoading = true;
        let username = this.forgotPasswordForm.get('resetEmailAddress').value;
        this.service.getApplicantService().passwordRestRequest(username)
            .subscribe(res => {
            if (res.message == "Success") {
                this.isLoading = false;
                this.mailSent = true;
            }
            else {
                this.isLoading = false;
                this.forgotPasswordMessage = "Operation failed!!!";
            }
        }, err => {
            this.isLoading = false;
            this.forgotPasswordMessage = "Error, Check your network settings";
        });
    }
    goToLogin() {
        this.relogin.emit();
    }
};
ResetPasswordComponent.ctorParameters = () => [
    { type: _angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"] },
    { type: src_app_api_app_main_service__WEBPACK_IMPORTED_MODULE_3__["MainService"] }
];
tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Output"])()
], ResetPasswordComponent.prototype, "relogin", void 0);
ResetPasswordComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-reset-password',
        template: tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! raw-loader!./reset-password.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/auth-components/reset-password/reset-password.component.html")).default,
        styles: [tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ./reset-password.component.scss */ "./src/app/components/auth-components/reset-password/reset-password.component.scss")).default]
    })
], ResetPasswordComponent);



/***/ }),

/***/ "./src/app/components/core/core.component.scss":
/*!*****************************************************!*\
  !*** ./src/app/components/core/core.component.scss ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2NvbXBvbmVudHMvY29yZS9jb3JlLmNvbXBvbmVudC5zY3NzIn0= */");

/***/ }),

/***/ "./src/app/components/core/core.component.ts":
/*!***************************************************!*\
  !*** ./src/app/components/core/core.component.ts ***!
  \***************************************************/
/*! exports provided: CoreComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CoreComponent", function() { return CoreComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let CoreComponent = class CoreComponent {
    constructor() { }
    ngOnInit() {
    }
};
CoreComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-core',
        template: tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! raw-loader!./core.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/core.component.html")).default,
        styles: [tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ./core.component.scss */ "./src/app/components/core/core.component.scss")).default]
    })
], CoreComponent);



/***/ }),

/***/ "./src/app/components/core/core.module.ts":
/*!************************************************!*\
  !*** ./src/app/components/core/core.module.ts ***!
  \************************************************/
/*! exports provided: CoreModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CoreModule", function() { return CoreModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _core_routing__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./core.routing */ "./src/app/components/core/core.routing.ts");
/* harmony import */ var _nav_bar_nav_bar_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./nav-bar/nav-bar.component */ "./src/app/components/core/nav-bar/nav-bar.component.ts");
/* harmony import */ var _faq_faq_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./faq/faq.component */ "./src/app/components/core/faq/faq.component.ts");
/* harmony import */ var _auth_components_app_signup_app_signup_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../auth-components/app-signup/app-signup.component */ "./src/app/components/auth-components/app-signup/app-signup.component.ts");
/* harmony import */ var _auth_components_app_login_app_login_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../auth-components/app-login/app-login.component */ "./src/app/components/auth-components/app-login/app-login.component.ts");
/* harmony import */ var _landing_page_landing_page_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./landing-page/landing-page.component */ "./src/app/components/core/landing-page/landing-page.component.ts");
/* harmony import */ var _admin_admin_login_admin_login_component__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../admin/admin-login/admin-login.component */ "./src/app/components/admin/admin-login/admin-login.component.ts");
/* harmony import */ var _auth_components_reset_password_reset_password_component__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../auth-components/reset-password/reset-password.component */ "./src/app/components/auth-components/reset-password/reset-password.component.ts");
/* harmony import */ var src_app_shared_shared_module__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! src/app/shared/shared.module */ "./src/app/shared/shared.module.ts");
/* harmony import */ var _core_component__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./core.component */ "./src/app/components/core/core.component.ts");
/* harmony import */ var _verify_page_verify_page_component__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./verify-page/verify-page.component */ "./src/app/components/core/verify-page/verify-page.component.ts");














let CoreModule = class CoreModule {
};
CoreModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        declarations: [
            _core_component__WEBPACK_IMPORTED_MODULE_12__["CoreComponent"],
            _landing_page_landing_page_component__WEBPACK_IMPORTED_MODULE_8__["LandingPageComponent"],
            _auth_components_app_login_app_login_component__WEBPACK_IMPORTED_MODULE_7__["AppLoginComponent"],
            _auth_components_app_signup_app_signup_component__WEBPACK_IMPORTED_MODULE_6__["AppSignupComponent"],
            _faq_faq_component__WEBPACK_IMPORTED_MODULE_5__["FaqComponent"],
            _verify_page_verify_page_component__WEBPACK_IMPORTED_MODULE_13__["VerifyPageComponent"],
            _nav_bar_nav_bar_component__WEBPACK_IMPORTED_MODULE_4__["NavBarComponent"],
            _admin_admin_login_admin_login_component__WEBPACK_IMPORTED_MODULE_9__["AdminLoginComponent"],
            _auth_components_reset_password_reset_password_component__WEBPACK_IMPORTED_MODULE_10__["ResetPasswordComponent"]
        ],
        imports: [
            src_app_shared_shared_module__WEBPACK_IMPORTED_MODULE_11__["SharedModule"],
            _angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(_core_routing__WEBPACK_IMPORTED_MODULE_3__["routes"]),
        ],
        entryComponents: [
            _auth_components_app_login_app_login_component__WEBPACK_IMPORTED_MODULE_7__["AppLoginComponent"],
            _auth_components_app_signup_app_signup_component__WEBPACK_IMPORTED_MODULE_6__["AppSignupComponent"],
        ],
        exports: [
            _angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]
        ]
    })
], CoreModule);



/***/ }),

/***/ "./src/app/components/core/core.routing.ts":
/*!*************************************************!*\
  !*** ./src/app/components/core/core.routing.ts ***!
  \*************************************************/
/*! exports provided: routes */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "routes", function() { return routes; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _landing_page_landing_page_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./landing-page/landing-page.component */ "./src/app/components/core/landing-page/landing-page.component.ts");
/* harmony import */ var _verify_page_verify_page_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./verify-page/verify-page.component */ "./src/app/components/core/verify-page/verify-page.component.ts");
/* harmony import */ var _admin_admin_login_admin_login_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../admin/admin-login/admin-login.component */ "./src/app/components/admin/admin-login/admin-login.component.ts");




const routes = [
    {
        path: '',
        component: _landing_page_landing_page_component__WEBPACK_IMPORTED_MODULE_1__["LandingPageComponent"],
    },
    { path: `verify/:number`, component: _verify_page_verify_page_component__WEBPACK_IMPORTED_MODULE_2__["VerifyPageComponent"] },
    { path: 'evaluation', component: _admin_admin_login_admin_login_component__WEBPACK_IMPORTED_MODULE_3__["AdminLoginComponent"] }
];


/***/ }),

/***/ "./src/app/components/core/faq/faq.component.scss":
/*!********************************************************!*\
  !*** ./src/app/components/core/faq/faq.component.scss ***!
  \********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".main-container {\n  padding: 150px 6% 20px;\n  width: 100%;\n  margin: 0;\n}\n.main-container .terms-header {\n  font-size: 30px;\n  font-weight: 600;\n  margin-bottom: 40px;\n}\n.main-container .content-container {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-pack: justify;\n          justify-content: space-between;\n}\n.main-container .content-container .content-wrapper {\n  width: 60%;\n}\n.main-container .content-container .wrapper {\n  margin-bottom: 40px;\n}\n.main-container .content-container .header {\n  font-size: larger;\n  font-weight: 600;\n  color: teal;\n  margin-left: 25px;\n}\n.main-container .content-container .right {\n  width: 30%;\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-pack: center;\n          justify-content: center;\n}\n.main-container .content-container .right .canvas {\n  width: 300px;\n  height: 300px;\n  padding: 20px;\n  border-radius: 8px;\n  background: #00968845;\n}\n.main-container .content-container .right .canvas .social-wrapper .parent {\n  display: inline-block;\n  margin-right: 10px;\n}\n.main-container .content-container .right .canvas .social-wrapper .social-circle {\n  width: 30px;\n  height: 30px;\n  border-radius: 50%;\n  background: #EFEAFF 0% 0% no-repeat padding-box;\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-pack: center;\n          justify-content: center;\n  -webkit-box-align: center;\n          align-items: center;\n}\n.main-container .content-container .right .canvas .text {\n  color: #6F6D6D;\n  font-size: 15px;\n}\n.main-container .content-container .right .canvas .header2 {\n  font-size: 20px;\n  color: black;\n  font-weight: bold;\n}\n.mat-expansion-panel {\n  box-shadow: none !important;\n  background: transparent !important;\n}\n.mat-expansion-panel-header-title {\n  font-weight: 600 !important;\n}\n.logo {\n  width: 60px !important;\n}\nli {\n  list-style: none;\n  margin-bottom: 1em;\n  cursor: pointer;\n}\n@media screen and (max-width: 600px) {\n  .main-container {\n    padding: 100px 6% 20px !important;\n  }\n  .main-container .terms-header {\n    font-size: 20px;\n    font-weight: 600;\n    margin-bottom: 40px;\n  }\n  .main-container .content-container {\n    display: -webkit-box;\n    display: flex;\n    -webkit-box-orient: vertical;\n    -webkit-box-direction: normal;\n            flex-direction: column;\n    -webkit-box-pack: justify;\n            justify-content: space-between;\n  }\n  .main-container .content-container .content-wrapper {\n    width: 100% !important;\n  }\n  .main-container .content-container .wrapper {\n    margin-bottom: 40px;\n  }\n  .main-container .content-container .header {\n    font-size: larger;\n    font-weight: 600;\n    color: teal;\n    margin-left: 25px;\n  }\n  .main-container .content-container .right {\n    width: 80% !important;\n    display: -webkit-box;\n    display: flex;\n    margin: auto;\n    -webkit-box-pack: center;\n            justify-content: center;\n  }\n  .main-container .content-container .right .canvas {\n    width: 300px;\n    height: 300px;\n    border-radius: 8px;\n  }\n}\n@media screen and (max-width: 400px) {\n  .mat-expansion-panel-header {\n    padding: 0 5px !important;\n  }\n\n  .main-container {\n    padding: 100px 6% 20px !important;\n  }\n  .main-container .terms-header {\n    font-size: 20px;\n    font-weight: 600;\n    margin-bottom: 40px;\n  }\n  .main-container .content-container {\n    display: -webkit-box;\n    display: flex;\n    -webkit-box-orient: vertical;\n    -webkit-box-direction: normal;\n            flex-direction: column;\n    -webkit-box-pack: justify;\n            justify-content: space-between;\n  }\n  .main-container .content-container .content-wrapper {\n    width: 100% !important;\n  }\n  .main-container .content-container .wrapper {\n    margin-bottom: 40px;\n  }\n  .main-container .content-container .header {\n    font-size: larger;\n    font-weight: 600;\n    color: teal;\n    margin-left: 5px !important;\n    margin-bottom: 10px;\n  }\n  .main-container .content-container .right {\n    width: 80% !important;\n    display: -webkit-box;\n    display: flex;\n    margin: auto;\n    -webkit-box-pack: center;\n            justify-content: center;\n  }\n  .main-container .content-container .right .canvas {\n    width: 300px;\n    height: 300px;\n    border-radius: 8px;\n  }\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tcG9uZW50cy9jb3JlL2ZhcS9DOlxcTXlzcGFjZVxcQ29tc29mdCBMaW1pdGVkXFxwcm9qZWN0c1xcY2Fic29sX2F0dGVzdGF0aW9uX3VpL3NyY1xcYXBwXFxjb21wb25lbnRzXFxjb3JlXFxmYXFcXGZhcS5jb21wb25lbnQuc2NzcyIsInNyYy9hcHAvY29tcG9uZW50cy9jb3JlL2ZhcS9mYXEuY29tcG9uZW50LnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBSUE7RUFDSSxzQkFBQTtFQUNBLFdBQUE7RUFDQSxTQUFBO0FDSEo7QURLSTtFQUNJLGVBQUE7RUFDQSxnQkFBQTtFQUNBLG1CQUFBO0FDSFI7QURNSTtFQUNJLG9CQUFBO0VBQUEsYUFBQTtFQUNBLHlCQUFBO1VBQUEsOEJBQUE7QUNKUjtBREtRO0VBQ0ksVUFBQTtBQ0haO0FETVE7RUFDSSxtQkFBQTtBQ0paO0FET1E7RUFDSSxpQkFBQTtFQUNBLGdCQUFBO0VBQ0EsV0FBQTtFQUNBLGlCQUFBO0FDTFo7QURRUTtFQUNJLFVBQUE7RUFDQSxvQkFBQTtFQUFBLGFBQUE7RUFDQSx3QkFBQTtVQUFBLHVCQUFBO0FDTlo7QURPWTtFQUNJLFlBQUE7RUFDQSxhQUFBO0VBQ0EsYUFBQTtFQUNBLGtCQUFBO0VBQ0EscUJBQUE7QUNMaEI7QURTb0I7RUFDQSxxQkFBQTtFQUNBLGtCQUFBO0FDUHBCO0FEU29CO0VBQ0EsV0FBQTtFQUNBLFlBQUE7RUFDQSxrQkFBQTtFQUNBLCtDQUFBO0VBRUEsb0JBQUE7RUFBQSxhQUFBO0VBQ0Esd0JBQUE7VUFBQSx1QkFBQTtFQUNBLHlCQUFBO1VBQUEsbUJBQUE7QUNScEI7QURZZ0I7RUFDSSxjQUFBO0VBQ0EsZUFBQTtBQ1ZwQjtBRGFnQjtFQUNJLGVBQUE7RUFDQSxZQUFBO0VBQ0EsaUJBQUE7QUNYcEI7QURrQkE7RUFDSSwyQkFBQTtFQUNBLGtDQUFBO0FDZko7QURrQkE7RUFDSSwyQkFBQTtBQ2ZKO0FEa0JBO0VBQ0ksc0JBQUE7QUNmSjtBRGtCQTtFQUNJLGdCQUFBO0VBQ0Esa0JBQUE7RUFDQSxlQUFBO0FDZko7QURrQkE7RUFDSTtJQUNJLGlDQUFBO0VDZk47RURpQk07SUFDSSxlQUFBO0lBQ0EsZ0JBQUE7SUFDQSxtQkFBQTtFQ2ZWO0VEa0JNO0lBQ0ksb0JBQUE7SUFBQSxhQUFBO0lBQ0EsNEJBQUE7SUFBQSw2QkFBQTtZQUFBLHNCQUFBO0lBQ0EseUJBQUE7WUFBQSw4QkFBQTtFQ2hCVjtFRGlCVTtJQUNJLHNCQUFBO0VDZmQ7RURrQlU7SUFDSSxtQkFBQTtFQ2hCZDtFRG1CVTtJQUNJLGlCQUFBO0lBQ0EsZ0JBQUE7SUFDQSxXQUFBO0lBQ0EsaUJBQUE7RUNqQmQ7RURvQlU7SUFDSSxxQkFBQTtJQUNBLG9CQUFBO0lBQUEsYUFBQTtJQUNBLFlBQUE7SUFDQSx3QkFBQTtZQUFBLHVCQUFBO0VDbEJkO0VEbUJjO0lBQ0ksWUFBQTtJQUNBLGFBQUE7SUFDQSxrQkFBQTtFQ2pCbEI7QUFDRjtBRHVCQTtFQUNJO0lBQ0kseUJBQUE7RUNyQk47O0VEd0JFO0lBQ0ksaUNBQUE7RUNyQk47RUR1Qk07SUFDSSxlQUFBO0lBQ0EsZ0JBQUE7SUFDQSxtQkFBQTtFQ3JCVjtFRHdCTTtJQUNJLG9CQUFBO0lBQUEsYUFBQTtJQUNBLDRCQUFBO0lBQUEsNkJBQUE7WUFBQSxzQkFBQTtJQUNBLHlCQUFBO1lBQUEsOEJBQUE7RUN0QlY7RUR1QlU7SUFDSSxzQkFBQTtFQ3JCZDtFRHdCVTtJQUNJLG1CQUFBO0VDdEJkO0VEeUJVO0lBQ0ksaUJBQUE7SUFDQSxnQkFBQTtJQUNBLFdBQUE7SUFDQSwyQkFBQTtJQUNBLG1CQUFBO0VDdkJkO0VEMEJVO0lBQ0kscUJBQUE7SUFDQSxvQkFBQTtJQUFBLGFBQUE7SUFDQSxZQUFBO0lBQ0Esd0JBQUE7WUFBQSx1QkFBQTtFQ3hCZDtFRHlCYztJQUNJLFlBQUE7SUFDQSxhQUFBO0lBQ0Esa0JBQUE7RUN2QmxCO0FBQ0YiLCJmaWxlIjoic3JjL2FwcC9jb21wb25lbnRzL2NvcmUvZmFxL2ZhcS5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIiRwcmltYXJ5LWNvbG9yIDogdGVhbDtcclxuJHNlY29uZGFyeS1jb2xvcjojM2ZjNWZhO1xyXG4kdGVydGlhcnktY29sb3I6IzE3MjIzZTtcclxuXHJcbi5tYWluLWNvbnRhaW5lcntcclxuICAgIHBhZGRpbmc6MTUwcHggNiUgMjBweDtcclxuICAgIHdpZHRoOiAxMDAlO1xyXG4gICAgbWFyZ2luOiAwO1xyXG5cclxuICAgIC50ZXJtcy1oZWFkZXJ7XHJcbiAgICAgICAgZm9udC1zaXplOiAzMHB4O1xyXG4gICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgICAgbWFyZ2luLWJvdHRvbTogNDBweDtcclxuICAgIH1cclxuXHJcbiAgICAuY29udGVudC1jb250YWluZXJ7XHJcbiAgICAgICAgZGlzcGxheTogZmxleDtcclxuICAgICAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XHJcbiAgICAgICAgLmNvbnRlbnQtd3JhcHBlcntcclxuICAgICAgICAgICAgd2lkdGg6IDYwJTtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIC53cmFwcGVye1xyXG4gICAgICAgICAgICBtYXJnaW4tYm90dG9tOiA0MHB4O1xyXG4gICAgICAgIH1cclxuXHJcbiAgICAgICAgLmhlYWRlcntcclxuICAgICAgICAgICAgZm9udC1zaXplOiBsYXJnZXI7XHJcbiAgICAgICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgICAgICAgIGNvbG9yOiB0ZWFsO1xyXG4gICAgICAgICAgICBtYXJnaW4tbGVmdDogMjVweDtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIC5yaWdodHtcclxuICAgICAgICAgICAgd2lkdGg6IDMwJTtcclxuICAgICAgICAgICAgZGlzcGxheTogZmxleDtcclxuICAgICAgICAgICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XHJcbiAgICAgICAgICAgIC5jYW52YXN7XHJcbiAgICAgICAgICAgICAgICB3aWR0aDozMDBweDtcclxuICAgICAgICAgICAgICAgIGhlaWdodDogMzAwcHg7XHJcbiAgICAgICAgICAgICAgICBwYWRkaW5nOiAyMHB4O1xyXG4gICAgICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogOHB4O1xyXG4gICAgICAgICAgICAgICAgYmFja2dyb3VuZDogIzAwOTY4ODQ1O1xyXG4gICAgICAgICAgICAgICAgXHJcbiAgICAgICAgICAgICAgICAuc29jaWFsLXdyYXBwZXJ7XHJcbiAgICAgICAgICAgICAgICAgICAgLy8gZGlzcGxheTogZmxleDtcclxuICAgICAgICAgICAgICAgICAgICAucGFyZW50e1xyXG4gICAgICAgICAgICAgICAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcclxuICAgICAgICAgICAgICAgICAgICBtYXJnaW4tcmlnaHQ6IDEwcHg7XHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgIC5zb2NpYWwtY2lyY2xle1xyXG4gICAgICAgICAgICAgICAgICAgIHdpZHRoOjMwcHg7XHJcbiAgICAgICAgICAgICAgICAgICAgaGVpZ2h0OiAzMHB4O1xyXG4gICAgICAgICAgICAgICAgICAgIGJvcmRlci1yYWRpdXM6IDUwJTtcclxuICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kOiAjRUZFQUZGIDAlIDAlIG5vLXJlcGVhdCBwYWRkaW5nLWJveDtcclxuICAgICAgICAgICAgICAgICAgICAvLyBtYXJnaW4tcmlnaHQ6IDI1cHg7XHJcbiAgICAgICAgICAgICAgICAgICAgZGlzcGxheTogZmxleDtcclxuICAgICAgICAgICAgICAgICAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcclxuICAgICAgICAgICAgICAgICAgICBhbGlnbi1pdGVtczogY2VudGVyO1xyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgIH1cclxuXHJcbiAgICAgICAgICAgICAgICAudGV4dHtcclxuICAgICAgICAgICAgICAgICAgICBjb2xvcjojNkY2RDZEO1xyXG4gICAgICAgICAgICAgICAgICAgIGZvbnQtc2l6ZTogMTVweDtcclxuICAgICAgICAgICAgICAgIH1cclxuXHJcbiAgICAgICAgICAgICAgICAuaGVhZGVyMiB7XHJcbiAgICAgICAgICAgICAgICAgICAgZm9udC1zaXplOiAyMHB4O1xyXG4gICAgICAgICAgICAgICAgICAgIGNvbG9yOiBibGFjaztcclxuICAgICAgICAgICAgICAgICAgICBmb250LXdlaWdodDogYm9sZDtcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgIH1cclxufVxyXG5cclxuLm1hdC1leHBhbnNpb24tcGFuZWx7XHJcbiAgICBib3gtc2hhZG93OiBub25lIWltcG9ydGFudDtcclxuICAgIGJhY2tncm91bmQ6IHRyYW5zcGFyZW50IWltcG9ydGFudDtcclxufVxyXG5cclxuLm1hdC1leHBhbnNpb24tcGFuZWwtaGVhZGVyLXRpdGxle1xyXG4gICAgZm9udC13ZWlnaHQ6IDYwMCFpbXBvcnRhbnQ7XHJcbn1cclxuXHJcbi5sb2dve1xyXG4gICAgd2lkdGg6NjBweCFpbXBvcnRhbnQ7XHJcbn1cclxuXHJcbmxpIHtcclxuICAgIGxpc3Qtc3R5bGU6IG5vbmU7XHJcbiAgICBtYXJnaW4tYm90dG9tOiAxZW07XHJcbiAgICBjdXJzb3I6IHBvaW50ZXI7XHJcbn1cclxuXHJcbkBtZWRpYSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6NjAwcHgpe1xyXG4gICAgLm1haW4tY29udGFpbmVye1xyXG4gICAgICAgIHBhZGRpbmc6MTAwcHggNiUgMjBweCFpbXBvcnRhbnQ7XHJcbiAgICBcclxuICAgICAgICAudGVybXMtaGVhZGVye1xyXG4gICAgICAgICAgICBmb250LXNpemU6IDIwcHg7XHJcbiAgICAgICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgICAgICAgIG1hcmdpbi1ib3R0b206IDQwcHg7XHJcbiAgICAgICAgfVxyXG4gICAgXHJcbiAgICAgICAgLmNvbnRlbnQtY29udGFpbmVye1xyXG4gICAgICAgICAgICBkaXNwbGF5OiBmbGV4O1xyXG4gICAgICAgICAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xyXG4gICAgICAgICAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XHJcbiAgICAgICAgICAgIC5jb250ZW50LXdyYXBwZXJ7XHJcbiAgICAgICAgICAgICAgICB3aWR0aDogMTAwJSFpbXBvcnRhbnQ7XHJcbiAgICAgICAgICAgIH1cclxuICAgIFxyXG4gICAgICAgICAgICAud3JhcHBlcntcclxuICAgICAgICAgICAgICAgIG1hcmdpbi1ib3R0b206IDQwcHg7XHJcbiAgICAgICAgICAgIH1cclxuICAgIFxyXG4gICAgICAgICAgICAuaGVhZGVye1xyXG4gICAgICAgICAgICAgICAgZm9udC1zaXplOiBsYXJnZXI7XHJcbiAgICAgICAgICAgICAgICBmb250LXdlaWdodDogNjAwO1xyXG4gICAgICAgICAgICAgICAgY29sb3I6IHRlYWw7XHJcbiAgICAgICAgICAgICAgICBtYXJnaW4tbGVmdDogMjVweDtcclxuICAgICAgICAgICAgfVxyXG4gICAgXHJcbiAgICAgICAgICAgIC5yaWdodHtcclxuICAgICAgICAgICAgICAgIHdpZHRoOiA4MCUhaW1wb3J0YW50O1xyXG4gICAgICAgICAgICAgICAgZGlzcGxheTogZmxleDtcclxuICAgICAgICAgICAgICAgIG1hcmdpbjphdXRvO1xyXG4gICAgICAgICAgICAgICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XHJcbiAgICAgICAgICAgICAgICAuY2FudmFze1xyXG4gICAgICAgICAgICAgICAgICAgIHdpZHRoOjMwMHB4O1xyXG4gICAgICAgICAgICAgICAgICAgIGhlaWdodDogMzAwcHg7XHJcbiAgICAgICAgICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogOHB4O1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG59XHJcblxyXG5AbWVkaWEgc2NyZWVuIGFuZCAobWF4LXdpZHRoOjQwMHB4KXtcclxuICAgIC5tYXQtZXhwYW5zaW9uLXBhbmVsLWhlYWRlciB7XHJcbiAgICAgICAgcGFkZGluZzowIDVweCFpbXBvcnRhbnQ7XHJcbiAgICB9XHJcblxyXG4gICAgLm1haW4tY29udGFpbmVye1xyXG4gICAgICAgIHBhZGRpbmc6MTAwcHggNiUgMjBweCFpbXBvcnRhbnQ7XHJcbiAgICBcclxuICAgICAgICAudGVybXMtaGVhZGVye1xyXG4gICAgICAgICAgICBmb250LXNpemU6IDIwcHg7XHJcbiAgICAgICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgICAgICAgIG1hcmdpbi1ib3R0b206IDQwcHg7XHJcbiAgICAgICAgfVxyXG4gICAgXHJcbiAgICAgICAgLmNvbnRlbnQtY29udGFpbmVye1xyXG4gICAgICAgICAgICBkaXNwbGF5OiBmbGV4O1xyXG4gICAgICAgICAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xyXG4gICAgICAgICAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XHJcbiAgICAgICAgICAgIC5jb250ZW50LXdyYXBwZXJ7XHJcbiAgICAgICAgICAgICAgICB3aWR0aDogMTAwJSFpbXBvcnRhbnQ7XHJcbiAgICAgICAgICAgIH1cclxuICAgIFxyXG4gICAgICAgICAgICAud3JhcHBlcntcclxuICAgICAgICAgICAgICAgIG1hcmdpbi1ib3R0b206IDQwcHg7XHJcbiAgICAgICAgICAgIH1cclxuICAgIFxyXG4gICAgICAgICAgICAuaGVhZGVye1xyXG4gICAgICAgICAgICAgICAgZm9udC1zaXplOiBsYXJnZXI7XHJcbiAgICAgICAgICAgICAgICBmb250LXdlaWdodDogNjAwO1xyXG4gICAgICAgICAgICAgICAgY29sb3I6IHRlYWw7XHJcbiAgICAgICAgICAgICAgICBtYXJnaW4tbGVmdDogNXB4IWltcG9ydGFudDtcclxuICAgICAgICAgICAgICAgIG1hcmdpbi1ib3R0b206IDEwcHg7XHJcbiAgICAgICAgICAgIH1cclxuICAgIFxyXG4gICAgICAgICAgICAucmlnaHR7XHJcbiAgICAgICAgICAgICAgICB3aWR0aDogODAlIWltcG9ydGFudDtcclxuICAgICAgICAgICAgICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICAgICAgICAgICAgICBtYXJnaW46YXV0bztcclxuICAgICAgICAgICAgICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xyXG4gICAgICAgICAgICAgICAgLmNhbnZhc3tcclxuICAgICAgICAgICAgICAgICAgICB3aWR0aDozMDBweDtcclxuICAgICAgICAgICAgICAgICAgICBoZWlnaHQ6IDMwMHB4O1xyXG4gICAgICAgICAgICAgICAgICAgIGJvcmRlci1yYWRpdXM6IDhweDtcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbn1cclxuXHJcbiIsIi5tYWluLWNvbnRhaW5lciB7XG4gIHBhZGRpbmc6IDE1MHB4IDYlIDIwcHg7XG4gIHdpZHRoOiAxMDAlO1xuICBtYXJnaW46IDA7XG59XG4ubWFpbi1jb250YWluZXIgLnRlcm1zLWhlYWRlciB7XG4gIGZvbnQtc2l6ZTogMzBweDtcbiAgZm9udC13ZWlnaHQ6IDYwMDtcbiAgbWFyZ2luLWJvdHRvbTogNDBweDtcbn1cbi5tYWluLWNvbnRhaW5lciAuY29udGVudC1jb250YWluZXIge1xuICBkaXNwbGF5OiBmbGV4O1xuICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XG59XG4ubWFpbi1jb250YWluZXIgLmNvbnRlbnQtY29udGFpbmVyIC5jb250ZW50LXdyYXBwZXIge1xuICB3aWR0aDogNjAlO1xufVxuLm1haW4tY29udGFpbmVyIC5jb250ZW50LWNvbnRhaW5lciAud3JhcHBlciB7XG4gIG1hcmdpbi1ib3R0b206IDQwcHg7XG59XG4ubWFpbi1jb250YWluZXIgLmNvbnRlbnQtY29udGFpbmVyIC5oZWFkZXIge1xuICBmb250LXNpemU6IGxhcmdlcjtcbiAgZm9udC13ZWlnaHQ6IDYwMDtcbiAgY29sb3I6IHRlYWw7XG4gIG1hcmdpbi1sZWZ0OiAyNXB4O1xufVxuLm1haW4tY29udGFpbmVyIC5jb250ZW50LWNvbnRhaW5lciAucmlnaHQge1xuICB3aWR0aDogMzAlO1xuICBkaXNwbGF5OiBmbGV4O1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbn1cbi5tYWluLWNvbnRhaW5lciAuY29udGVudC1jb250YWluZXIgLnJpZ2h0IC5jYW52YXMge1xuICB3aWR0aDogMzAwcHg7XG4gIGhlaWdodDogMzAwcHg7XG4gIHBhZGRpbmc6IDIwcHg7XG4gIGJvcmRlci1yYWRpdXM6IDhweDtcbiAgYmFja2dyb3VuZDogIzAwOTY4ODQ1O1xufVxuLm1haW4tY29udGFpbmVyIC5jb250ZW50LWNvbnRhaW5lciAucmlnaHQgLmNhbnZhcyAuc29jaWFsLXdyYXBwZXIgLnBhcmVudCB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgbWFyZ2luLXJpZ2h0OiAxMHB4O1xufVxuLm1haW4tY29udGFpbmVyIC5jb250ZW50LWNvbnRhaW5lciAucmlnaHQgLmNhbnZhcyAuc29jaWFsLXdyYXBwZXIgLnNvY2lhbC1jaXJjbGUge1xuICB3aWR0aDogMzBweDtcbiAgaGVpZ2h0OiAzMHB4O1xuICBib3JkZXItcmFkaXVzOiA1MCU7XG4gIGJhY2tncm91bmQ6ICNFRkVBRkYgMCUgMCUgbm8tcmVwZWF0IHBhZGRpbmctYm94O1xuICBkaXNwbGF5OiBmbGV4O1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbn1cbi5tYWluLWNvbnRhaW5lciAuY29udGVudC1jb250YWluZXIgLnJpZ2h0IC5jYW52YXMgLnRleHQge1xuICBjb2xvcjogIzZGNkQ2RDtcbiAgZm9udC1zaXplOiAxNXB4O1xufVxuLm1haW4tY29udGFpbmVyIC5jb250ZW50LWNvbnRhaW5lciAucmlnaHQgLmNhbnZhcyAuaGVhZGVyMiB7XG4gIGZvbnQtc2l6ZTogMjBweDtcbiAgY29sb3I6IGJsYWNrO1xuICBmb250LXdlaWdodDogYm9sZDtcbn1cblxuLm1hdC1leHBhbnNpb24tcGFuZWwge1xuICBib3gtc2hhZG93OiBub25lICFpbXBvcnRhbnQ7XG4gIGJhY2tncm91bmQ6IHRyYW5zcGFyZW50ICFpbXBvcnRhbnQ7XG59XG5cbi5tYXQtZXhwYW5zaW9uLXBhbmVsLWhlYWRlci10aXRsZSB7XG4gIGZvbnQtd2VpZ2h0OiA2MDAgIWltcG9ydGFudDtcbn1cblxuLmxvZ28ge1xuICB3aWR0aDogNjBweCAhaW1wb3J0YW50O1xufVxuXG5saSB7XG4gIGxpc3Qtc3R5bGU6IG5vbmU7XG4gIG1hcmdpbi1ib3R0b206IDFlbTtcbiAgY3Vyc29yOiBwb2ludGVyO1xufVxuXG5AbWVkaWEgc2NyZWVuIGFuZCAobWF4LXdpZHRoOiA2MDBweCkge1xuICAubWFpbi1jb250YWluZXIge1xuICAgIHBhZGRpbmc6IDEwMHB4IDYlIDIwcHggIWltcG9ydGFudDtcbiAgfVxuICAubWFpbi1jb250YWluZXIgLnRlcm1zLWhlYWRlciB7XG4gICAgZm9udC1zaXplOiAyMHB4O1xuICAgIGZvbnQtd2VpZ2h0OiA2MDA7XG4gICAgbWFyZ2luLWJvdHRvbTogNDBweDtcbiAgfVxuICAubWFpbi1jb250YWluZXIgLmNvbnRlbnQtY29udGFpbmVyIHtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xuICB9XG4gIC5tYWluLWNvbnRhaW5lciAuY29udGVudC1jb250YWluZXIgLmNvbnRlbnQtd3JhcHBlciB7XG4gICAgd2lkdGg6IDEwMCUgIWltcG9ydGFudDtcbiAgfVxuICAubWFpbi1jb250YWluZXIgLmNvbnRlbnQtY29udGFpbmVyIC53cmFwcGVyIHtcbiAgICBtYXJnaW4tYm90dG9tOiA0MHB4O1xuICB9XG4gIC5tYWluLWNvbnRhaW5lciAuY29udGVudC1jb250YWluZXIgLmhlYWRlciB7XG4gICAgZm9udC1zaXplOiBsYXJnZXI7XG4gICAgZm9udC13ZWlnaHQ6IDYwMDtcbiAgICBjb2xvcjogdGVhbDtcbiAgICBtYXJnaW4tbGVmdDogMjVweDtcbiAgfVxuICAubWFpbi1jb250YWluZXIgLmNvbnRlbnQtY29udGFpbmVyIC5yaWdodCB7XG4gICAgd2lkdGg6IDgwJSAhaW1wb3J0YW50O1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgbWFyZ2luOiBhdXRvO1xuICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICB9XG4gIC5tYWluLWNvbnRhaW5lciAuY29udGVudC1jb250YWluZXIgLnJpZ2h0IC5jYW52YXMge1xuICAgIHdpZHRoOiAzMDBweDtcbiAgICBoZWlnaHQ6IDMwMHB4O1xuICAgIGJvcmRlci1yYWRpdXM6IDhweDtcbiAgfVxufVxuQG1lZGlhIHNjcmVlbiBhbmQgKG1heC13aWR0aDogNDAwcHgpIHtcbiAgLm1hdC1leHBhbnNpb24tcGFuZWwtaGVhZGVyIHtcbiAgICBwYWRkaW5nOiAwIDVweCAhaW1wb3J0YW50O1xuICB9XG5cbiAgLm1haW4tY29udGFpbmVyIHtcbiAgICBwYWRkaW5nOiAxMDBweCA2JSAyMHB4ICFpbXBvcnRhbnQ7XG4gIH1cbiAgLm1haW4tY29udGFpbmVyIC50ZXJtcy1oZWFkZXIge1xuICAgIGZvbnQtc2l6ZTogMjBweDtcbiAgICBmb250LXdlaWdodDogNjAwO1xuICAgIG1hcmdpbi1ib3R0b206IDQwcHg7XG4gIH1cbiAgLm1haW4tY29udGFpbmVyIC5jb250ZW50LWNvbnRhaW5lciB7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICAgIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2VlbjtcbiAgfVxuICAubWFpbi1jb250YWluZXIgLmNvbnRlbnQtY29udGFpbmVyIC5jb250ZW50LXdyYXBwZXIge1xuICAgIHdpZHRoOiAxMDAlICFpbXBvcnRhbnQ7XG4gIH1cbiAgLm1haW4tY29udGFpbmVyIC5jb250ZW50LWNvbnRhaW5lciAud3JhcHBlciB7XG4gICAgbWFyZ2luLWJvdHRvbTogNDBweDtcbiAgfVxuICAubWFpbi1jb250YWluZXIgLmNvbnRlbnQtY29udGFpbmVyIC5oZWFkZXIge1xuICAgIGZvbnQtc2l6ZTogbGFyZ2VyO1xuICAgIGZvbnQtd2VpZ2h0OiA2MDA7XG4gICAgY29sb3I6IHRlYWw7XG4gICAgbWFyZ2luLWxlZnQ6IDVweCAhaW1wb3J0YW50O1xuICAgIG1hcmdpbi1ib3R0b206IDEwcHg7XG4gIH1cbiAgLm1haW4tY29udGFpbmVyIC5jb250ZW50LWNvbnRhaW5lciAucmlnaHQge1xuICAgIHdpZHRoOiA4MCUgIWltcG9ydGFudDtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIG1hcmdpbjogYXV0bztcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgfVxuICAubWFpbi1jb250YWluZXIgLmNvbnRlbnQtY29udGFpbmVyIC5yaWdodCAuY2FudmFzIHtcbiAgICB3aWR0aDogMzAwcHg7XG4gICAgaGVpZ2h0OiAzMDBweDtcbiAgICBib3JkZXItcmFkaXVzOiA4cHg7XG4gIH1cbn0iXX0= */");

/***/ }),

/***/ "./src/app/components/core/faq/faq.component.ts":
/*!******************************************************!*\
  !*** ./src/app/components/core/faq/faq.component.ts ***!
  \******************************************************/
/*! exports provided: FaqComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "FaqComponent", function() { return FaqComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let FaqComponent = class FaqComponent {
    constructor() { }
    ngOnInit() {
    }
};
FaqComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-faq',
        template: tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! raw-loader!./faq.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/faq/faq.component.html")).default,
        styles: [tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ./faq.component.scss */ "./src/app/components/core/faq/faq.component.scss")).default]
    })
], FaqComponent);



/***/ }),

/***/ "./src/app/components/core/landing-page/landing-page.component.scss":
/*!**************************************************************************!*\
  !*** ./src/app/components/core/landing-page/landing-page.component.scss ***!
  \**************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".left-hero {\n  width: 50%;\n  margin-top: 40px;\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-pack: center;\n          justify-content: center;\n  padding: 30px;\n  padding-left: 60px;\n  align-self: center;\n  background: url('top-pattern.png') center no-repeat;\n  background-size: contain;\n}\n\n.search-box {\n  position: relative;\n}\n\n.search-box .search-icon {\n  position: absolute;\n  top: 20px;\n  left: 2%;\n}\n\n.search-box .search-submit {\n  position: absolute;\n  top: 12px;\n  right: 32%;\n  background-color: teal;\n  color: white;\n}\n\n.right-hero {\n  width: 50%;\n  -webkit-box-pack: end;\n          justify-content: flex-end;\n  display: -webkit-box;\n  display: flex;\n}\n\n.shaped-image-holder {\n  height: 65vh;\n  width: 80%;\n  border-radius: 343% 0 0 347%/119% 0 0 245%;\n  background: url('photo3.jpg') no-repeat center;\n  background-size: cover;\n}\n\n.shaped-image-holder .overlay {\n  height: 65vh;\n  width: 100%;\n  border-radius: 343% 0 0 347%/119% 0 0 245%;\n  background-color: rgba(0, 128, 128, 0.256);\n}\n\n.input-style {\n  border: none;\n  border-radius: 10px;\n  width: 70%;\n  box-shadow: 0px 8px 28px -2px #ccc;\n  padding: 20px;\n  padding-right: 50px;\n  padding-left: 50px;\n}\n\n.input-style:focus {\n  outline: none !important;\n}\n\n.steps-section {\n  background-color: white;\n  padding: 0px 60px 10px;\n}\n\n.steps-section .header {\n  font-size: 25px;\n  font-weight: bold;\n}\n\n.steps-section .step-container {\n  margin-bottom: 20px;\n  color: #495057;\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-pack: justify;\n          justify-content: space-between;\n  flex-wrap: wrap;\n}\n\n.steps-section .offer-wrapper {\n  background-size: contain;\n  display: -webkit-box;\n  display: flex;\n  flex-wrap: wrap;\n  padding: 0% 0% 3%;\n  -webkit-box-pack: justify;\n          justify-content: space-between;\n}\n\n.steps-section .offer-wrapper .offer {\n  display: -webkit-box;\n  display: flex;\n  width: 30%;\n  margin-bottom: 40px;\n}\n\n.steps-section .offer-wrapper .icon {\n  width: 40px;\n  height: 40px;\n  border-radius: 10px;\n  background: #0096882e 0% 0% no-repeat padding-box;\n  color: teal;\n  margin-right: 20px;\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-pack: center;\n          justify-content: center;\n  -webkit-box-align: center;\n          align-items: center;\n}\n\n.steps-section .offer-wrapper .offer-header {\n  font-weight: bold;\n  font-size: 16px;\n  margin-bottom: 10px;\n}\n\n.steps-section .offer-wrapper .offer-text {\n  color: #6F6D6D;\n  font-weight: normal;\n  font-size: 15px;\n}\n\n.features {\n  padding: 3rem 60px;\n}\n\n.features .header {\n  font-size: 25px;\n  font-weight: bold;\n  margin-bottom: 40px;\n}\n\n.features .feature-container {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-pack: space-evenly;\n          justify-content: space-evenly;\n  -webkit-box-align: stretch;\n          align-items: stretch;\n  flex-wrap: wrap;\n}\n\n.features .feature-container .feature {\n  text-align: center;\n  width: 25%;\n  padding: 80px 20px;\n  border-radius: 10px;\n  margin-bottom: 30px;\n  -webkit-transition: all 0.4s;\n  transition: all 0.4s;\n  box-shadow: 0px 3px 35px 12px #eee;\n}\n\n.features .feature-container .feature .icon {\n  margin: 10px;\n}\n\n.features .feature-container .feature .title {\n  font-size: x-large;\n  font-weight: 600;\n}\n\n@-webkit-keyframes anim-1 {\n  0%, 8.3% {\n    left: -100%;\n    opacity: 0;\n  }\n  8.3%, 25% {\n    left: 5%;\n    opacity: 1;\n  }\n  33.33%, 100% {\n    left: 40%;\n    opacity: 0;\n  }\n}\n\n@keyframes anim-1 {\n  0%, 8.3% {\n    left: -100%;\n    opacity: 0;\n  }\n  8.3%, 25% {\n    left: 5%;\n    opacity: 1;\n  }\n  33.33%, 100% {\n    left: 40%;\n    opacity: 0;\n  }\n}\n\n@-webkit-keyframes anim-2 {\n  0%, 33.33% {\n    left: -100%;\n    opacity: 0;\n  }\n  41.63%, 58.29% {\n    left: 5%;\n    opacity: 1;\n  }\n  66.66%, 100% {\n    left: 40%;\n    opacity: 0;\n  }\n}\n\n@keyframes anim-2 {\n  0%, 33.33% {\n    left: -100%;\n    opacity: 0;\n  }\n  41.63%, 58.29% {\n    left: 5%;\n    opacity: 1;\n  }\n  66.66%, 100% {\n    left: 40%;\n    opacity: 0;\n  }\n}\n\n@-webkit-keyframes anim-3 {\n  0%, 66.66% {\n    left: -100%;\n    opacity: 0;\n  }\n  74.96%, 91.62% {\n    left: 5%;\n    opacity: 1;\n  }\n  100% {\n    left: 40%;\n    opacity: 0;\n  }\n}\n\n@keyframes anim-3 {\n  0%, 66.66% {\n    left: -100%;\n    opacity: 0;\n  }\n  74.96%, 91.62% {\n    left: 5%;\n    opacity: 1;\n  }\n  100% {\n    left: 40%;\n    opacity: 0;\n  }\n}\n\n@media screen and (max-width: 687px) {\n  .left-hero {\n    width: 100%;\n    margin-top: 40px;\n    padding-left: 40px;\n    margin-bottom: 40px;\n  }\n  .left-hero .h1 {\n    font-size: 1.5rem;\n  }\n\n  .search-box {\n    position: relative;\n  }\n  .search-box .search-icon {\n    position: absolute;\n    top: 20px;\n    left: 2%;\n  }\n  .search-box .search-submit {\n    position: absolute;\n    top: 12px;\n    right: 13%;\n    background-color: teal;\n    color: white;\n  }\n\n  .right-hero {\n    width: 50%;\n    -webkit-box-pack: end;\n            justify-content: flex-end;\n    display: none !important;\n  }\n\n  .input-style {\n    border: none;\n    border-radius: 10px;\n    width: 90%;\n    box-shadow: 0px 8px 28px -2px #ccc;\n    padding: 20px;\n    padding-right: 50px;\n    padding-left: 50px;\n  }\n  .input-style:focus {\n    outline: none !important;\n  }\n}\n\n@media screen and (max-width: 830px) {\n  .input-style {\n    border: none;\n    border-radius: 10px;\n    width: 100%;\n    box-shadow: 0px 8px 28px -2px #ccc;\n    padding: 20px;\n    padding-right: 50px;\n    padding-left: 50px;\n  }\n  .input-style:focus {\n    outline: none !important;\n  }\n\n  .search-box {\n    position: relative;\n  }\n  .search-box .search-icon {\n    position: absolute;\n    top: 20px;\n    left: 2%;\n  }\n  .search-box .search-submit {\n    position: absolute;\n    top: 12px;\n    right: 2%;\n    background-color: teal;\n    color: white;\n  }\n\n  .steps-section {\n    padding: 0px 60px 10px;\n  }\n  .steps-section .header {\n    font-size: 25px;\n    font-weight: bold;\n  }\n  .steps-section .offer-wrapper .offer {\n    display: -webkit-box;\n    display: flex;\n    width: 45%;\n    margin-bottom: 40px;\n  }\n}\n\n@media screen and (max-width: 864px) {\n  .features {\n    padding: 3rem 60px;\n  }\n  .features .header {\n    font-size: 25px;\n    font-weight: bold;\n    margin-bottom: 40px;\n  }\n  .features .feature-container .feature {\n    width: 49.3%;\n  }\n  .features .feature-container .feature .title {\n    font-size: x-large;\n    font-weight: 600;\n  }\n}\n\n@media screen and (max-width: 525px) {\n  .steps-section {\n    padding: 0px 30px 10px !important;\n  }\n  .steps-section .header {\n    font-size: 20px;\n    font-weight: bold;\n  }\n  .steps-section .offer-wrapper .offer {\n    display: -webkit-box;\n    display: flex;\n    width: 100% !important;\n    margin-bottom: 40px;\n  }\n\n  .features {\n    padding: 3rem 30px;\n  }\n  .features .header {\n    font-size: 25px;\n    font-weight: bold;\n    margin-bottom: 40px;\n  }\n  .features .feature-container .feature {\n    width: 100%;\n  }\n  .features .feature-container .feature .title {\n    font-size: x-large;\n    font-weight: 600;\n  }\n}\n\na {\n  color: #6F6D6D;\n  font-weight: 500;\n}\n\na:hover {\n  color: teal;\n}\n\n.foot {\n  color: #6F6D6D;\n  font-size: 16px;\n  min-height: 23rem;\n  display: -webkit-box;\n  display: flex;\n  background: #fff;\n  padding: 20px 0 0;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n          flex-direction: column;\n  -webkit-box-pack: justify;\n          justify-content: space-between;\n}\n\n.foot .widget {\n  display: -webkit-box;\n  display: flex;\n  justify-content: space-around;\n  padding: 0 10%;\n}\n\n.foot .widget [class*=widget-] {\n  width: 25%;\n  margin-bottom: 2rem;\n}\n\n.foot .widget .widget-1 {\n  width: 40% !important;\n  margin-right: 45px;\n}\n\n.foot .widget .header {\n  font-size: 20px;\n  color: black;\n  font-weight: bold;\n}\n\n.foot .widget li {\n  list-style: none;\n  margin-bottom: 0.5em;\n  cursor: pointer;\n}\n\n.foot .widget li .mdi {\n  position: relative;\n  right: 0;\n  -webkit-transition: 0.3s ease-in-out;\n  transition: 0.3s ease-in-out;\n}\n\n.foot .widget li:hover .mdi {\n  right: -6px;\n}\n\n.foot .partner {\n  width: 200px;\n}\n\n.foot .copyright {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n          flex-direction: column;\n  text-align: center;\n  padding: 30px 20px;\n  color: #fff;\n  font-size: 15px;\n  background: teal;\n}\n\n.foot .copyright a {\n  color: #fff;\n}\n\n.foot .copyright a:hover {\n  color: whitesmoke;\n}\n\n.footicon {\n  border-radius: 50%;\n  width: 35px;\n  height: 35px;\n  color: #fff;\n  font-size: 20px;\n  margin-right: 10px;\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-pack: center;\n          justify-content: center;\n  -webkit-box-align: center;\n          align-items: center;\n}\n\n.social-wrapper .parent {\n  display: inline-block;\n  margin-right: 10px;\n}\n\n.social-wrapper .social-circle {\n  width: 30px;\n  height: 30px;\n  border-radius: 50%;\n  background: #e5e5e5 0% 0% no-repeat padding-box;\n  -webkit-transition: all 0.5s;\n  transition: all 0.5s;\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-pack: center;\n          justify-content: center;\n  -webkit-box-align: center;\n          align-items: center;\n}\n\n.social-wrapper .social-circle:hover {\n  background-color: #00808036;\n}\n\n@media screen and (max-width: 1023px) {\n  .foot {\n    display: -webkit-box;\n    display: flex;\n    padding: 20px 0 0;\n    -webkit-box-orient: vertical;\n    -webkit-box-direction: normal;\n            flex-direction: column;\n    flex-wrap: wrap;\n    -webkit-box-pack: center;\n            justify-content: center;\n  }\n  .foot .widget {\n    display: -webkit-box;\n    display: flex;\n    flex-wrap: wrap;\n    justify-content: space-around;\n    padding: 0 10%;\n  }\n  .foot .widget [class*=widget-] {\n    width: 25%;\n    margin-bottom: 2rem;\n  }\n  .foot .widget .widget-1 {\n    width: 40% !important;\n  }\n  .foot .partner {\n    width: 180px;\n  }\n  .foot .copyright {\n    display: -webkit-box;\n    display: flex;\n    -webkit-box-orient: vertical;\n    -webkit-box-direction: normal;\n            flex-direction: column;\n    text-align: center;\n  }\n}\n\n@media screen and (max-width: 768px) {\n  .foot {\n    display: -webkit-box;\n    display: flex;\n    padding: 20px 0 0;\n    -webkit-box-orient: vertical;\n    -webkit-box-direction: normal;\n            flex-direction: column;\n    flex-wrap: wrap;\n    -webkit-box-pack: center;\n            justify-content: center;\n  }\n  .foot .widget {\n    display: -webkit-box;\n    display: flex;\n    flex-wrap: wrap;\n    justify-content: space-around;\n    padding: 0 10%;\n  }\n  .foot .widget [class*=widget-] {\n    width: 100% !important;\n    margin-bottom: 2rem;\n  }\n  .foot .partner {\n    width: 160px;\n  }\n  .foot .copyright {\n    display: -webkit-box;\n    display: flex;\n    -webkit-box-orient: vertical;\n    -webkit-box-direction: normal;\n            flex-direction: column;\n    text-align: center;\n  }\n}\n\n@media screen and (max-width: 600px) {\n  .store-section {\n    width: 90%;\n    margin: 0 auto;\n    background-color: #FAF8FF;\n    text-align: center;\n    padding: 40px 10% !important;\n  }\n  .store-section .store-header {\n    font-size: 25px;\n    font-weight: 600;\n    margin-bottom: 20px;\n  }\n  .store-section .store-wrapper {\n    display: -webkit-box;\n    display: flex;\n    -webkit-box-pack: space-evenly;\n            justify-content: space-evenly;\n    margin-top: 30px;\n  }\n  .store-section .circle {\n    width: 50px;\n    height: 50px;\n    border-radius: 50%;\n    background: #E0D6FF;\n    display: -webkit-box;\n    display: flex;\n    -webkit-box-pack: center;\n            justify-content: center;\n    -webkit-box-align: center;\n            align-items: center;\n  }\n  .store-section .title {\n    text-align: center;\n    font-size: 13px;\n    color: black;\n  }\n\n  .foot {\n    display: -webkit-box;\n    display: flex;\n    padding: 20px 0 0;\n    -webkit-box-orient: vertical;\n    -webkit-box-direction: normal;\n            flex-direction: column;\n    flex-wrap: wrap;\n    -webkit-box-pack: center;\n            justify-content: center;\n  }\n  .foot .widget {\n    display: -webkit-box;\n    display: flex;\n    flex-wrap: wrap;\n    justify-content: space-around;\n    padding: 0 10%;\n  }\n  .foot .widget [class*=widget-] {\n    width: 100% !important;\n    margin-bottom: 2rem;\n  }\n  .foot .widget .widget-1 {\n    margin-right: 0px;\n  }\n  .foot .partner {\n    width: 160px;\n  }\n  .foot .copyright {\n    display: -webkit-box;\n    display: flex;\n    -webkit-box-orient: vertical;\n    -webkit-box-direction: normal;\n            flex-direction: column;\n    text-align: center;\n  }\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tcG9uZW50cy9jb3JlL2xhbmRpbmctcGFnZS9DOlxcTXlzcGFjZVxcQ29tc29mdCBMaW1pdGVkXFxwcm9qZWN0c1xcY2Fic29sX2F0dGVzdGF0aW9uX3VpL3NyY1xcYXBwXFxjb21wb25lbnRzXFxjb3JlXFxsYW5kaW5nLXBhZ2VcXGxhbmRpbmctcGFnZS5jb21wb25lbnQuc2NzcyIsInNyYy9hcHAvY29tcG9uZW50cy9jb3JlL2xhbmRpbmctcGFnZS9sYW5kaW5nLXBhZ2UuY29tcG9uZW50LnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDSSxVQUFBO0VBQVksZ0JBQUE7RUFBa0Isb0JBQUE7RUFBQSxhQUFBO0VBQWUsd0JBQUE7VUFBQSx1QkFBQTtFQUF3QixhQUFBO0VBQ3JFLGtCQUFBO0VBQ0Esa0JBQUE7RUFDQSxtREFBQTtFQUNBLHdCQUFBO0FDS0o7O0FERkE7RUFDSSxrQkFBQTtBQ0tKOztBREpJO0VBQ0ksa0JBQUE7RUFBbUIsU0FBQTtFQUFVLFFBQUE7QUNRckM7O0FETkk7RUFDSSxrQkFBQTtFQUFtQixTQUFBO0VBQVUsVUFBQTtFQUFZLHNCQUFBO0VBQXVCLFlBQUE7QUNZeEU7O0FEUkE7RUFDSSxVQUFBO0VBQVkscUJBQUE7VUFBQSx5QkFBQTtFQUEyQixvQkFBQTtFQUFBLGFBQUE7QUNhM0M7O0FEVkE7RUFDRSxZQUFBO0VBQ0EsVUFBQTtFQUNBLDBDQUFBO0VBQ0EsOENBQUE7RUFDQSxzQkFBQTtBQ2FGOztBRFpFO0VBQ0UsWUFBQTtFQUNBLFdBQUE7RUFDQSwwQ0FBQTtFQUNBLDBDQUFBO0FDY0o7O0FEVEE7RUFDSSxZQUFBO0VBQ0EsbUJBQUE7RUFDQSxVQUFBO0VBQ0Esa0NBQUE7RUFDQSxhQUFBO0VBQ0EsbUJBQUE7RUFDQSxrQkFBQTtBQ1lKOztBRFhJO0VBQ0ksd0JBQUE7QUNhUjs7QURUQTtFQUNJLHVCQUFBO0VBRUEsc0JBQUE7QUNXSjs7QURSSTtFQUNJLGVBQUE7RUFDQSxpQkFBQTtBQ1VSOztBRE5JO0VBQ0ksbUJBQUE7RUFDQSxjQUFBO0VBQ0Esb0JBQUE7RUFBQSxhQUFBO0VBQ0EseUJBQUE7VUFBQSw4QkFBQTtFQUNBLGVBQUE7QUNRUjs7QURMSTtFQUVJLHdCQUFBO0VBQ0Esb0JBQUE7RUFBQSxhQUFBO0VBQ0EsZUFBQTtFQUNBLGlCQUFBO0VBQ0EseUJBQUE7VUFBQSw4QkFBQTtBQ01SOztBRExRO0VBQ0Usb0JBQUE7RUFBQSxhQUFBO0VBQ0EsVUFBQTtFQUNBLG1CQUFBO0FDT1Y7O0FESlE7RUFDRSxXQUFBO0VBQ0EsWUFBQTtFQUNBLG1CQUFBO0VBQ0EsaURBQUE7RUFDQSxXQUFBO0VBQ0Esa0JBQUE7RUFDQSxvQkFBQTtFQUFBLGFBQUE7RUFDQSx3QkFBQTtVQUFBLHVCQUFBO0VBQ0EseUJBQUE7VUFBQSxtQkFBQTtBQ01WOztBREhRO0VBQ0UsaUJBQUE7RUFDQSxlQUFBO0VBQ0EsbUJBQUE7QUNLVjs7QURGUTtFQUNFLGNBQUE7RUFDQSxtQkFBQTtFQUNBLGVBQUE7QUNJVjs7QURFQTtFQUNJLGtCQUFBO0FDQ0o7O0FEQ0k7RUFDSSxlQUFBO0VBQ0EsaUJBQUE7RUFDQSxtQkFBQTtBQ0NSOztBREVJO0VBQ0ksb0JBQUE7RUFBQSxhQUFBO0VBQ0EsOEJBQUE7VUFBQSw2QkFBQTtFQUNBLDBCQUFBO1VBQUEsb0JBQUE7RUFDQSxlQUFBO0FDQVI7O0FEQ1E7RUFDSSxrQkFBQTtFQUNBLFVBQUE7RUFDQSxrQkFBQTtFQUNBLG1CQUFBO0VBQ0EsbUJBQUE7RUFDQSw0QkFBQTtFQUFBLG9CQUFBO0VBRUEsa0NBQUE7QUNBWjs7QURDWTtFQUNFLFlBQUE7QUNDZDs7QURFWTtFQUNJLGtCQUFBO0VBQ0EsZ0JBQUE7QUNBaEI7O0FEVUE7RUFDQztJQUFXLFdBQUE7SUFBYSxVQUFBO0VDTHZCO0VETUE7SUFBVyxRQUFBO0lBQVUsVUFBQTtFQ0ZyQjtFREdBO0lBQWUsU0FBQTtJQUFXLFVBQUE7RUNDMUI7QUFDRjs7QURMQTtFQUNDO0lBQVcsV0FBQTtJQUFhLFVBQUE7RUNMdkI7RURNQTtJQUFXLFFBQUE7SUFBVSxVQUFBO0VDRnJCO0VER0E7SUFBZSxTQUFBO0lBQVcsVUFBQTtFQ0MxQjtBQUNGOztBRENBO0VBQ0M7SUFBYSxXQUFBO0lBQWEsVUFBQTtFQ0d6QjtFREZFO0lBQWlCLFFBQUE7SUFBVSxVQUFBO0VDTTdCO0VETEU7SUFBZSxTQUFBO0lBQVcsVUFBQTtFQ1M1QjtBQUNGOztBRGJBO0VBQ0M7SUFBYSxXQUFBO0lBQWEsVUFBQTtFQ0d6QjtFREZFO0lBQWlCLFFBQUE7SUFBVSxVQUFBO0VDTTdCO0VETEU7SUFBZSxTQUFBO0lBQVcsVUFBQTtFQ1M1QjtBQUNGOztBRFBBO0VBQ0M7SUFBYSxXQUFBO0lBQWEsVUFBQTtFQ1d6QjtFRFZFO0lBQWlCLFFBQUE7SUFBVSxVQUFBO0VDYzdCO0VEYkU7SUFBTyxTQUFBO0lBQVcsVUFBQTtFQ2lCcEI7QUFDRjs7QURyQkE7RUFDQztJQUFhLFdBQUE7SUFBYSxVQUFBO0VDV3pCO0VEVkU7SUFBaUIsUUFBQTtJQUFVLFVBQUE7RUNjN0I7RURiRTtJQUFPLFNBQUE7SUFBVyxVQUFBO0VDaUJwQjtBQUNGOztBRGRBO0VBQ0k7SUFDSSxXQUFBO0lBQWEsZ0JBQUE7SUFDYixrQkFBQTtJQUNBLG1CQUFBO0VDaUJOO0VEaEJNO0lBQ0ksaUJBQUE7RUNrQlY7O0VEZEU7SUFDSSxrQkFBQTtFQ2lCTjtFRGhCTTtJQUNJLGtCQUFBO0lBQW1CLFNBQUE7SUFBVSxRQUFBO0VDb0J2QztFRGxCTTtJQUNJLGtCQUFBO0lBQW1CLFNBQUE7SUFBVSxVQUFBO0lBQVksc0JBQUE7SUFBdUIsWUFBQTtFQ3dCMUU7O0VEcEJFO0lBQ0ksVUFBQTtJQUFZLHFCQUFBO1lBQUEseUJBQUE7SUFBMkIsd0JBQUE7RUN5QjdDOztFRHRCRTtJQUNJLFlBQUE7SUFDQSxtQkFBQTtJQUNBLFVBQUE7SUFDQSxrQ0FBQTtJQUNBLGFBQUE7SUFDQSxtQkFBQTtJQUNBLGtCQUFBO0VDeUJOO0VEeEJNO0lBQ0ksd0JBQUE7RUMwQlY7QUFDRjs7QURyQkE7RUFDRTtJQUNFLFlBQUE7SUFDQSxtQkFBQTtJQUNBLFdBQUE7SUFDQSxrQ0FBQTtJQUNBLGFBQUE7SUFDQSxtQkFBQTtJQUNBLGtCQUFBO0VDdUJGO0VEdEJFO0lBQ0ksd0JBQUE7RUN3Qk47O0VEcEJBO0lBQ0Usa0JBQUE7RUN1QkY7RUR0QkU7SUFDSSxrQkFBQTtJQUFtQixTQUFBO0lBQVUsUUFBQTtFQzBCbkM7RUR4QkU7SUFDSSxrQkFBQTtJQUFtQixTQUFBO0lBQVUsU0FBQTtJQUFXLHNCQUFBO0lBQXVCLFlBQUE7RUM4QnJFOztFRDFCQTtJQUNJLHNCQUFBO0VDNkJKO0VEM0JJO0lBQ0ksZUFBQTtJQUNBLGlCQUFBO0VDNkJSO0VEekJRO0lBQ0Usb0JBQUE7SUFBQSxhQUFBO0lBQ0EsVUFBQTtJQUNBLG1CQUFBO0VDMkJWO0FBQ0Y7O0FEdEJBO0VBQ0k7SUFDSSxrQkFBQTtFQ3dCTjtFRHZCTTtJQUNJLGVBQUE7SUFDQSxpQkFBQTtJQUNBLG1CQUFBO0VDeUJWO0VEckJVO0lBQ0ksWUFBQTtFQ3VCZDtFRHRCYztJQUNJLGtCQUFBO0lBQ0EsZ0JBQUE7RUN3QmxCO0FBQ0Y7O0FEbEJBO0VBQ0k7SUFDSSxpQ0FBQTtFQ29CTjtFRG5CTTtJQUNJLGVBQUE7SUFDQSxpQkFBQTtFQ3FCVjtFRGxCVTtJQUNFLG9CQUFBO0lBQUEsYUFBQTtJQUNBLHNCQUFBO0lBQ0EsbUJBQUE7RUNvQlo7O0VEYkU7SUFDSSxrQkFBQTtFQ2dCTjtFRGZNO0lBQ0ksZUFBQTtJQUNBLGlCQUFBO0lBQ0EsbUJBQUE7RUNpQlY7RURiVTtJQUNJLFdBQUE7RUNlZDtFRGRjO0lBQ0ksa0JBQUE7SUFDQSxnQkFBQTtFQ2dCbEI7QUFDRjs7QUROQTtFQUNFLGNBQUE7RUFDQSxnQkFBQTtBQ1FGOztBRFBFO0VBQ0UsV0FBQTtBQ1NKOztBRG1EQTtFQUNFLGNBQUE7RUFDQSxlQUFBO0VBQ0EsaUJBQUE7RUFDQSxvQkFBQTtFQUFBLGFBQUE7RUFDQSxnQkFBQTtFQUNBLGlCQUFBO0VBQ0EsNEJBQUE7RUFBQSw2QkFBQTtVQUFBLHNCQUFBO0VBQ0EseUJBQUE7VUFBQSw4QkFBQTtBQ2hERjs7QURrREU7RUFDRSxvQkFBQTtFQUFBLGFBQUE7RUFDQSw2QkFBQTtFQUNBLGNBQUE7QUNoREo7O0FEa0RJO0VBQ0UsVUFBQTtFQUNBLG1CQUFBO0FDaEROOztBRG1ESTtFQUNFLHFCQUFBO0VBQ0Esa0JBQUE7QUNqRE47O0FEb0RJO0VBQ0UsZUFBQTtFQUNBLFlBQUE7RUFDQSxpQkFBQTtBQ2xETjs7QURxREk7RUFDRSxnQkFBQTtFQUNBLG9CQUFBO0VBQ0EsZUFBQTtBQ25ETjs7QURxRE07RUFDRSxrQkFBQTtFQUNBLFFBQUE7RUFDQSxvQ0FBQTtFQUFBLDRCQUFBO0FDbkRSOztBRHNEUTtFQUNFLFdBQUE7QUNwRFY7O0FEMERFO0VBQ0UsWUFBQTtBQ3hESjs7QUQwREU7RUFDRSxvQkFBQTtFQUFBLGFBQUE7RUFDQSw0QkFBQTtFQUFBLDZCQUFBO1VBQUEsc0JBQUE7RUFDQSxrQkFBQTtFQUNBLGtCQUFBO0VBQ0EsV0FBQTtFQUNBLGVBQUE7RUFDQSxnQkFBQTtBQ3hESjs7QUR5REk7RUFDSSxXQUFBO0FDdkRSOztBRHdEUTtFQUNFLGlCQUFBO0FDdERWOztBRDREQTtFQUNFLGtCQUFBO0VBQ0EsV0FBQTtFQUNBLFlBQUE7RUFFQSxXQUFBO0VBRUEsZUFBQTtFQUNBLGtCQUFBO0VBQ0Esb0JBQUE7RUFBQSxhQUFBO0VBQ0Esd0JBQUE7VUFBQSx1QkFBQTtFQUNBLHlCQUFBO1VBQUEsbUJBQUE7QUMzREY7O0FEZ0VFO0VBQ0UscUJBQUE7RUFDQSxrQkFBQTtBQzdESjs7QUQrREU7RUFDRSxXQUFBO0VBQ0EsWUFBQTtFQUNBLGtCQUFBO0VBQ0EsK0NBQUE7RUFFQSw0QkFBQTtFQUFBLG9CQUFBO0VBQ0Esb0JBQUE7RUFBQSxhQUFBO0VBQ0Esd0JBQUE7VUFBQSx1QkFBQTtFQUNBLHlCQUFBO1VBQUEsbUJBQUE7QUM5REo7O0FEK0RJO0VBQ0UsMkJBQUE7QUM3RE47O0FEa0VBO0VBRUU7SUFDRSxvQkFBQTtJQUFBLGFBQUE7SUFDQSxpQkFBQTtJQUNBLDRCQUFBO0lBQUEsNkJBQUE7WUFBQSxzQkFBQTtJQUNBLGVBQUE7SUFDQSx3QkFBQTtZQUFBLHVCQUFBO0VDaEVGO0VEa0VFO0lBQ0Usb0JBQUE7SUFBQSxhQUFBO0lBQ0EsZUFBQTtJQUNBLDZCQUFBO0lBQ0EsY0FBQTtFQ2hFSjtFRGtFSTtJQUNFLFVBQUE7SUFDQSxtQkFBQTtFQ2hFTjtFRG1FSTtJQUNFLHFCQUFBO0VDakVOO0VEc0VFO0lBQ0UsWUFBQTtFQ3BFSjtFRHVFRTtJQUNFLG9CQUFBO0lBQUEsYUFBQTtJQUNBLDRCQUFBO0lBQUEsNkJBQUE7WUFBQSxzQkFBQTtJQUNBLGtCQUFBO0VDckVKO0FBQ0Y7O0FENEVBO0VBQ0U7SUFDRSxvQkFBQTtJQUFBLGFBQUE7SUFDQSxpQkFBQTtJQUNBLDRCQUFBO0lBQUEsNkJBQUE7WUFBQSxzQkFBQTtJQUNBLGVBQUE7SUFDQSx3QkFBQTtZQUFBLHVCQUFBO0VDMUVGO0VENEVFO0lBQ0Usb0JBQUE7SUFBQSxhQUFBO0lBQ0EsZUFBQTtJQUNBLDZCQUFBO0lBQ0EsY0FBQTtFQzFFSjtFRDRFSTtJQUNFLHNCQUFBO0lBQ0EsbUJBQUE7RUMxRU47RURtRkU7SUFDRSxZQUFBO0VDakZKO0VEb0ZFO0lBQ0Usb0JBQUE7SUFBQSxhQUFBO0lBQ0EsNEJBQUE7SUFBQSw2QkFBQTtZQUFBLHNCQUFBO0lBQ0Esa0JBQUE7RUNsRko7QUFDRjs7QUR3RkE7RUFDRTtJQUNFLFVBQUE7SUFDQSxjQUFBO0lBQ0EseUJBQUE7SUFDQSxrQkFBQTtJQUNBLDRCQUFBO0VDdEZGO0VEdUZFO0lBQ0UsZUFBQTtJQUNBLGdCQUFBO0lBQ0EsbUJBQUE7RUNyRko7RUR3RkU7SUFDRSxvQkFBQTtJQUFBLGFBQUE7SUFDQSw4QkFBQTtZQUFBLDZCQUFBO0lBQ0EsZ0JBQUE7RUN0Rko7RUQ2RkU7SUFDRSxXQUFBO0lBQ0EsWUFBQTtJQUNBLGtCQUFBO0lBQ0EsbUJBQUE7SUFDQSxvQkFBQTtJQUFBLGFBQUE7SUFDQSx3QkFBQTtZQUFBLHVCQUFBO0lBQ0EseUJBQUE7WUFBQSxtQkFBQTtFQzNGSjtFRDhGRTtJQUNFLGtCQUFBO0lBQ0EsZUFBQTtJQUNBLFlBQUE7RUM1Rko7O0VEZ0dBO0lBQ0Usb0JBQUE7SUFBQSxhQUFBO0lBQ0EsaUJBQUE7SUFDQSw0QkFBQTtJQUFBLDZCQUFBO1lBQUEsc0JBQUE7SUFDQSxlQUFBO0lBQ0Esd0JBQUE7WUFBQSx1QkFBQTtFQzdGRjtFRCtGRTtJQUNFLG9CQUFBO0lBQUEsYUFBQTtJQUNBLGVBQUE7SUFDQSw2QkFBQTtJQUNBLGNBQUE7RUM3Rko7RUQrRkk7SUFDRSxzQkFBQTtJQUNBLG1CQUFBO0VDN0ZOO0VEZ0dJO0lBQ0UsaUJBQUE7RUM5Rk47RURrR0U7SUFDRSxZQUFBO0VDaEdKO0VEbUdFO0lBQ0Usb0JBQUE7SUFBQSxhQUFBO0lBQ0EsNEJBQUE7SUFBQSw2QkFBQTtZQUFBLHNCQUFBO0lBQ0Esa0JBQUE7RUNqR0o7QUFDRiIsImZpbGUiOiJzcmMvYXBwL2NvbXBvbmVudHMvY29yZS9sYW5kaW5nLXBhZ2UvbGFuZGluZy1wYWdlLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLmxlZnQtaGVyb3tcclxuICAgIHdpZHRoOiA1MCU7IG1hcmdpbi10b3A6IDQwcHg7IGRpc3BsYXk6IGZsZXg7IGp1c3RpZnktY29udGVudDogY2VudGVyO3BhZGRpbmc6IDMwcHg7XHJcbiAgICBwYWRkaW5nLWxlZnQ6IDYwcHg7XHJcbiAgICBhbGlnbi1zZWxmOiBjZW50ZXI7XHJcbiAgICBiYWNrZ3JvdW5kOiB1cmwoLi4vLi4vLi4vLi4vYXNzZXRzL2ltYWdlcy90b3AtcGF0dGVybi5wbmcpIGNlbnRlciBuby1yZXBlYXQ7XHJcbiAgICBiYWNrZ3JvdW5kLXNpemU6IGNvbnRhaW47XHJcbn1cclxuXHJcbi5zZWFyY2gtYm94e1xyXG4gICAgcG9zaXRpb246cmVsYXRpdmU7XHJcbiAgICAuc2VhcmNoLWljb257XHJcbiAgICAgICAgcG9zaXRpb246YWJzb2x1dGU7IHRvcDoyMHB4OyBsZWZ0OiAyJTtcclxuICAgIH1cclxuICAgIC5zZWFyY2gtc3VibWl0e1xyXG4gICAgICAgIHBvc2l0aW9uOmFic29sdXRlOyB0b3A6MTJweDsgcmlnaHQ6IDMyJTsgYmFja2dyb3VuZC1jb2xvcjogdGVhbDtjb2xvcjp3aGl0ZVxyXG4gICAgfVxyXG59XHJcblxyXG4ucmlnaHQtaGVyb3tcclxuICAgIHdpZHRoOiA1MCU7IGp1c3RpZnktY29udGVudDogZmxleC1lbmQ7IGRpc3BsYXk6IGZsZXg7XHJcbn1cclxuXHJcbi5zaGFwZWQtaW1hZ2UtaG9sZGVye1xyXG4gIGhlaWdodDogNjV2aDtcclxuICB3aWR0aDogODAlO1xyXG4gIGJvcmRlci1yYWRpdXM6MzQzJSAwIDAgMzQ3JSAvIDExOSUgMCAwIDI0NSU7XHJcbiAgYmFja2dyb3VuZDogdXJsKCcuLi8uLi8uLi8uLi9hc3NldHMvaW1hZ2VzL3Bob3RvMy5qcGcnKSBuby1yZXBlYXQgY2VudGVyO1xyXG4gIGJhY2tncm91bmQtc2l6ZTogY292ZXI7XHJcbiAgLm92ZXJsYXl7XHJcbiAgICBoZWlnaHQ6IDY1dmg7XHJcbiAgICB3aWR0aDogMTAwJTtcclxuICAgIGJvcmRlci1yYWRpdXM6MzQzJSAwIDAgMzQ3JSAvIDExOSUgMCAwIDI0NSU7XHJcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDAsIDEyOCwgMTI4LCAwLjI1Nik7XHJcbiAgfVxyXG59XHJcblxyXG5cclxuLmlucHV0LXN0eWxle1xyXG4gICAgYm9yZGVyOiBub25lO1xyXG4gICAgYm9yZGVyLXJhZGl1czogMTBweDtcclxuICAgIHdpZHRoOiA3MCU7XHJcbiAgICBib3gtc2hhZG93OiAwcHggOHB4IDI4cHggLTJweCAjY2NjO1xyXG4gICAgcGFkZGluZzogMjBweDtcclxuICAgIHBhZGRpbmctcmlnaHQ6IDUwcHg7XHJcbiAgICBwYWRkaW5nLWxlZnQ6IDUwcHg7XHJcbiAgICAmOmZvY3Vze1xyXG4gICAgICAgIG91dGxpbmU6IG5vbmUhaW1wb3J0YW50O1xyXG4gICAgfVxyXG59XHJcblxyXG4uc3RlcHMtc2VjdGlvbntcclxuICAgIGJhY2tncm91bmQtY29sb3I6IHdoaXRlO1xyXG4gICAgLy8gbWluLWhlaWdodDogMTAwdmg7XHJcbiAgICBwYWRkaW5nOiAwcHggNjBweCAxMHB4O1xyXG4gICAgLy8gbWFyZ2luLXRvcDo0MHB4O1xyXG4gICAgXHJcbiAgICAuaGVhZGVye1xyXG4gICAgICAgIGZvbnQtc2l6ZTogMjVweDtcclxuICAgICAgICBmb250LXdlaWdodDogYm9sZDtcclxuICAgICAgICAvLyBib3JkZXItYm90dG9tOiAycHggc29saWQgdGVhbDtcclxuICAgIH1cclxuXHJcbiAgICAuc3RlcC1jb250YWluZXJ7XHJcbiAgICAgICAgbWFyZ2luLWJvdHRvbTogMjBweDtcclxuICAgICAgICBjb2xvcjogIzQ5NTA1NztcclxuICAgICAgICBkaXNwbGF5OiBmbGV4O1xyXG4gICAgICAgIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2VlbjtcclxuICAgICAgICBmbGV4LXdyYXA6IHdyYXA7XHJcbiAgICB9XHJcblxyXG4gICAgLm9mZmVyLXdyYXBwZXJ7XHJcbiAgICAgICAgLy8gYmFja2dyb3VuZDogIHVybCgnLi4vLi4vLi4vYXNzZXRzL2ltZy90b3AtcGF0dGVybi5wbmcnKSBuby1yZXBlYXQgY2VudGVyO1xyXG4gICAgICAgIGJhY2tncm91bmQtc2l6ZTogY29udGFpbjtcclxuICAgICAgICBkaXNwbGF5OiBmbGV4O1xyXG4gICAgICAgIGZsZXgtd3JhcDogd3JhcDtcclxuICAgICAgICBwYWRkaW5nOiAwJSAwJSAzJTtcclxuICAgICAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XHJcbiAgICAgICAgLm9mZmVye1xyXG4gICAgICAgICAgZGlzcGxheTogZmxleDtcclxuICAgICAgICAgIHdpZHRoOjMwJTtcclxuICAgICAgICAgIG1hcmdpbi1ib3R0b206IDQwcHg7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIFxyXG4gICAgICAgIC5pY29ue1xyXG4gICAgICAgICAgd2lkdGg6IDQwcHg7XHJcbiAgICAgICAgICBoZWlnaHQ6IDQwcHg7XHJcbiAgICAgICAgICBib3JkZXItcmFkaXVzOiAxMHB4O1xyXG4gICAgICAgICAgYmFja2dyb3VuZDogIzAwOTY4ODJlIDAlIDAlIG5vLXJlcGVhdCBwYWRkaW5nLWJveDtcclxuICAgICAgICAgIGNvbG9yOiB0ZWFsO1xyXG4gICAgICAgICAgbWFyZ2luLXJpZ2h0OiAyMHB4O1xyXG4gICAgICAgICAgZGlzcGxheTogZmxleDtcclxuICAgICAgICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xyXG4gICAgICAgICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcclxuICAgICAgICB9XHJcbiAgICBcclxuICAgICAgICAub2ZmZXItaGVhZGVye1xyXG4gICAgICAgICAgZm9udC13ZWlnaHQ6IGJvbGQ7XHJcbiAgICAgICAgICBmb250LXNpemU6IDE2cHg7XHJcbiAgICAgICAgICBtYXJnaW4tYm90dG9tOiAxMHB4O1xyXG4gICAgICAgIH1cclxuICAgIFxyXG4gICAgICAgIC5vZmZlci10ZXh0e1xyXG4gICAgICAgICAgY29sb3I6IzZGNkQ2RDtcclxuICAgICAgICAgIGZvbnQtd2VpZ2h0OiBub3JtYWw7XHJcbiAgICAgICAgICBmb250LXNpemU6IDE1cHg7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG59XHJcblxyXG5cclxuLmZlYXR1cmVze1xyXG4gICAgcGFkZGluZzogM3JlbSA2MHB4O1xyXG5cclxuICAgIC5oZWFkZXJ7XHJcbiAgICAgICAgZm9udC1zaXplOiAyNXB4O1xyXG4gICAgICAgIGZvbnQtd2VpZ2h0OiBib2xkO1xyXG4gICAgICAgIG1hcmdpbi1ib3R0b206IDQwcHg7XHJcbiAgICB9XHJcblxyXG4gICAgLmZlYXR1cmUtY29udGFpbmVye1xyXG4gICAgICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICAgICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1ldmVubHk7XHJcbiAgICAgICAgYWxpZ24taXRlbXM6IHN0cmV0Y2g7XHJcbiAgICAgICAgZmxleC13cmFwOiB3cmFwO1xyXG4gICAgICAgIC5mZWF0dXJle1xyXG4gICAgICAgICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XHJcbiAgICAgICAgICAgIHdpZHRoOiAyNSU7ICAgXHJcbiAgICAgICAgICAgIHBhZGRpbmc6IDgwcHggMjBweDtcclxuICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogMTBweDtcclxuICAgICAgICAgICAgbWFyZ2luLWJvdHRvbTogMzBweDtcclxuICAgICAgICAgICAgdHJhbnNpdGlvbjogYWxsIC40cztcclxuICAgICAgICAgICAgLy8gYm9yZGVyOjFweCBzb2xpZCB0cmFuc3BhcmVudDtcclxuICAgICAgICAgICAgYm94LXNoYWRvdzowcHggM3B4IDM1cHggMTJweCAjZWVlO1xyXG4gICAgICAgICAgICAuaWNvbntcclxuICAgICAgICAgICAgICBtYXJnaW46IDEwcHg7XHJcbiAgICAgICAgICAgIH1cclxuXHJcbiAgICAgICAgICAgIC50aXRsZXtcclxuICAgICAgICAgICAgICAgIGZvbnQtc2l6ZTogeC1sYXJnZTtcclxuICAgICAgICAgICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgLy8gJjpob3ZlcntcclxuICAgICAgICAgICAgLy8gICAgIC8vIGJvcmRlcjoxcHggc29saWQgI2NjY1xyXG4gICAgICAgICAgICAvLyAgICAgYm94LXNoYWRvdzowcHggM3B4IDVweCAtMnB4ICNlZWU7XHJcbiAgICAgICAgICAgIC8vIH1cclxuICAgICAgICB9XHJcbiAgICB9XHJcbn1cclxuXHJcbkBrZXlmcmFtZXMgYW5pbS0xIHtcclxuXHQwJSwgOC4zJSB7IGxlZnQ6IC0xMDAlOyBvcGFjaXR5OiAwOyB9XHJcbiAgOC4zJSwyNSUgeyBsZWZ0OiA1JTsgb3BhY2l0eTogMTsgfVxyXG4gIDMzLjMzJSwgMTAwJSB7IGxlZnQ6IDQwJTsgb3BhY2l0eTogMDsgfVxyXG59XHJcblxyXG5Aa2V5ZnJhbWVzIGFuaW0tMiB7XHJcblx0MCUsIDMzLjMzJSB7IGxlZnQ6IC0xMDAlOyBvcGFjaXR5OiAwOyB9XHJcbiAgICA0MS42MyUsIDU4LjI5JSB7IGxlZnQ6IDUlOyBvcGFjaXR5OiAxOyB9XHJcbiAgICA2Ni42NiUsIDEwMCUgeyBsZWZ0OiA0MCU7IG9wYWNpdHk6IDA7IH1cclxufVxyXG5cclxuQGtleWZyYW1lcyBhbmltLTMge1xyXG5cdDAlLCA2Ni42NiUgeyBsZWZ0OiAtMTAwJTsgb3BhY2l0eTogMDsgfVxyXG4gICAgNzQuOTYlLCA5MS42MiUgeyBsZWZ0OiA1JTsgb3BhY2l0eTogMTsgfVxyXG4gICAgMTAwJSB7IGxlZnQ6IDQwJTsgb3BhY2l0eTogMDsgfVxyXG59XHJcblxyXG5cclxuQG1lZGlhIHNjcmVlbiBhbmQgKG1heC13aWR0aDo2ODdweCl7XHJcbiAgICAubGVmdC1oZXJve1xyXG4gICAgICAgIHdpZHRoOiAxMDAlOyBtYXJnaW4tdG9wOiA0MHB4OyBcclxuICAgICAgICBwYWRkaW5nLWxlZnQ6IDQwcHg7XHJcbiAgICAgICAgbWFyZ2luLWJvdHRvbTogNDBweDtcclxuICAgICAgICAuaDF7XHJcbiAgICAgICAgICAgIGZvbnQtc2l6ZTogMS41cmVtO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxuICAgIFxyXG4gICAgLnNlYXJjaC1ib3h7XHJcbiAgICAgICAgcG9zaXRpb246cmVsYXRpdmU7XHJcbiAgICAgICAgLnNlYXJjaC1pY29ue1xyXG4gICAgICAgICAgICBwb3NpdGlvbjphYnNvbHV0ZTsgdG9wOjIwcHg7IGxlZnQ6IDIlO1xyXG4gICAgICAgIH1cclxuICAgICAgICAuc2VhcmNoLXN1Ym1pdHtcclxuICAgICAgICAgICAgcG9zaXRpb246YWJzb2x1dGU7IHRvcDoxMnB4OyByaWdodDogMTMlOyBiYWNrZ3JvdW5kLWNvbG9yOiB0ZWFsO2NvbG9yOndoaXRlXHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG4gICAgXHJcbiAgICAucmlnaHQtaGVyb3tcclxuICAgICAgICB3aWR0aDogNTAlOyBqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtZW5kOyBkaXNwbGF5OiBub25lIWltcG9ydGFudDtcclxuICAgIH1cclxuXHJcbiAgICAuaW5wdXQtc3R5bGV7XHJcbiAgICAgICAgYm9yZGVyOiBub25lO1xyXG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDEwcHg7XHJcbiAgICAgICAgd2lkdGg6IDkwJTtcclxuICAgICAgICBib3gtc2hhZG93OiAwcHggOHB4IDI4cHggLTJweCAjY2NjO1xyXG4gICAgICAgIHBhZGRpbmc6IDIwcHg7XHJcbiAgICAgICAgcGFkZGluZy1yaWdodDogNTBweDtcclxuICAgICAgICBwYWRkaW5nLWxlZnQ6IDUwcHg7XHJcbiAgICAgICAgJjpmb2N1c3tcclxuICAgICAgICAgICAgb3V0bGluZTogbm9uZSFpbXBvcnRhbnQ7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG4gICAgXHJcbn1cclxuXHJcbkBtZWRpYSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6ODMwcHgpe1xyXG4gIC5pbnB1dC1zdHlsZXtcclxuICAgIGJvcmRlcjogbm9uZTtcclxuICAgIGJvcmRlci1yYWRpdXM6IDEwcHg7XHJcbiAgICB3aWR0aDogMTAwJTtcclxuICAgIGJveC1zaGFkb3c6IDBweCA4cHggMjhweCAtMnB4ICNjY2M7XHJcbiAgICBwYWRkaW5nOiAyMHB4O1xyXG4gICAgcGFkZGluZy1yaWdodDogNTBweDtcclxuICAgIHBhZGRpbmctbGVmdDogNTBweDtcclxuICAgICY6Zm9jdXN7XHJcbiAgICAgICAgb3V0bGluZTogbm9uZSFpbXBvcnRhbnQ7XHJcbiAgICB9XHJcbiAgfVxyXG5cclxuICAuc2VhcmNoLWJveHtcclxuICAgIHBvc2l0aW9uOnJlbGF0aXZlO1xyXG4gICAgLnNlYXJjaC1pY29ue1xyXG4gICAgICAgIHBvc2l0aW9uOmFic29sdXRlOyB0b3A6MjBweDsgbGVmdDogMiU7XHJcbiAgICB9XHJcbiAgICAuc2VhcmNoLXN1Ym1pdHtcclxuICAgICAgICBwb3NpdGlvbjphYnNvbHV0ZTsgdG9wOjEycHg7IHJpZ2h0OiAyJTsgYmFja2dyb3VuZC1jb2xvcjogdGVhbDtjb2xvcjp3aGl0ZVxyXG4gICAgfVxyXG4gIH1cclxuXHJcbiAgLnN0ZXBzLXNlY3Rpb257XHJcbiAgICAgIHBhZGRpbmc6IDBweCA2MHB4IDEwcHg7XHJcbiAgICAgIFxyXG4gICAgICAuaGVhZGVye1xyXG4gICAgICAgICAgZm9udC1zaXplOiAyNXB4O1xyXG4gICAgICAgICAgZm9udC13ZWlnaHQ6IGJvbGQ7XHJcbiAgICAgIH1cclxuICAgICAgXHJcbiAgICAgIC5vZmZlci13cmFwcGVye1xyXG4gICAgICAgICAgLm9mZmVye1xyXG4gICAgICAgICAgICBkaXNwbGF5OiBmbGV4O1xyXG4gICAgICAgICAgICB3aWR0aDo0NSU7XHJcbiAgICAgICAgICAgIG1hcmdpbi1ib3R0b206IDQwcHg7XHJcbiAgICAgICAgICB9XHJcbiAgICAgIH1cclxuICB9XHJcbn1cclxuXHJcbkBtZWRpYSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6ODY0cHgpe1xyXG4gICAgLmZlYXR1cmVze1xyXG4gICAgICAgIHBhZGRpbmc6IDNyZW0gNjBweDtcclxuICAgICAgICAuaGVhZGVye1xyXG4gICAgICAgICAgICBmb250LXNpemU6IDI1cHg7XHJcbiAgICAgICAgICAgIGZvbnQtd2VpZ2h0OiBib2xkO1xyXG4gICAgICAgICAgICBtYXJnaW4tYm90dG9tOiA0MHB4O1xyXG4gICAgICAgIH1cclxuICAgIFxyXG4gICAgICAgIC5mZWF0dXJlLWNvbnRhaW5lcntcclxuICAgICAgICAgICAgLmZlYXR1cmV7XHJcbiAgICAgICAgICAgICAgICB3aWR0aDogNDkuMyU7ICAgXHJcbiAgICAgICAgICAgICAgICAudGl0bGV7XHJcbiAgICAgICAgICAgICAgICAgICAgZm9udC1zaXplOiB4LWxhcmdlO1xyXG4gICAgICAgICAgICAgICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICB9ICAgIFxyXG59XHJcblxyXG5AbWVkaWEgc2NyZWVuIGFuZCAobWF4LXdpZHRoOjUyNXB4KXtcclxuICAgIC5zdGVwcy1zZWN0aW9ue1xyXG4gICAgICAgIHBhZGRpbmc6IDBweCAzMHB4IDEwcHghaW1wb3J0YW50O1xyXG4gICAgICAgIC5oZWFkZXJ7XHJcbiAgICAgICAgICAgIGZvbnQtc2l6ZTogMjBweDtcclxuICAgICAgICAgICAgZm9udC13ZWlnaHQ6IGJvbGQ7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIC5vZmZlci13cmFwcGVye1xyXG4gICAgICAgICAgICAub2ZmZXJ7XHJcbiAgICAgICAgICAgICAgZGlzcGxheTogZmxleDtcclxuICAgICAgICAgICAgICB3aWR0aDoxMDAlIWltcG9ydGFudDtcclxuICAgICAgICAgICAgICBtYXJnaW4tYm90dG9tOiA0MHB4O1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG5cclxuICAgIFxyXG5cclxuICAgIC5mZWF0dXJlc3tcclxuICAgICAgICBwYWRkaW5nOiAzcmVtIDMwcHg7XHJcbiAgICAgICAgLmhlYWRlcntcclxuICAgICAgICAgICAgZm9udC1zaXplOiAyNXB4O1xyXG4gICAgICAgICAgICBmb250LXdlaWdodDogYm9sZDtcclxuICAgICAgICAgICAgbWFyZ2luLWJvdHRvbTogNDBweDtcclxuICAgICAgICB9XHJcbiAgICBcclxuICAgICAgICAuZmVhdHVyZS1jb250YWluZXJ7XHJcbiAgICAgICAgICAgIC5mZWF0dXJle1xyXG4gICAgICAgICAgICAgICAgd2lkdGg6IDEwMCU7ICAgXHJcbiAgICAgICAgICAgICAgICAudGl0bGV7XHJcbiAgICAgICAgICAgICAgICAgICAgZm9udC1zaXplOiB4LWxhcmdlO1xyXG4gICAgICAgICAgICAgICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICB9ICBcclxufVxyXG5cclxuLy8gRm9vdGVyIFN0eWxpbmdcclxuXHJcbiRwcmltYXJ5LWNvbG9yOiB0ZWFsO1xyXG5cclxuYSB7XHJcbiAgY29sb3I6ICM2RjZENkQ7XHJcbiAgZm9udC13ZWlnaHQ6IDUwMDtcclxuICAmOmhvdmVyIHtcclxuICAgIGNvbG9yOiB0ZWFsO1xyXG4gIH1cclxufVxyXG5cclxuLy8gLy8gKioqKiogU3RvcmUgc2VjdGlvblxyXG4vLyAuc3RvcmUtc2VjdGlvbntcclxuLy8gICB3aWR0aDogNzAlO1xyXG4vLyAgIG1hcmdpbjowIGF1dG87XHJcbi8vICAgYmFja2dyb3VuZC1jb2xvcjojRkFGOEZGO1xyXG4vLyAgIHRleHQtYWxpZ246IGNlbnRlcjtcclxuLy8gICBwYWRkaW5nOiA0MHB4IDE1JTtcclxuLy8gICAuc3RvcmUtaGVhZGVye1xyXG4vLyAgICAgZm9udC1zaXplOiAyNXB4O1xyXG4vLyAgICAgZm9udC13ZWlnaHQ6IDYwMDtcclxuLy8gICAgIG1hcmdpbi1ib3R0b206IDIwcHg7O1xyXG4vLyAgIH1cclxuLy8gICAuc3RvcmUtd3JhcHBlcntcclxuLy8gICAgIGRpc3BsYXk6IGZsZXg7XHJcbi8vICAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWV2ZW5seTtcclxuLy8gICAgIG1hcmdpbi10b3A6IDMwcHg7XHJcbi8vICAgfVxyXG5cclxuLy8gICAvLyAuc3RvcmV7XHJcbi8vICAgICAvLyBtYXJnaW4tcmlnaHQ6NDBweDtcclxuLy8gICAvLyB9XHJcblxyXG4vLyAgIC5jaXJjbGV7XHJcbi8vICAgICB3aWR0aDogNTBweDtcclxuLy8gICAgIGhlaWdodDogNTBweDtcclxuLy8gICAgIGJvcmRlci1yYWRpdXM6IDUwJTtcclxuLy8gICAgIGJhY2tncm91bmQ6ICNFMEQ2RkY7XHJcbi8vICAgICBkaXNwbGF5OiBmbGV4O1xyXG4vLyAgICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XHJcbi8vICAgICBhbGlnbi1pdGVtczogY2VudGVyO1xyXG4vLyAgIH1cclxuXHJcbi8vICAgLnRpdGxle1xyXG4vLyAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xyXG4vLyAgICAgZm9udC1zaXplOiAxM3B4O1xyXG4vLyAgICAgY29sb3I6IGJsYWNrO1xyXG4vLyAgIH1cclxuLy8gfVxyXG5cclxuXHJcbi8vIC5sb2dvLWJvdHRvbXtcclxuLy8gICB3aWR0aDogOTUlO1xyXG4vLyAgIG1hcmdpbjogYXV0bztcclxuLy8gICBiYWNrZ3JvdW5kOiAgdXJsKCcuLi8uLi8uLi8uLi9hc3NldHMvaW1hZ2VzL3RvcC1wYXR0ZXJuLnBuZycpIG5vLXJlcGVhdCBjZW50ZXI7XHJcbi8vICAgYmFja2dyb3VuZC1zaXplOiBjb250YWluO1xyXG4vLyAgIGRpc3BsYXk6IGZsZXg7XHJcbi8vICAgcGFkZGluZzo0cmVtIDA7XHJcbi8vICAgdGV4dC1hbGlnbjogY2VudGVyO1xyXG4vLyAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xyXG4vLyAgIGFsaWduLWNvbnRlbnQ6IGNlbnRlcjtcclxuLy8gICAubG9nb3tcclxuLy8gICAgIHdpZHRoOjEzN3B4O1xyXG4vLyAgIH1cclxuLy8gfVxyXG5cclxuXHJcbi5mb290IHtcclxuICBjb2xvcjogIzZGNkQ2RDtcclxuICBmb250LXNpemU6IDE2cHg7XHJcbiAgbWluLWhlaWdodDogMjNyZW07XHJcbiAgZGlzcGxheTogZmxleDtcclxuICBiYWNrZ3JvdW5kOiAjZmZmO1xyXG4gIHBhZGRpbmc6IDIwcHggMCAwO1xyXG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XHJcbiAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xyXG5cclxuICAud2lkZ2V0IHtcclxuICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWFyb3VuZDtcclxuICAgIHBhZGRpbmc6MCAxMCU7XHJcblxyXG4gICAgW2NsYXNzKj1cIndpZGdldC1cIl0ge1xyXG4gICAgICB3aWR0aDogMjUlO1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAycmVtO1xyXG4gICAgfVxyXG5cclxuICAgIC53aWRnZXQtMSB7XHJcbiAgICAgIHdpZHRoOiA0MCUhaW1wb3J0YW50O1xyXG4gICAgICBtYXJnaW4tcmlnaHQ6IDQ1cHg7XHJcbiAgICB9XHJcblxyXG4gICAgLmhlYWRlciB7XHJcbiAgICAgIGZvbnQtc2l6ZTogMjBweDtcclxuICAgICAgY29sb3I6IGJsYWNrO1xyXG4gICAgICBmb250LXdlaWdodDogYm9sZDtcclxuICAgIH1cclxuXHJcbiAgICBsaSB7XHJcbiAgICAgIGxpc3Qtc3R5bGU6IG5vbmU7XHJcbiAgICAgIG1hcmdpbi1ib3R0b206IDAuNWVtO1xyXG4gICAgICBjdXJzb3I6IHBvaW50ZXI7XHJcbiAgICAgIC8vIGJvcmRlci1ib3R0b206MXB4IHNvbGlkICNjY2M7XHJcbiAgICAgIC5tZGkge1xyXG4gICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcclxuICAgICAgICByaWdodDogMDtcclxuICAgICAgICB0cmFuc2l0aW9uOiAwLjNzIGVhc2UtaW4tb3V0O1xyXG4gICAgICB9XHJcbiAgICAgICY6aG92ZXIge1xyXG4gICAgICAgIC5tZGkge1xyXG4gICAgICAgICAgcmlnaHQ6IC02cHg7XHJcbiAgICAgICAgfVxyXG4gICAgICB9XHJcbiAgICB9XHJcbiAgfVxyXG5cclxuICAucGFydG5lcntcclxuICAgIHdpZHRoOjIwMHB4O1xyXG4gIH1cclxuICAuY29weXJpZ2h0IHtcclxuICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xyXG4gICAgdGV4dC1hbGlnbjogY2VudGVyO1xyXG4gICAgcGFkZGluZzogMzBweCAyMHB4O1xyXG4gICAgY29sb3I6ICNmZmY7XHJcbiAgICBmb250LXNpemU6IDE1cHg7XHJcbiAgICBiYWNrZ3JvdW5kOiB0ZWFsO1xyXG4gICAgYSB7XHJcbiAgICAgICAgY29sb3I6ICNmZmY7XHJcbiAgICAgICAgJjpob3ZlciB7XHJcbiAgICAgICAgICBjb2xvcjogd2hpdGVzbW9rZTtcclxuICAgICAgICB9XHJcbiAgICAgIH1cclxuICB9XHJcbn1cclxuXHJcbi5mb290aWNvbiB7XHJcbiAgYm9yZGVyLXJhZGl1czogNTAlO1xyXG4gIHdpZHRoOiAzNXB4O1xyXG4gIGhlaWdodDogMzVweDtcclxuICAvLyBiYWNrZ3JvdW5kLWNvbG9yOiMwY2Y4Yzg7XHJcbiAgY29sb3I6ICNmZmY7XHJcbiAgLy8gYm94LXNoYWRvdzogMHB4IDBweCA2cHggMXB4ICNiZWMwYzU7XHJcbiAgZm9udC1zaXplOiAyMHB4O1xyXG4gIG1hcmdpbi1yaWdodDogMTBweDtcclxuICBkaXNwbGF5OiBmbGV4O1xyXG4gIGp1c3RpZnktY29udGVudDogY2VudGVyO1xyXG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XHJcbn1cclxuXHJcbi5zb2NpYWwtd3JhcHBlcntcclxuICAvLyBkaXNwbGF5OiBmbGV4O1xyXG4gIC5wYXJlbnR7XHJcbiAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XHJcbiAgICBtYXJnaW4tcmlnaHQ6IDEwcHg7XHJcbiAgfVxyXG4gIC5zb2NpYWwtY2lyY2xle1xyXG4gICAgd2lkdGg6MzBweDtcclxuICAgIGhlaWdodDogMzBweDtcclxuICAgIGJvcmRlci1yYWRpdXM6IDUwJTtcclxuICAgIGJhY2tncm91bmQ6ICNlNWU1ZTUgMCUgMCUgbm8tcmVwZWF0IHBhZGRpbmctYm94O1xyXG4gICAgLy8gbWFyZ2luLXJpZ2h0OiAyNXB4O1xyXG4gICAgdHJhbnNpdGlvbjogYWxsIC41cztcclxuICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcclxuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XHJcbiAgICAmOmhvdmVye1xyXG4gICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjMDA4MDgwMzY7XHJcbiAgICB9XHJcbiAgfVxyXG59XHJcblxyXG5AbWVkaWEgc2NyZWVuIGFuZCAobWF4LXdpZHRoOjEwMjNweCl7XHJcbiAgXHJcbiAgLmZvb3Qge1xyXG4gICAgZGlzcGxheTogZmxleDtcclxuICAgIHBhZGRpbmc6IDIwcHggMCAwO1xyXG4gICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcclxuICAgIGZsZXgtd3JhcDp3cmFwO1xyXG4gICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XHJcbiAgXHJcbiAgICAud2lkZ2V0IHtcclxuICAgICAgZGlzcGxheTogZmxleDtcclxuICAgICAgZmxleC13cmFwOndyYXA7XHJcbiAgICAgIGp1c3RpZnktY29udGVudDogc3BhY2UtYXJvdW5kO1xyXG4gICAgICBwYWRkaW5nOjAgMTAlO1xyXG4gIFxyXG4gICAgICBbY2xhc3MqPVwid2lkZ2V0LVwiXSB7XHJcbiAgICAgICAgd2lkdGg6IDI1JTtcclxuICAgICAgICBtYXJnaW4tYm90dG9tOiAycmVtO1xyXG4gICAgICB9XHJcbiAgXHJcbiAgICAgIC53aWRnZXQtMSB7XHJcbiAgICAgICAgd2lkdGg6IDQwJSFpbXBvcnRhbnQ7XHJcbiAgICAgICAgLy8gbWFyZ2luLWJvdHRvbTogMnJlbTtcclxuICAgICAgfVxyXG4gICAgfVxyXG4gIFxyXG4gICAgLnBhcnRuZXJ7XHJcbiAgICAgIHdpZHRoOjE4MHB4O1xyXG4gICAgfVxyXG4gICAgXHJcbiAgICAuY29weXJpZ2h0IHtcclxuICAgICAgZGlzcGxheTogZmxleDtcclxuICAgICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcclxuICAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xyXG4gICAgLy8gICBwYWRkaW5nOiAzMHB4IDA7XHJcbiAgICAvLyAgIGNvbG9yOiBibGFjaztcclxuICAgIC8vICAgYmFja2dyb3VuZDogI0ZBRjhGRjtcclxuICAgIH1cclxuICB9XHJcbn1cclxuXHJcbkBtZWRpYSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6NzY4cHgpe1xyXG4gIC5mb290IHtcclxuICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICBwYWRkaW5nOiAyMHB4IDAgMDtcclxuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XHJcbiAgICBmbGV4LXdyYXA6d3JhcDtcclxuICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xyXG4gIFxyXG4gICAgLndpZGdldCB7XHJcbiAgICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICAgIGZsZXgtd3JhcDp3cmFwO1xyXG4gICAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWFyb3VuZDtcclxuICAgICAgcGFkZGluZzowIDEwJTtcclxuICBcclxuICAgICAgW2NsYXNzKj1cIndpZGdldC1cIl0ge1xyXG4gICAgICAgIHdpZHRoOiAxMDAlIWltcG9ydGFudDtcclxuICAgICAgICBtYXJnaW4tYm90dG9tOiAycmVtO1xyXG4gICAgICB9XHJcbiAgXHJcbiAgICAgIC8vIC53aWRnZXQtMSB7XHJcbiAgICAgIC8vICAgd2lkdGg6IDQwJSFpbXBvcnRhbnQ7XHJcbiAgICAgIC8vICAgLy8gbWFyZ2luLWJvdHRvbTogMnJlbTtcclxuICAgICAgLy8gfVxyXG4gICAgfVxyXG4gIFxyXG4gICAgLnBhcnRuZXJ7XHJcbiAgICAgIHdpZHRoOjE2MHB4O1xyXG4gICAgfVxyXG4gICAgXHJcbiAgICAuY29weXJpZ2h0IHtcclxuICAgICAgZGlzcGxheTogZmxleDtcclxuICAgICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcclxuICAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xyXG4gICAgLy8gICBwYWRkaW5nOiAzMHB4IDA7XHJcbiAgICB9XHJcbiAgfVxyXG59XHJcblxyXG5cclxuQG1lZGlhIHNjcmVlbiBhbmQgKG1heC13aWR0aDo2MDBweCl7XHJcbiAgLnN0b3JlLXNlY3Rpb257XHJcbiAgICB3aWR0aDogOTAlO1xyXG4gICAgbWFyZ2luOjAgYXV0bztcclxuICAgIGJhY2tncm91bmQtY29sb3I6I0ZBRjhGRjtcclxuICAgIHRleHQtYWxpZ246IGNlbnRlcjtcclxuICAgIHBhZGRpbmc6IDQwcHggMTAlIWltcG9ydGFudDtcclxuICAgIC5zdG9yZS1oZWFkZXJ7XHJcbiAgICAgIGZvbnQtc2l6ZTogMjVweDtcclxuICAgICAgZm9udC13ZWlnaHQ6IDYwMDtcclxuICAgICAgbWFyZ2luLWJvdHRvbTogMjBweDtcclxuICAgIH1cclxuXHJcbiAgICAuc3RvcmUtd3JhcHBlcntcclxuICAgICAgZGlzcGxheTogZmxleDtcclxuICAgICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1ldmVubHk7XHJcbiAgICAgIG1hcmdpbi10b3A6IDMwcHg7XHJcbiAgICB9XHJcblxyXG4gICAgLy8gLnN0b3Jle1xyXG4gICAgICAvLyBtYXJnaW4tcmlnaHQ6NDBweDtcclxuICAgIC8vIH1cclxuXHJcbiAgICAuY2lyY2xle1xyXG4gICAgICB3aWR0aDogNTBweDtcclxuICAgICAgaGVpZ2h0OiA1MHB4O1xyXG4gICAgICBib3JkZXItcmFkaXVzOiA1MCU7XHJcbiAgICAgIGJhY2tncm91bmQ6ICNFMEQ2RkY7XHJcbiAgICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xyXG4gICAgICBhbGlnbi1pdGVtczogY2VudGVyO1xyXG4gICAgfVxyXG5cclxuICAgIC50aXRsZXtcclxuICAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xyXG4gICAgICBmb250LXNpemU6IDEzcHg7XHJcbiAgICAgIGNvbG9yOiBibGFjaztcclxuICAgIH1cclxuICB9XHJcblxyXG4gIC5mb290IHtcclxuICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICBwYWRkaW5nOiAyMHB4IDAgMDtcclxuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XHJcbiAgICBmbGV4LXdyYXA6d3JhcDtcclxuICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xyXG4gIFxyXG4gICAgLndpZGdldCB7XHJcbiAgICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICAgIGZsZXgtd3JhcDp3cmFwO1xyXG4gICAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWFyb3VuZDtcclxuICAgICAgcGFkZGluZzowIDEwJTtcclxuICBcclxuICAgICAgW2NsYXNzKj1cIndpZGdldC1cIl0ge1xyXG4gICAgICAgIHdpZHRoOiAxMDAlIWltcG9ydGFudDtcclxuICAgICAgICBtYXJnaW4tYm90dG9tOiAycmVtO1xyXG4gICAgICB9XHJcbiAgXHJcbiAgICAgIC53aWRnZXQtMSB7XHJcbiAgICAgICAgbWFyZ2luLXJpZ2h0OiAwcHg7XHJcbiAgICAgIH1cclxuICAgIH1cclxuICBcclxuICAgIC5wYXJ0bmVye1xyXG4gICAgICB3aWR0aDoxNjBweDtcclxuICAgIH1cclxuICAgIFxyXG4gICAgLmNvcHlyaWdodCB7XHJcbiAgICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XHJcbiAgICAgIHRleHQtYWxpZ246IGNlbnRlcjtcclxuICAgIC8vICAgcGFkZGluZzogMzBweCAwO1xyXG4gICAgfVxyXG4gIH1cclxuICBcclxufSIsIi5sZWZ0LWhlcm8ge1xuICB3aWR0aDogNTAlO1xuICBtYXJnaW4tdG9wOiA0MHB4O1xuICBkaXNwbGF5OiBmbGV4O1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgcGFkZGluZzogMzBweDtcbiAgcGFkZGluZy1sZWZ0OiA2MHB4O1xuICBhbGlnbi1zZWxmOiBjZW50ZXI7XG4gIGJhY2tncm91bmQ6IHVybCguLi8uLi8uLi8uLi9hc3NldHMvaW1hZ2VzL3RvcC1wYXR0ZXJuLnBuZykgY2VudGVyIG5vLXJlcGVhdDtcbiAgYmFja2dyb3VuZC1zaXplOiBjb250YWluO1xufVxuXG4uc2VhcmNoLWJveCB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbn1cbi5zZWFyY2gtYm94IC5zZWFyY2gtaWNvbiB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAyMHB4O1xuICBsZWZ0OiAyJTtcbn1cbi5zZWFyY2gtYm94IC5zZWFyY2gtc3VibWl0IHtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB0b3A6IDEycHg7XG4gIHJpZ2h0OiAzMiU7XG4gIGJhY2tncm91bmQtY29sb3I6IHRlYWw7XG4gIGNvbG9yOiB3aGl0ZTtcbn1cblxuLnJpZ2h0LWhlcm8ge1xuICB3aWR0aDogNTAlO1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtZW5kO1xuICBkaXNwbGF5OiBmbGV4O1xufVxuXG4uc2hhcGVkLWltYWdlLWhvbGRlciB7XG4gIGhlaWdodDogNjV2aDtcbiAgd2lkdGg6IDgwJTtcbiAgYm9yZGVyLXJhZGl1czogMzQzJSAwIDAgMzQ3JS8xMTklIDAgMCAyNDUlO1xuICBiYWNrZ3JvdW5kOiB1cmwoXCIuLi8uLi8uLi8uLi9hc3NldHMvaW1hZ2VzL3Bob3RvMy5qcGdcIikgbm8tcmVwZWF0IGNlbnRlcjtcbiAgYmFja2dyb3VuZC1zaXplOiBjb3Zlcjtcbn1cbi5zaGFwZWQtaW1hZ2UtaG9sZGVyIC5vdmVybGF5IHtcbiAgaGVpZ2h0OiA2NXZoO1xuICB3aWR0aDogMTAwJTtcbiAgYm9yZGVyLXJhZGl1czogMzQzJSAwIDAgMzQ3JS8xMTklIDAgMCAyNDUlO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDAsIDEyOCwgMTI4LCAwLjI1Nik7XG59XG5cbi5pbnB1dC1zdHlsZSB7XG4gIGJvcmRlcjogbm9uZTtcbiAgYm9yZGVyLXJhZGl1czogMTBweDtcbiAgd2lkdGg6IDcwJTtcbiAgYm94LXNoYWRvdzogMHB4IDhweCAyOHB4IC0ycHggI2NjYztcbiAgcGFkZGluZzogMjBweDtcbiAgcGFkZGluZy1yaWdodDogNTBweDtcbiAgcGFkZGluZy1sZWZ0OiA1MHB4O1xufVxuLmlucHV0LXN0eWxlOmZvY3VzIHtcbiAgb3V0bGluZTogbm9uZSAhaW1wb3J0YW50O1xufVxuXG4uc3RlcHMtc2VjdGlvbiB7XG4gIGJhY2tncm91bmQtY29sb3I6IHdoaXRlO1xuICBwYWRkaW5nOiAwcHggNjBweCAxMHB4O1xufVxuLnN0ZXBzLXNlY3Rpb24gLmhlYWRlciB7XG4gIGZvbnQtc2l6ZTogMjVweDtcbiAgZm9udC13ZWlnaHQ6IGJvbGQ7XG59XG4uc3RlcHMtc2VjdGlvbiAuc3RlcC1jb250YWluZXIge1xuICBtYXJnaW4tYm90dG9tOiAyMHB4O1xuICBjb2xvcjogIzQ5NTA1NztcbiAgZGlzcGxheTogZmxleDtcbiAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xuICBmbGV4LXdyYXA6IHdyYXA7XG59XG4uc3RlcHMtc2VjdGlvbiAub2ZmZXItd3JhcHBlciB7XG4gIGJhY2tncm91bmQtc2l6ZTogY29udGFpbjtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC13cmFwOiB3cmFwO1xuICBwYWRkaW5nOiAwJSAwJSAzJTtcbiAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xufVxuLnN0ZXBzLXNlY3Rpb24gLm9mZmVyLXdyYXBwZXIgLm9mZmVyIHtcbiAgZGlzcGxheTogZmxleDtcbiAgd2lkdGg6IDMwJTtcbiAgbWFyZ2luLWJvdHRvbTogNDBweDtcbn1cbi5zdGVwcy1zZWN0aW9uIC5vZmZlci13cmFwcGVyIC5pY29uIHtcbiAgd2lkdGg6IDQwcHg7XG4gIGhlaWdodDogNDBweDtcbiAgYm9yZGVyLXJhZGl1czogMTBweDtcbiAgYmFja2dyb3VuZDogIzAwOTY4ODJlIDAlIDAlIG5vLXJlcGVhdCBwYWRkaW5nLWJveDtcbiAgY29sb3I6IHRlYWw7XG4gIG1hcmdpbi1yaWdodDogMjBweDtcbiAgZGlzcGxheTogZmxleDtcbiAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG59XG4uc3RlcHMtc2VjdGlvbiAub2ZmZXItd3JhcHBlciAub2ZmZXItaGVhZGVyIHtcbiAgZm9udC13ZWlnaHQ6IGJvbGQ7XG4gIGZvbnQtc2l6ZTogMTZweDtcbiAgbWFyZ2luLWJvdHRvbTogMTBweDtcbn1cbi5zdGVwcy1zZWN0aW9uIC5vZmZlci13cmFwcGVyIC5vZmZlci10ZXh0IHtcbiAgY29sb3I6ICM2RjZENkQ7XG4gIGZvbnQtd2VpZ2h0OiBub3JtYWw7XG4gIGZvbnQtc2l6ZTogMTVweDtcbn1cblxuLmZlYXR1cmVzIHtcbiAgcGFkZGluZzogM3JlbSA2MHB4O1xufVxuLmZlYXR1cmVzIC5oZWFkZXIge1xuICBmb250LXNpemU6IDI1cHg7XG4gIGZvbnQtd2VpZ2h0OiBib2xkO1xuICBtYXJnaW4tYm90dG9tOiA0MHB4O1xufVxuLmZlYXR1cmVzIC5mZWF0dXJlLWNvbnRhaW5lciB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGp1c3RpZnktY29udGVudDogc3BhY2UtZXZlbmx5O1xuICBhbGlnbi1pdGVtczogc3RyZXRjaDtcbiAgZmxleC13cmFwOiB3cmFwO1xufVxuLmZlYXR1cmVzIC5mZWF0dXJlLWNvbnRhaW5lciAuZmVhdHVyZSB7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgd2lkdGg6IDI1JTtcbiAgcGFkZGluZzogODBweCAyMHB4O1xuICBib3JkZXItcmFkaXVzOiAxMHB4O1xuICBtYXJnaW4tYm90dG9tOiAzMHB4O1xuICB0cmFuc2l0aW9uOiBhbGwgMC40cztcbiAgYm94LXNoYWRvdzogMHB4IDNweCAzNXB4IDEycHggI2VlZTtcbn1cbi5mZWF0dXJlcyAuZmVhdHVyZS1jb250YWluZXIgLmZlYXR1cmUgLmljb24ge1xuICBtYXJnaW46IDEwcHg7XG59XG4uZmVhdHVyZXMgLmZlYXR1cmUtY29udGFpbmVyIC5mZWF0dXJlIC50aXRsZSB7XG4gIGZvbnQtc2l6ZTogeC1sYXJnZTtcbiAgZm9udC13ZWlnaHQ6IDYwMDtcbn1cblxuQGtleWZyYW1lcyBhbmltLTEge1xuICAwJSwgOC4zJSB7XG4gICAgbGVmdDogLTEwMCU7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICA4LjMlLCAyNSUge1xuICAgIGxlZnQ6IDUlO1xuICAgIG9wYWNpdHk6IDE7XG4gIH1cbiAgMzMuMzMlLCAxMDAlIHtcbiAgICBsZWZ0OiA0MCU7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxufVxuQGtleWZyYW1lcyBhbmltLTIge1xuICAwJSwgMzMuMzMlIHtcbiAgICBsZWZ0OiAtMTAwJTtcbiAgICBvcGFjaXR5OiAwO1xuICB9XG4gIDQxLjYzJSwgNTguMjklIHtcbiAgICBsZWZ0OiA1JTtcbiAgICBvcGFjaXR5OiAxO1xuICB9XG4gIDY2LjY2JSwgMTAwJSB7XG4gICAgbGVmdDogNDAlO1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbn1cbkBrZXlmcmFtZXMgYW5pbS0zIHtcbiAgMCUsIDY2LjY2JSB7XG4gICAgbGVmdDogLTEwMCU7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxuICA3NC45NiUsIDkxLjYyJSB7XG4gICAgbGVmdDogNSU7XG4gICAgb3BhY2l0eTogMTtcbiAgfVxuICAxMDAlIHtcbiAgICBsZWZ0OiA0MCU7XG4gICAgb3BhY2l0eTogMDtcbiAgfVxufVxuQG1lZGlhIHNjcmVlbiBhbmQgKG1heC13aWR0aDogNjg3cHgpIHtcbiAgLmxlZnQtaGVybyB7XG4gICAgd2lkdGg6IDEwMCU7XG4gICAgbWFyZ2luLXRvcDogNDBweDtcbiAgICBwYWRkaW5nLWxlZnQ6IDQwcHg7XG4gICAgbWFyZ2luLWJvdHRvbTogNDBweDtcbiAgfVxuICAubGVmdC1oZXJvIC5oMSB7XG4gICAgZm9udC1zaXplOiAxLjVyZW07XG4gIH1cblxuICAuc2VhcmNoLWJveCB7XG4gICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICB9XG4gIC5zZWFyY2gtYm94IC5zZWFyY2gtaWNvbiB7XG4gICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgIHRvcDogMjBweDtcbiAgICBsZWZ0OiAyJTtcbiAgfVxuICAuc2VhcmNoLWJveCAuc2VhcmNoLXN1Ym1pdCB7XG4gICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgIHRvcDogMTJweDtcbiAgICByaWdodDogMTMlO1xuICAgIGJhY2tncm91bmQtY29sb3I6IHRlYWw7XG4gICAgY29sb3I6IHdoaXRlO1xuICB9XG5cbiAgLnJpZ2h0LWhlcm8ge1xuICAgIHdpZHRoOiA1MCU7XG4gICAganVzdGlmeS1jb250ZW50OiBmbGV4LWVuZDtcbiAgICBkaXNwbGF5OiBub25lICFpbXBvcnRhbnQ7XG4gIH1cblxuICAuaW5wdXQtc3R5bGUge1xuICAgIGJvcmRlcjogbm9uZTtcbiAgICBib3JkZXItcmFkaXVzOiAxMHB4O1xuICAgIHdpZHRoOiA5MCU7XG4gICAgYm94LXNoYWRvdzogMHB4IDhweCAyOHB4IC0ycHggI2NjYztcbiAgICBwYWRkaW5nOiAyMHB4O1xuICAgIHBhZGRpbmctcmlnaHQ6IDUwcHg7XG4gICAgcGFkZGluZy1sZWZ0OiA1MHB4O1xuICB9XG4gIC5pbnB1dC1zdHlsZTpmb2N1cyB7XG4gICAgb3V0bGluZTogbm9uZSAhaW1wb3J0YW50O1xuICB9XG59XG5AbWVkaWEgc2NyZWVuIGFuZCAobWF4LXdpZHRoOiA4MzBweCkge1xuICAuaW5wdXQtc3R5bGUge1xuICAgIGJvcmRlcjogbm9uZTtcbiAgICBib3JkZXItcmFkaXVzOiAxMHB4O1xuICAgIHdpZHRoOiAxMDAlO1xuICAgIGJveC1zaGFkb3c6IDBweCA4cHggMjhweCAtMnB4ICNjY2M7XG4gICAgcGFkZGluZzogMjBweDtcbiAgICBwYWRkaW5nLXJpZ2h0OiA1MHB4O1xuICAgIHBhZGRpbmctbGVmdDogNTBweDtcbiAgfVxuICAuaW5wdXQtc3R5bGU6Zm9jdXMge1xuICAgIG91dGxpbmU6IG5vbmUgIWltcG9ydGFudDtcbiAgfVxuXG4gIC5zZWFyY2gtYm94IHtcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIH1cbiAgLnNlYXJjaC1ib3ggLnNlYXJjaC1pY29uIHtcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgdG9wOiAyMHB4O1xuICAgIGxlZnQ6IDIlO1xuICB9XG4gIC5zZWFyY2gtYm94IC5zZWFyY2gtc3VibWl0IHtcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgdG9wOiAxMnB4O1xuICAgIHJpZ2h0OiAyJTtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiB0ZWFsO1xuICAgIGNvbG9yOiB3aGl0ZTtcbiAgfVxuXG4gIC5zdGVwcy1zZWN0aW9uIHtcbiAgICBwYWRkaW5nOiAwcHggNjBweCAxMHB4O1xuICB9XG4gIC5zdGVwcy1zZWN0aW9uIC5oZWFkZXIge1xuICAgIGZvbnQtc2l6ZTogMjVweDtcbiAgICBmb250LXdlaWdodDogYm9sZDtcbiAgfVxuICAuc3RlcHMtc2VjdGlvbiAub2ZmZXItd3JhcHBlciAub2ZmZXIge1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgd2lkdGg6IDQ1JTtcbiAgICBtYXJnaW4tYm90dG9tOiA0MHB4O1xuICB9XG59XG5AbWVkaWEgc2NyZWVuIGFuZCAobWF4LXdpZHRoOiA4NjRweCkge1xuICAuZmVhdHVyZXMge1xuICAgIHBhZGRpbmc6IDNyZW0gNjBweDtcbiAgfVxuICAuZmVhdHVyZXMgLmhlYWRlciB7XG4gICAgZm9udC1zaXplOiAyNXB4O1xuICAgIGZvbnQtd2VpZ2h0OiBib2xkO1xuICAgIG1hcmdpbi1ib3R0b206IDQwcHg7XG4gIH1cbiAgLmZlYXR1cmVzIC5mZWF0dXJlLWNvbnRhaW5lciAuZmVhdHVyZSB7XG4gICAgd2lkdGg6IDQ5LjMlO1xuICB9XG4gIC5mZWF0dXJlcyAuZmVhdHVyZS1jb250YWluZXIgLmZlYXR1cmUgLnRpdGxlIHtcbiAgICBmb250LXNpemU6IHgtbGFyZ2U7XG4gICAgZm9udC13ZWlnaHQ6IDYwMDtcbiAgfVxufVxuQG1lZGlhIHNjcmVlbiBhbmQgKG1heC13aWR0aDogNTI1cHgpIHtcbiAgLnN0ZXBzLXNlY3Rpb24ge1xuICAgIHBhZGRpbmc6IDBweCAzMHB4IDEwcHggIWltcG9ydGFudDtcbiAgfVxuICAuc3RlcHMtc2VjdGlvbiAuaGVhZGVyIHtcbiAgICBmb250LXNpemU6IDIwcHg7XG4gICAgZm9udC13ZWlnaHQ6IGJvbGQ7XG4gIH1cbiAgLnN0ZXBzLXNlY3Rpb24gLm9mZmVyLXdyYXBwZXIgLm9mZmVyIHtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIHdpZHRoOiAxMDAlICFpbXBvcnRhbnQ7XG4gICAgbWFyZ2luLWJvdHRvbTogNDBweDtcbiAgfVxuXG4gIC5mZWF0dXJlcyB7XG4gICAgcGFkZGluZzogM3JlbSAzMHB4O1xuICB9XG4gIC5mZWF0dXJlcyAuaGVhZGVyIHtcbiAgICBmb250LXNpemU6IDI1cHg7XG4gICAgZm9udC13ZWlnaHQ6IGJvbGQ7XG4gICAgbWFyZ2luLWJvdHRvbTogNDBweDtcbiAgfVxuICAuZmVhdHVyZXMgLmZlYXR1cmUtY29udGFpbmVyIC5mZWF0dXJlIHtcbiAgICB3aWR0aDogMTAwJTtcbiAgfVxuICAuZmVhdHVyZXMgLmZlYXR1cmUtY29udGFpbmVyIC5mZWF0dXJlIC50aXRsZSB7XG4gICAgZm9udC1zaXplOiB4LWxhcmdlO1xuICAgIGZvbnQtd2VpZ2h0OiA2MDA7XG4gIH1cbn1cbmEge1xuICBjb2xvcjogIzZGNkQ2RDtcbiAgZm9udC13ZWlnaHQ6IDUwMDtcbn1cbmE6aG92ZXIge1xuICBjb2xvcjogdGVhbDtcbn1cblxuLmZvb3Qge1xuICBjb2xvcjogIzZGNkQ2RDtcbiAgZm9udC1zaXplOiAxNnB4O1xuICBtaW4taGVpZ2h0OiAyM3JlbTtcbiAgZGlzcGxheTogZmxleDtcbiAgYmFja2dyb3VuZDogI2ZmZjtcbiAgcGFkZGluZzogMjBweCAwIDA7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2Vlbjtcbn1cbi5mb290IC53aWRnZXQge1xuICBkaXNwbGF5OiBmbGV4O1xuICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWFyb3VuZDtcbiAgcGFkZGluZzogMCAxMCU7XG59XG4uZm9vdCAud2lkZ2V0IFtjbGFzcyo9d2lkZ2V0LV0ge1xuICB3aWR0aDogMjUlO1xuICBtYXJnaW4tYm90dG9tOiAycmVtO1xufVxuLmZvb3QgLndpZGdldCAud2lkZ2V0LTEge1xuICB3aWR0aDogNDAlICFpbXBvcnRhbnQ7XG4gIG1hcmdpbi1yaWdodDogNDVweDtcbn1cbi5mb290IC53aWRnZXQgLmhlYWRlciB7XG4gIGZvbnQtc2l6ZTogMjBweDtcbiAgY29sb3I6IGJsYWNrO1xuICBmb250LXdlaWdodDogYm9sZDtcbn1cbi5mb290IC53aWRnZXQgbGkge1xuICBsaXN0LXN0eWxlOiBub25lO1xuICBtYXJnaW4tYm90dG9tOiAwLjVlbTtcbiAgY3Vyc29yOiBwb2ludGVyO1xufVxuLmZvb3QgLndpZGdldCBsaSAubWRpIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICByaWdodDogMDtcbiAgdHJhbnNpdGlvbjogMC4zcyBlYXNlLWluLW91dDtcbn1cbi5mb290IC53aWRnZXQgbGk6aG92ZXIgLm1kaSB7XG4gIHJpZ2h0OiAtNnB4O1xufVxuLmZvb3QgLnBhcnRuZXIge1xuICB3aWR0aDogMjAwcHg7XG59XG4uZm9vdCAuY29weXJpZ2h0IHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgdGV4dC1hbGlnbjogY2VudGVyO1xuICBwYWRkaW5nOiAzMHB4IDIwcHg7XG4gIGNvbG9yOiAjZmZmO1xuICBmb250LXNpemU6IDE1cHg7XG4gIGJhY2tncm91bmQ6IHRlYWw7XG59XG4uZm9vdCAuY29weXJpZ2h0IGEge1xuICBjb2xvcjogI2ZmZjtcbn1cbi5mb290IC5jb3B5cmlnaHQgYTpob3ZlciB7XG4gIGNvbG9yOiB3aGl0ZXNtb2tlO1xufVxuXG4uZm9vdGljb24ge1xuICBib3JkZXItcmFkaXVzOiA1MCU7XG4gIHdpZHRoOiAzNXB4O1xuICBoZWlnaHQ6IDM1cHg7XG4gIGNvbG9yOiAjZmZmO1xuICBmb250LXNpemU6IDIwcHg7XG4gIG1hcmdpbi1yaWdodDogMTBweDtcbiAgZGlzcGxheTogZmxleDtcbiAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG59XG5cbi5zb2NpYWwtd3JhcHBlciAucGFyZW50IHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICBtYXJnaW4tcmlnaHQ6IDEwcHg7XG59XG4uc29jaWFsLXdyYXBwZXIgLnNvY2lhbC1jaXJjbGUge1xuICB3aWR0aDogMzBweDtcbiAgaGVpZ2h0OiAzMHB4O1xuICBib3JkZXItcmFkaXVzOiA1MCU7XG4gIGJhY2tncm91bmQ6ICNlNWU1ZTUgMCUgMCUgbm8tcmVwZWF0IHBhZGRpbmctYm94O1xuICB0cmFuc2l0aW9uOiBhbGwgMC41cztcbiAgZGlzcGxheTogZmxleDtcbiAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG59XG4uc29jaWFsLXdyYXBwZXIgLnNvY2lhbC1jaXJjbGU6aG92ZXIge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjMDA4MDgwMzY7XG59XG5cbkBtZWRpYSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6IDEwMjNweCkge1xuICAuZm9vdCB7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBwYWRkaW5nOiAyMHB4IDAgMDtcbiAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICAgIGZsZXgtd3JhcDogd3JhcDtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgfVxuICAuZm9vdCAud2lkZ2V0IHtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGZsZXgtd3JhcDogd3JhcDtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWFyb3VuZDtcbiAgICBwYWRkaW5nOiAwIDEwJTtcbiAgfVxuICAuZm9vdCAud2lkZ2V0IFtjbGFzcyo9d2lkZ2V0LV0ge1xuICAgIHdpZHRoOiAyNSU7XG4gICAgbWFyZ2luLWJvdHRvbTogMnJlbTtcbiAgfVxuICAuZm9vdCAud2lkZ2V0IC53aWRnZXQtMSB7XG4gICAgd2lkdGg6IDQwJSAhaW1wb3J0YW50O1xuICB9XG4gIC5mb290IC5wYXJ0bmVyIHtcbiAgICB3aWR0aDogMTgwcHg7XG4gIH1cbiAgLmZvb3QgLmNvcHlyaWdodCB7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgfVxufVxuQG1lZGlhIHNjcmVlbiBhbmQgKG1heC13aWR0aDogNzY4cHgpIHtcbiAgLmZvb3Qge1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgcGFkZGluZzogMjBweCAwIDA7XG4gICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgICBmbGV4LXdyYXA6IHdyYXA7XG4gICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gIH1cbiAgLmZvb3QgLndpZGdldCB7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBmbGV4LXdyYXA6IHdyYXA7XG4gICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1hcm91bmQ7XG4gICAgcGFkZGluZzogMCAxMCU7XG4gIH1cbiAgLmZvb3QgLndpZGdldCBbY2xhc3MqPXdpZGdldC1dIHtcbiAgICB3aWR0aDogMTAwJSAhaW1wb3J0YW50O1xuICAgIG1hcmdpbi1ib3R0b206IDJyZW07XG4gIH1cbiAgLmZvb3QgLnBhcnRuZXIge1xuICAgIHdpZHRoOiAxNjBweDtcbiAgfVxuICAuZm9vdCAuY29weXJpZ2h0IHtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gICAgdGV4dC1hbGlnbjogY2VudGVyO1xuICB9XG59XG5AbWVkaWEgc2NyZWVuIGFuZCAobWF4LXdpZHRoOiA2MDBweCkge1xuICAuc3RvcmUtc2VjdGlvbiB7XG4gICAgd2lkdGg6IDkwJTtcbiAgICBtYXJnaW46IDAgYXV0bztcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjRkFGOEZGO1xuICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgICBwYWRkaW5nOiA0MHB4IDEwJSAhaW1wb3J0YW50O1xuICB9XG4gIC5zdG9yZS1zZWN0aW9uIC5zdG9yZS1oZWFkZXIge1xuICAgIGZvbnQtc2l6ZTogMjVweDtcbiAgICBmb250LXdlaWdodDogNjAwO1xuICAgIG1hcmdpbi1ib3R0b206IDIwcHg7XG4gIH1cbiAgLnN0b3JlLXNlY3Rpb24gLnN0b3JlLXdyYXBwZXIge1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1ldmVubHk7XG4gICAgbWFyZ2luLXRvcDogMzBweDtcbiAgfVxuICAuc3RvcmUtc2VjdGlvbiAuY2lyY2xlIHtcbiAgICB3aWR0aDogNTBweDtcbiAgICBoZWlnaHQ6IDUwcHg7XG4gICAgYm9yZGVyLXJhZGl1czogNTAlO1xuICAgIGJhY2tncm91bmQ6ICNFMEQ2RkY7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuICB9XG4gIC5zdG9yZS1zZWN0aW9uIC50aXRsZSB7XG4gICAgdGV4dC1hbGlnbjogY2VudGVyO1xuICAgIGZvbnQtc2l6ZTogMTNweDtcbiAgICBjb2xvcjogYmxhY2s7XG4gIH1cblxuICAuZm9vdCB7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBwYWRkaW5nOiAyMHB4IDAgMDtcbiAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICAgIGZsZXgtd3JhcDogd3JhcDtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgfVxuICAuZm9vdCAud2lkZ2V0IHtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGZsZXgtd3JhcDogd3JhcDtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWFyb3VuZDtcbiAgICBwYWRkaW5nOiAwIDEwJTtcbiAgfVxuICAuZm9vdCAud2lkZ2V0IFtjbGFzcyo9d2lkZ2V0LV0ge1xuICAgIHdpZHRoOiAxMDAlICFpbXBvcnRhbnQ7XG4gICAgbWFyZ2luLWJvdHRvbTogMnJlbTtcbiAgfVxuICAuZm9vdCAud2lkZ2V0IC53aWRnZXQtMSB7XG4gICAgbWFyZ2luLXJpZ2h0OiAwcHg7XG4gIH1cbiAgLmZvb3QgLnBhcnRuZXIge1xuICAgIHdpZHRoOiAxNjBweDtcbiAgfVxuICAuZm9vdCAuY29weXJpZ2h0IHtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gICAgdGV4dC1hbGlnbjogY2VudGVyO1xuICB9XG59Il19 */");

/***/ }),

/***/ "./src/app/components/core/landing-page/landing-page.component.ts":
/*!************************************************************************!*\
  !*** ./src/app/components/core/landing-page/landing-page.component.ts ***!
  \************************************************************************/
/*! exports provided: LandingPageComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "LandingPageComponent", function() { return LandingPageComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _angular_material__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/material */ "./node_modules/@angular/material/esm2015/material.js");
/* harmony import */ var src_app_api_app_main_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! src/app/api/app_main_service */ "./src/app/api/app_main_service.ts");
/* harmony import */ var src_app_helpers_utilities__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! src/app/helpers/utilities */ "./src/app/helpers/utilities.ts");






let LandingPageComponent = class LandingPageComponent {
    constructor(router, dialog, mainApiService) {
        this.router = router;
        this.dialog = dialog;
        this.mainApiService = mainApiService;
        this.isVerifying = false;
        this.app_key = '';
        this.year = src_app_helpers_utilities__WEBPACK_IMPORTED_MODULE_5__["Util"].currentYear;
    }
    ngOnInit() {
    }
    verifyNumber() {
        if (this.app_key == '') {
            this.errmsg = "Enter valid Application number";
            return;
        }
        this.isVerifying = true;
        this.mainApiService.getApplicationService().checkDocumentVerification(this.app_key.trim())
            .subscribe(res => {
            if (res.message == "Success") {
                this.isVerifying = false;
                this.router.navigateByUrl(`verify/${this.app_key}`);
                this.app_key = "";
                this.errmsg = "";
            }
            else if (res.message == "Failed") {
                this.isVerifying = false;
                this.errmsg = res['data'];
                setTimeout(() => {
                    this.errmsg = "";
                }, 8000);
            }
            else {
                this.isVerifying = false;
                this.app_key = "";
                this.errmsg = "Error processing request,check your network and try again!!!";
                setTimeout(() => {
                    this.errmsg = "";
                }, 8000);
            }
        }, err => {
            this.app_key = "";
            this.isVerifying = false;
            this.errmsg = "Error processing request,check your network and try again!!!";
            setTimeout(() => {
                this.errmsg = "";
            }, 10000);
        });
        // this.isVerifying = true
        // setTimeout( () => {
        //   this.router.navigateByUrl('verify/ESS42372020')
        // }, 2000)
    }
};
LandingPageComponent.ctorParameters = () => [
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"] },
    { type: _angular_material__WEBPACK_IMPORTED_MODULE_3__["MatDialog"] },
    { type: src_app_api_app_main_service__WEBPACK_IMPORTED_MODULE_4__["MainService"] }
];
LandingPageComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-landing-page',
        template: tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! raw-loader!./landing-page.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/landing-page/landing-page.component.html")).default,
        styles: [tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ./landing-page.component.scss */ "./src/app/components/core/landing-page/landing-page.component.scss")).default]
    })
], LandingPageComponent);



/***/ }),

/***/ "./src/app/components/core/nav-bar/nav-bar.component.scss":
/*!****************************************************************!*\
  !*** ./src/app/components/core/nav-bar/nav-bar.component.scss ***!
  \****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".mat-toolbar {\n  position: fixed !important;\n  top: 0;\n  left: 0;\n  display: -webkit-box;\n  display: flex;\n  z-index: 10;\n  padding-left: 30px !important;\n  padding: 40px 20px;\n}\n.mat-toolbar.style1 {\n  -webkit-transition: all 0.3s;\n  transition: all 0.3s;\n  background-color: #fff;\n}\n.mat-toolbar.style2 {\n  -webkit-transition: all 0.3s;\n  transition: all 0.3s;\n  background-color: rgba(255, 255, 255, 0.8);\n  border-bottom: thin solid #eee;\n}\n.active-link {\n  background-color: #8acece5c;\n  color: teal;\n}\n.mobile-menu {\n  display: none !important;\n}\n.web-menu {\n  display: -webkit-box !important;\n  display: flex !important;\n}\n.fill-remaining-space {\n  -webkit-box-flex: 1;\n          flex: 1 1 auto;\n}\n.logo {\n  width: 230px !important;\n}\n.list {\n  padding: 10px 20px;\n  list-style: none;\n  cursor: pointer;\n}\n.list:hover {\n  background: #eeeeee;\n}\n.list.notif-no {\n  color: teal;\n}\n@media screen and (max-width: 687px) {\n  .mobile-menu {\n    display: block !important;\n  }\n\n  .web-menu {\n    display: none !important;\n  }\n\n  .logo {\n    width: 180px !important;\n  }\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tcG9uZW50cy9jb3JlL25hdi1iYXIvQzpcXE15c3BhY2VcXENvbXNvZnQgTGltaXRlZFxccHJvamVjdHNcXGNhYnNvbF9hdHRlc3RhdGlvbl91aS9zcmNcXGFwcFxcY29tcG9uZW50c1xcY29yZVxcbmF2LWJhclxcbmF2LWJhci5jb21wb25lbnQuc2NzcyIsInNyYy9hcHAvY29tcG9uZW50cy9jb3JlL25hdi1iYXIvbmF2LWJhci5jb21wb25lbnQuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNFLDBCQUFBO0VBQ0EsTUFBQTtFQUNBLE9BQUE7RUFDQSxvQkFBQTtFQUFBLGFBQUE7RUFDQSxXQUFBO0VBQ0EsNkJBQUE7RUFDQSxrQkFBQTtBQ0NGO0FERUU7RUFDRSw0QkFBQTtFQUFBLG9CQUFBO0VBQ0Esc0JBQUE7QUNBSjtBREdFO0VBQ0UsNEJBQUE7RUFBQSxvQkFBQTtFQUNBLDBDQUFBO0VBQ0EsOEJBQUE7QUNESjtBRE1BO0VBQ0UsMkJBQUE7RUFDQSxXQUFBO0FDSEY7QURNQTtFQUNFLHdCQUFBO0FDSEY7QURNQTtFQUNFLCtCQUFBO0VBQUEsd0JBQUE7QUNIRjtBRE1BO0VBQ0UsbUJBQUE7VUFBQSxjQUFBO0FDSEY7QURNQTtFQUNFLHVCQUFBO0FDSEY7QURNQTtFQUNFLGtCQUFBO0VBQW1CLGdCQUFBO0VBQ25CLGVBQUE7QUNGRjtBREdFO0VBQ0UsbUJBQUE7QUNESjtBREdFO0VBQ0UsV0FBQTtBQ0RKO0FETUE7RUFDRTtJQUNFLHlCQUFBO0VDSEY7O0VETUE7SUFDRSx3QkFBQTtFQ0hGOztFRE1BO0lBQ0UsdUJBQUE7RUNIRjtBQUNGIiwiZmlsZSI6InNyYy9hcHAvY29tcG9uZW50cy9jb3JlL25hdi1iYXIvbmF2LWJhci5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi5tYXQtdG9vbGJhciB7XHJcbiAgcG9zaXRpb246IGZpeGVkICFpbXBvcnRhbnQ7XHJcbiAgdG9wOiAwO1xyXG4gIGxlZnQ6IDA7XHJcbiAgZGlzcGxheTogZmxleDtcclxuICB6LWluZGV4OiAxMDtcclxuICBwYWRkaW5nLWxlZnQ6IDMwcHghaW1wb3J0YW50O1xyXG4gIHBhZGRpbmc6IDQwcHggMjBweDtcclxuICAvLyBwb3NpdGlvbjogLXdlYmtpdC1zdGlja3k7IC8qIEZvciBtYWNPUy9pT1MgU2FmYXJpICovXHJcblxyXG4gICYuc3R5bGUxIHtcclxuICAgIHRyYW5zaXRpb246IGFsbCAwLjNzO1xyXG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcclxuICB9XHJcbiAgXHJcbiAgJi5zdHlsZTIge1xyXG4gICAgdHJhbnNpdGlvbjogYWxsIDAuM3M7XHJcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKCRjb2xvcjogI2ZmZmZmZiwgJGFscGhhOiAwLjgpO1xyXG4gICAgYm9yZGVyLWJvdHRvbTogdGhpbiBzb2xpZCAjZWVlO1xyXG4gICAgLy8gY29sb3I6ICMxNzIyM2U7XHJcbiAgfVxyXG59XHJcblxyXG4uYWN0aXZlLWxpbmt7XHJcbiAgYmFja2dyb3VuZC1jb2xvcjogIzhhY2VjZTVjO1xyXG4gIGNvbG9yOiB0ZWFsO1xyXG59XHJcblxyXG4ubW9iaWxlLW1lbnV7XHJcbiAgZGlzcGxheTogbm9uZSFpbXBvcnRhbnQ7XHJcbn1cclxuICBcclxuLndlYi1tZW51e1xyXG4gIGRpc3BsYXk6IGZsZXghaW1wb3J0YW50O1xyXG59XHJcblxyXG4uZmlsbC1yZW1haW5pbmctc3BhY2V7XHJcbiAgZmxleDoxIDEgYXV0bztcclxufVxyXG4gIFxyXG4ubG9nb3tcclxuICB3aWR0aDoyMzBweCFpbXBvcnRhbnQ7XHJcbn1cclxuXHJcbi5saXN0e1xyXG4gIHBhZGRpbmc6MTBweCAyMHB4OyBsaXN0LXN0eWxlOiBub25lO1xyXG4gIGN1cnNvcjogcG9pbnRlcjtcclxuICAmOmhvdmVye1xyXG4gICAgYmFja2dyb3VuZDogI2VlZWVlZTtcclxuICB9XHJcbiAgJi5ub3RpZi1ub3tcclxuICAgIGNvbG9yOnRlYWw7XHJcbiAgfVxyXG59IFxyXG5cclxuXHJcbkBtZWRpYSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6Njg3cHgpe1xyXG4gIC5tb2JpbGUtbWVudXtcclxuICAgIGRpc3BsYXk6IGJsb2NrIWltcG9ydGFudDtcclxuICB9XHJcblxyXG4gIC53ZWItbWVudXtcclxuICAgIGRpc3BsYXk6IG5vbmUhaW1wb3J0YW50O1xyXG4gIH1cclxuXHJcbiAgLmxvZ297XHJcbiAgICB3aWR0aDoxODBweCFpbXBvcnRhbnQ7XHJcbiAgfVxyXG59IiwiLm1hdC10b29sYmFyIHtcbiAgcG9zaXRpb246IGZpeGVkICFpbXBvcnRhbnQ7XG4gIHRvcDogMDtcbiAgbGVmdDogMDtcbiAgZGlzcGxheTogZmxleDtcbiAgei1pbmRleDogMTA7XG4gIHBhZGRpbmctbGVmdDogMzBweCAhaW1wb3J0YW50O1xuICBwYWRkaW5nOiA0MHB4IDIwcHg7XG59XG4ubWF0LXRvb2xiYXIuc3R5bGUxIHtcbiAgdHJhbnNpdGlvbjogYWxsIDAuM3M7XG4gIGJhY2tncm91bmQtY29sb3I6ICNmZmY7XG59XG4ubWF0LXRvb2xiYXIuc3R5bGUyIHtcbiAgdHJhbnNpdGlvbjogYWxsIDAuM3M7XG4gIGJhY2tncm91bmQtY29sb3I6IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC44KTtcbiAgYm9yZGVyLWJvdHRvbTogdGhpbiBzb2xpZCAjZWVlO1xufVxuXG4uYWN0aXZlLWxpbmsge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjOGFjZWNlNWM7XG4gIGNvbG9yOiB0ZWFsO1xufVxuXG4ubW9iaWxlLW1lbnUge1xuICBkaXNwbGF5OiBub25lICFpbXBvcnRhbnQ7XG59XG5cbi53ZWItbWVudSB7XG4gIGRpc3BsYXk6IGZsZXggIWltcG9ydGFudDtcbn1cblxuLmZpbGwtcmVtYWluaW5nLXNwYWNlIHtcbiAgZmxleDogMSAxIGF1dG87XG59XG5cbi5sb2dvIHtcbiAgd2lkdGg6IDIzMHB4ICFpbXBvcnRhbnQ7XG59XG5cbi5saXN0IHtcbiAgcGFkZGluZzogMTBweCAyMHB4O1xuICBsaXN0LXN0eWxlOiBub25lO1xuICBjdXJzb3I6IHBvaW50ZXI7XG59XG4ubGlzdDpob3ZlciB7XG4gIGJhY2tncm91bmQ6ICNlZWVlZWU7XG59XG4ubGlzdC5ub3RpZi1ubyB7XG4gIGNvbG9yOiB0ZWFsO1xufVxuXG5AbWVkaWEgc2NyZWVuIGFuZCAobWF4LXdpZHRoOiA2ODdweCkge1xuICAubW9iaWxlLW1lbnUge1xuICAgIGRpc3BsYXk6IGJsb2NrICFpbXBvcnRhbnQ7XG4gIH1cblxuICAud2ViLW1lbnUge1xuICAgIGRpc3BsYXk6IG5vbmUgIWltcG9ydGFudDtcbiAgfVxuXG4gIC5sb2dvIHtcbiAgICB3aWR0aDogMTgwcHggIWltcG9ydGFudDtcbiAgfVxufSJdfQ== */");

/***/ }),

/***/ "./src/app/components/core/nav-bar/nav-bar.component.ts":
/*!**************************************************************!*\
  !*** ./src/app/components/core/nav-bar/nav-bar.component.ts ***!
  \**************************************************************/
/*! exports provided: NavBarComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NavBarComponent", function() { return NavBarComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_material__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/material */ "./node_modules/@angular/material/esm2015/material.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _auth_components_app_login_app_login_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../auth-components/app-login/app-login.component */ "./src/app/components/auth-components/app-login/app-login.component.ts");
/* harmony import */ var _angular_cdk_layout__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/cdk/layout */ "./node_modules/@angular/cdk/esm2015/layout.js");






let NavBarComponent = class NavBarComponent {
    constructor(breakpointObserver, router, dialog) {
        this.breakpointObserver = breakpointObserver;
        this.router = router;
        this.dialog = dialog;
        this.scrollPosition = null;
        this.isScroll = false;
        this.isExtraSmall = this.breakpointObserver.observe(_angular_cdk_layout__WEBPACK_IMPORTED_MODULE_5__["Breakpoints"].XSmall);
        this.scrolling = false;
    }
    ngOnInit() {
    }
    onScrollEvent($event) {
        if (!this.scrolling) {
            this.scrolling = true;
        }
        this.scrollPosition = window.scrollY;
        if (this.scrollPosition < 50) {
            this.isScroll = true;
        }
        else {
            this.isScroll = false;
        }
    }
    openLogin(value) {
        const mydialog = this.dialog.open(_auth_components_app_login_app_login_component__WEBPACK_IMPORTED_MODULE_4__["AppLoginComponent"], {
            minWidth: '70%',
            // minHeight: '50%',
            maxWidth: '100vw',
            maxHeight: '100vh',
            data: value
        });
        // const dialogConfig = new MatDialogConfig();
        // dialogConfig.disableClose = false;
        // dialogConfig.autoFocus = false;
        // dialogConfig.maxHeight = '95vh';
        // dialogConfig.minWidth = '60%';
        // dialogConfig.data = value
        const smallDialogSubscription = this.isExtraSmall.subscribe(result => {
            if (result.matches) {
                mydialog.updateSize('100%', '100%');
            }
            else {
                mydialog.updateSize('70%');
            }
        });
        mydialog.afterClosed().subscribe(result => {
            smallDialogSubscription.unsubscribe();
        });
        // this.dialog.open(AppLoginComponent, dialogConfig);
    }
};
NavBarComponent.ctorParameters = () => [
    { type: _angular_cdk_layout__WEBPACK_IMPORTED_MODULE_5__["BreakpointObserver"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"] },
    { type: _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatDialog"] }
];
tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["HostListener"])('window:scroll', ['$event'])
], NavBarComponent.prototype, "onScrollEvent", null);
NavBarComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-nav-bar',
        template: tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! raw-loader!./nav-bar.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/nav-bar/nav-bar.component.html")).default,
        styles: [tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ./nav-bar.component.scss */ "./src/app/components/core/nav-bar/nav-bar.component.scss")).default]
    })
], NavBarComponent);



/***/ }),

/***/ "./src/app/components/core/verify-page/verify-page.component.scss":
/*!************************************************************************!*\
  !*** ./src/app/components/core/verify-page/verify-page.component.scss ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".container-main {\n  position: relative;\n  min-height: 100vh;\n}\n.container-main .overlay {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-pack: center;\n          justify-content: center;\n  -webkit-box-align: center;\n          align-items: center;\n  min-height: 100vh;\n}\n.full-width-80 {\n  width: 70%;\n}\n.form-container {\n  background: white;\n  padding: 20px 20px 80px;\n  border-radius: 10px;\n}\n.welcome-msg {\n  font-size: 18px;\n  text-align: center;\n  font-weight: 300;\n  margin: 30px auto 20px;\n}\n[class*=col-] {\n  padding: 0;\n}\n[class*=row] {\n  margin: 0;\n}\n.passport {\n  top: 50%;\n}\n.letter-container {\n  border: 1px solid #ccc;\n  margin: 60px auto;\n  width: 90%;\n  padding: 20px 0;\n}\n.applicant {\n  box-shadow: 0 0 5px 1px #ccc;\n  padding: 30px;\n  margin: 30px 0;\n}\n.slip-loader {\n  display: -webkit-box;\n  display: flex;\n  -webkit-box-pack: center;\n          justify-content: center;\n  -webkit-box-align: center;\n          align-items: center;\n}\n.left-form-el {\n  font-weight: 500;\n}\n.right-form-el {\n  font-weight: bold;\n}\n.confirm-container {\n  padding: 15px;\n}\n.form-container {\n  padding: 20px 0;\n  width: 80%;\n  margin: 20px auto;\n}\n@media screen and (max-width: 500px) {\n  .form-container {\n    padding: 0;\n    width: 100%;\n    margin: 0;\n  }\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tcG9uZW50cy9jb3JlL3ZlcmlmeS1wYWdlL0M6XFxNeXNwYWNlXFxDb21zb2Z0IExpbWl0ZWRcXHByb2plY3RzXFxjYWJzb2xfYXR0ZXN0YXRpb25fdWkvc3JjXFxhcHBcXGNvbXBvbmVudHNcXGNvcmVcXHZlcmlmeS1wYWdlXFx2ZXJpZnktcGFnZS5jb21wb25lbnQuc2NzcyIsInNyYy9hcHAvY29tcG9uZW50cy9jb3JlL3ZlcmlmeS1wYWdlL3ZlcmlmeS1wYWdlLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0Usa0JBQUE7RUFDQSxpQkFBQTtBQ0NGO0FER0U7RUFDRSxvQkFBQTtFQUFBLGFBQUE7RUFDQSx3QkFBQTtVQUFBLHVCQUFBO0VBQ0EseUJBQUE7VUFBQSxtQkFBQTtFQUVBLGlCQUFBO0FDRko7QURNQTtFQUNFLFVBQUE7QUNIRjtBRE1BO0VBQ0ksaUJBQUE7RUFHQSx1QkFBQTtFQUlBLG1CQUFBO0FDUko7QURZQTtFQUNJLGVBQUE7RUFDQSxrQkFBQTtFQUNBLGdCQUFBO0VBQ0Esc0JBQUE7QUNUSjtBRGdCQTtFQUNJLFVBQUE7QUNiSjtBRGVFO0VBQ0UsU0FBQTtBQ1pKO0FEY0U7RUFDRSxRQUFBO0FDWEo7QURjRTtFQUNFLHNCQUFBO0VBQ0EsaUJBQUE7RUFDQSxVQUFBO0VBQ0EsZUFBQTtBQ1hKO0FEZUU7RUFDSSw0QkFBQTtFQUNBLGFBQUE7RUFDQSxjQUFBO0FDWk47QURlRTtFQUNFLG9CQUFBO0VBQUEsYUFBQTtFQUNBLHdCQUFBO1VBQUEsdUJBQUE7RUFDQSx5QkFBQTtVQUFBLG1CQUFBO0FDWko7QURlRTtFQUNFLGdCQUFBO0FDWko7QURlRztFQUNDLGlCQUFBO0FDWko7QURlRTtFQUNFLGFBQUE7QUNaSjtBRGVFO0VBQ0UsZUFBQTtFQUNBLFVBQUE7RUFDQSxpQkFBQTtBQ1pKO0FEZUU7RUFFRTtJQUNFLFVBQUE7SUFDQSxXQUFBO0lBQ0EsU0FBQTtFQ2JKO0FBQ0YiLCJmaWxlIjoic3JjL2FwcC9jb21wb25lbnRzL2NvcmUvdmVyaWZ5LXBhZ2UvdmVyaWZ5LXBhZ2UuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyIuY29udGFpbmVyLW1haW57XHJcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xyXG4gIG1pbi1oZWlnaHQ6IDEwMHZoO1xyXG4gIC8vIGJhY2tncm91bmQtY29sb3I6IHdoaXRlO1xyXG4gIC8vIGJhY2tncm91bmQ6IHVybChcIi4uLy4uLy4uL2Fzc2V0cy9pbWFnZXMvYWdyaWMxLmpwZ1wiKSBjZW50ZXIgYm90dG9tIG5vLXJlcGVhdDtcclxuICAvLyBiYWNrZ3JvdW5kLXNpemU6IGNvdmVyO1xyXG4gIC5vdmVybGF5e1xyXG4gICAgZGlzcGxheTogZmxleDtcclxuICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xyXG4gICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcclxuICAgIC8vIGJhY2tncm91bmQ6ICNmZmY7XHJcbiAgICBtaW4taGVpZ2h0OiAxMDB2aDtcclxuICB9XHJcbn1cclxuXHJcbi5mdWxsLXdpZHRoLTgwe1xyXG4gIHdpZHRoOjcwJTtcclxufVxyXG5cclxuLmZvcm0tY29udGFpbmVye1xyXG4gICAgYmFja2dyb3VuZDogd2hpdGU7XHJcbiAgICAvLyBiYWNrZ3JvdW5kOiB1cmwoJy4uLy4uLy4uLy4uL2Fzc2V0cy9pbWFnZXMvYm9va2JnLmpwZycpIG5vLXJlcGVhdCBjZW50ZXI7XHJcbiAgICAvLyBib3gtc2hhZG93OiBpbnNldCAwIDAgMCA1MHZ3IHJnYmEoMCwxMjgsMTI4LDAuOCk7XHJcbiAgICBwYWRkaW5nOiAyMHB4IDIwcHggODBweDtcclxuICAgIC8vIHdpZHRoOjM1MHB4O1xyXG4gICAgLy8gY29sb3I6ICNmZmY7XHJcbiAgICAvLyBtaW4taGVpZ2h0OiA3MHZoO1xyXG4gICAgYm9yZGVyLXJhZGl1czogMTBweDtcclxuICAgIC8vIGJveC1zaGFkb3c6IDBweCAwcHggMTBweCAtMnB4ICNjY2M7XHJcbn1cclxuXHJcbi53ZWxjb21lLW1zZ3tcclxuICAgIGZvbnQtc2l6ZTogMThweDtcclxuICAgIHRleHQtYWxpZ246IGNlbnRlcjtcclxuICAgIGZvbnQtd2VpZ2h0OiAzMDA7XHJcbiAgICBtYXJnaW46MzBweCBhdXRvIDIwcHg7XHJcbn1cclxuXHJcblxyXG5cclxuLy8gICBTbGlwIHN0eWxpbmdcclxuXHJcbltjbGFzcyo9J2NvbC0nXSB7XHJcbiAgICBwYWRkaW5nOiAwO1xyXG4gIH1cclxuICBbY2xhc3MqPSdyb3cnXSB7XHJcbiAgICBtYXJnaW46IDA7XHJcbiAgfVxyXG4gIC5wYXNzcG9ydCB7XHJcbiAgICB0b3A6IDUwJTtcclxuICB9XHJcbiAgXHJcbiAgLmxldHRlci1jb250YWluZXJ7XHJcbiAgICBib3JkZXI6IDFweCBzb2xpZCAjY2NjO1xyXG4gICAgbWFyZ2luOiA2MHB4IGF1dG87XHJcbiAgICB3aWR0aDogOTAlO1xyXG4gICAgcGFkZGluZzoyMHB4IDBcclxuICB9XHJcbiAgXHJcbiAgXHJcbiAgLmFwcGxpY2FudHtcclxuICAgICAgYm94LXNoYWRvdzogMCAwIDVweCAxcHggI2NjYztcclxuICAgICAgcGFkZGluZzogMzBweDtcclxuICAgICAgbWFyZ2luOiAzMHB4IDA7XHJcbiAgfVxyXG4gIFxyXG4gIC5zbGlwLWxvYWRlcntcclxuICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcclxuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XHJcbiAgfVxyXG5cclxuICAubGVmdC1mb3JtLWVse1xyXG4gICAgZm9udC13ZWlnaHQ6IDUwMDtcclxuICB9XHJcblxyXG4gICAucmlnaHQtZm9ybS1lbHtcclxuICAgIGZvbnQtd2VpZ2h0OiBib2xkO1xyXG4gIH1cclxuXHJcbiAgLmNvbmZpcm0tY29udGFpbmVye1xyXG4gICAgcGFkZGluZzogMTVweDtcclxuICB9XHJcblxyXG4gIC5mb3JtLWNvbnRhaW5lcntcclxuICAgIHBhZGRpbmc6IDIwcHggMDtcclxuICAgIHdpZHRoOiA4MCU7XHJcbiAgICBtYXJnaW46IDIwcHggYXV0bztcclxuICB9XHJcblxyXG4gIEBtZWRpYSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6NTAwcHgpe1xyXG5cclxuICAgIC5mb3JtLWNvbnRhaW5lcntcclxuICAgICAgcGFkZGluZzogMDtcclxuICAgICAgd2lkdGg6IDEwMCU7XHJcbiAgICAgIG1hcmdpbjogMDtcclxuICAgIH1cclxuICB9IiwiLmNvbnRhaW5lci1tYWluIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBtaW4taGVpZ2h0OiAxMDB2aDtcbn1cbi5jb250YWluZXItbWFpbiAub3ZlcmxheSB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICBhbGlnbi1pdGVtczogY2VudGVyO1xuICBtaW4taGVpZ2h0OiAxMDB2aDtcbn1cblxuLmZ1bGwtd2lkdGgtODAge1xuICB3aWR0aDogNzAlO1xufVxuXG4uZm9ybS1jb250YWluZXIge1xuICBiYWNrZ3JvdW5kOiB3aGl0ZTtcbiAgcGFkZGluZzogMjBweCAyMHB4IDgwcHg7XG4gIGJvcmRlci1yYWRpdXM6IDEwcHg7XG59XG5cbi53ZWxjb21lLW1zZyB7XG4gIGZvbnQtc2l6ZTogMThweDtcbiAgdGV4dC1hbGlnbjogY2VudGVyO1xuICBmb250LXdlaWdodDogMzAwO1xuICBtYXJnaW46IDMwcHggYXV0byAyMHB4O1xufVxuXG5bY2xhc3MqPWNvbC1dIHtcbiAgcGFkZGluZzogMDtcbn1cblxuW2NsYXNzKj1yb3ddIHtcbiAgbWFyZ2luOiAwO1xufVxuXG4ucGFzc3BvcnQge1xuICB0b3A6IDUwJTtcbn1cblxuLmxldHRlci1jb250YWluZXIge1xuICBib3JkZXI6IDFweCBzb2xpZCAjY2NjO1xuICBtYXJnaW46IDYwcHggYXV0bztcbiAgd2lkdGg6IDkwJTtcbiAgcGFkZGluZzogMjBweCAwO1xufVxuXG4uYXBwbGljYW50IHtcbiAgYm94LXNoYWRvdzogMCAwIDVweCAxcHggI2NjYztcbiAgcGFkZGluZzogMzBweDtcbiAgbWFyZ2luOiAzMHB4IDA7XG59XG5cbi5zbGlwLWxvYWRlciB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICBhbGlnbi1pdGVtczogY2VudGVyO1xufVxuXG4ubGVmdC1mb3JtLWVsIHtcbiAgZm9udC13ZWlnaHQ6IDUwMDtcbn1cblxuLnJpZ2h0LWZvcm0tZWwge1xuICBmb250LXdlaWdodDogYm9sZDtcbn1cblxuLmNvbmZpcm0tY29udGFpbmVyIHtcbiAgcGFkZGluZzogMTVweDtcbn1cblxuLmZvcm0tY29udGFpbmVyIHtcbiAgcGFkZGluZzogMjBweCAwO1xuICB3aWR0aDogODAlO1xuICBtYXJnaW46IDIwcHggYXV0bztcbn1cblxuQG1lZGlhIHNjcmVlbiBhbmQgKG1heC13aWR0aDogNTAwcHgpIHtcbiAgLmZvcm0tY29udGFpbmVyIHtcbiAgICBwYWRkaW5nOiAwO1xuICAgIHdpZHRoOiAxMDAlO1xuICAgIG1hcmdpbjogMDtcbiAgfVxufSJdfQ== */");

/***/ }),

/***/ "./src/app/components/core/verify-page/verify-page.component.ts":
/*!**********************************************************************!*\
  !*** ./src/app/components/core/verify-page/verify-page.component.ts ***!
  \**********************************************************************/
/*! exports provided: VerifyPageComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "VerifyPageComponent", function() { return VerifyPageComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var src_app_api_app_main_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/app/api/app_main_service */ "./src/app/api/app_main_service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm2015/platform-browser.js");






let VerifyPageComponent = class VerifyPageComponent {
    constructor(mainApiService, route, router, sanitizer, service) {
        this.mainApiService = mainApiService;
        this.route = route;
        this.router = router;
        this.sanitizer = sanitizer;
        this.service = service;
        this.route.params.subscribe(params => {
            this.app_key = params.number;
        });
        this.verifyNumber();
    }
    ngOnInit() {
    }
    verifyNumber() {
        this.isVerifying = true;
        this.mainApiService.getApplicationService().checkDocumentVerification(this.app_key)
            .subscribe(res => {
            if (res.message == "Success") {
                this.isVerifying = false;
                this.appData = res.data;
            }
            else if (res.message == "Failed") {
                this.isVerifying = false;
                this.errmsg = res['data'];
            }
            else {
                this.isVerifying = false;
                this.errmsg = "Error processing request";
            }
        }, err => {
            this.isVerifying = false;
            this.errmsg = "Error processing request";
        });
    }
    showDoc(doctype) {
        this.service.getApplicantService().documentPreview(doctype)
            // .pipe( map(res => res))
            .subscribe((res) => {
            // window.open('data:application/pdf, res');
            const file = new Blob([res], { type: 'application/pdf' });
            var fileURL = URL.createObjectURL(file);
            // let me = this.sanitizer.bypassSecurityTrustResourceUrl()
            // this..trustAsResourceUrl(fileURL)
            window.open(fileURL);
        }, err => {
        });
    }
};
VerifyPageComponent.ctorParameters = () => [
    { type: src_app_api_app_main_service__WEBPACK_IMPORTED_MODULE_2__["MainService"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["ActivatedRoute"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"] },
    { type: _angular_platform_browser__WEBPACK_IMPORTED_MODULE_4__["DomSanitizer"] },
    { type: src_app_api_app_main_service__WEBPACK_IMPORTED_MODULE_2__["MainService"] }
];
VerifyPageComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-verify-page',
        template: tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! raw-loader!./verify-page.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/core/verify-page/verify-page.component.html")).default,
        styles: [tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ./verify-page.component.scss */ "./src/app/components/core/verify-page/verify-page.component.scss")).default]
    })
], VerifyPageComponent);



/***/ })

}]);
//# sourceMappingURL=components-core-core-module-es2015.js.map