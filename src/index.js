// eslint-disable-next-line
import React, { Component } from 'react';
// eslint-disable-next-line
import ReactDOM from 'react-dom';
import { AppRegistry } from 'react-native';
import './index.css';
import App from './App';
import registerServiceWorker from './registerServiceWorker';

AppRegistry.registerComponent('App', () => App);
AppRegistry.runApplication('App', {
  rootTag: document.getElementById('root')
});

// ReactDOM.render(<App />, document.getElementById('root'));
registerServiceWorker();
