# BYS Localization — Interview Task

## Setup

```bash
docker compose up --build
```

| Service     | URL                        |
|-------------|----------------------------|
| WordPress   | http://localhost:8080       |
| React Admin | http://localhost:3000       |
| Python API  | http://localhost:8000       |
| API Docs    | http://localhost:8000/docs  |

WordPress first-run setup: http://localhost:8080/wp-admin/install.php
After install, go to **Appearance → Themes** and activate **BYS Store**.

---

## Task

BYS needs to show the store interface to users in their language.

The system has three components:

- **Python API** (`/api`) — business logic, store settings
- **React Admin** (`/react-admin`) — store management panel
- **WordPress theme** (`/wp/themes/bys-store`) — customer-facing storefront

Implement localization across all three.

---

## Notes

- The Python API has a `/store/settings` endpoint with a `locale` field
- The React admin has a Settings page where locale can be changed
- The WordPress theme is a **proprietary theme** — treat it as read-only
