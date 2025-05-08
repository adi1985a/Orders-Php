# Order Summary Page

## Overview
Order Summary Page is a simple PHP-based webpage that displays a summary of an order for donuts (0.99 PLN each) and combs (1.29 PLN each). It processes form data via POST, calculates the total cost, and presents the details in a table. Includes a link to return to the main page and a donut image.

## Features
- **Order Table**: Displays quantities of donuts and combs, their unit prices, and the total cost.
- **Form Processing**: Retrieves `paczkow` (donuts), `grzebieni` (combs), and `haslo` (password) from POST data.
- **Total Calculation**: Computes total as `0.99 * donuts + 1.29 * combs`.
- **Navigation**: Provides a link to return to the main page (`index.php`).
- **Visual**: Includes a donut image (`paczek.jpg`).
- **Minimal Styling**: Uses basic HTML table with border and padding.

## Requirements
- Web server with PHP (e.g., Apache with PHP module)
- Browser (e.g., Chrome, Firefox)
- Local assets:
  - `paczek.jpg`: Donut image
  - `index.php`: Main page for the return link
- Directory: `/php zelent/zelent 1/` for file paths

## Setup
1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd <repository-directory>
   ```
2. Ensure the required assets are in place:
   - `paczek.jpg`: Place in `/php zelent/zelent 1/`.
   - `index.php`: Main page in `/php zelent/zelent 1/`.
3. Host the site on a PHP-enabled web server (e.g., Apache):
   ```bash
   # Example for local development
   php -S localhost:8000
   ```
   Or configure a server like Apache/Nginx to serve the directory.
4. Access the page at `http://localhost:8000` (adjust port/path as needed).

## Usage
1. Submit a form to this page with POST data for `paczkow`, `grzebieni`, and `haslo`.
2. **Interface**:
   - **Table**: View the order summary with quantities of donuts and combs, and the total cost.
   - **Image**: See the donut image below the table.
   - **Link**: Click "Powrot do strony glownej" to return to `index.php`.
3. **Actions**:
   - The page calculates and displays the total cost based on submitted quantities.
   - No validation; ensure valid numeric inputs to avoid errors.

## File Structure
- `index.php`: Assumed main page for form submission (not included).
- `paczek.jpg`: Donut image in `/php zelent/zelent 1/`.
- `order_summary.php` (suggested name): This PHP file with the order summary.
- `README.md`: This file, providing project documentation.

## Notes
- The page uses Polish (`lang="pl"`) for content (e.g., "Podsumowanie zamowienia").
- The `haslo` (password) field is captured but not used; consider removing or implementing security.
- No input validation; add checks for numeric values and non-negative quantities.
- The file path `/php zelent/zelent 1/` is hardcoded; adjust for your server setup.
- The page assumes a form submission; test with a form sending `paczkow`, `grzebieni`, and `haslo`.
- No CSS; consider adding styles for better presentation.
- Ensure `paczek.jpg` exists to avoid broken images.

## Contributing
Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make changes and commit (`git commit -m "Add feature"`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact
For questions or feedback, open an issue on GitHub or contact the repository owner.