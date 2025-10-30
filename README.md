# Static Portfolio Site

This repository hosts a static portfolio site suitable for GitHub Pages. It was converted from a WordPress setup to pure HTML/CSS/JS.

## Quick Start

1. Open `index.html` in your browser to preview locally.
2. Edit content in `index.html`, styles in `styles.css`, and scripts in `script.js`.
3. Add images to the `assets/` folder and reference them relatively (e.g., `./assets/profile.jpg`).
4. Favicon: replace `assets/favicon.svg` with your own if desired, and ensure the `<link rel="icon" href="./assets/favicon.svg" type="image/svg+xml">` in `index.html` points to it.

## Deploy on GitHub Pages

1. Commit and push to `main`.
2. In your repository: Settings → Pages.
3. Source: "Deploy from a branch"; Branch: `main`; Folder: `/root` (default).
4. Save. The site will be available at your GitHub Pages URL.

Note: `.nojekyll` is present to serve assets without Jekyll processing.

## Project Structure

```
wordpress-portfolio/
├── index.html
├── styles.css
├── script.js
├── assets/
└── .nojekyll
```

## Licensing

Personal portfolio; feel free to adapt for your own use.

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
