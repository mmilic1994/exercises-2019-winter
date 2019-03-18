import React from 'react'
import ReactDOM from 'react-dom'

import UserInfo, { UserButton } from './UserInfo'

export default class Header extends React.Component {

    render() {
        return (
            <header>
                <img src="https://classes.codingbootcamp.cz/assets/classes/workouts/aperture.png" alt="Aperture science" className="logo" />

                <UserInfo />

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