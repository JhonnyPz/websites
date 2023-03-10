using MyWebAp.Models;
using MyWebAp.Services;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace MyWebAp.Pages
{
   public class PizzaModel : PageModel
{
    public List<Pizza> pizzas = new();
    [BindProperty]
    public Pizza NewPizza { get; set; } = new();

    public void OnGet()
    {
        pizzas = PizzaServices.GetAll();
    }
    
    public string GlutenFreeText(Pizza pizza)
    {
        return pizza.IsGlutenFree ? "Gluten Free": "Not Gluten Free";
    }

    public IActionResult OnPost()
    {
        if (!ModelState.IsValid)
        {
            return Page();
        }
        PizzaServices.Add(NewPizza);
        return RedirectToAction("Get");
    }

    public IActionResult OnPostDelete(int id)
    {
        PizzaServices.Delete(id);
        return RedirectToAction("Get");
    }
}
}
