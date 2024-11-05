<div>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<h1>How to Set Up  Project </h1>

<h2>Prerequisites</h2>
    <ul>
        <li><strong>Git</strong>: Install from <a href="https://git-scm.com/" target="_blank">git-scm.com</a>.</li>
        <li><strong>PHP</strong> (recommended version 8.0+)</li>
        <li><strong>Composer</strong>: Download from <a href="https://getcomposer.org/" target="_blank">getcomposer.org</a>.</li>
        <li>Optional: Local server environment (e.g., XAMPP, WAMP, or Laravel Valet)</li>
    </ul>
<h2>Steps to Download and Set Up a Laravel Project from GitHub</h2>

<ol>
        <li>
            <h3>Clone the Repository</h3>
            <ol>
                <li>Go to the GitHub page of the Laravel project.</li>
                <li>Copy the repository URL (found under the "Code" button).</li>
                <li>Open a terminal, navigate to the directory where you want to clone the project, and run:
                    <pre><code>git clone https://github.com/nikhilgodhani08/CrudOperationInLaravel.git </code></pre>
                </li>
                <li>Replace <code>&lt;repository-url&gt;</code> with the URL you copied.</li>
            </ol>
        </li>
        <li>
            <h3>Navigate to the Project Directory</h3>
            <pre><code>cd CrudOperationInLaravel </code></pre>
        </li>
        <li>
            <h3>Install Dependencies</h3>
            <p>Run the following command to install Laravel's dependencies:</p>
            <pre><code>composer install</code></pre>
        </li>
        <li>
            <h3>Set Up Environment Variables</h3>
            <ol>
                <li>Look for a <code>.env.example</code> file in the project root.</li>
                <li>Copy it to a new file called <code>.env</code>:
                    <pre><code>cp .env.example .env</code></pre>
                </li>
                <li>Open <code>.env</code> in a text editor to set your environment variables (especially the database settings).</li>
            </ol>
        </li>
        <li>
            <h3>Generate an Application Key</h3>
            <p>This creates a key used for session encryption:</p>
            <pre><code>php artisan key:generate</code></pre>
        </li>
        <li>
            <h3>Set Up Database</h3>
            <ol>
                <li>Ensure your database server is running.</li>
                <li>Create a database with the name you specified in your <code>.env</code> file.</li>
                <li>Run migrations to set up database tables:
                    <pre><code>php artisan migrate</code></pre>
                </li>
            </ol>
        </li>
        <li>
            <h3>Optional: Seed the Database</h3>
            <p>Run seeders to populate the database with initial data (if available):</p>
            <pre><code>php artisan db:seed</code></pre>
        </li>
        <li>
            <h3>Start the Development Server</h3>
            <p>Start Laravel’s built-in development server:</p>
            <pre><code>php artisan serve</code></pre>
            <p>This will start the server at <code>http://localhost:8000</code>, where you can access the project.</p>
        </li>
    </ol>

 <h2>Example Commands in Sequence</h2>
    <pre><code>
git clone https://github.com/nikhilgodhani08/CrudOperationInLaravel.git
cd CrudOperationInLaravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
    </code></pre>

</div>
