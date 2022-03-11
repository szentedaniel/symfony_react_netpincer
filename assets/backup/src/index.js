// scroll bar
import 'simplebar/src/simplebar.css';

import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter } from 'react-router-dom';
import { HelmetProvider } from 'react-helmet-async';

//
import App from './App';
import axios from 'axios'
// ----------------------------------------------------------------------
axios.defaults.baseURL = 'http://127.0.0.1:8000/api';

ReactDOM.render(
  <HelmetProvider>
    <BrowserRouter>
      <App />
    </BrowserRouter>
  </HelmetProvider>,
  document.getElementById('root')
);