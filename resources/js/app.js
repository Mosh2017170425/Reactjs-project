/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

import './bootstrap';

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Example from'./components/Example';
import React from 'react';
import ReactDOM from 'react-dom/client';

if (document.getElementById('example')) {
    const Index = ReactDOM.createRoot(document.getElementById("example"));
    const csrf_token = document.head.querySelector('meta[name="csrf-token"]').content;
    Index.render(
        <React.StrictMode>
            <Example token={csrf_token}/>
        </React.StrictMode>
    )
}

