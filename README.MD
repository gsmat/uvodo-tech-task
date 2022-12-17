
## API Reference

#### Get all users

```http
  GET /users
```


#### Ceate user

```http
  POST /user/create
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `email`      | `string` | **Required Unique**. |
| `first_name`      | `string` | **Required**. |
| `last_name`      | `string` | **Required Unique**. |



## Run Locally

Clone the project

```bash
  git clone https://github.com/gsmat/uvodo-tech-task uvodoTechTask
```

Go to the project directory

```bash
  cd uvodoTechTask
```

Start the server

```bash
  php -S localhost:8000
```

