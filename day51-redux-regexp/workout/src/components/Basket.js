import React from 'react'
import ReactDOM from 'react-dom'

const Basket = (props) => {
    return (
        <div className="basket">
            There are { props.number } items in the basket.
        </div>
    )
}

export default Basket;
