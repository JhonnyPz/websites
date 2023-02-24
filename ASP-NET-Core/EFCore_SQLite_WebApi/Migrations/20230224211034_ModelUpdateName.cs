using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace EFCore_SQLite_WebApi.Migrations
{
    /// <inheritdoc />
    public partial class ModelUpdateName : Migration
    {
        /// <inheritdoc />
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_Pizzas_Sauces_SouceId",
                table: "Pizzas");

            migrationBuilder.RenameColumn(
                name: "SouceId",
                table: "Pizzas",
                newName: "SauceId");

            migrationBuilder.RenameIndex(
                name: "IX_Pizzas_SouceId",
                table: "Pizzas",
                newName: "IX_Pizzas_SauceId");

            migrationBuilder.AddForeignKey(
                name: "FK_Pizzas_Sauces_SauceId",
                table: "Pizzas",
                column: "SauceId",
                principalTable: "Sauces",
                principalColumn: "Id");
        }

        /// <inheritdoc />
        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_Pizzas_Sauces_SauceId",
                table: "Pizzas");

            migrationBuilder.RenameColumn(
                name: "SauceId",
                table: "Pizzas",
                newName: "SouceId");

            migrationBuilder.RenameIndex(
                name: "IX_Pizzas_SauceId",
                table: "Pizzas",
                newName: "IX_Pizzas_SouceId");

            migrationBuilder.AddForeignKey(
                name: "FK_Pizzas_Sauces_SouceId",
                table: "Pizzas",
                column: "SouceId",
                principalTable: "Sauces",
                principalColumn: "Id");
        }
    }
}
