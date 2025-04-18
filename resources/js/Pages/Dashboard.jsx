import AppLayout from "@/Layouts/AppLayout";

export default function Dashboard() {
    return (
        <div>
            ini dashboardd
        </div>
    );
}

Dashboard.layout = (page) => <AppLayout children={page} title="Dashboard"/>