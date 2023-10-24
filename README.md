
# Laravel Developement Machine Test

Rest API Laravel, A simple Shopping API's


php artisan db:seed --class=MySeeders


## Features

Products:

    -Retrieve a list of all products.
    -Retrieve product details by ID.

Carts:
    
    -Create a new cart for a user.
    -Add a product to a user's cart.
    -Retrieve the contents of a user's cart.
    -Remove a product from a user's cart.

Orders:

    -Create a new order for a user based on the items in their cart.
    -Retrieve a list of a user's orders.
    -Retrieve the details of a specific order.




## API Reference

#### User Register

```http
  POST /api/auth/register
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `string` | **Required** |
| `email` | `string` | **Required** |
| `password` | `string` | **Required** |
| `password_confirmation` | `string` | **Required** |

#### User Login

```http
  GET /api/auth/login
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `email`      | `string` | **Required** |
| `password`      | `string` | **Required** |


#### User Profile
```http
  GET /api/auth/user-profile
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
Authorization  :-  Bearer Token | **** | **Required** |


#### User Logout
```http
  GET /api/auth/logout
```
| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
Authorization  :-  Bearer Token | **** | **Required** |

#### Auth Token Refresh
```http
  GET /api/auth/refresh
```
| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id of item to fetch |
