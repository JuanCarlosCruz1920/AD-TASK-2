NeoScreen

A modern movie review platform built with fundamental PHP concepts.

Table of Contents

[Overview](#overview)
[Key Components](#key-components)
[Technology](#technology)
[Deployment](#deployment)
[Rules, Practices and Principles](#rules-practices-and-principles)
[Git Commit Labels](#git-commit-labels)

Overview

NeoScreen is a sample PHP project designed to demonstrate core programming basics through the creation of a simple movie review website. It showcases how to structure a web application using fundamental PHP features without relying on advanced frameworks or object-oriented programming.

Key Concepts Demonstrated:

Arrays: Used for managing lists of genres, cast members, and collections of movie data.
Dictionaries (PHP Associative Arrays): Movies are represented as associative arrays, allowing for structured storage of movie properties like title, description, rating, and URLs.
Functions: Reusable logic is encapsulated within functions (e.g., fetching movies, formatting ratings) to promote code organization and reusability.
Fragmentation: The application is modularized into smaller, specialized files (components, layouts, utility functions, static data, and individual pages) that are included as needed, enhancing maintainability and clarity.

Key Components

Home Page (`/`): Displays a curated list of movie cards with brief descriptions and ratings.
Movie Details Page (`/movie?id={movie-slug}`): Provides a comprehensive view of a single movie, including a full synopsis, cast, genres, and a detailed review, along with its poster.
Dynamic Asset Loading: Handles the correct loading of CSS and image assets regardless of the project's deployment subdirectory.

Technology

Language

 <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" height="20"/>
 <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" height="20"/>
 <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" height="20"/>

Framework/Library

 None (Pure PHP and standard web technologies)

Database

None (Data is stored statically in `staticData/movies.staticdata.php`)

Deployment

This project can be run using any PHP-enabled web server, such as XAMPP's Apache or PHP's built-in development server.

Rules, Practices and Principles

This project adheres to the following guidelines:

 No Classes: Object-Oriented Programming (OOP) concepts like classes are intentionally excluded to focus on procedural programming fundamentals.
 No User Input (Forms): Complex user input handling via forms (`$_POST` data) is not implemented. Navigation uses simple `$_GET` parameters for demonstration.
 Modular Design: Emphasizes fragmentation to separate concerns and improve code organization.

Git Commit Labels

When making commits to this project, use the following conventional commit types:

 `feat`: A new feature
 `fix`: A bug fix
 `refactor`: A code change that neither fixes a bug nor adds a feature
 `docs`: Documentation only changes
