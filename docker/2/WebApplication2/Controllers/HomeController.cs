using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Threading.Tasks;
using WebApplication2.Models;

namespace WebApplication2.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;
        private readonly SQLiteContext _sQLiteContext = new SQLiteContext(); 

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        public IActionResult Index()
        {
            List<Item> itemList = _sQLiteContext.Items.ToList();
            ViewBag.ListItems = itemList;
            return View();
        }

        public IActionResult Create(string name)
        {

            _sQLiteContext.Add(new Item { Id = 0, Name = name });
            _sQLiteContext.SaveChanges();
            List<Item> itemList = _sQLiteContext.Items.ToList();
            ViewBag.ListItems = itemList;
            return View("Index");
        }


            public IActionResult Privacy()
        {
            return View();
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}
