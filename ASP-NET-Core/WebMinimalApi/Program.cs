var builder = WebApplication.CreateBuilder(args);
var app = builder.Build();

app.MapGet("/", () => "Hello World!");
app.MapGet("/hello", (string name)=>$"Hello {name}");
app.MapGet("/helloname/{name}-{lastName}",
    (string name, string lastName) => $"Hola Sr. {name} {lastName}");
app.MapGet("/response", async () =>
{
    HttpClient client = new HttpClient();
    var response = await client.GetAsync("http://localhost:5100/WeatherForecast");
    response.EnsureSuccessStatusCode();
    string responseBody = await response.Content.ReadAsStringAsync();
    return responseBody;
});

app.Run();
