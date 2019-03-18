import React from 'react'
import ReactDOM from 'react-dom'

import { createStore, combineReducers } from 'redux'

import App from './App'

// takes current state and incoming action
const reducer = function(state, action) {

    if (action.type == 'ADD_PRODUCT_TO_BASKET') {
        // changes the state in an IMMUTABLE way
        // returns a new state object
        return {
            ...state,
            nr_items_in_basket: state.nr_items_in_basket + 1
        }
    }

    return { ...state }
}

// create the state with the reducer and initial state
// of the application
export const store = createStore(reducer, {
    products: [],
    nr_items_in_basket: 0,
    shop_name: 'Aperture'
})

export default class Provider extends React.Component {

    render() {
        return (
            <App />
        )
    }

}