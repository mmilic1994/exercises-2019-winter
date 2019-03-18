import React from 'react'
import ReactDOM from 'react-dom'

import UserInfo, { UserButton } from './UserInfo'
import Basket from './Basket'

import { store } from './Provider'

export default class Header extends React.Component {

    constructor(props) {
        super(props)

        this.state = {
            nr_items_in_basket: 0
        }

        store.subscribe(() => {
            this.setState({
                nr_items_in_basket: store.getState().nr_items_in_basket
            })
        })
    }

    render() {
        return (
            <header>
                <img src="https://classes.codingbootcamp.cz/assets/classes/workouts/aperture.png" alt="Aperture science" className="logo" />

                <UserInfo />

                <Basket number={ this.state.nr_items_in_basket } />

                <nav>
                    <a href="#">Home</a>
                    <a href="#" className="current">Products</a>
                    <a href="#">Stores</a>
                    <a href="#">Customers</a>
                    <UserButton />
                </nav>
            </header>
        )
    }

}