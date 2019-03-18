import React from 'react'
import ReactDOM from 'react-dom'

import Product from './Product'

export default class ProductList extends React.Component {

    constructor(props) {
        super(props)

        this.state = {
            products_data: []
        }
    }

    componentDidMount() {
        // pretend to run ajax

        // when data returns
        this.setState({
            ...this.state,
            products_data: [
                {
                    "id": 1,
                    "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/propulsion-gel.jpg",
                    "name": "Propulsion gel"
                },
                {
                    "id": 2,
                    "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/weight-cube.jpg",
                    "name": "Weight cube"
                },
                {   
                    "id": 3,
                    "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/friendly-cube.jpg",
                    "name": "A friend"
                },
                {
                    "id": 4,
                    "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/portal-gun.jpg",
                    "name": "Portal gun"
                },
                {
                    "id": 5,
                    "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/defense-robot.jpg",
                    "name": "Home-defense robot"
                },
                {
                    "id": 6,
                    "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/cake.jpg",
                    "name": "Cake (not a lie)"
                }
            ]
        })
    }

    render() {

        let products = [];

        this.state.products_data.forEach(item => {
            products.push(
                <Product img_url={ item.img_url } name={ item.name } key={ item.id } />
            )
        })

        return (
            <div className="product-list">

                { products }

            </div>
        )
    }

}