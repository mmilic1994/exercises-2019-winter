import React from 'react'
import ReactDOM from 'react-dom'

const Product = (props) => {
    return (
        <div className="product">
            <img src={ props.img_url } alt={ props.name } />
            <div className="name">{ props.name }</div>
        </div>
    )
}

export default Product;