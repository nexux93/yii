// import _ from 'lodash';
// import Print from './print.js';
//
// function component() {
//     const element = document.createElement('div');
//     const btn = document.createElement('button');
//
//     element.innerHTML = _.join(['Hello', 'webpack'], ' ');
//
//     btn.innerHTML = 'Click Mordor!';
//     btn.onclick = Print;
//     element.appendChild(btn);
//
//     return element;
// }
//
// document.body.appendChild(component());
import Print from './print.js';
function getComponent() {
    return import(/* webpackChunkName: "lodash" */ 'lodash').then(({default: _}) => {
        const element = document.createElement('div');

        element.innerHTML = _.join(['Hello', 'webpack'], ' ');
        element.onclick = Print.bind(null, 'Hello webpack!');

        return element;

    }).catch(error => 'An error occurred while loading the component');
}

getComponent().then(component => {
    document.body.appendChild(component);
});