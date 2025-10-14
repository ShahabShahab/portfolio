# WordPress Portfolio Project

A modern, responsive WordPress portfolio theme built with Docker for easy local development.

## 🚀 Quick Start

### Prerequisites
- Docker and Docker Compose installed on your system
- Git (optional, for version control)

### Installation

1. **Navigate to the project directory:**
   ```bash
   cd /Users/shahab/IdeaProjects/wordpress-portfolio
   ```

2. **Start the development environment:**
   ```bash
   docker-compose up -d
   ```

3. **Access your WordPress site:**
   - WordPress: http://localhost:8080
   - phpMyAdmin: http://localhost:8081

4. **Complete WordPress setup:**
   - Follow the WordPress installation wizard
   - Create your admin account
   - Activate the "Portfolio Theme" in Appearance > Themes

## 📁 Project Structure

```
wordpress-portfolio/
├── docker-compose.yml          # Docker configuration
├── wp-content/
│   └── themes/
│       └── portfolio-theme/    # Custom portfolio theme
│           ├── style.css       # Main stylesheet
│           ├── index.php       # Main template
│           ├── functions.php   # Theme functions
│           ├── assets/         # Images and static files
│           └── js/
│               └── script.js   # Custom JavaScript
├── data/
│   ├── mysql/                  # MySQL data persistence
│   └── wordpress/             # WordPress data persistence
└── README.md
```

## 🎨 Theme Features

### Custom Post Type: Portfolio
- Dedicated portfolio post type for showcasing your work
- Custom fields for project URLs, GitHub links, and technologies
- Responsive grid layout
- Hover effects and animations

### Sections Included
- **Hero Section**: Eye-catching introduction
- **About Section**: Personal information and photo
- **Portfolio Grid**: Showcase your projects
- **Skills Section**: Highlight your technical abilities
- **Contact Section**: Ways to get in touch

### Responsive Design
- Mobile-first approach
- Optimized for all screen sizes
- Modern CSS Grid and Flexbox layouts

## 🛠️ Development

### Adding Portfolio Items

1. **Via WordPress Admin:**
   - Go to Portfolio > Add New
   - Add title, description, and featured image
   - Fill in project details (URL, GitHub, technologies)
   - Publish your portfolio item

2. **Custom Fields Available:**
   - Project URL: Link to live project
   - GitHub URL: Link to source code
   - Technologies: Comma-separated list of technologies used

### Customizing the Theme

1. **Colors and Styling:**
   - Edit `wp-content/themes/portfolio-theme/style.css`
   - Use CSS custom properties for easy color changes

2. **Content:**
   - Update hero section text in `index.php`
   - Modify about section content
   - Add your skills in the skills section

3. **Images:**
   - Add your profile picture to `assets/profile.jpg`
   - Replace placeholder images with your project screenshots

### Database Management

- **phpMyAdmin**: http://localhost:8081
- **Database**: portfolio_db
- **Username**: wordpress
- **Password**: wordpress_password

## 🚀 Deployment

### For Production Deployment

1. **Choose a hosting provider** (DigitalOcean, AWS, etc.)
2. **Set up a production server** with WordPress
3. **Upload your theme** to the production site
4. **Configure domain and SSL**
5. **Set up regular backups**

### Recommended Hosting Providers
- **DigitalOcean**: Great for developers, good pricing
- **AWS**: Scalable, professional-grade
- **SiteGround**: WordPress-optimized hosting
- **WP Engine**: Managed WordPress hosting

## 📝 Customization Guide

### Changing Colors
Edit the CSS variables in `style.css`:
```css
:root {
    --primary-color: #3498db;
    --secondary-color: #2c3e50;
    --accent-color: #e74c3c;
}
```

### Adding New Sections
1. Create new HTML structure in `index.php`
2. Add corresponding CSS in `style.css`
3. Update navigation menu if needed

### SEO Optimization
1. Install SEO plugins (Yoast SEO, RankMath)
2. Optimize images and alt text
3. Add meta descriptions
4. Set up Google Analytics

## 🔧 Troubleshooting

### Common Issues

1. **Port 8080 already in use:**
   ```bash
   # Change port in docker-compose.yml
   ports:
     - "8081:80"  # Use different port
   ```

2. **Permission issues:**
   ```bash
   # Fix file permissions
   sudo chown -R $USER:$USER .
   ```

3. **Database connection issues:**
   ```bash
   # Restart containers
   docker-compose down
   docker-compose up -d
   ```

### Useful Commands

```bash
# View logs
docker-compose logs -f

# Stop containers
docker-compose down

# Rebuild containers
docker-compose up -d --build

# Access WordPress container
docker exec -it portfolio_wordpress bash
```

## 📚 Next Steps

1. **Customize the design** to match your personal brand
2. **Add your portfolio content** and projects
3. **Set up analytics** and SEO
4. **Configure backups** for your site
5. **Deploy to production** when ready

## 🤝 Support

For issues and questions:
- Check the WordPress documentation
- Review Docker and Docker Compose guides
- Search for WordPress development tutorials

## 📄 License

This project is for personal portfolio use. Feel free to modify and customize as needed.

---

**Happy coding! 🎉**
