# Academic Curator - Component Architecture

This document outlines the refactored component structure for the Academic Curator frontend.

## Global Configuration

### Tailwind Configuration
- **File**: `tailwind.config.js`
- **Purpose**: Centralized Tailwind CSS configuration with all theme colors, fonts, and utilities
- All color tokens and font families are now defined globally and can be reused across all components

## Reusable Components

All components are located in `resources/views/components/`

### Layout Components

#### `app-layout.blade.php`
Main application layout wrapper that includes:
- Top navigation bar
- Side navigation bar
- Main content area
- Bottom mobile navigation

**Usage:**
```blade
<x-app-layout title="Page Title" activeRoute="requests">
    <!-- Your content here -->
</x-app-layout>
```

### Navigation Components

#### `top-nav-bar.blade.php`
Header navigation with logo, menu, search, and user profile

**Props:**
- `userImage` (string): URL to user profile image

#### `side-nav-bar.blade.php`
Left sidebar navigation for desktop (hidden on mobile/tablet)

**Props:**
- `activeRoute` (string): Current active route for highlighting (e.g., 'requests', 'documents')

#### `bottom-nav-bar.blade.php`
Mobile bottom navigation bar (hidden on desktop)

**Props:**
- `activeRoute` (string): Current active route for highlighting

### Content Components

#### `page-header.blade.php`
Page title section with search and filter buttons

**Props:**
- `title` (string): Page title
- `subtitle` (string): Optional page subtitle/description
- `searchPlaceholder` (string): Placeholder text for search input

#### `stats-grid.blade.php`
Bento grid layout with dashboard statistics

**Props:**
- `totalRequests` (int): Total request count
- `newThisMonth` (int): New requests this month
- `pendingRequests` (int): Number of pending requests

#### `request-data-table.blade.php`
Data table for displaying requests

**Props:**
- `requests` (array): Array of request objects from the database

**Features:**
- Uses `request-table-row.blade.php` component for each row
- Shows empty state when no requests
- Dynamic status styling

#### `request-table-row.blade.php`
Individual table row component

**Props:**
- `request` (object): Single request object with properties:
  - `id`: Request ID
  - `type`: Request type (Transfer, Withdrawal, Transcript, Leave, Appeal)
  - `status`: Status (Approved, Pending, Rejected, In Review)
  - `created_at`: Creation timestamp
  - `comment`: Optional comment

**Features:**
- Dynamic status badge colors
- Dynamic type icon and colors
- Action button for viewing details

#### `pagination.blade.php`
Pagination controls

**Props:**
- `currentPage` (int): Current page number
- `totalPages` (int): Total number of pages
- `total` (int): Total number of items
- `perPage` (int): Items per page

#### `page-footer.blade.php`
Footer with copyright information

**Props:**
- `year` (int): Copyright year (defaults to current year)
- `organization` (string): Organization name in footer

## Usage Example

### In a Controller
```php
<?php

namespace App\Http\Controllers;

use App\Models\Request;

class RequestController extends Controller
{
    public function index()
    {
        $requests = Request::all();
        
        return view('fo_requests.index-refactored', [
            'requests' => $requests,
            'currentPage' => 1,
            'totalPages' => 5,
            'total' => $requests->count(),
            'perPage' => 5,
            'activeRoute' => 'requests',
        ]);
    }
}
```

### In a Blade View
```blade
<x-app-layout title="Student Dashboard" activeRoute="requests">
    <x-page-header 
        title="My Requests"
        subtitle="Track your academic requests"
        searchPlaceholder="Search requests..."
    />

    <x-stats-grid 
        :totalRequests="24"
        :newThisMonth="2"
        :pendingRequests="3"
    />

    <x-request-data-table :requests="$requests" />

    <x-pagination 
        :currentPage="$currentPage"
        :totalPages="$totalPages"
        :total="$total"
        :perPage="$perPage"
    />

    <x-page-footer />
</x-app-layout>
```

## Color System

All colors are defined in `tailwind.config.js` and follow the Material Design 3 color system:

### Primary Colors
- `primary`: #002045
- `on-primary`: #ffffff
- `primary-container`: #1a365d
- `primary-fixed`: #d6e3ff
- `primary-fixed-dim`: #adc7f7

### Secondary Colors
- `secondary`: #555f70
- `on-secondary`: #ffffff
- `secondary-container`: #d9e3f8
- `secondary-fixed`: #d9e3f8
- `secondary-fixed-dim`: #bdc7db

### Surface Colors
- `surface`: #f7fafc
- `surface-bright`: #f7fafc
- `surface-dim`: #d7dadc
- `surface-container-low`: #f1f4f6
- `surface-container`: #ebeef0
- `surface-container-high`: #e5e9eb
- `surface-container-highest`: #e0e3e5

## Fonts

- **Headline/Brand**: Manrope (400, 500, 600, 700, 800)
- **Body/Label**: Inter (400, 500, 600, 700)

## Creating New Components

When creating new components:

1. Create a new file in `resources/views/components/`
2. Use kebab-case naming (e.g., `my-component.blade.php`)
3. Reference colors using the global Tailwind classes (e.g., `text-primary`, `bg-surface-container`)
4. Document the component with prop definitions and usage examples
5. Follow the existing component pattern with `@props` at the top

## File Structure
```
resources/
├── views/
│   ├── components/
│   │   ├── app-layout.blade.php
│   │   ├── top-nav-bar.blade.php
│   │   ├── side-nav-bar.blade.php
│   │   ├── bottom-nav-bar.blade.php
│   │   ├── page-header.blade.php
│   │   ├── stats-grid.blade.php
│   │   ├── request-data-table.blade.php
│   │   ├── request-table-row.blade.php
│   │   ├── pagination.blade.php
│   │   └── page-footer.blade.php
│   ├── layouts/
│   │   └── app.blade.php
│   └── fo_requests/
│       ├── index.blade.php (original)
│       └── index-refactored.blade.php (new component-based)
├── css/
│   └── app.css
└── js/
    └── app.js

tailwind.config.js
```
