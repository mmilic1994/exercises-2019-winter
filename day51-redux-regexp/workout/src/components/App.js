import React from 'react'
import ReactDOM from 'react-dom'

import Header from './Header'
import Footer from './Footer'
import ProductList from './ProductList'

export default class App extends React.Component {

    render() {
        return (
            <div id="page">

                <Header />

                <div id="main">
                    <nav className="filter">
                        <label htmlFor="filter">Filter</label>
                        <input type="text" name="filter" id="filter" placeholder="enter search term" />
                    </nav>

                    <div className="content">
                        <h1>Products</h1>

                        <ProductList />

                    </div>

                </div>

                <Footer />

            </div>
        )
    }

}