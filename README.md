
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
