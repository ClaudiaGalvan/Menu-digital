import { Head, Link } from "@inertiajs/react";

export default function Welcome({ auth }) {
    return (
        <>
            <Head title="Welcome" />
            <div className="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
                <img
                    id="background"
                    className="absolute -left-10 top-0 max-w-[1700px]"
                    src="https://images.rappi.com.mx/restaurants_background/mxlamarquesita-1670862281480.jpg"
                    onError={() => {
                        document
                            .getElementById("background")
                            ?.classList.add("!hidden");
                    }}
                />
                <div className="relative flex min-h-screen items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                    <div className="relative w-full max-w-2xl px-6 lg:max-w-7xl flex justify-center">
                        <div className="bg-white p-6 shadow rounded-lg max-w-sm w-full opacity-80">
                            <div className="flex flex-col items-center">
                                <h2 className="text-lg font-semibold text-gray-900">
                                    Bienvenido a Marquesitas ik
                                    {auth?.user ? `, ${auth.user.name}` : ""}!
                                </h2>
                                <p className="text-sm text-gray-600">
                                    {auth?.user
                                        ? "You are logged in."
                                        : "¡Disfruta la tradición en cada bocado, las mejores marquesitas te esperan!"}
                                </p>
                            </div>
                            <div className="mt-4 text-center">
                                {auth?.user ? (
                                    <Link
                                        href="/dashboard"
                                        className="text-blue-500 hover:underline"
                                    >
                                        Go to Dashboard
                                    </Link>
                                ) : (
                                    <>
                                        <Link
                                            href="/login"
                                            className="text-blue-500 hover:underline mr-4"
                                        >
                                            Login
                                        </Link>
                                        <Link
                                            href="/register"
                                            className="text-blue-500 hover:underline"
                                        >
                                            Register
                                        </Link>
                                    </>
                                )}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}
